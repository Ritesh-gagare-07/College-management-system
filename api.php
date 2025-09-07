<?php
require 'partials/_dbconnect.php';
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';
$type = $_GET['type'] ?? ''; // "student" or "faculty"

function fetch_all($conn, $table) {
  $res = $conn->query("SELECT * FROM $table");
  return $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
}

switch($action) {
  case 'fetch':
    echo json_encode(['status'=>'ok', 'data'=> fetch_all($conn, $type)]);
    break;

  case 'delete':
    $id = intval($_POST['id']);
    $col = $type.'_id';
    $stmt = $conn->prepare("DELETE FROM {$type}s WHERE `$col`=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    echo json_encode(['status'=>'ok']);
    break;

  case 'add_or_update':
    $payload = json_decode(file_get_contents('php://input'), true);
    $fields = $payload['fields'];
    $id = intval($fields[$type.'_id'] ?? 0);
    $table = $type.'s';
    $col_id = $type.'_id';

    if ($id > 0) {
      $sets = [];
      $params = [];
      $types = '';
      foreach($fields as $k=>$v){
        if ($k === $col_id) continue;
        $sets[] = "`$k`=?";
        $params[] = $v;
        $types .= 's';
      }
      $params[] = $id; $types .= 'i';
      $sql = "UPDATE `$table` SET " . implode(',', $sets) . " WHERE `$col_id`=?";
    } else {
      $keys = array_keys($fields);
      $placeholders = array_fill(0, count($keys), '?');
      $params = array_values($fields);
      $types = str_repeat('s', count($fields));
      $sql = "INSERT INTO `$table` (`".implode('`,`',$keys)."`) VALUES (".implode(',', $placeholders).")";
    }
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    echo json_encode(['status'=>'ok', 'id'=>$stmt->insert_id ?: $id]);
    break;

  default:
    echo json_encode(['status'=>'error','msg'=>'Unknown action']);
}

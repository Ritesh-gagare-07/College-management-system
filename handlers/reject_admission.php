<?php
include "../partials/_dbconnect.php";

$id = $_POST['id'] ?? 0;
if ($id > 0) {
    $conn->query("DELETE FROM pending_admissions WHERE id=$id");
    echo "Admission rejected ❌";
} else {
    echo "Invalid request.";
}
?>

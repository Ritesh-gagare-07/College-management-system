<?php
$host = "127.0.0.1:3307";

$user = "root";
$pass = "";
$db = "college_database";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
}
?>
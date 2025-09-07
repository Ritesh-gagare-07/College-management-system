<?php
include "../partials/_dbconnect.php";

$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($first_name && $last_name && $email && $password) {
    $stmt = $conn->prepare("INSERT INTO faculty(first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
    
    if ($stmt->execute()) {
        echo "✅ Faculty added successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "Please fill all fields!";
}

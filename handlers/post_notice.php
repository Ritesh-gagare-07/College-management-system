<?php
session_start();
include "../partials/_dbconnect.php";

// Assuming admin is logged in
$admin_id = $_SESSION['admin_id'] ?? 1; // fallback for demo

$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';

if ($title && $description) {
    $stmt = $conn->prepare("INSERT INTO notices(title, description, date_posted, posted_by) VALUES (?, ?, NOW(), ?)");
    $stmt->bind_param("ssi", $title, $description, $admin_id);
    
    if ($stmt->execute()) {
        echo "✅ Notice posted successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "Please fill all fields!";
}

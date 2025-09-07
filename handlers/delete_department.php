<?php
include "../partials/_dbconnect.php";

$department_id = $_POST['department_id'] ?? 0;

if ($department_id) {
    $stmt = $conn->prepare("DELETE FROM departments WHERE department_id = ?");
    $stmt->bind_param("i", $department_id);
    if ($stmt->execute()) {
        echo "✅ Department deleted successfully!";
    } else {
        echo "❌ Error deleting department: " . $conn->error;
    }
} else {
    echo "Invalid department ID!";
}

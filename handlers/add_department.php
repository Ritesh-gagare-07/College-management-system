<?php
include "../partials/_dbconnect.php";

$department_name = $_POST['department_name'] ?? '';
$head_of_department = $_POST['head_of_department'] ?? '';

if ($department_name) {
    $stmt = $conn->prepare("INSERT INTO departments(department_name, head_of_department) VALUES (?, ?)");
    $stmt->bind_param("ss", $department_name, $head_of_department);
    
    if ($stmt->execute()) {
        echo "✅ Department added successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "Department name is required!";
}

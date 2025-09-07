<?php
include "../partials/_dbconnect.php";

$faculty_id = $_POST['faculty_id'] ?? 0;

if ($faculty_id) {
    $stmt = $conn->prepare("DELETE FROM faculty WHERE faculty_id = ?");
    $stmt->bind_param("i", $faculty_id);
    if ($stmt->execute()) {
        echo "✅ Faculty deleted successfully!";
    } else {
        echo "❌ Error deleting faculty: " . $conn->error;
    }
} else {
    echo "Invalid faculty ID!";
}

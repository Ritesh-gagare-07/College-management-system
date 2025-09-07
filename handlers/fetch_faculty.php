<?php
include "../partials/_dbconnect.php";

$result = $conn->query("SELECT faculty_id, first_name, last_name, email FROM faculty");

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%' style='border-collapse: collapse; text-align: center;'>
            <tr style='background:#1b2a49;color:white;'>
                <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['faculty_id']}</td>
                <td>{$row['first_name']} {$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td><button class='delete-faculty' data-id='{$row['faculty_id']}'>Delete</button></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No faculty found.</p>";
}

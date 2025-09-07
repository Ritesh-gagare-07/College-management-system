<?php
include "../partials/_dbconnect.php";

$result = $conn->query("SELECT department_id, department_name, head_of_department FROM departments");

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%' style='border-collapse: collapse; text-align: center;'>
            <tr style='background:#1b2a49;color:white;'>
                <th>ID</th><th>Department Name</th><th>HOD</th><th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['department_id']}</td>
                <td>{$row['department_name']}</td>
                <td>{$row['head_of_department']}</td>
                <td><button class='delete-department' data-id='{$row['department_id']}'>Delete</button></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No departments found.</p>";
}

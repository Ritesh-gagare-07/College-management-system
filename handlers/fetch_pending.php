<?php
include "../partials/_dbconnect.php";

$result = $conn->query("SELECT * FROM pending_admissions");
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>
            <tr><th>Name</th><th>Email</th><th>DOB</th><th>Department</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['first_name']} {$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['department_id']}</td>
                <td>
                  <button class='approve-admission' data-id='{$row['id']}'>Approve</button>
                  <button class='reject-admission' data-id='{$row['id']}'>Reject</button>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No pending admissions.";
}
?>

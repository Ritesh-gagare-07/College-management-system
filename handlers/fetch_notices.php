<?php
include "../partials/_dbconnect.php";

$result = $conn->query("SELECT title, description, date_posted FROM notices ORDER BY date_posted DESC LIMIT 5");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div style='padding:10px;border-bottom:1px solid #ccc;'>
                <strong>{$row['title']}</strong><br>
                <small>{$row['date_posted']}</small>
                <p>{$row['description']}</p>
              </div>";
    }
} else {
    echo "<p>No notices found.</p>";
}

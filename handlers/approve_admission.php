<?php
include "../partials/_dbconnect.php";

$id = $_POST['id'] ?? 0;

if ($id > 0) {
    // Fetch from pending
    $res = $conn->query("SELECT * FROM pending_admissions WHERE id=$id");
    if ($res && $res->num_rows > 0) {
        $s = $res->fetch_assoc();

        // Insert into enrollment table only
        $stmt = $conn->prepare("INSERT INTO enrollment 
            (first_name, last_name, email, dob, gender, address, department_id, course_id, enrollment_date, status) 
            VALUES (?,?,?,?,?,?,?,?,CURDATE(),'approved')");
        
        $course_id = NULL; // can be updated later by admin
        $stmt->bind_param(
            "ssssssii", 
            $s['first_name'], $s['last_name'], $s['email'],
            $s['dob'], $s['gender'], $s['address'], 
            $s['department_id'], $course_id
        );

        if ($stmt->execute()) {
            // Delete from pending
            $conn->query("DELETE FROM pending_admissions WHERE id=$id");
            echo "Admission approved ✅ Student moved to enrollment.";
        } else {
            echo "Error inserting into enrollment: " . $stmt->error;
        }
    } else {
        echo "Admission not found.";
    }
} else {
    echo "Invalid ID.";
}
?>

<?php
include "../partials/_dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department_id = $_POST['department_id'];

    $stmt = $conn->prepare("INSERT INTO pending_admissions 
        (first_name, last_name, email, password, dob, gender, address, department_id) 
        VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssi", $first, $last, $email, $password, $dob, $gender, $address, $department_id);

    if ($stmt->execute()) {
        echo "Admission request submitted. Waiting for admin approval.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

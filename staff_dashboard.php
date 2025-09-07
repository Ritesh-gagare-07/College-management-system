<?php
session_start();
include 'partials/_dbconnect.php';

// Redirect to login if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: staff_.php");
    exit();
}



$user_id = $_SESSION['user_id']; // Make sure this is set during login
// $course_id = (int) $_GET['course_id']; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
          text-align:center;
        }
    </style>
</head>
<body>
    <?php include "partials/_header.php";?>
        <?php include "partials/_nav.php";?>
        <br>
        <h1>Welcome - <?php echo $_SESSION['first_name'] ; ?></h1>
        

    <?php include"partials/_footer.php";?>
</body>
</html>
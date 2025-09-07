<?php
session_start();
$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM students WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Compare entered password with stored password
        if ($password == $user['password']) {
            $login = true;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['first_name'];
            $_SESSION['user_id'] = $user['student_id'];
            $_SESSION['student_id'] = $user['student_id'];
            $_SESSION['email'] = $user['email'];   // ✅ store email for receipt.php

            header("Location: welcome.php");
            exit();
        } else {
            $showError = "Invalid password.";
        }
    } else {
        $showError = "User not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError .'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
?>
</body>
</html>

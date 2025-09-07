<?php
session_start();
include "partials/_dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $student_id = $_SESSION["student_id"]; // from login session
$stmt = $conn->prepare("INSERT INTO feedback (student_id, name, message) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $student_id, $name, $message);



    if ($stmt->execute()) {
        $success = "✅ Feedback sent successfully!";
    } else {
        $error = "❌ Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      animation: fadeIn 1s ease-in;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .feedback-form {
      margin-left:450px;
      background-color: #fff;
      padding: 30px ;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 350px;
      animation: popIn 0.6s ease-out;
    }
    @keyframes popIn {
      from { transform: scale(0.95); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    .form-group {
      margin-right:30px;
      margin-bottom: 20px;
      position: relative;
    }
    input[type="text"], textarea {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #ddd;
      border-radius: 8px;
      transition: border-color 0.3s ease;
      font-size: 16px;
      resize: none;
    }
    input:focus, textarea:focus {
      border-color: #74ebd5;
      outline: none;
      box-shadow: 0 0 5px rgba(116, 235, 213, 0.5);
    }
    button {
      width: 100%;
      background-color: #004d40;
      color: #fff;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background-color: #168f7bff;
    }
  </style>
</head>
<body>
    <?php include "partials/_header.php"; ?>
    <?php include "partials/_nav.php"; ?>
    <br>

  <form class="feedback-form" action="feedback.php" method="POST">
    <h2>Feedback</h2>
    
    <div class="form-group">
      <input type="text" name="name" placeholder="Your Name" required>
    </div>
    
    <div class="form-group">
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    </div>
    
    <button type="submit">Submit</button>
  </form>

  <?php
  if (!empty($success)) {
      echo "<p style='color:green; text-align:center;'>$success</p>";
  }
  if (!empty($error)) {
      echo "<p style='color:red; text-align:center;'>$error</p>";
  }
  ?>

  <br>
  <?php include "partials/_footer.php"; ?>
</body>
</html>

<?php
session_start();
$login=false;
$showerror=false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "partials/_dbconnect.php";
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = $_POST["password"]; // Don't hash this again; compare to DB

    $sql = "SELECT * FROM admins WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result); // $user now holds the user's info

        // Compare the input password with the hashed password from the DB
        if ($password == $user['password']) {
            $login=true;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin_id'] = $user['admin_id']; // ✅ This is what you need

            header("Location: admin_dashboard.php");
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Staff Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #e0f2f1;
      /* display: flex; */
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeInUp 0.8s ease;
      margin-left:450px;
    }

    .login-box h2 {
      text-align: center;
      color: #004d40;
      margin-bottom: 30px;
    }

    .input-box {
      position: relative;
      margin-bottom: 25px;
    }

    .input-box input {
      width: 100%;
      padding: 12px 10px;
      border: none;
      border-bottom: 2px solid #ccc;
      outline: none;
      font-size: 16px;
      background: transparent;
      transition: 0.3s;
    }

    .input-box label {
      position: absolute;
      top: 12px;
      left: 10px;
      color: #999;
      pointer-events: none;
      transition: 0.3s;
    }

    .input-box input:focus,
    .input-box input:valid {
      border-bottom: 2px solid #004d40;
    }

    .input-box input:focus + label,
    .input-box input:valid + label {
      top: -10px;
      font-size: 12px;
      color: #004d40;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background: #004d40;
      border: none;
      color: #fff;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-box button:hover {
      background: #00695c;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
<?php include "partials/_header.php";?>
<?php include "partials/_nav.php";?>
<br>

  <div class="login-box">
    <h2>Admin Login</h2>
    <form method='post' action='admin_login.php'>
      <div class="input-box">
        <input name='username' type="text" required>
        <label>Email</label>
      </div>
      <div class="input-box">
        <input name='password' type="password" required>
        <label>Password</label>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
  <br>
<?php include "partials/_footer.php";?>

</body>
</html>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

    $exists=false;
    if($exists==false){
$sql = "INSERT INTO `students` (`first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `address`) 
        VALUES ('$first_name', '$last_name', '$email', '$password', '$dob', '$gender', '$address')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
           
        }
    }
    else{
         $showError = "Passwords do not match";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>College Registration & Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
 
<style>
.container {
  width: 100%;
  max-width: 400px;
  background: white;
  color: #004d40;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  margin-left:450px;
}

.form-container {
  position: relative;
  width: 100%;
}

.form {
  position: absolute;
  width: 100%;
  transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
  opacity: 0;
  transform: translateX(100%);
}

.form.active {
  opacity: 1;
  transform: translateX(0);
  position: relative;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #004d40;
}

input, select, textarea, button {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 1em;
}

input:focus, select:focus, textarea:focus {
  outline: none;
  border: 2px solid #004d40;
}

button {
  background-color: #004d40;
  color: white;
  border: none;
  cursor: pointer;
  transition: background 0.3s ease;
}

button:hover {
  background-color: #00695c;
}

.grid {
  display: flex;
  gap: 10px;
}

textarea {
  resize: none;
  height: 80px;
}

p {
  text-align: center;
  margin-top: 10px;
}

a {
  color: #004d40;
  text-decoration: none;
  font-weight: bold;
}

a:hover {
  text-decoration: underline;
}

</style>
</head>
<body>
  <?php include"partials/_header.php";?>
    <?php include"partials/_nav.php";?>
    
    <br>

  <div class="container">
    <div class="form-container" id="form-box">
      <!-- Registration Form -->
      <form id="registerForm" method="post" action="student-register.php" class="form active">
        <h2>Student Registration</h2>
        <div class="grid">
          <input type="text" placeholder="First Name" name="first_name" required />
          <input type="text" placeholder="Last Name" name="last_name" required />
        </div>
        <input type="email" placeholder="Email" name="email" required />
        <input type="text" placeholder="Password" name="password" required />
        <input type="date" name="dob" required />
        <select name="gender" required>
          <option value="" disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit">Register</button>
        <p>Already registered? <a href="#" onclick="toggleForm()">Login here</a></p>
      </form>

      <!-- Login Form -->
      <form id="loginForm" method="post" action="student-login.php" class="form">
        <h2>Login</h2>
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" required />
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="#" onclick="toggleForm()">Register here</a></p>
      </form>
    </div>
  </div>

  <script>
    function toggleForm() {
  const forms = document.querySelectorAll('.form');
  forms.forEach(form => form.classList.toggle('active'));
}

  </script>
<BR>
    <?php include"partials/_footer.php";?>

</body>
</html>

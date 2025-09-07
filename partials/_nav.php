<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nav with Dropdown</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #004d40;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .nav-links {
      display: flex;
      gap: 30px;
      position: relative;
    }

    .nav-links a {
      color: #ffffff;
      text-decoration: none;
      font-size: 16px;
      padding: 10px 14px;
      position: relative;
    }

    .nav-links a:hover {
      background-color: #00796b;
      border-radius: 4px;
    }

    /* Dropdown container */
    .dropdown {
        margin-top:10px;
      position: relative;
    }

    /* Dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #004d40;
      min-width: 160px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      z-index: 1;
      flex-direction: column;
    }

    .dropdown-content a {
      padding: 10px 15px;
      white-space: nowrap;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #00796b;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-content {
      display: flex;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="nav-links">
      <a href="welcome.php">HOME</a>
      <div class="dropdown">
        <a href="#">ACADEMICS</a>
        <div class="dropdown-content">
          <a href="art.php">Arts</a>
          <a href="commerce.php">Commerce</a>
          <a href="science.php">Science</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">ADMINISTRATION</a>
        <div class="dropdown-content">
          <a href="college_hods.php">HOD'S</a>
          <a href="#">Office Staff</a>
          <a href="teaching_staff.php">Teaching Staff</a>
        </div>
    </div>
      
     <div class="dropdown">
        <a href="#">STUDENTS</a>
        <div class="dropdown-content">
          <a href="scholarship.php">Scholarship</a>
          <a href="earn-and-learn.php">Earn and Learn scheme</a>
          <a src="library/Official Fee Structure PDF.docx">Fees structure</a>

          <a href="#">Examinations</a>
          <a href="sports.php">Sports</a>
            <a href="receipt.php" target="_blank">
   <button>Download Enrollment Receipt</button>
</a> 
</div>
    </div>
      <a href="admission.php">ADMISSION</a>
      <a href="syllabus.php">SYLLABUS</a>
      <a href="feedback.php">FEEDBACK</a>
      
      <div class="dropdown">
        <a href="#">GALLARY</a>
        <div class="dropdown-content">
          <a href="gallary.php">Photos</a>
          <a href="gallary1.php">videos</a>
        </div>
  </div>

      
     <div class="dropdown">
        <a href="#">QUICK LINKS</a>
        <div class="dropdown-content">
          <a href="admin_login.php">Admin login</a>
          <a href="#">staff login</a>
        </div>
    </div>
    <a href="student-register.php">LOGOUT</a>
  </div>
  </nav>

</body>
</html>

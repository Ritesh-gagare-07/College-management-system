<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Science Department - Academics</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f4f9;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #1565c0;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 32px;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease;
    }

    h2 {
      color: #1565c0;
      margin-top: 30px;
    }

    ul {
      padding-left: 20px;
    }

    li {
      margin-bottom: 8px;
    }

    .section {
      margin-bottom: 30px;
      opacity: 0;
      animation: slideUp 1s forwards;
    }

    .section:nth-child(1) { animation-delay: 0.2s; }
    .section:nth-child(2) { animation-delay: 0.4s; }
    .section:nth-child(3) { animation-delay: 0.6s; }
    .section:nth-child(4) { animation-delay: 0.8s; }
    .section:nth-child(5) { animation-delay: 1s; }

    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
<?php include "partials/_header.php";?>
<?php include"partials/_nav.php";?>

  <header>
    <h1>Science Department</h1>
  </header>

  <div class="container">

    <div class="section">
      <h2>Overview</h2>
      <p>The Science department equips students with strong scientific fundamentals and practical experience through hands-on labs, modern facilities, and experienced faculty.</p>
    </div>

    <div class="section">
      <h2>Subjects Offered</h2>
      <ul>
        <li>Physics</li>
        <li>Chemistry</li>
        <li>Mathematics</li>
        <li>Botany / Zoology</li>
        <li>Computer Science</li>
      </ul>
    </div>

    <div class="section">
      <h2>Labs & Facilities</h2>
      <ul>
        <li>Well-equipped Physics, Chemistry, and Biology labs</li>
        <li>Computer Lab with modern hardware and software</li>
        <li>ICT-enabled Smart Classrooms</li>
      </ul>
    </div>

    <div class="section">
      <h2>Faculty List</h2>
      <ul>
        <li>Dr. S. K. Patil – PhD in Physics – Head of Department</li>
        <li>Prof. M. A. Desai – M.Sc. Chemistry – Assistant Professor</li>
        <li>Prof. N. R. Sawant – M.Sc. Mathematics – Assistant Professor</li>
        <li>Dr. R. J. Kulkarni – PhD in Computer Science – Associate Professor</li>
      </ul>
    </div>

    <div class="section">
      <h2>Career Paths</h2>
      <ul>
        <li>Engineering</li>
        <li>Medical and Allied Sciences</li>
        <li>Scientific Research</li>
        <li>Data Science and Analytics</li>
        <li>Teaching and Academia</li>
      </ul>
    </div>

  </div>
<?php include"partials/_footer.php";?>

</body>
</html>

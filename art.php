<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arts Department - Academics</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7f9;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #004d40;
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
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease;
    }

    h2 {
      color: #004d40;
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
    <h1>Arts Department</h1>
  </header>

  <div class="container">

    <div class="section">
      <h2>Overview</h2>
      <p>The Arts faculty fosters critical thinking, creativity, and cultural understanding. Students gain a deeper appreciation for human history, culture, and society through a variety of disciplines.</p>
    </div>

    <div class="section">
      <h2>Subjects Offered</h2>
      <ul>
        <li>History</li>
        <li>Political Science</li>
        <li>Marathi / English Literature</li>
        <li>Sociology</li>
        <li>Geography</li>
        <li>Psychology</li>
      </ul>
    </div>

    <div class="section">
      <h2>Faculty List</h2>
      <ul>
        <li>Dr. A. B. Patil – PhD in History – Head of Department</li>
        <li>Prof. S. D. Joshi – M.A. Political Science – Assistant Professor</li>
        <li>Dr. K. R. Deshmukh – PhD in Marathi Literature – Associate Professor</li>
        <li>Prof. M. P. Shinde – M.A. Sociology – Assistant Professor</li>
      </ul>
    </div>

    <div class="section">
      <h2>Facilities</h2>
      <ul>
        <li>Language Lab with audio-visual equipment</li>
        <li>Library with thousands of reference books</li>
        <li>Seminar Halls for academic discussions</li>
      </ul>
    </div>

    <div class="section">
      <h2>Career Opportunities</h2>
      <ul>
        <li>Civil Services (UPSC/MPSC)</li>
        <li>Journalism & Mass Communication</li>
        <li>Teaching and Research</li>
        <li>Social Work & NGOs</li>
      </ul>
    </div>

  </div>
<?php include"partials/_footer.php";?>

</body>
</html>

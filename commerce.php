<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Commerce Department - Academics</title>
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
      background-color: #2e7d32;
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
      color: #2e7d32;
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
    <h1>Commerce Department</h1>
  </header>

  <div class="container">

    <div class="section">
      <h2>Overview</h2>
      <p>The Commerce faculty develops financial literacy, business acumen, and entrepreneurial skills. Students gain practical knowledge in accounting, economics, and business strategy.</p>
    </div>

    <div class="section">
      <h2>Subjects Offered</h2>
      <ul>
        <li>Accountancy</li>
        <li>Economics</li>
        <li>Business Studies</li>
        <li>Banking</li>
        <li>Business Communication</li>
      </ul>
    </div>

    <div class="section">
      <h2>Facilities</h2>
      <ul>
        <li>Computer Lab with Tally ERP Software</li>
        <li>Active Business Club for workshops & events</li>
      </ul>
    </div>

    <div class="section">
      <h2>Faculty</h2>
      <ul>
        <li>Prof. A. B. Jadhav – M.Com, NET – Accountancy Specialist</li>
        <li>Dr. R. M. Pawar – PhD in Economics – Research Expert</li>
        <li>Prof. P. T. Naik – MBA in Finance – Banking & Management</li>
        <li>Prof. S. D. More – M.Com, SET – Business Studies</li>
      </ul>
    </div>

    <div class="section">
      <h2>Career Paths</h2>
      <ul>
        <li>Chartered Accountant (CA)</li>
        <li>Company Secretary (CS)</li>
        <li>Banking & Financial Services</li>
        <li>Master of Business Administration (MBA)</li>
        <li>Business Management & Entrepreneurship</li>
      </ul>
    </div>

  </div>
<?php include"partials/_footer.php";?>

</body>
</html>

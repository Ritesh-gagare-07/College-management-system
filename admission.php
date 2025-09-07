<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>College Admission Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --primary-color: #004d40;
      --secondary-color: #e0f2f1;
      --text-color: #212121;
      --light-bg: #fafafa;
      --accent-color: #00796b;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--light-bg);
      color: var(--text-color);
      line-height: 1.6;
    }

    header {
      background-color: var(--primary-color);
      color: white;
      text-align: center;
      padding: 40px 20px;
    }

    header h1 {
      margin: 0;
      font-size: 2.8rem;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 0 20px;
    }

    section {
      background-color: white;
      border-left: 6px solid var(--primary-color);
      padding: 25px 30px;
      margin-bottom: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    section h2 {
      color: var(--primary-color);
      margin-top: 0;
      font-size: 1.6rem;
    }

    ul {
      padding-left: 20px;
    }

    .apply-btn {
      display: inline-block;
      margin-top: 15px;
      padding: 12px 24px;
      background-color: var(--primary-color);
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      transition: background 0.3s;
    }

    .apply-btn:hover {
      background-color: #00332d;
    }

    .contact-info p {
      margin: 5px 0;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      section {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
<?php include"partials/_header.php";?>
<?php include"partials/_nav.php";?>

<header>
  <h1>🎓 College Admission Portal</h1>
</header>

<div class="container">

  <!-- 1. Admission Overview -->
  <section>
    <h2>1. Admission Overview</h2>
    <p>
      Welcome to the official admission portal of <strong>art's science commerce college rahuri</strong>. Students who have completed their 10th, 12th, or equivalent qualifications are eligible to apply for various undergraduate and postgraduate programs offered by the college.
    </p>
  </section>

  <!-- 2. Courses Offered -->
  <section>
    <h2>2. Courses & Eligibility</h2>
    <ul>
      <li><strong>B.Sc. Computer Science</strong> – 12th Science with PCM</li>
      <li><strong>B.Com.</strong> – 12th Commerce</li>
      <li><strong>B.A.</strong> – Any 12th Pass</li>
      <li><strong>M.Sc. / M.A.</strong> – Relevant Bachelor's degree</li>
    </ul>
  </section>

  <!-- 3. Required Documents -->
  <section>
    <h2>3. Required Documents</h2>
    <ul>
      <li>10th & 12th Marksheet</li>
      <li>Transfer Certificate (TC)</li>
      <li>Caste Certificate (if applicable)</li>
      <li>Aadhar Card</li>
      <li>Passport-size Photographs</li>
    </ul>
  </section>

  <!-- 4. Admission Schedule -->
  <section>
    <h2>4. Admission Dates</h2>
    <ul>
      <li><strong>Online Form Opens:</strong> July 1, 2025</li>
      <li><strong>Last Date to Apply:</strong> July 31, 2025</li>
      <li><strong>First Merit List:</strong> August 3, 2025</li>
      <li><strong>Final Admission Date:</strong> August 10, 2025</li>
    </ul>
  </section>

  <!-- 5. Apply Now -->
  <section>
    <h2>5. Apply Now</h2>
    <p>Click the button below to begin your admission application through our online portal.</p>
    <a class="apply-btn" href="https://asccrahuri.ac.in/Page404.aspx" target="_blank">🚀 Apply Online</a>
        <a class="apply-btn" href="student_admission.php" target="_blank">🚀 fill admission form</a>

  </section>

  <!-- 6. Contact Admission Cell -->
  <section class="contact-info">
    <h2>6. Contact Admission Cell</h2>
    <p>📞 <strong>Phone:</strong> 01234-567890</p>
    <p>📧 <strong>Email:</strong> rahuricollege@rediffmail.com</p>
    <p>📍 <strong>Address:</strong> Rahuri, Ahmednagar,
       Maharashtra, India - 413705</p>
  </section>

</div>
<?php include"partials/_footer.php";?>

</body>
</html>

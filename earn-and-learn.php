<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Earn and Learn Scheme</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #2d3436;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(120deg, #184d44ff, #004d40);
      color: white;
      text-align: center;
      padding: 3rem 1rem;
      animation: slideInDown 1s ease-out;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    header p {
      font-size: 1.2rem;
    }

    section {
      padding: 2rem;
      animation: fadeInUp 1s ease-out;
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      color: #341f97;
      margin-bottom: 1rem;
      font-size: 1.8rem;
    }

    ul, ol {
      padding-left: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .box {
      background-color: #dfe6e9;
      border-left: 6px solid #6c5ce7;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1.5rem;
    }

    .faq-item {
      margin-bottom: 1rem;
    }

    .faq-item strong {
      display: block;
      color: #2d3436;
    }

    a.button {
      display: inline-block;
      background: #6c5ce7;
      color: white;
      padding: 10px 20px;
      margin-top: 1rem;
      border-radius: 6px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    a.button:hover {
      background: #5e50e6;
    }

    footer {
      text-align: center;
      background-color: #2d3436;
      color: white;
      padding: 1.5rem;
      margin-top: 2rem;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      section {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>
      <?php include"partials/_header.php";?>
  <?php include"partials/_nav.php";?>


  <header>
    <h1>Earn and Learn Scheme</h1>
    <p>Empowering students with opportunities to work while they study</p>
  </header>

  <section>
    <h2>🎓 Overview</h2>
    <p>The Earn and Learn Scheme provides part-time, on-campus work opportunities to financially needy students. It encourages self-reliance and allows students to gain valuable work experience while continuing their education.</p>
  </section>

  <section>
    <h2>🎯 Objectives</h2>
    <ul>
      <li>Provide financial aid to economically weaker students</li>
      <li>Help students gain real-world work experience</li>
      <li>Promote responsibility and independence</li>
      <li>Encourage time management and discipline</li>
    </ul>
  </section>

  <section>
    <h2>💼 Job Roles Offered</h2>
    <div class="box">
      <ul>
        <li>Library Assistant</li>
        <li>Lab Helper</li>
        <li>IT & Technical Support</li>
        <li>Administrative/Office Assistant</li>
        <li>Campus Event Support</li>
        <li>Maintenance/Housekeeping Support</li>
      </ul>
    </div>
  </section>

  <section>
    <h2>⏱️ Working Hours & Stipend</h2>
    <ul>
      <li>Maximum 20 hours per week</li>
      <li>2–3 hours per day (after lectures)</li>
      <li>Stipend: ₹45 to ₹60 per hour</li>
      <li>Paid monthly</li>
    </ul>
  </section>

  <section>
    <h2>📌 Eligibility Criteria</h2>
    <ul>
      <li>Must be a currently enrolled student</li>
      <li>Valid college ID is mandatory</li>
      <li>Preference to students from economically weaker backgrounds</li>
    </ul>
  </section>

  <section>
    <h2>📝 How to Apply</h2>
    <ol>
      <li>Download and fill the application form</li>
      <li>Attach necessary documents (ID, income proof)</li>
      <li>Submit to Student Welfare Office</li>
      <li>Attend a short interview (if required)</li>
      <li>Wait for confirmation and work assignment</li>
    </ol>
    <a href="#" class="button">Download Application Form (PDF)</a>
  </section>

  <section>
    <h2>✨ Benefits to Students</h2>
    <ul>
      <li>Earn while you learn</li>
      <li>Gain work experience and skills</li>
      <li>Boost your resume</li>
      <li>Receive a participation certificate (optional)</li>
    </ul>
  </section>

  <section>
    <h2>❓ Frequently Asked Questions</h2>
    <div class="faq-item">
      <strong>Can I choose my preferred work area?</strong>
      <p>You can indicate your preference, but assignments are based on availability and suitability.</p>
    </div>
    <div class="faq-item">
      <strong>Can I opt out later?</strong>
      <p>Yes, but prior notice is required for record and replacement purposes.</p>
    </div>
    <div class="faq-item">
      <strong>Will it affect my academic schedule?</strong>
      <p>No. Work timings are scheduled outside class hours to avoid conflicts.</p>
    </div>
  </section>

  <section>
    <h2>📞 Contact & Support</h2>
    <p>Student Welfare Cell</p>
    <p>📧 Email: <a href="mailto:studenthelp@yourcollege.edu">studenthelp@yourcollege.edu</a></p>
    <p>📞 Phone: +91-9876543210</p>
    <p>🕒 Office Hours: Monday to Friday, 10 AM – 4 PM</p>
  </section>

  <?php include"partials/_footer.php";?>

</body>
</html>

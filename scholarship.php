<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scholarship Opportunities</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root {
      --primary-color: #004d40;
      --light-color: #e0f2f1;
      --text-dark: #212121;
      --text-light: #ffffff;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: var(--text-dark);
    }

    header {
      background-color: var(--primary-color);
      color: var(--text-light);
      padding: 30px 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
      letter-spacing: 1px;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .scholarship {
      background-color: #ffffff;
      border-left: 6px solid var(--primary-color);
      padding: 25px 20px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }

    .scholarship:hover {
      transform: translateY(-4px);
    }

    .scholarship h2 {
      margin-top: 0;
      color: var(--primary-color);
      font-size: 1.6em;
    }

    .scholarship p {
      line-height: 1.6;
      font-size: 1em;
    }

    .apply-btn {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background-color: var(--primary-color);
      color: var(--text-light);
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .apply-btn:hover {
      background-color: #00332d;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 1.8em;
      }
    }
  </style>
</head>
<body>
    <?php include"partials/_header.php";?>
<?php include"partials/_nav.php";?>


<header>
  <h1>🎓 Scholarship Opportunities</h1>
</header>

<div class="container">

  <div class="scholarship">
    <h2>1. Rajarshi Shahu Maharaj Foreign Scholarship</h2>
    <p>
      For SC/Neo-Buddhist students from Maharashtra pursuing postgraduate or PhD programs abroad in QS Top 200 universities.
      Covers tuition, travel, and living expenses.
    </p>
    <a class="apply-btn" href="https://sjsa.maharashtra.gov.in/notice/rajarshi-shahu-maharaj-foreign-scholarship-scheme-for-scheduled-caste-boys-and-girls-for-special-studies-abroad-2025-26/" target="_blank">Apply Now</a>
  </div>

  <div class="scholarship">
    <h2>2. Rajarshi Shahu Maharaj Merit Scholarship (VJNT/SBC)</h2>
    <p>
      For students of VJNT/SBC categories in 11th or 12th standard who scored 75% or more in SSC.
      ₹300/month scholarship for 10 months.
    </p>
    <a class="apply-btn" href="https://mahaeschol.maharashtra.gov.in/" target="_blank">Apply via MahaDBT</a>
  </div>

  <div class="scholarship">
    <h2>3. Kamgaar Yojana Scholarship</h2>
    <p>
      A welfare scheme offering financial aid to children of registered labor workers in Maharashtra.
      Includes tuition reimbursement and hostel support.
    </p>
    <a class="apply-btn" href="https://mahadbt.maharashtra.gov.in/" target="_blank">Check Eligibility</a>
  </div>

</div>
<?php include"partials/_footer.php";?>
</body>
</html>

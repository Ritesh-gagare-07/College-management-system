<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Footer HTML -->
<footer class="college-footer">
  <div class="footer-container">
    <!-- College Branding -->
    <div class="footer-section college-info">
      <h2>Loknete Ramdas Patil Dhumal Arts, Science & Commerce College</h2>
      <p>Empowering Education Since 1990</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-section quick-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Admissions</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Departments</a></li>
        <li><a href="#">Faculty</a></li>
      </ul>
    </div>

    <!-- Support / Contact -->
    <div class="footer-section support">
      <h3>Support</h3>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Help Center</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Arts, Science & Commerce College. All rights reserved.</p>
  </div>
</footer>

<!-- Footer CSS -->
<style>
  .college-footer {
    background: linear-gradient(135deg, #0a0f2c, #1b2a49);
    color: #f0f0f0;
    font-family: 'Segoe UI', sans-serif;
    padding: 50px 20px 20px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
  }

  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    animation: fadeInUp 1s ease-in-out;
  }

  .footer-section {
    flex: 1 1 250px;
  }

  .footer-section h2,
  .footer-section h3 {
    color: #ffffff;
    margin-bottom: 15px;
    font-size: 22px;
  }

  .footer-section p {
    font-size: 14px;
    color: #ccc;
  }

  .footer-section ul {
    list-style: none;
    padding: 0;
  }

  .footer-section ul li {
    margin-bottom: 10px;
  }

  .footer-section ul li a {
    text-decoration: none;
    color: #b0c4ff;
    font-size: 14px;
    transition: color 0.3s;
  }

  .footer-section ul li a:hover {
    color: #ffffff;
    text-decoration: underline;
  }

  .footer-bottom {
    text-align: center;
    margin-top: 40px;
    border-top: 1px solid #333;
    padding-top: 15px;
    font-size: 14px;
    color: #aaa;
    animation: fadeIn 1.5s ease-in-out;
  }

  /* Animations */
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

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
      text-align: center;
    }
  }
</style>

</body>
</html>
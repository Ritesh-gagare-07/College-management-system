
<?php
session_start();
include "partials/_dbconnect.php";

$email = $_SESSION['email'] ?? '';

// Fetch notices (latest first)
$sql = "SELECT n.title, n.description, n.date_posted, a.username AS posted_by 
        FROM notices n
        LEFT JOIN admins a ON n.posted_by = a.admin_id
        ORDER BY n.date_posted DESC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>What We Offer Banner</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f9fc;
    }

    .offer-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 60px 30px;
      background: linear-gradient(to bottom right, #e3f2fd, #fff);
    }

    .offer-content {
      flex: 1;
      min-width: 320px;
      padding-right: 40px;
      animation: fadeInLeft 1s ease;
    }

    .offer-content h2 {
      font-size: 36px;
      margin-bottom: 30px;
      color: #0a2540;
    }

    .offer-items {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .offer-box {
      display: flex;
      align-items: center;
      background-color: white;
      padding: 12px 16px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .offer-box i {
      font-size: 24px;
      color: #0056b3;
      margin-right: 15px;
    }

    .offer-box span {
      font-size: 16px;
      font-weight: 500;
      color: #333;
    }

    .offer-box:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }

    .offer-image {
      flex: 1;
      min-width: 300px;
      text-align: center;
      animation: fadeInRight 1s ease;
    }

    .offer-image img {
      max-width: 100%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .offer-section {
        flex-direction: column;
        padding: 40px 20px;
      }

      .offer-content {
        padding-right: 0;
        margin-bottom: 30px;
      }

      .offer-items {
        grid-template-columns: 1fr;
      }
    }
     .notice-section {
      max-width: 800px;
      margin: 10px auto;
      padding: 10px;
    }
    .notice-card {
      background: #fff;
      border-left: 6px solid #004d40;
      padding: 18px 20px;
      margin-bottom: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.2s ease-in-out;
    }
    .notice-card:hover {
      transform: translateY(-3px);
    }
    .notice-title {
      font-size: 18px;
      font-weight: bold;
      color: #004d40;
      margin: 0 0 8px;
    }
    .notice-description {
      font-size: 15px;
      color: #333;
      margin-bottom: 8px;
    }
    .notice-meta {
      font-size: 13px;
      color: #777;
      display: flex;
      justify-content: space-between;
    }
    h2 {
      text-align: center;
      color: #1b2a49;
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  <?php include"partials/_header.php";?>
    <?php include "partials/_nav.php";?>
   <!-- <a href="receipt.php" target="_blank">
   <button>Download Enrollment Receipt</button>
</a>  -->

    <br>

    
  <section class="offer-section">
    <!-- Left Content -->
    <div class="offer-content">
      <h2>What We Offer?</h2>
      <div class="offer-items">
        <div class="offer-box">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Certified Teachers</span>
        </div>
        <div class="offer-box">
          <i class="fas fa-calendar-check"></i>
          <span>Regular Classes</span>
        </div>
        <div class="offer-box">
          <i class="fas fa-school"></i>
          <span>Sufficient Classrooms</span>
        </div>
        <div class="offer-box">
          <i class="fas fa-basketball-ball"></i>
          <span>Sport Facility</span>
        </div>
        <div class="offer-box">
          <i class="fas fa-flask"></i>
          <span>Regular Practicals</span>
        </div>
        <div class="offer-box">
          <i class="fas fa-shield-alt"></i>
          <span>Safety</span>
        </div>
      </div>
    </div>

    <!-- Right Image -->
    <div class="offer-image">
      <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&w=800&q=80" alt="College Facilities">
    </div>
  </section>
  <br>
  
  <div class="notice-section">
    <h2>📢 Latest Notices</h2>

    <?php if ($result && $result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="notice-card">
          <div class="notice-title"><?= htmlspecialchars($row['title']) ?></div>
          <div class="notice-description"><?= nl2br(htmlspecialchars($row['description'])) ?></div>
          <div class="notice-meta">
            <span>📅 <?= date("d M Y", strtotime($row['date_posted'])) ?></span>
            <span>👤 Posted by: <?= htmlspecialchars($row['posted_by']) ?></span>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p style="text-align:center; color:#777;">No notices available.</p>
    <?php endif; ?>
  </div>

  <?php include"partials/_news.php";?>


<br>
<?php include"partials/_footer.php";?>
</body>
</html>

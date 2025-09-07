<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virtual Tour - Our College</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #1b2a49;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0, 77, 64, 0.85), rgba(27, 42, 73, 0.85)),
                  url("https://source.unsplash.com/1600x800/?university,campus") no-repeat center/cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      animation: fadeInDown 1s ease-in-out;
    }
    .hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: auto;
      animation: fadeInUp 1.2s ease-in-out;
    }

    /* Virtual Tour Video */
    .tour-video {
      max-width: 1000px;
      margin: 60px auto;
      text-align: center;
      padding: 0 20px;
    }
    .tour-video iframe {
      width: 100%;
      height: 500px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
      transition: transform 0.3s ease;
    }
    .tour-video iframe:hover {
      transform: scale(1.02);
    }

    /* Highlights */
    .highlights {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }
    .highlight-box {
      background: white;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }
    .highlight-box:hover {
      transform: translateY(-10px);
    }
    .highlight-box h3 {
      color: #004d40;
      margin-bottom: 15px;
    }
    .highlight-box p {
      color: #555;
    }

    /* Campus Map */
    .campus-map {
      max-width: 1000px;
      margin: 60px auto;
      text-align: center;
      padding: 0 20px;
    }
    .campus-map iframe {
      width: 100%;
      height: 450px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    }

    /* Animations */
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
     <?php include "partials/_header.php";?>
<?php include "partials/_nav.php";?>

  <!-- Hero -->
  <section class="hero">
    <h1>Virtual Tour of Our College</h1>
    <p>Step into our campus virtually and explore classrooms, libraries, sports grounds, and more from anywhere in the world.</p>
  </section>

  <!-- Virtual Tour Video -->
  <section class="tour-video">
    <h2>360° Campus Tour</h2>
    <iframe src="https://www.youtube.com/embed/21X5lGlDOfg" allowfullscreen></iframe>
    <!-- Replace the above YouTube link with your actual college tour video -->
  </section>

  <!-- Highlights -->
  <section class="highlights">
    <div class="highlight-box">
      <h3>Modern Classrooms</h3>
      <p>Experience our smart classrooms equipped with the latest teaching technologies.</p>
    </div>
    <div class="highlight-box">
      <h3>Rich Library</h3>
      <p>Access thousands of books, journals, and digital resources at our central library.</p>
    </div>
    <div class="highlight-box">
      <h3>Sports & Activities</h3>
      <p>From cricket to cultural events, enjoy a vibrant student life on campus.</p>
    </div>
    <div class="highlight-box">
      <h3>Innovation Labs</h3>
      <p>Engage in hands-on projects at our fully equipped laboratories and research centers.</p>
    </div>
  </section>

  <!-- Campus Map -->
  <section class="campus-map">
    <h2>Find Us on Map</h2>
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60208.603854064095!2d74.60258370247182!3d19.410775240406487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc930bccda431b%3A0x9fb1c1a5607e5c00!2sLoknete%20Ramdas%20Patil%20Dhumal%20Arts%2C%20Science%20%26%20Commerce%20College!5e0!3m2!1sen!2sin!4v1756484339312!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
<?php include "partials/_footer.php";?>

</body>
</html>

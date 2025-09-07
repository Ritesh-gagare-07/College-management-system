<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fade Banner Slider</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f2f2f2;
    }

    .banner-slider {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .slide {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      animation: fadeSlider 18s infinite;
    }

    .slide .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
    }

    .slide-content {
      position: relative;
      color: white;
      text-align: center;
      max-width: 800px;
      z-index: 2;
      padding: 20px;
      animation: fadeText 1.5s ease-in-out;
    }

    .slide-content h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .slide-content p {
      font-size: 18px;
      margin-bottom: 25px;
    }

    .slide-content .btn {
      padding: 12px 28px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      transition: background 0.3s ease;
    }

    .slide-content .btn:hover {
      background-color: #0056b3;
    }

    /* Animating each slide */
    .slide:nth-child(1) {
      animation-delay: 0s;
      background-image: url('library/bannerimg1.avif');
    }

    .slide:nth-child(2) {
      animation-delay: 6s;
      background-image: url('library/bannerimg2.jpg');
    }

    .slide:nth-child(3) {
      animation-delay: 12s;
      background-image: url('library/bannerimg3.jpg');
    }

    @keyframes fadeSlider {
      0% { opacity: 0; }
      5% { opacity: 1; }
      30% { opacity: 1; }
      35% { opacity: 0; }
      100% { opacity: 0; }
    }

    @keyframes fadeText {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .slide-content h1 {
        font-size: 32px;
      }

      .slide-content p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <div class="banner-slider">
    <!-- Slide 1 -->
    <div class="slide">
      <div class="overlay"></div>
      <div class="slide-content">
        <h1>Empowering Future Leaders</h1>
        <p>Join our college and step into a journey of knowledge, innovation, and opportunity.</p>
        <a href="#" class="btn">Explore Programs</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide">
      <div class="overlay"></div>
      <div class="slide-content">
        <h1>World-Class Infrastructure</h1>
        <p>Modern classrooms, labs, and sports facilities designed for holistic development.</p>
        <a href="#" class="btn">See Campus</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide">
      <div class="overlay"></div>
      <div class="slide-content">
        <h1>Learn with Experts</h1>
        <p>Our certified teachers are here to guide and mentor every step of your journey.</p>
        <a href="#" class="btn">Meet Faculty</a>
      </div>
    </div>
  </div>

</body>
</html>

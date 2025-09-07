<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .gallery-section {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(135deg, #004d40, #1b2a49);
      color: white;
    }

    .gallery-section h2 {
      font-size: 2.5rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .gallery-section p {
      font-size: 1.1rem;
      margin-bottom: 40px;
      color: #ddd;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: auto;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.3);
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      display: block;
      transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
    }

    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 77, 64, 0.7);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      font-weight: 600;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }

    /* Animation */
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

    .gallery-item {
      animation: fadeInUp 1s ease both;
    }

    .gallery-item:nth-child(1) { animation-delay: 0.1s; }
    .gallery-item:nth-child(2) { animation-delay: 0.2s; }
    .gallery-item:nth-child(3) { animation-delay: 0.3s; }
    .gallery-item:nth-child(4) { animation-delay: 0.4s; }
    .gallery-item:nth-child(5) { animation-delay: 0.5s; }
    .gallery-item:nth-child(6) { animation-delay: 0.6s; }
  </style>
</head>
<body>
 <?php include "partials/_header.php";?>
<?php include"partials/_nav.php";?>
  <section class="gallery-section">
    <h2>Our College Gallery</h2>
    <p>Explore the vibrant life, campus, and activities of our institution</p>
    
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="library/img1.webp" alt="College Campus">
        <div class="gallery-overlay">Campus</div>
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/800x600/?library,study" alt="Library">
        <div class="gallery-overlay">Library</div>
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/800x600/?students,classroom" alt="Classroom">
        <div class="gallery-overlay">Classroom</div>
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/800x600/?sports,ground" alt="Sports Ground">
        <div class="gallery-overlay">Sports</div>
      </div>
      <div class="gallery-item">
        <img src="library/img2.webp" alt="Events">
        <div class="gallery-overlay">Events</div>
      </div>
      <div class="gallery-item">
        <img src="https://source.unsplash.com/800x600/?technology,lab" alt="Laboratory">
        <div class="gallery-overlay">Labs</div>
      </div>
    </div>
  </section>
<?php include"partials/_footer.php";?>

</body>
</html>

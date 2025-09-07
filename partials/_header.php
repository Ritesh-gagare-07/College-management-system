<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>College Banner</title>
  <style>
    .banner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #ffffff;
      height: 250px;
      padding: 0 10px;
      box-sizing: border-box;
      border: 2px solid #ccc;
    }

    .banner img {
      width: auto;
      height: 200px;
      object-fit: cover;
    }

    .banner-text {
      text-align: center;
      flex-grow: 1;
      padding: 0 20px;
    }

    .banner-text h1 {
      margin: 0;
      font-size: 22px;
      color: #1a237e;
      font-family: 'Georgia', serif;
      letter-spacing: 1px;
    }

    .banner-text h2 {
      margin: 8px 0 0;
      font-size: 18px;
      color: #004d40;
      font-family: 'Arial', sans-serif;
      font-weight: normal;
    }
  </style>
</head>
<body>

  <div class="banner">
    <!-- Left Image -->
    <img src="library/logo.png" alt="Left Banner Image">

    <!-- Center Text -->
    <div class="banner-text">
      <h1>SHRI SHIVAJI SHIKSHAN PRASARAK MANDAL'S</h1>
      <h2>Loknete Ramdas Patil Dhumal Arts, Science & Commerce College</h2>
    </div>

    <!-- Right Image -->
    <img src="library/logo2.jpg" alt="Right Banner Image">
  </div>

</body>
</html>

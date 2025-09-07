<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses Offered - XYZ College</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f7fc;
      color: #333;
    }

   

    .courses-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .course-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      padding: 25px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .course-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .course-card h3 {
      color: #1a237e;
      margin-top: 0;
    }

    .course-card p {
      font-size: 14px;
      line-height: 1.6;
    }

    .apply-btn {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #1a237e;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .apply-btn:hover {
      background-color: #3949ab;
    }

   
  </style>
</head>
<body>

  

  <div class="courses-container">
    <!-- Course 1 -->
    <div class="course-card">
      <h3>Bachelor of Computer Science</h3>
      <p>Learn programming, data structures, algorithms, and modern technologies including AI and web development.</p>
      <a href="apply.html?course=cs" class="apply-btn">Apply Now</a>
    </div>

    <!-- Course 2 -->
    <div class="course-card">
      <h3>Bachelor of Business Administration</h3>
      <p>Gain a solid foundation in business, marketing, and management with real-world case studies and internships.</p>
      <a href="apply.html?course=bba" class="apply-btn">Apply Now</a>
    </div>

    <!-- Course 3 -->
    <div class="course-card">
      <h3>Bachelor of Arts in English</h3>
      <p>Explore literature, creative writing, and communication skills, preparing for careers in media, education, and more.</p>
      <a href="apply.html?course=baeng" class="apply-btn">Apply Now</a>
    </div>

    <!-- Course 4 -->
    <div class="course-card">
      <h3>Bachelor of Science in Physics</h3>
      <p>Study mechanics, electromagnetism, quantum physics, and conduct lab experiments and research projects.</p>
      <a href="apply.html?course=bscphy" class="apply-btn">Apply Now</a>
    </div>

    <!-- Course 5 -->
    <div class="course-card">
      <h3>Master of Computer Applications</h3>
      <p>A postgraduate course in advanced computer science topics including software development and cloud computing.</p>
      <a href="apply.html?course=mca" class="apply-btn">Apply Now</a>
    </div>
  </div>

  

</body>
</html>

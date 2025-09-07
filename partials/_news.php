<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About & News Section</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f3f6f9;
      margin: 0;
      padding: 0;
    }

    .main-section {
      display: flex;
      justify-content: space-between;
      align-items: stretch;
      padding: 30px;
      max-width: 1200px;
      margin: auto;
      gap: 20px;
    }

    .about, .news {
      background-color: #ffffff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .about {
      flex: 2;
      animation: fadeLeft 1s ease forwards;
    }

    .news {
      flex: 1;
      height: 400px;
      overflow: hidden;
      animation: fadeRight 1s ease forwards;
      position: relative;
    }

    .about h2, .news h2 {
      color: #004d40;
      margin-bottom: 15px;
    }

    .about p {
      text-align: justify;
      line-height: 1.6;
    }

    /* News Slider */
    .news-slider {
      position: absolute;
      top: 60px;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 10px;
    }

    .news-item {
      opacity: 0;
      position: absolute;
      transition: opacity 1s ease;
      font-size: 15px;
      color: #333;
      padding-right: 15px;
    }

    .news-item.active {
      opacity: 1;
      position: relative;
    }

    @keyframes fadeLeft {
      from { opacity: 0; transform: translateX(-30px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    @keyframes fadeRight {
      from { opacity: 0; transform: translateX(30px); }
      to   { opacity: 1; transform: translateX(0); }
    }

    /* Optional responsiveness */
    @media (max-width: 768px) {
      .main-section {
        flex-direction: column;
      }
      .news {
        height: auto;
      }
    }
  </style>
</head>
<body>

  <div class="main-section">
    <!-- About Section -->
    <div class="about">
      <h2>About Shri Shivaji Shikshan Prasarak Mandal</h2>
      <p>
        Shri Shivaji Shikshan Prasarak Mandal is a trust sponsored by The Rahuri Sahakari Sakhar Karkhana. The Trust was registered under the leadership of Late Dr. Baburao Bapuji Tanpure, the stalwart pillar of Agro-Industrial Development and Co-operative Movement in Rahuri Tehsil.
      </p>
      <p>
        The history of Shri Shivaji Shikshan Prasarak Mandal would remain incomplete without reference to the efforts and achievements of Dr. Baburao Bapuji Tanpure who strived during his entire life to bring about Socio-Economic and Educational development of Rahuri Tehsil.
      </p>
      <p>
        Mahatma Phule Agricultural University acknowledged his contribution by conferring on him the honour of the D.Litt. (Doctor of Literature) degree in February 1982.
      </p>
      <p>
        Shri Shivaji Shikshan Prasarak Mandal flourished under the dynamic leadership of Late Dr. Baburao Bapuji Tanpure. The succeeding presidents, Shri. Ramdas Vishwanath Dhumal Patil and Shri. Prasad Baburao Tanpure (former MLA and M.P), added to the glory of the Institution.
      </p>
      <p>
        The Mandal presently renders invaluable services through high schools, colleges, a nursing home, ITI, and Arts, Science and Commerce College, Rahuri.
      </p>
    </div>

    <!-- News Section -->
    <div class="news">
      <h2>Latest News</h2>
      <div class="news-slider"><br><br>
        <div class="news-item active">🎓 Admissions Open for 2025 – Apply quickly!</div>
        <div class="news-item">📢 Staff Meeting scheduled on 18th July at 2:00 PM in Conference Hall.</div>
        <div class="news-item">🧪 Science Fair 2025 coming soon — register your group by 25th July.</div>
        <div class="news-item">🏆 Students of Commerce department won 2nd Prize in College-Level quize compition.</div>
        <div class="news-item">📚 Library week celebration from 20–25 July with special events!</div>
      </div>
    </div>
  </div>

  <!-- News Rotation Script -->
  <script>
    const newsItems = document.querySelectorAll('.news-item');
    let index = 0;

    setInterval(() => {
      newsItems[index].classList.remove('active');
      index = (index + 1) % newsItems.length;
      newsItems[index].classList.add('active');
    }, 4000); // Change every 4 seconds
  </script>

</body>
</html>

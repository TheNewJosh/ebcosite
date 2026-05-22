<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="img/logo.jpg">
  <title>Emmanuel Baptist College (EBCO) - God With Us</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/slider.css?v=<?php echo time(); ?>">
</head>

<body>
  <?php include 'aheader.php'; ?>

  <!-- HERO SECTION WITH SLIDER -->
<section class="hero-slider">

  <div class="slide active">
    <img src="img/EB1.jpg" alt="Emmanuel Baptist College">

    <div class="overlay"></div>

    <div class="slide-content container">
      <h4>Welcome To Emmanuel Baptist College</h4>
      <h1>Raising Future Leaders Through Excellence</h1>

      <p>
        A world-class secondary school in Ilorin focused on academic excellence,
        discipline, leadership and innovation.
      </p>

      <div class="hero-buttons">
        <a href="admissions.php" class="btn btn-primary">Apply Now</a>
        <a href="about.php" class="btn btn-outline">Explore School</a>
      </div>
    </div>
  </div>

  <div class="slide">
    <img src="img/EB6.jpg" alt="Modern Learning Environment">

    <div class="overlay"></div>

    <div class="slide-content container">
      <h4>Modern Learning Environment</h4>
      <h1>Empowering Students With Technology & Knowledge</h1>

      <p>
        Our ICT-driven learning approach prepares students for global opportunities
        and future success.
      </p>

      <div class="hero-buttons">
        <a href="academics.php" class="btn btn-primary">View Programs</a>
        <a href="contact.php" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>

  <div class="slide">
    <img src="img/EB22.jpg" alt="Admissions Open">

    <div class="overlay"></div>

    <div class="slide-content container">
      <h4>Admissions Open</h4>
      <h1>Give Your Child The Best Educational Experience</h1>

      <p>
        Join a school where students grow academically, spiritually,
        socially and morally.
      </p>

      <div class="hero-buttons">
        <a href="admissions.php" class="btn btn-primary">Start Admission</a>
        <a href="about.php" class="btn btn-outline">Learn More</a>
      </div>
    </div>
  </div>

  <!-- NAVIGATION -->
  <div class="slider-nav">
    <button id="prev">&#10094;</button>
    <button id="next">&#10095;</button>
  </div>

  <!-- DOTS -->
  <div class="slider-dots">
    <span class="dot active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

</section>

  <!-- STATS -->
  <section class="stats">
    <div class="container">
      <div class="stats-wrapper">

        <div class="stat-box">
          <h2>2K+</h2>
          <p>Students</p>
        </div>

        <div class="stat-box">
          <h2>98%</h2>
          <p>WAEC Success Rate</p>
        </div>

        <div class="stat-box">
          <h2>120+</h2>
          <p>Expert Teachers</p>
        </div>

        <div class="stat-box">
          <h2>25+</h2>
          <p>Years of Excellence</p>
        </div>

      </div>
    </div>
  </section>

  <!-- NEWS & EVENTS -->
  <section style="background: var(--light); padding: 90px 0; overflow: hidden;">
    <div class="container">
      <div class="section-title">
        <h5>Updates</h5>
        <h2>Latest News & Events</h2>
      </div>

      <div class="news-slider-container">
        <div class="news-slider-track" id="news-track" style="--slide-index: 0;">
          
          <!-- Card 1 -->
          <div class="news-card">
            <div class="news-card-img">
              <img src="img/new.jpeg" alt="Hybrid Classrooms">
            </div>
            <div class="news-card-content">
              <span class="news-date">May 13, 2026</span>
              <h3>EBCO Emerges First Runner-Up at UNILORIN Mathematics Quiz Competition</h3>
              <p>Emmanuel Baptist College students proudly secured first runner-up position during the UNILORIN inter-secondary mathematics quiz competition in Ilorin.</p>
              <!-- <a href="academics.php" class="news-more">Read More →</a> -->
            </div>
          </div>

          <!-- Card 3 -->
          <div class="news-card">
            <div class="news-card-img">
              <img src="img/EBCO-admission.jpg" alt="UTME Success">
            </div>
            <div class="news-card-content">
              <span class="news-date">April 28, 2024</span>
              <h3>JAMB UTME: Our Students Record Impressive Scores</h3>
              <p>Our senior students have broken records once again, with many scoring above 300 in the nationwide exams.</p>
              <!-- <a href="academics.php" class="news-more">Read More →</a> -->
            </div>
          </div>

          
          <!-- Card 2 -->
          <div class="news-card">
            <div class="news-card-img">
              <img src="img/resup2.jpg" alt="Inter-House Sports">
            </div>
            <div class="news-card-content">
              <span class="news-date">March 10, 2024</span>
              <h3>Emmanuel Baptist College School Assembly Ground</h3>
              <p>EBCO school assembly inspires unity, discipline, leadership, academic excellence, spiritual growth, confidence, and moral values among students every morning.</p>
              <!-- <a href="about.php" class="news-more">Read More →</a> -->
            </div>
          </div>

          <!-- Card 4 -->
          <div class="news-card">
            <div class="news-card-img">
              <img src="img/EB10.jpg" alt="Chemistry Lab">
            </div>
            <div class="news-card-content">
              <span class="news-date">April 12, 2024</span>
              <h3>EBCO Music and Band Team</h3>
              <p>The EBCO Music and Band Team showcases talent, creativity, discipline, and unity through inspiring performances during school events, assemblies, competitions, and celebrations.</p>
              <!-- <a href="academics.php" class="news-more">Read More →</a> -->
            </div>
          </div>

        </div>
      </div>

      <!-- Navigation Arrows -->
      <div class="news-nav">
        <button class="news-btn prev" onclick="moveNewsSlider(-1)">&#10094;</button>
        <button class="news-btn next" onclick="moveNewsSlider(1)">&#10095;</button>
      </div>

    </div>
  </section>

  <script>
    let currentNewsIndex = 0;

    function moveNewsSlider(direction) {
      const track = document.getElementById('news-track');
      const totalCards = track.querySelectorAll('.news-card').length;
      const visibleCards = window.innerWidth > 768 ? 2 : 1;
      const maxIndex = totalCards - visibleCards;
      
      currentNewsIndex += direction;
      if (currentNewsIndex < 0) {
        currentNewsIndex = maxIndex;
      } else if (currentNewsIndex > maxIndex) {
        currentNewsIndex = 0;
      }
      
      track.style.setProperty('--slide-index', currentNewsIndex);
    }
  </script>


  <!-- ABOUT -->
  <section>
    <div class="container">

      <div class="section-title">
        <h5>About EBCO</h5>
        <h2>Building Character & Academic Excellence</h2>
      </div>

      <div class="about">

        <div class="about-image">
          <img src="img/EB8.jpg" alt="Emmanuel Baptist College Students">

          <div class="about-card">
            <h3>100%</h3>
            <p>Dedicated to quality education and moral upbringing.</p>
          </div>
        </div>

        <div class="about-text">
          <h2>A School Designed For Future Greatness</h2>

          <p>
            At Emmanuel Baptist College, we combine modern education with strong
            moral values to prepare students for future success in academics,
            leadership, technology, and life.
          </p>

          <p>
            Our mission is to empower every child with knowledge, confidence,
            discipline, and creativity in a safe and inspiring learning environment.
          </p>

          <div class="features">

            <div class="feature">
              <div class="feature-icon">✓</div>
              <div>
                <h4>Modern Classrooms</h4>
              </div>
            </div>

            <div class="feature">
              <div class="feature-icon">✓</div>
              <div>
                <h4>ICT & Science Labs</h4>
              </div>
            </div>

            <div class="feature">
              <div class="feature-icon">✓</div>
              <div>
                <h4>Qualified Teachers</h4>
              </div>
            </div>

            <div class="feature">
              <div class="feature-icon">✓</div>
              <div>
                <h4>Excellent Boarding</h4>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- PROGRAMS -->
  <section class="programs">

    <div class="container">

      <div class="section-title">
        <h5>Our Programs</h5>
        <h2>Academic & Student Development</h2>
      </div>

      <div class="program-grid">

        <div class="program-card">
          <div class="program-icon">📘</div>
          <h3>Junior Secondary</h3>
          <p>
            Strong academic foundation with modern learning methods,
            discipline, and creativity development.
          </p>
        </div>

        <div class="program-card">
          <div class="program-icon">🎓</div>
          <h3>Senior Secondary</h3>
          <p>
            Intensive preparation for WAEC, NECO, JAMB and future career success.
          </p>
        </div>

        <div class="program-card">
          <div class="program-icon">💻</div>
          <h3>ICT Training</h3>
          <p>
            Practical computer education, coding exposure and digital literacy
            for modern students.
          </p>
        </div>

      </div>

    </div>

  </section>

  <!-- GALLERY -->
  <section>

    <div class="container">

      <div class="section-title">
        <h5>School Life</h5>
        <h2>Experience The EBCO Environment</h2>
      </div>

      <div class="gallery-grid">

        <img src="img/EB2.jpg" alt="Emmanuel Baptist College Campus">
        <img src="img/EB7.jpg" alt="Emmanuel Baptist College Classroom">
        <img src="img/EB10.jpg" alt="Emmanuel Baptist College Science Lab">
        <img src="img/EB17.jpg" alt="Emmanuel Baptist College Students">

      </div>

    </div>

  </section>

  <!-- CTA -->
  <section>
    <div class="container">

      <div class="cta">
        <h2>Begin Your Child’s Journey To Success</h2>

        <p>
          Admissions are now open for new students. Join a school where
          excellence, leadership, discipline, and innovation shape the future.
        </p>

        <a href="admissions.php" class="btn btn-primary">Apply For Admission</a>

      </div>

    </div>
  </section>

  <?php include 'afooter.php'; ?>
  <!-- JS -->
<script src="js/slider.js"></script>

</body>

</html>
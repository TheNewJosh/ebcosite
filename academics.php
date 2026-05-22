<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="img/logo.jpg">
  <title>Academics - Emmanuel Baptist College (EBCO)</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <?php include 'aheader.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero" style="background-image: url('img/EB6.jpg');">
    <div class="container">
      <h1>Academic Excellence</h1>
      <p>Nurturing curious minds and preparing global achievers through standard curricula and state-of-the-art facilities.</p>
    </div>
  </section>

  <!-- ACADEMIC PHILOSOPHY -->
  <section>
    <div class="container">
      <div class="about">
        <div class="about-text">
          <h5>Philosophy</h5>
          <h2 style="font-size: 36px; line-height: 1.2;">Holistic Academic Development</h2>
          <p>
            At Emmanuel Baptist College, our academics are structured to stimulate critical reasoning, analytical thinking, and real-world problem-solving. We implement the combined Nigerian and British educational frameworks to ensure global competitiveness.
          </p>
          <p>
            Our students are trained not to memorize, but to synthesize and apply knowledge. Through digital interactive screens, hands-on scientific experimentation, and expert guidance, we lay a robust foundation for university admissions and career success.
          </p>
        </div>

        <div class="about-image">
          <img src="img/EB10.jpg" alt="Science Laboratory" style="border-radius: 30px; box-shadow: var(--shadow);">
          <div class="about-card" style="width: 250px;">
            <h3>98%+</h3>
            <p>WAEC & NECO distinction rates achieved annually.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTERACTIVE TABS SECTION -->
  <section style="background: var(--light);">
    <div class="container">
      <div class="section-title">
        <h5>Our Curriculum</h5>
        <h2>Learning Structures</h2>
      </div>

      <!-- Tab Buttons -->
      <div class="tab-nav">
        <button class="tab-btn active" onclick="switchTab(event, 'junior')">Junior Secondary</button>
        <button class="tab-btn" onclick="switchTab(event, 'senior')">Senior Secondary</button>
        <button class="tab-btn" onclick="switchTab(event, 'vocational')">ICT & Digital Skills</button>
      </div>

      <!-- Tab Contents -->
      <div id="junior" class="tab-content">
        <div class="grid-2" style="align-items: center;">
          <div>
            <h3 style="color: var(--primary); font-size: 28px; font-weight: 800; margin-bottom: 15px;">Junior Secondary (JSS 1 - 3)</h3>
            <p style="color: var(--text); margin-bottom: 20px; line-height: 1.8;">
              The junior school serves as the foundational stage where basic scientific, linguistic, artistic, and moral concepts are instilled. We prepare students for the Basic Education Certificate Examination (BECE).
            </p>
            <ul style="padding-left: 20px; color: var(--text); line-height: 2;">
              <li style="list-style-type: disc;">Mathematics & Basic Sciences</li>
              <li style="list-style-type: disc;">Languages (English, Yoruba, French)</li>
              <li style="list-style-type: disc;">Social Sciences & Pre-Vocational Studies</li>
              <li style="list-style-type: disc;">National Values & Christian Religious Studies</li>
            </ul>
          </div>
          <div>
            <img src="img/EB7.jpg" alt="Junior Class" style="border-radius: 20px; box-shadow: var(--shadow);">
          </div>
        </div>
      </div>

      <div id="senior" class="tab-content" style="display: none;">
        <div class="grid-2" style="align-items: center;">
          <div>
            <h3 style="color: var(--primary); font-size: 28px; font-weight: 800; margin-bottom: 15px;">Senior Secondary (SSS 1 - 3)</h3>
            <p style="color: var(--text); margin-bottom: 20px; line-height: 1.8;">
              The senior school is segmented into departmental pathways to prepare students directly for tertiary education and major examinations including WAEC, NECO, and UTME (JAMB).
            </p>
            <ul style="padding-left: 20px; color: var(--text); line-height: 2;">
              <li style="list-style-type: disc;">Core Subjects (English, Math, Civic, Data Processing)</li>
              <li style="list-style-type: disc;">Science Department (Physics, Chemistry, Biology, Further Math)</li>
              <li style="list-style-type: disc;">Commercial Department (Financial Accounting, Commerce, Economics)</li>
              <li style="list-style-type: disc;">Arts Department (Literature, Government, History, Christian Religious Studies)</li>
            </ul>
          </div>
          <div>
            <img src="img/EB1.jpg" alt="Senior Class" style="border-radius: 20px; box-shadow: var(--shadow);">
          </div>
        </div>
      </div>

      <div id="vocational" class="tab-content" style="display: none;">
        <div class="grid-2" style="align-items: center;">
          <div>
            <h3 style="color: var(--primary); font-size: 28px; font-weight: 800; margin-bottom: 15px;">ICT & Coding Exposure</h3>
            <p style="color: var(--text); margin-bottom: 20px; line-height: 1.8;">
              We believe secondary education is incomplete without technology. All EBCO students undergo mandatory computer training and introductory digital skill classes to foster innovators.
            </p>
            <ul style="padding-left: 20px; color: var(--text); line-height: 2;">
              <li style="list-style-type: disc;">Web Design Basics (HTML & CSS)</li>
              <li style="list-style-type: disc;">Data Processing & Spreadsheet Analysis</li>
              <li style="list-style-type: disc;">Creative Graphic Design</li>
              <li style="list-style-type: disc;">Robotics & Logic Thinking Clubs</li>
            </ul>
          </div>
          <div>
            <img src="img/driver-ebco2.jpg" alt="ICT Laboratory" style="border-radius: 20px; box-shadow: var(--shadow);">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ACADEMIC DEPARTMENTS -->
  <section>
    <div class="container">
      <div class="section-title">
        <h5>Departments</h5>
        <h2>Areas of Specialization</h2>
      </div>

      <div class="grid-3">
        <div class="program-card">
          <div class="program-icon">🔬</div>
          <h3>Science & Technology</h3>
          <p>Empowering future medical doctors, pharmacists, programmers, and engineers with robust practical experiments and intensive conceptual guidance.</p>
        </div>

        <div class="program-card">
          <div class="program-icon">⚖️</div>
          <h3>Arts & Humanities</h3>
          <p>Nurturing future lawyers, politicians, diplomats, and writers through standard creative writing, government debates, and literature studies.</p>
        </div>

        <div class="program-card">
          <div class="program-icon">📊</div>
          <h3>Business & Commercial</h3>
          <p>Training future accountants, economists, and entrepreneurs in financial book-keeping, modern commerce theories, and strategic thinking.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CO-CURRICULAR -->
  <section style="background: var(--light);">
    <div class="container">
      <div class="section-title">
        <h5>Beyond The Classroom</h5>
        <h2>Co-Curricular Activities</h2>
      </div>

      <div class="grid-4">
        <div style="background: #fff; padding: 25px; border-radius: 18px; text-align: center; box-shadow: var(--shadow);">
          <div style="font-size: 32px; margin-bottom: 15px;">⚽</div>
          <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 10px;">Sports & Athletics</h4>
          <p style="font-size: 13px; color: var(--text);">Inter-house sports, football leagues, basketball training, and indoor games.</p>
        </div>

        <div style="background: #fff; padding: 25px; border-radius: 18px; text-align: center; box-shadow: var(--shadow);">
          <div style="font-size: 32px; margin-bottom: 15px;">🎤</div>
          <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 10px;">Music & Drama Club</h4>
          <p style="font-size: 13px; color: var(--text);">Choir training, instrumental education, and theatrical plays.</p>
        </div>

        <div style="background: #fff; padding: 25px; border-radius: 18px; text-align: center; box-shadow: var(--shadow);">
          <div style="font-size: 32px; margin-bottom: 15px;">🧠</div>
          <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 10px;">Debate & Quiz Society</h4>
          <p style="font-size: 13px; color: var(--text);">Fostering quick thinking, eloquent speaking, and healthy public debates.</p>
        </div>

        <div style="background: #fff; padding: 25px; border-radius: 18px; text-align: center; box-shadow: var(--shadow);">
          <div style="font-size: 32px; margin-bottom: 15px;">🚀</div>
          <h4 style="color: var(--primary); font-weight: 700; margin-bottom: 10px;">Press & Jet Clubs</h4>
          <p style="font-size: 13px; color: var(--text);">School newsletter journalism and practical science innovation challenges.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'afooter.php'; ?>

  <!-- JS for Tab Switching -->
  <script>
    function switchTab(evt, tabId) {
      // Hide all tabs
      const tabContents = document.getElementsByClassName('tab-content');
      for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = 'none';
      }

      // Remove active class from buttons
      const tabButtons = document.getElementsByClassName('tab-btn');
      for (let i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active');
      }

      // Show requested tab and add active class to button
      document.getElementById(tabId).style.display = 'block';
      evt.currentTarget.classList.add('active');
    }
  </script>
</body>

</html>

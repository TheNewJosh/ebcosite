<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="img/logo.jpg">
  <title>Gallery - Emmanuel Baptist College (EBCO)</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <?php include 'aheader.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero" style="background-image: url('img/EB10.jpg');">
    <div class="container">
      <h1>School Gallery</h1>
      <p>A visual journey through our modern infrastructure, collaborative classroom experiences, and exciting student events.</p>
    </div>
  </section>

  <!-- GALLERY WITH INTERACTIVE FILTERS -->
  <section>
    <div class="container">

      <!-- Category Filter Tabs -->
      <div class="gallery-filter">
        <button class="filter-btn active" onclick="filterGallery('all', this)">All Photos</button>
        <button class="filter-btn" onclick="filterGallery('campus', this)">Campus & Facilities</button>
        <button class="filter-btn" onclick="filterGallery('classrooms', this)">Classrooms</button>
        <button class="filter-btn" onclick="filterGallery('laboratories', this)">Labs & ICT</button>
        <button class="filter-btn" onclick="filterGallery('students', this)">Students & Life</button>
      </div>

      <!-- Gallery Grid -->
      <div class="grid-3" id="gallery-grid">

        <!-- EB1 -->
        <div class="gallery-card" data-category="classrooms" onclick="openLightbox(this)">
          <img src="img/EB1.jpg" alt="Senior Classroom Session">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Senior Classroom</h4>
              <p>Active learning and engagement in our senior secondary block.</p>
            </div>
          </div>
        </div>

        <!-- EB2 -->
        <div class="gallery-card" data-category="campus" onclick="openLightbox(this)">
          <img src="img/EB2.jpg" alt="Emmanuel Baptist College Front Entrance">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Front Campus View</h4>
              <p>The main entrance block representing excellence and order.</p>
            </div>
          </div>
        </div>

        <!-- EB6 -->
        <div class="gallery-card" data-category="laboratories" onclick="openLightbox(this)">
          <img src="img/EB6.jpg" alt="ICT Center Learning">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>ICT & Coding Center</h4>
              <p>Preparing digital leaders through hands-on technical skills.</p>
            </div>
          </div>
        </div>

        <!-- EB7 -->
        <div class="gallery-card" data-category="classrooms" onclick="openLightbox(this)">
          <img src="img/EB7.jpg" alt="Junior Class Lectures">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Junior Classroom</h4>
              <p>Interactive lessons for basic sciences and languages.</p>
            </div>
          </div>
        </div>

        <!-- EB8 -->
        <div class="gallery-card" data-category="students" onclick="openLightbox(this)">
          <img src="img/EB8.jpg" alt="EBCO Students Group">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>EBCO Student Body</h4>
              <p>Happy and highly disciplined students displaying future potential.</p>
            </div>
          </div>
        </div>

        <!-- EB10 -->
        <div class="gallery-card" data-category="laboratories" onclick="openLightbox(this)">
          <img src="img/EB10.jpg" alt="Science Laboratory Practical">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Chemistry Laboratory</h4>
              <p>Conducting practical scientific research in a highly secure environment.</p>
            </div>
          </div>
        </div>

        <!-- EB17 -->
        <div class="gallery-card" data-category="students" onclick="openLightbox(this)">
          <img src="img/EB17.jpg" alt="Collaborative Study Session">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Study Circles</h4>
              <p>Fostering cooperative learning and peer growth during studies.</p>
            </div>
          </div>
        </div>

        <!-- EB22 -->
        <div class="gallery-card" data-category="campus" onclick="openLightbox(this)">
          <img src="img/EB22.jpg" alt="Modern School Infrastructure">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Classroom Buildings</h4>
              <p>Serene, spacious buildings constructed to facilitate focused study.</p>
            </div>
          </div>
        </div>

        <!-- resup2 -->
        <div class="gallery-card" data-category="students" onclick="openLightbox(this)">
          <img src="img/resup2.jpg" alt="Morning Assembly & Events">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Student Events</h4>
              <p>Morning assembly, prayers, and leadership awards recognition.</p>
            </div>
          </div>
        </div>

        <!-- driver-ebco2 -->
        <div class="gallery-card" data-category="laboratories" onclick="openLightbox(this)">
          <img src="img/driver-ebco2.jpg" alt="Computer Lab Station">
          <div class="gallery-overlay">
            <div class="gallery-info">
              <h4>Computer Resources</h4>
              <p>Students conducting academic research on our local intranet.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- LIGHTBOX MODAL FOR IMAGES -->
  <div class="lightbox" id="lightbox">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img src="" class="lightbox-content" id="lightbox-img" alt="Enlarged Image">
  </div>

  <?php include 'afooter.php'; ?>

  <!-- JS for Filters & Lightbox -->
  <script>
    function filterGallery(category, button) {
      // Toggle active classes on buttons
      const buttons = document.querySelectorAll('.filter-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      // Filter gallery cards
      const cards = document.querySelectorAll('.gallery-card');
      cards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (category === 'all' || cardCategory === category) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    function openLightbox(card) {
      const img = card.querySelector('img');
      const lightbox = document.getElementById('lightbox');
      const lightboxImg = document.getElementById('lightbox-img');

      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt;
      lightbox.style.display = 'flex';
    }

    function closeLightbox() {
      const lightbox = document.getElementById('lightbox');
      lightbox.style.display = 'none';
    }

    // Close lightbox on clicking dark background
    document.getElementById('lightbox').addEventListener('click', function(e) {
      if (e.target === this) {
        closeLightbox();
      }
    });
  </script>
</body>

</html>
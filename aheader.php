<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<!-- HEADER -->
<header>
  <div class="container">
    <nav>
      <a href="index.php" class="logo-wrapper" style="display:flex; align-items:center; gap:10px;">
        <img src="img/cropped-Ebco-logos.png" alt="EBCO Logo" style="height:45px; width:auto; border-radius:4px;">
        <div class="logo" style="margin:0; font-size:24px; font-weight:800; color:#fff; letter-spacing:1px;">EBCO<span style="color:#f8b400;">.</span></div>
      </a>

      <ul class="nav-links">
        <li><a href="index.php" <?php echo ($current_page == 'index.php' || $current_page == '') ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="about.php" <?php echo ($current_page == 'about.php') ? 'class="active"' : ''; ?>>About</a></li>
        <li><a href="academics.php" <?php echo ($current_page == 'academics.php') ? 'class="active"' : ''; ?>>Academics</a></li>
        <li><a href="admissions.php" <?php echo ($current_page == 'admissions.php') ? 'class="active"' : ''; ?>>Admissions</a></li>
        <li><a href="gallery.php" <?php echo ($current_page == 'gallery.php') ? 'class="active"' : ''; ?>>Gallery</a></li>
        <li><a href="https://portal.ebco.com.ng/studentportal/">Portal</a></li>
        <li><a href="contact.php" <?php echo ($current_page == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
      </ul>

      <a href="admissions.php" class="btn btn-primary">Apply Now</a>
    </nav>
  </div>
</header>

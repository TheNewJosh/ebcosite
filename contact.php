<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Emmanuel Baptist College (EBCO)</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <?php include 'aheader.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero" style="background-image: url('img/EB8.jpg');">
    <div class="container">
      <h1>Contact Us</h1>
      <p>Have inquiries or want to tour our beautiful campus? Reach out to us through our direct lines or drop a message below.</p>
    </div>
  </section>

  <!-- CONTACT GRID -->
  <section>
    <div class="container">
      
      <div class="grid-2" style="gap: 60px;">
        
        <!-- Left Side: Contact Information Cards -->
        <div>
          <h5 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">Get In Touch</h5>
          <h2 style="color: var(--primary); font-size: 38px; font-weight: 800; margin-bottom: 30px; line-height: 1.2;">We'd Love To Hear From You</h2>
          
          <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="info-card">
              <div class="icon">📍</div>
              <div>
                <h4>School Address</h4>
                <p>Emmanuel Baptist College, Tanke, Ilorin
P.O. Box 112, Ilorin, Kwara State.</p>
              </div>
            </div>

            <div class="info-card">
              <div class="icon">📞</div>
              <div>
                <h4>Phone Contacts</h4>
                <p>Main Desk: +234 814 610 2273<br>Other: +234 803 821 8617</p>
              </div>
            </div>

            <div class="info-card">
              <div class="icon">✉️</div>
              <div>
                <h4>Email Addresses</h4>
                <p>Info Desk: ebcotanke@gmail.com<br>Admissions: ebcotanke@gmail.com</p>
              </div>
            </div>

            <div class="info-card">
              <div class="icon">🕒</div>
              <div>
                <h4>Working Hours</h4>
                <p>Monday - Friday: 8:00 AM - 4:00 PM<br>Saturday - Sunday: Closed</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side: Clean Contact Form -->
        <div>
          <div class="contact-wrapper">
            <h3 style="color: var(--primary); font-weight: 800; font-size: 24px; margin-bottom: 25px; text-align: center;">Send Us a Message</h3>
            
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent successfully. We will get back to you shortly.'); this.reset();">
              
              <div class="form-group">
                <label>Your Full Name</label>
                <input type="text" class="form-control" placeholder="e.g. Samuel Okon" required>
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="e.g. samuel@gmail.com" required>
              </div>

              <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" placeholder="e.g. Inquiries about boarding" required>
              </div>

              <div class="form-group">
                <label>Your Message</label>
                <textarea class="form-control" placeholder="Type your detailed message here..." required></textarea>
              </div>

              <button type="submit" class="btn btn-primary" style="width: 100%; border:none; cursor:pointer;">Send Message Now</button>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- GOOGLE MAPS SECTION -->
  <section style="background: var(--light); padding-bottom: 0;">
    <div class="container">
      <div class="section-title" style="margin-bottom: 40px;">
        <h5>Our Location</h5>
        <h2>Find Us on the Map</h2>
      </div>

      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126252.1232813589!2d4.49886738988647!3d8.483984180479155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364d1264c12571%3A0xc3cf338827725227!2sIlorin%2C%20Kwara!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng"
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <?php include 'afooter.php'; ?>
</body>

</html>

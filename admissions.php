<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="img/logo.jpg">
  <title>Admissions - Emmanuel Baptist College (EBCO)</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <?php include 'aheader.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero" style="background-image: url('img/EBCO-admission.jpg');">
    <div class="container">
      <h1>Admissions Portal</h1>
      <p>Take the first step towards securing your child's future. Read our simple process and apply online today.</p>
    </div>
  </section>

  <!-- STEP BY STEP PROCESS -->
  <section>
    <div class="container">
      <div class="section-title">
        <h5>Enrollment</h5>
        <h2>Our Admission Process</h2>
      </div>

      <div class="grid-4">
        <div class="program-card" style="text-align: center; padding: 35px 20px;">
          <div style="font-size: 28px; width: 60px; height: 60px; line-height: 60px; background: var(--primary); color:#fff; border-radius:50%; margin: 0 auto 20px auto; font-weight:800;">1</div>
          <h3>Obtain Application</h3>
          <p style="font-size: 14px;">Purchase the admission form online via our secure payments portal or physically at the school administration office.</p>
        </div>

        <div class="program-card" style="text-align: center; padding: 35px 20px;">
          <div style="font-size: 28px; width: 60px; height: 60px; line-height: 60px; background: var(--gold); color:#000; border-radius:50%; margin: 0 auto 20px auto; font-weight:800;">2</div>
          <h3>Entrance Exam</h3>
          <p style="font-size: 14px;">Students sit for the national entrance exam covering standard English Language, Mathematics, and General Aptitude.</p>
        </div>

        <div class="program-card" style="text-align: center; padding: 35px 20px;">
          <div style="font-size: 28px; width: 60px; height: 60px; line-height: 60px; background: var(--primary); color:#fff; border-radius:50%; margin: 0 auto 20px auto; font-weight:800;">3</div>
          <h3>Oral Interview</h3>
          <p style="font-size: 14px;">Successful candidates undergo a brief oral interview (with parents present) to assess behavior, aspirations, and goals.</p>
        </div>

        <div class="program-card" style="text-align: center; padding: 35px 20px;">
          <div style="font-size: 28px; width: 60px; height: 60px; line-height: 60px; background: var(--gold); color:#000; border-radius:50%; margin: 0 auto 20px auto; font-weight:800;">4</div>
          <h3>Official Enrollment</h3>
          <p style="font-size: 14px;">Upon offer letter reception, complete initial tuition payments, collect uniforms, books, and start learning!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FORM SECTION -->
  <section style="background: var(--light);">
    <div class="container">
      <div class="grid-2" style="align-items: center; gap: 60px;">
        <div>
          <h5 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">Apply Now</h5>
          <h2 style="color: var(--primary); font-size: 40px; font-weight: 800; margin-bottom: 25px; line-height: 1.2;">Admissions Inquiry Form</h2>
          <p style="color: var(--text); margin-bottom: 20px;">
            Ready to give your child the Emmanuel Baptist experience? Fill in the details in this secure portal. Our admissions officer will contact you within 24 hours to schedule a consultation and exam.
          </p>
          <div class="info-card" style="background:#fff; margin-bottom: 15px;">
            <div class="icon">📞</div>
            <div>
              <h4>Helpdesk Line</h4>
              <p>+234 800 000 0000</p>
            </div>
          </div>
          <div class="info-card" style="background:#fff;">
            <div class="icon">✉️</div>
            <div>
              <h4>Admissions Email</h4>
              <p>admissions@ebco.edu.ng</p>
            </div>
          </div>
        </div>

        <div>
          <div class="admission-wrapper">
            <h3 style="color: var(--primary); font-weight: 800; font-size: 24px; margin-bottom: 25px; text-align: center;">Start Application</h3>
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your inquiry was successfully submitted. Our Admissions Office will reach out to you shortly.'); this.reset();">
              <div class="form-group">
                <label>Parent/Guardian Full Name</label>
                <input type="text" class="form-control" placeholder="e.g. Dr. John Doe" required>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="e.g. johndoe@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="e.g. +234 803 123 4567" required>
              </div>
              <div class="form-group">
                <label>Proposed Class for Child</label>
                <select class="form-control" required>
                  <option value="">-- Select Class --</option>
                  <option value="JSS 1">Junior Secondary School 1 (JSS1)</option>
                  <option value="JSS 2">Junior Secondary School 2 (JSS2)</option>
                  <option value="JSS 3">Junior Secondary School 3 (JSS3)</option>
                  <option value="SSS 1">Senior Secondary School 1 (SSS1)</option>
                  <option value="SSS 2">Senior Secondary School 2 (SSS2)</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 100%; border:none; cursor:pointer;">Submit Application Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section>
    <div class="container">
      <div class="section-title">
        <h5>Got Questions?</h5>
        <h2>Frequently Asked Questions</h2>
      </div>

      <div class="faq-accordion">
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <span>How do I purchase the admission form?</span>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Admission forms can be obtained by filling out our online Inquiry Form and completing the fee payment online, or by visiting the College Administration Block on campus during weekdays (8:00 AM - 4:00 PM).</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <span>What is the minimum age requirement for JSS 1?</span>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Students seeking admission into Junior Secondary School 1 (JSS1) must have completed their primary education and should have reached at least 10-11 years of age by September of the entry year.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <span>Does the school offer boarding facilities?</span>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Yes! Emmanuel Baptist College provides highly standardized, secure, and comfortable separate male and female boarding house facilities with 24/7 electricity, constant clean water, healthy meals, and diligent house wardens.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <span>When is the next entrance examination?</span>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>Our main entrance examinations are held in phases between March and July. Exact dates are communicated to prospective parents upon the purchase and submission of the admission application form.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'afooter.php'; ?>

  <!-- JS for FAQ accordion -->
  <script>
    function toggleFaq(element) {
      const parent = element.parentElement;
      const isActive = parent.classList.contains('active');
      
      // Close all FAQs
      const allItems = document.querySelectorAll('.faq-item');
      allItems.forEach(item => {
        item.classList.remove('active');
      });

      // Toggle this FAQ
      if (!isActive) {
        parent.classList.add('active');
      }
    }
  </script>
</body>

</html>

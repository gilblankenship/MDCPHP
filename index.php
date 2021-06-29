<!DOCTYPE html>
<html lang="en">

<?php include 'sectionhead.php';?>

<body>

  <?php include 'sectiontopbar.php';?>
  <?php include 'sectionheader.php';?>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1><span>Maryland Development Center</span></h1>
      <h2>A MedTech Startup Studio in Baltimore</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Learn More</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- 
      <?php // include 'sectionfeaturedservices.php';?> 
    -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>About</h2> -->
          <h3><span>About MDC</span></h3>
        </div>
          <div class="row">
          <p>The Maryland Development Center is a MedTech Startup 
            Studio that supports medical device inventors who want 
            to move their ideas beyond the lab into the marketplace. 
            Through design and engineering  we translate ideas into 
            working prototypes that can be demonstrated to potential 
            customers and investors. We use business development, funding 
            support, and regulatory management to build a company around 
            the go-to-market product and the inventor. The MDC studio 
            model is intensely interactive; we often start and always 
            actively participate in growing the company. The process 
            is enriched by the daily involvement of the doctors and 
            engineers who own the companies and, in most cases, invented 
            the devices which create value for society.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/conceive.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Innovation </h3>
            <p class="fst-italic">
              Entrepreneurs, engineers, and physicians working together to create life-changing medtech companies.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Speciality Areas</h5>
                  <p> Medical devices to advance healthcare<br>
                      Wearable technologies for health monitoring<br>
                      Robotics technologies for rehabilitation and at-home support</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Linking medicine, engineering, and entrepreneurship</h5>
                  <p>10 Founders – 6 surgeons, 2 neurologists, 2 engineer 
                    entrepreneurs, 9 are faculty at the University of Maryland. 
                    In addition, 4 Affiliates from UM School of Medicine, 3 from 
                    UMCP, and 9 from JHU bioengineering and School of Medicine.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>MDC Client Companies</h5>
                  <p>Based on inventions from the UM and JHU School of Medicine, 
                    the Veterans Administration, and MDC's staff.</p>
                </div>
              </li>
            </ul>
            <p>
             
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!--
    <?php // include 'sectionportfolio.php';?>
    -->
    <!-- ======= Team Section ======= -->
    <?php // include 'sectionteam.php';?>
        </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <?php include 'sectionfaq.php';?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Contact</h2> -->
          <h3><span>Contact Us</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Address:</h3>
              <p>300 West Pratt Street, Baltimore MD 21201-6512</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email:</h3>
              <p>info@mddevelopmentcenter.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Tel:</h3>
              <p>+1 443-707-6541</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.0683503431205!2d-76.62188868545684!3d39.2867004315089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8035fb78a225d%3A0x3881b2b374b2cf98!2s300%20W%20Pratt%20St%2C%20Baltimore%2C%20MD%2021201!5e0!3m2!1sen!2sus!4v1624190275620!5m2!1sen!2sus" 
                width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'sectionfooter.php';?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
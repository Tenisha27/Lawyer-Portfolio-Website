<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nithya Mendonca, Attorney at Law</title>
  <link rel="stylesheet" href="styles.css" />
 
</head>
<body>
  <?php include 'navbar.php'; ?>

  <section
    class="hero"
    style="background-image: url('hero-image.png')"
    
  >
    <div class="container">
      <h1>Welcome to the law office of Nithya Mendonca</h1>
      <p>Your Trusted Legal Partner</p>
      <a href="contact.php" class="cta-button">Contact Us</a>
    </div>
  </section>

  <section class="gallery">
    <div class="container">
      <h2>Gallery</h2>
      <div class="gallery-slideshow">
        <div class="gallery-item">
          <img src="office1.jpg" alt="Gallery Image 1" class="zoomable" />
        </div>
        <div class="gallery-item">
          <img src="office2.jpg" alt="Gallery Image 2"  class="zoomable"/>
        </div>
        <div class="gallery-item">
          <img src="office3.jpg" alt="Gallery Image 3" class="zoomable" />
        </div>
        <div class="gallery-item">
          <img src="office4.jpg" alt="Gallery Image 4" class="zoomable"/>
        </div>
        <div class="gallery-item">
          <img src="office5.jpg" alt="Gallery Image 5" class="zoomable" />
        </div>
      </div>
    </div>
  </section>

  <section class="about" >
    <div class="container">
      <h2>About Us</h2>
      <p>
        Nithya Mendonca, Attorney at Law is dedicated to providing exceptional legal
        services tailored to meet the needs of our clients. With extensive
        experience in various fields of law, we are committed to achieving the
        best outcomes for you.
      </p>
      <a href="about.php" class="cta-button">Learn More</a>
    </div>
  </section>

  <section class="services" >
    <div class="container">
      <h2>Our Services</h2>
      <div class="service-item">
        <h3>Legal Opinions</h3>
        <p>Expert legal opinions and advice tailored to your needs.</p>
      </div>
      <div class="service-item">
        <h3>Agreement Drafting</h3>
        <p>Drafting and reviewing agreements to protect your interests.</p>
      </div>
      <div class="service-item">
        <h3>Civil and Criminal Cases</h3>
        <p>Representation and defense in civil and criminal litigation.</p>
      </div>
      <div class="service-item">
        <h3>Divorce Cases</h3>
        <p>Support and guidance for divorce proceedings.</p>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <div class="testimonial-item">
            <p>"Nithya Mendonca helped me navigate a complex legal issue with ease and professionalism. Highly recommended!"</p>
            <p><strong>John Doe</strong>, Business Owner</p>
        </div>
        <div class="testimonial-item">
            <p>"I was very impressed by the thoroughness and dedication shown throughout my case. Thank you, Nithya!"</p>
            <p><strong>Jane Smith</strong>, Client</p>
        </div>
        <div class="testimonial-item">
            <p>"Exceptional legal advice and service. Nithya Mendonca is the attorney to trust!"</p>
            <p><strong>Michael Johnson</strong>, Entrepreneur</p>
        </div>
        <div class="testimonial-item">
            <p>"I felt supported and well-informed during every step of my case. Nithya is an outstanding lawyer!"</p>
            <p><strong>Sarah Lee</strong>, Individual Client</p>
        </div>
        <!-- Add more testimonials as needed -->
    </div>
</section>


  <section class="cases">
    <div class="container">
      <h2>Case Filings</h2>
      <div class="cases-slideshow">
        <div class="case-item" >
          <img src="marriage registration.jpg" alt="Case 1" class="zoomable" />
          <h3>Marriage Registration</h3>
        </div>
        <div class="case-item" >
          <img src="affidavit.jpg" alt="Case 2" class="zoomable"/>
          <h3>Affidavit</h3>
        </div>
        <div class="case-item" >
          <img src="divorce.jpg" alt="Case 3" class="zoomable" />
          <h3>Divorce</h3>
        </div>
        <div class="case-item" >
          <img src="e stamp.jpg" alt="Case 4" class="zoomable"/>
          <h3>E Stamp</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <h2>Our Location</h2>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.948405569507!2d75.12333431536115!3d13.137457190737224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA4JzE0LjkiTiA3NcKwMDcnMzMuMyJF!5e0!3m2!1sen!2sin!4v1594210566395!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <p>
        If you need legal assistance, don't hesitate to get in touch with us.
      </p>
      <p>
        Details of lawyer: Nithya Mendonca B.A. L.L.B. Advocate<br />
        Address: Near H.P. Petrol Pump, Hosmar - 574107, Karkala Tq., Udupi
        Dist<br />
        Email: nithyamendonca.nmo2@gmail.com
      </p>
      <a href="contact.php" class="cta-button">Contact</a>
    </div>
  </section>

 
  <script>
   

    // Gallery Slideshow
    let galleryIndex = 0;
    const galleryItems = document.querySelectorAll(".gallery-item");
    function showGallerySlide() {
      galleryItems.forEach((item, index) => {
        item.style.display = index === galleryIndex ? "block" : "none";
      });
      galleryIndex = (galleryIndex + 1) % galleryItems.length;
    }
    showGallerySlide();
    setInterval(showGallerySlide, 3000);

    // Case Slideshow
    let caseIndex = 0;
    const caseItems = document.querySelectorAll(".case-item");
    function showCaseSlide() {
      caseItems.forEach((item, index) => {
        item.style.display = index === caseIndex ? "block" : "none";
      });
      caseIndex = (caseIndex + 1) % caseItems.length;
    }
    showCaseSlide();
    setInterval(showCaseSlide, 3000);

    // JavaScript to handle image click and zoom-in/zoom-out effect
document.querySelectorAll('.zoomable').forEach(image => {
    image.addEventListener('click', () => {
        if (image.classList.contains('zoom-in')) {
            image.classList.remove('zoom-in');
            image.classList.add('zoom-out');
        } else {
            image.classList.remove('zoom-out');
            image.classList.add('zoom-in');
        }
    });
});

  </script>
</body>
</html>

<section>
    <div><?= $this->include('layout/header') ?></div>
</section>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center justify-content-center text-white">
    <div class="bg-hero position-absolute w-100 h-100"></div>
    <div class="bg-hero-back position-absolute w-100 h-100"></div>
    <div class="bg-hero-front position-absolute w-100 h-100"></div>
    <div class="container-fluid">
        <div class="row align-items-center">
        <!-- Gambar di kiri -->
        <div class="col-md-6 mt-5 mb-md-0">
            <img src="<?= base_url('assets/img/hero-group.png') ?>" alt="hero-img" class="img-hero">
        </div>

        <!-- Teks di kanan -->
        <div class="col-md-6 offset-md-3 mt-5 text-md-start text-center">
            <img src="<?= base_url('assets/img/eagle-logo.png') ?>" alt="eagle-logo" class="eagle-logo">
            <h2 class="fw-bold slogan">FEEL SAFE, FEEL FREE</h2>
            <p class="lead">Live, Work, and Enjoy Life without the constant worry of what could go wrong.</p>
            <div class="btn-style-hero mt-5">
                <button class="btn btn-outline-danger btn-style-hero" onclick="location.href='<?= base_url('/our_team') ?>'">Our Team</button>
                <button class="btn btn btn-danger contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'">Contact Us</button>
            </div>
        </div>
        </div>
  </div>
    
</section>

<!-- About us Section -->
<section class="about-us-section py-3 p-custom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <span class="txt_about">About Us</span>
        <h2 class="fw-bold">Eagle Protect Always Provides The Best Services In Security</h2>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-end">
         <p class="mt-auto"><b>EAGLE PROTECT</b> is a leading private security and protection company with global expertise, committed to delivering safety, reliability, and unmatched professionalism.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 mb-5">
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <div class="box box-light-1 p-3">
          <img src="<?= base_url('assets/img/corp.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 1">
          <p class="fw-bold p-5">CORPORATE & PRIVATE SECURITY</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box box-light-2 p-3">
          <img src="<?= base_url('assets/img/cyber.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 2">
          <p class="fw-bold p-5">CYBERSECURITY SYSTEM</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box box-light-1 p-3">
          <img src="<?= base_url('assets/img/tech.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 3">
          <p class="fw-bold p-5">TECHNOLOGY INTEGRATION</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="box box-light-2 p-3">
          <img src="<?= base_url('assets/img/personel.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 4">
          <p class="fw-bold p-5">PERSONAL PROTECTION</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5">
    <div class="container-fluid text-center">
        <h2 class="fw-bold mb-4">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-box p-4 border">
                    <p>"Eagle Protect has been a game changer for our security needs. Their monitoring service gives us peace of mind."</p>
                    <small>- John Doe, CEO of Company X</small>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-box p-4 border">
                    <p>"The consulting services they provided helped us improve our security systems and respond better to emergencies."</p>
                    <small>- Jane Smith, Director of Operations</small>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-box p-4 border">
                    <p>"Their team is always professional and quick to respond. Highly recommend their services!"</p>
                    <small>- Mark Johnson, Business Owner</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section text-center py-5">
    <div class="quote-bg"></div>
    <div class="quote-front-bg"></div>
    <div class="container-fluid position-relative text-white">
        <div class="icon-eagle mb-5"></div>
        <h2 class="fw-bold mb-3">" Eagle Protect is committed to delivering services that adhere to the highest market standards and fulfilling all promises made to our clients. "</h2>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container-fluid text-center">
        <h2 class="fw-bold mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">Security Consulting</h4>
                    <p>Our expert consultants provide comprehensive assessments and strategies to enhance your security systems.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">24/7 Monitoring</h4>
                    <p>We offer around-the-clock monitoring to ensure the safety and security of your property at all times.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">Emergency Response</h4>
                    <p>In case of an emergency, our team is ready to respond quickly and efficiently to handle any situation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container-fluid text-center">
        <h2 class="fw-bold mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">Security Consulting</h4>
                    <p>Our expert consultants provide comprehensive assessments and strategies to enhance your security systems.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">24/7 Monitoring</h4>
                    <p>We offer around-the-clock monitoring to ensure the safety and security of your property at all times.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box p-4 border">
                    <h4 class="fw-bold mb-3">Emergency Response</h4>
                    <p>In case of an emergency, our team is ready to respond quickly and efficiently to handle any situation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>
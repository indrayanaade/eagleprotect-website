<link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
<section>
    <div><?= $this->include('layout/header') ?></div>
</section>

<div class="fade-up">
  
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
                  <button class="btn btn-outline-danger btn-xl btn-style-hero" onclick="location.href='<?= base_url('/our_team') ?>'">Our Team</button>
                  <button class="btn btn btn-danger btn-xl contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'">Contact Us</button>
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
  
    <div class="container-fluid py-5">
          <div class="row">
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-6 mb-3">
                          <img src="<?= base_url('assets/img/whos-1.png') ?>" class="img-fluid" alt="First Image">
                      </div>
                      <div class="col-6 mb-3">
                          <img src="<?= base_url('assets/img/whos-2.png') ?>" class="img-fluid mt-5" alt="Second Image">
                      </div>
                  </div>
              </div>
              <div class="col-md-6 d-flex align-items-start pl-3">
                  <div>
                      <span class="txt_about">Who We Are</span>
                      <h2 class="fw-bold mt-1 mb-5">Eagle Protect Works with Professionals to Provide a Sense of Security and Trust</h2>
                      <ul class="list-unstyled">
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><b>24/7 Operational Excellence:</b> Our team is available around the clock, offering rapid response services supported by advanced technology and trained professionals.</p></li>
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><b>Advanced Technology Integration:</b> We utilize body cameras, drones, and modern supervision systems to enhance monitoring, ensure accountability, and provide reliable evidence when required.</p></li>
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><b>Commitment to Trust and Safety:</b> We focus on building lasting relationships by delivering transparent, effective, and client-focused security solutions that prioritize safety and peace of mind.</p></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="container-fluid py-5">
          <div class="row text-center">
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="100">0</span>+</h3>
                      <p class="mb-0">Client is Satisfied</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="100">0</span>+</h3>
                      <p class="mb-0">Certified Active Member</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="5">0</span> Years</h3>
                      <p class="mb-0">Company is already operating</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="5">0</span>+</h3>
                      <p class="mb-0">Locations in Bali Covered</p>
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
  
  <section class="map-coverage-section position-relative">
    <div class="container-fluid p-50">
    <span class="txt_about">Our Coverage Area</span>
    <h2 class="fw-bold mt-2 mb-5">We Currently Have Many Clients Spread Across Several Cities in Bali.</h2>
    <div class="map-wrapper position-relative p-50">
      <img src="<?= base_url('assets/img/bali-map.svg') ?>" alt="Bali Map" class="img-fluid w-100">
  
      <div class="location-point" style="top: 57%; left: 45%;">
        <div class="custom-tooltip">
          <div class="tooltip-icon-title">
            <img src="<?= base_url('assets/img/officer.png') ?>" alt="Icon" />
            <h5>Pererenan Zone</h5>
          </div>
          <p class="tooltip-desc">
            In Perenan we have many clients who already trust our services.
          </p>
        </div>
      </div>
      <div class="location-point" style="top: 62%; left: 49%;">
        <div class="custom-tooltip">
            <div class="tooltip-icon-title">
              <img src="<?= base_url('assets/img/officer.png') ?>" alt="Icon" />
              <h5>Canggu Zone</h5>
            </div>
            <p class="tooltip-desc">
            We have many partners in the Canggu area.
            </p>
        </div>
      </div>
      <div class="location-point" style="top: 68%; left: 52%;">
        <div class="custom-tooltip">
          <div class="tooltip-icon-title">
            <img src="<?= base_url('assets/img/officer.png') ?>" alt="Icon" />
            <h5>Berawa Zone</h5>
          </div>
          <p class="tooltip-desc">
            Berawa is also our coverage area.
          </p>
        </div>
      </div>
      <div class="location-point" style="top: 90%; left: 53%;">
        <div class="custom-tooltip">
          <div class="tooltip-icon-title">
            <img src="<?= base_url('assets/img/officer.png') ?>" alt="Icon" />
            <h5>Pecatu Zone</h5>
          </div>
          <p class="tooltip-desc">
            We Eagle Protect have covered the Uluwatu area, we help work together with local and international parties.
          </p>
        </div>
      </div>
    </div>
  
    </div>
  </section>
  
  <section class="service-list-section py-5">
    <div class="container-fluid p-50 text-white">
      <span class="txt_about">Services</span>
      <h2 class="fw-bold mt-2 mb-5">Eagle Protect Provides the Best Service and What Clients Need Most</h2>
  
      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">01</div>
        <div class="col-md-5 fs-3">The Services We Offer are Varied</div>
        <div class="col-md-5 font-color">We offer our clients various types of subscription packages ranging from basic to premium, as well as additional options such as SOS buttons, advanced supervision equipment, and online support applications.</div>
      </div>
  
      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">02</div>
        <div class="col-md-5 fs-3">Our Customer Service is Always Ready</div>
        <div class="col-md-5 font-color">All packages ensure a 24/7 hotline in both Indonesian and English, along with guaranteed response times.</div>
      </div>
  
      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">03</div>
        <div class="col-md-5 fs-3">Our Technicians are Full of Dedication</div>
        <div class="col-md-5 font-color">24/7 technicians are available for supervision equipment maintenance.</div>
      </div>
  
      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">04</div>
        <div class="col-md-5 fs-3">We Can Be Relied On Even In An Emergency</div>
        <div class="col-md-5 font-color">We coordinate with authorities and emergency responders in emergency situations.</div>
      </div>
  
      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">05</div>
        <div class="col-md-5 fs-3">All Services Provided Can be Adjusted</div>
        <div class="col-md-5 font-color">Additional services available include security officers, translation, legal assistance, ambulance services, first aid, and other services that work in cooperation with the authorities.</div>
      </div>
    </div>
  </section>
  
  <section class="our-vision-section pt-3 position-relative">
    <div class="container-fluid position-relative">
    <div class="overlay position-absolute w-100 h-100"></div>
      <div class="row align-items-center">
        <!-- Kolom Kiri: Gambar -->
        <div class="col-md-6 text-center mb-4 mb-md-0">
          <img src="<?= base_url('assets/img/bg-hero-2.png') ?>" alt="Our Vision" class="img-fluid justify-content-end">
        </div>
  
        <!-- Kolom Kanan: Deskripsi -->
        <div class="col-md-6">
          <span class="txt_about">We are Confident</span>
          <h2 class="txt-lh-52 lh-base text-white mb-5">At Eagle Protect, We Stand Apart Through Our Unparalleled Blend of Expertise</h2>
          <p class="lead text-white">Our elite team—comprising security experts, former law enforcement officers, investigative professionals, legal scholars, and military veterans—works to secure and develop smart city ecosystems. Partnering with police forces, government entities, and top healthcare institutions like Kasih Ibu and Siloam Hospitals, we create a cohesive safety network. As the only all-in-one security provider in Bali, we collaborate with Visvasitha Legal Team and Polres Badung to offer seamless legal and safety support, ensuring top-tier protection and peace of mind.</p>
          <button class="btn btn-outline-light btn-xl mt-5">Contact Us</button>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="running-text">
    <div class="scrolling-wrapper">
      <div class="scrolling-text">
        <span>Feel Safe <img src="<?= base_url('assets/img/dot.png') ?>"> Feel Free <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
        <span>Feel Safe <img src="<?= base_url('assets/img/dot.png') ?>"> Feel Free <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
      </div>
    </div>
  </section>
</div>


<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>

<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery-3.7.1.min.js') ?>"></script>
<!-- Script Animasi -->
<script>
  $(document).ready(function () {
    $('.counter').each(function () {
      var $this = $(this),
          countTo = $this.attr('data-target');

      $({ countNum: 0 }).animate(
        { countNum: countTo },
        {
          duration: 2000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          }
        }
      );
    });

    $(window).on('scroll', function () {
      $('.fade-up').each(function () {
        var top_of_element = $(this).offset().top;
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

        if (bottom_of_screen > top_of_element) {
          $(this).addClass('visible');
        }
      });
    });
  });
</script>
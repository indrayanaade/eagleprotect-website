<link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<div class="only-desktop">
  <section class="hero-section d-flex align-items-center justify-content-center text-white">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar">
      <?= $this->include('layout/header') ?>
    </nav>
      <div class="bg-hero"></div>
      <div class="bg-hero-back"></div>
      <div class="bg-hero-front"></div>
      <div class="container-fluid position-relative">
        <div class="row align-items-center">          
          <div class="col-md-6 mt-5 mb-md-0 order-md-first">
              <img src="<?= base_url('assets/img/hero-group.png') ?>" alt="hero-img" class="img-hero">
          </div>

          <div class="col-md-6 mt-5 text-md-start text-center order-md-last" style="margin-top: 180px !important;">
              <img src="<?= base_url('assets/img/eagle-logo.png') ?>" alt="eagle-logo" class="eagle-logo">
              <h2 class="slogan position-relative">FEEL SAFE, FEEL FREE</h2>
              <p class="lato-regular position-relative">Live, Work, and Enjoy Life without the constant worry of what could go wrong.</p>
              <div class="btn-style-hero mt-5">
                  <button class="btn btn-outline-danger btn-xl-outline btn-style-hero" onclick="location.href='<?= base_url('/our_team') ?>'">OUR TEAM</button>
                  <button class="btn btn btn-danger btn-xl contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'">CONTACT US</button>
              </div>
          </div>
        </div>
    </div>
  </section>

  <section class="about-us-section py-3 p-custom-about-us" data-aos="fade-up">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <span class="txt_about">About Us</span>
          <h2 class="roboto-h2">Eagle Protect Always Provides The Best Services In Security</h2>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-end">
            <p class="mt-auto"><b>EAGLE PROTECT</b> <span class="roboto-p">is a leading private security and protection company with global expertise, committed to delivering safety, reliability, and unmatched professionalism.</span></p>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
      <div class="row text-center">
        <div class="col-md-3 mb-4">
          <div class="box box-light-1 mb-4">
            <img src="<?= base_url('assets/img/corp.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 1">
            <p class="fw-bold p-5 roboto-h4">CORPORATE & PRIVATE SECURITY</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="box box-light-2 mb-4">
            <img src="<?= base_url('assets/img/cyber.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 2">
            <p class="fw-bold p-5 roboto-h4">CYBERSECURITY SYSTEM</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="box box-light-1 mb-4">
            <img src="<?= base_url('assets/img/tech.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 3">
            <p class="fw-bold p-5 roboto-h4">TECHNOLOGY INTEGRATION</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="box box-light-2 mb-4">
            <img src="<?= base_url('assets/img/personel.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 4">
            <p class="fw-bold p-5 roboto-h4">PERSONAL PROTECTION</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5">
          <div class="row mt-5 mb-5">
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
              <div class="col-md-6 d-flex align-items-start pl-important">
                  <div>
                      <span class="txt_about">Who We Are</span>
                      <h2 class="roboto-h2 mt-1 mb-5">Eagle Protect Works with Professionals to Provide a Sense of Security and Trust</h2>
                      <ul class="list-unstyled">
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><span class="lato-bold">24/7 Operational Excellence:</span> <span class="lato-light">Our team is available around the clock, offering rapid response services supported by advanced technology and trained professionals.</span></p></li>
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><span class="lato-bold">Advanced Technology Integration:</span> <span class="lato-light">We utilize body cameras, drones, and modern supervision systems to enhance monitoring, ensure accountability, and provide reliable evidence when required.</span></p></li>
                          <li class="d-flex align-items-center mb-4"><i class="fas fa-check-circle custom-icon me-3"></i><p class="mt-0"><span class="lato-bold">Commitment to Trust and Safety:</span> <span class="lato-light">We focus on building lasting relationships by delivering transparent, effective, and client-focused security solutions that prioritize safety and peace of mind.</span></p></li>
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
                      <p class="mb-0 lato-bold">Client is Satisfied</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="100">0</span>+</h3>
                      <p class="mb-0 lato-bold">Certified Active Member</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="5">0</span> Years</h3>
                      <p class="mb-0 lato-bold">Company is already operating</p>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="stat-card p-4">
                      <h3><span class="counter" data-target="5">0</span>+</h3>
                      <p class="mb-0 lato-bold">Locations in Bali Covered</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="cta-section text-center py-5" data-aos="fade-up">
      <div class="quote-bg"></div>
      <div class="quote-front-bg"></div>
      <div class="container-fluid position-relative text-white">
          <div class="icon-eagle mb-5"></div>
          <h2 class="fw-bold mb-3 cta-txt">" Eagle Protect is committed to delivering services that adhere to the highest market standards and fulfilling all promises made to our clients. "</h2>
      </div>
  </section>

  <section class="map-coverage-section position-relative" sdata-aos="fade-up">
    <div class="container-fluid p-custom-section-services">
    <span class="txt_about">Our Coverage Area</span>
    <h2 class="roboto-h2 mt-2 mb-5">We Currently Have Many Clients Spread Across Several Cities in Bali.</h2>
      <div class="map-wrapper position-relative p-50">
        <img src="<?= base_url('assets/img/bali-map.svg') ?>" alt="Bali Map" class="img-fluid w-100">
        <div class="location-point" style="top: 57%; left: 45%;">
          <div class="custom-tooltip">
            <div class="tooltip-icon-title">
              <img src="<?= base_url('assets/img/officer.png') ?>" alt="Icon" />
              <h5 class="roboto-h5">Pererenan Zone</h5>
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
                <h5 class="roboto-h5">Canggu Zone</h5>
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
              <h5 class="roboto-h5">Berawa Zone</h5>
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
              <h5 class="roboto-h5">Pecatu Zone</h5>
            </div>
            <p class="tooltip-desc">
              We Eagle Protect have covered the Uluwatu area, we help work together with local and international parties.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-list-section py-5" data-aos="fade-up">
    <div class="container-fluid p-custom-section-services text-white">
      <span class="txt_about">Services</span>
      <h2 class="roboto-h2-mobile mt-2 mb-5">Eagle Protect Provides the Best Service and What Clients Need Most</h2>

      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">01</div>
        <div class="col-md-5 fs-3 roboto-h5">The Services We Offer are Varied</div>
        <div class="col-md-5 font-color lato-regular">We offer our clients various types of subscription packages ranging from basic to premium, as well as additional options such as SOS buttons, advanced supervision equipment, and online support applications.</div>
      </div>

      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">02</div>
        <div class="col-md-5 fs-3 roboto-h5">Our Customer Service is Always Ready</div>
        <div class="col-md-5 font-color lato-regular">All packages ensure a 24/7 hotline in both Indonesian and English, along with guaranteed response times.</div>
      </div>

      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">03</div>
        <div class="col-md-5 fs-3 roboto-h5">Our Technicians are Full of Dedication</div>
        <div class="col-md-5 font-color lato-regular">24/7 technicians are available for supervision equipment maintenance.</div>
      </div>

      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">04</div>
        <div class="col-md-5 fs-3 roboto-h5">We Can Be Relied On Even In An Emergency</div>
        <div class="col-md-5 font-color lato-regular">We coordinate with authorities and emergency responders in emergency situations.</div>
      </div>

      <div class="row border-bottom py-3 align-items-center">
        <div class="col-md-2 font-color-number">05</div>
        <div class="col-md-5 fs-3 roboto-h5">All Services Provided Can be Adjusted</div>
        <div class="col-md-5 font-color lato-regular">Additional services available include security officers, translation, legal assistance, ambulance services, first aid, and other services that work in cooperation with the authorities.</div>
      </div>
    </div>
  </section>

  <section class="our-vision-section pt-3 position-relative" data-aos="fade-up">
    <div class="container-fluid position-relative">
    <div class="overlay position-absolute w-100 h-100"></div>
      <div class="row align-items-center">
        <div class="col-md-6 text-center mb-4 mb-md-0">
          <img src="<?= base_url('assets/img/bg-hero-2.png') ?>" alt="Our Vision" class="img-fluid justify-content-end">
        </div>

        <div class="col-md-6">
          <span class="txt_about">We are Confident</span>
          <h2 class="txt-lh-52 text-white mb-5">At Eagle Protect, We Stand Apart Through Our Unparalleled Blend of Expertise</h2>
          <p class="text-white txt-desc w-90">Our elite team—comprising security experts, former law enforcement officers, investigative professionals, legal scholars, and military veterans—works to secure and develop smart city ecosystems. Partnering with police forces, government entities, and top healthcare institutions like Kasih Ibu and Siloam Hospitals, we create a cohesive safety network. As the only all-in-one security provider in Bali, we collaborate with Visvasitha Legal Team and Polres Badung to offer seamless legal and safety support, ensuring top-tier protection and peace of mind.</p>
          <button class="btn btn-outline-light btn-xl mt-5">Contact Us</button>
        </div>
      </div>
    </div>
  </section>

  <section class="running-text" data-aos="fade-up">
    <div class="scrolling-wrapper">
      <div class="scrolling-text">
        <span class="gradient-text">Feel Safe &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp Feel Free &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
        <span class="gradient-text">Feel Safe &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp Feel Free &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
      </div>
    </div>
  </section>

  <section>
      <div><?= $this->include('layout/footer') ?></div>
  </section>
</div>

<div class="only-mobile">
  <section class="hero-section align-items-center justify-content-center">
    <nav id="navbar-mobile" class="navbar navbar-expand-lg navbar-dark custom-navbar-mobile">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>"><img id="navbar-logo-mobile" src="<?= base_url('assets/img/eagle-logo-img-black.svg') ?>" alt="eagle-logo-nav" class="eagle-logo-nav"></a>
        <button class="navbar-toggler-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon-mobile"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar" style="stroke-width: 2px; stroke: #000;">
          <ul class="navbar-nav ms-auto text-end">
            <li class="nav-item">
              <a class="nav-link hover-overlay" href="<?= base_url('about_us') ?>"><span class="txt_nav">ABOUT US</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link hover-overlay" href="<?= base_url('pricelist') ?>"><span class="txt_nav">PRICELIST</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-overlay" href="<?= base_url('services') ?>"><span class="txt_nav">SERVICES</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-overlay" href="<?= base_url('projects') ?>"><span class="txt_nav">PROJECTS</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-overlay" href="<?= base_url('news_room') ?>"><span class="txt_nav">NEWS ROOM</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-overlay" href="<?= base_url('careers') ?>"><span class="txt_nav">CAREERS</span></a>
            </li>
            <li class="nav-item">
                <button class="btn contact-btn" onclick="location.href='<?= base_url('contact_us') ?>'"><span class="txt_nav text-white">CONTACT US</span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <div class="bg-hero-mobile"></div>
      <div class="bg-hero-back-mobile"></div>
      <div class="bg-hero-front-mobile"></div>
      <div class="container-fluid mt-4">
        <div class="row align-items-center">
          <div class="col-md-6 p-4 text-center">
              <img src="<?= base_url('assets/img/eagle-logo.png') ?>" alt="eagle-logo-mobile" class="eagle-logo-mobile">
              <h2 class="slogan-mobile position-relative">FEEL SAFE, FEEL FREE</h2>
              <p class="inter-mobile position-relative text-white">Live, Work, and Enjoy Life without the constant worry of what could go wrong.</p>
              <div class="btn-style-hero align-items-center justify-content-center mt-2">
                  <button class="btn btn-outline-danger custom-button-mobile" onclick="location.href='<?= base_url('/our_team') ?>'">OUR TEAM</button>
                  <button class="btn btn btn-danger custom-button-mobile" onclick="location.href='<?= base_url('/contact_us') ?>'">CONTACT US</button>
              </div>
          </div>
          <div class="col-md-6 mb-md-0">
              <img src="<?= base_url('assets/img/hero-mobile.png') ?>" alt="hero-img" class="img-hero-mobile">
          </div>
      </div>
    </div>

  </section>

  <section class="about-us-section py-3 p-custom-mobile" data-aos="fade-up">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <span class="txt_about">About Us</span>
          <h2 class="roboto-h2-mobile">Eagle Protect Always Provides The Best Services In Security</h2>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-end mt-3">
            <p class="mt-auto"><span class="roboto-p-mobile justify-text"><strong>EAGLE PROTECT</strong> is a leading private security and protection company with global expertise, committed to delivering safety, reliability, and unmatched professionalism.</span></p>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
      <div class="row text-center">
        <div class="col-6">
          <div class="box box-light-1 p-4 h-100">
            <img src="<?= base_url('assets/img/corp.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 1">
            <p class="fw-bold mt-3 roboto-h4-mobile">CORPORATE & PRIVATE SECURITY</p>
          </div>
        </div>
        <div class="col-6">
          <div class="box box-light-2 p-4 h-100">
            <img src="<?= base_url('assets/img/cyber.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 2">
            <p class="fw-bold mt-3 roboto-h4-mobile">CYBERSECURITY SYSTEM</p>
          </div>
        </div>
        <div class="col-6">
          <div class="box box-light-1 p-4 h-100">
            <img src="<?= base_url('assets/img/tech.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 3">
            <p class="fw-bold mt-3 roboto-h4-mobile">TECHNOLOGY INTEGRATION</p>
          </div>
        </div>
        <div class="col-6">
          <div class="box box-light-2 p-4 h-100">
            <img src="<?= base_url('assets/img/personel.png') ?>" class="img-fluid d-block mx-auto box-img" alt="Icon 4">
            <p class="fw-bold mt-3 roboto-h4-mobile">PERSONAL PROTECTION</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-custom-mobile-section">
      <span class="txt_about-mobile">Who We Are</span>
      <h2 class="roboto-h2-mobile mb-4">Eagle Protect Works with Professionals to Provide a Sense of Security and Trust</h2>
      <div class="row mt-2 mb-5">
        <div class="col-md-6 mb-4">
              <div class="row">
                  <div class="col-6 mb-3">
                      <img src="<?= base_url('assets/img/whos-1.png') ?>" class="img-fluid pe-2" alt="First Image">
                  </div>
                  <div class="col-6 mb-3">
                      <img src="<?= base_url('assets/img/whos-2.png') ?>" class="img-fluid ps-2" alt="Second Image">
                  </div>
              </div>
          </div>
          <div class="col-md-6 d-flex align-items-start pl-3">
              <div>
                  <ul class="list-unstyled">
                      <li class="d-flex align-items-center"><i class="fas fa-check-circle custom-icon me-4"></i><p class="mt-0"><span class="lato-light-mobile justify-text"><strong>24/7 Operational Excellence: </strong>Our team is available around the clock, offering rapid response services supported by advanced technology and trained professionals.</span></p></li>
                      <li class="d-flex align-items-center"><i class="fas fa-check-circle custom-icon me-4"></i><p class="mt-0"><span class="lato-light-mobile justify-text"><strong>Advanced Technology Integration: </strong>We utilize body cameras, drones, and modern supervision systems to enhance monitoring, ensure accountability, and provide reliable evidence when required.</span></p></li>
                      <li class="d-flex align-items-center"><i class="fas fa-check-circle custom-icon me-4"></i><p class="mt-0"><span class="lato-light-mobile justify-text"><strong>Commitment to Trust and Safety: </strong>We focus on building lasting relationships by delivering transparent, effective, and client-focused security solutions that prioritize safety and peace of mind.</span></p></li>
                  </ul>
              </div>
          </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row text-center custom-stat-row">
        <div class="col-md-6 col-6">
          <div class="stat-card-mobile p-4">
            <h3><span class="counter" data-target="100">0</span>+</h3>
            <p class="mb-0 lato-bold">Client is Satisfied</p>
          </div>
        </div>
        <div class="col-md-6 col-6">
          <div class="stat-card-mobile p-4">
            <h3><span class="counter" data-target="100">0</span>+</h3>
            <p class="mb-0 lato-bold">Certified Active Member</p>
          </div>
        </div>
        <div class="col-md-6 col-6">
          <div class="stat-card-mobile p-4">
            <h3><span class="counter" data-target="5">0</span> Years</h3>
            <p class="mb-0 lato-bold">Company is already operating</p>
          </div>
        </div>
        <div class="col-md-6 col-6">
          <div class="stat-card-mobile p-4">
            <h3><span class="counter" data-target="5">0</span>+</h3>
            <p class="mb-0 lato-bold">Locations in Bali Covered</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="cta-section-mobile text-center py-5" data-aos="fade-up">
      <div class="quote-bg"></div>
      <div class="quote-front-bg"></div>
      <div class="container-fluid position-relative p-custom-mobile-section-cta text-white">
          <div class="icon-eagle mb-5"></div>
          <h2 class="mb-3 cta-txt-mobile">" Eagle Protect is committed to delivering services that adhere to the highest market standards and fulfilling all promises made to our clients. "</h2>
      </div>
  </section>

  <section class="map-coverage-section position-relative" data-aos="fade-up">
    <div class="container-fluid p-custom-mobile-section-cta">
    <span class="txt_about">Our Coverage Area</span>
    <h2 class="roboto-h2-mobile mt-2 mb-5">We Currently Have Many Clients Spread Across Several Cities in Bali.</h2>
      <div class="map-wrapper">
        <img src="<?= base_url('assets/img/bali-map-mobile.png') ?>" alt="Bali Map" class="img-fluid">
        <div class="container-fluid mt-5 mb-5">
          <div class="row text-start justify-content-center">
            
            <div class="col-6 mb-3 px-2">
              <div class="location-tooltip-mobile h-100 p-2">
                <div class="location-header-mobile d-flex align-items-center mb-2">
                  <div class="location-number-mobile me-2">1</div>
                  <img src="/assets/img/officer.png" alt="Icon" class="location-icon-mobile me-2">
                  <span class="location-title-mobile fw-bold">Pererenan Zone</span>
                </div>
                <p class="location-desc-mobile mb-0">
                  In Pererenan we have many clients who already trust our services.
                </p>
              </div>
            </div>

            <div class="col-6 mb-3 px-2">
              <div class="location-tooltip-mobile h-100 p-2">
                <div class="location-header-mobile d-flex align-items-center mb-2">
                  <div class="location-number-mobile me-2">2</div>
                  <img src="/assets/img/officer.png" alt="Icon" class="location-icon-mobile me-2">
                  <span class="location-title-mobile fw-bold">Canggu Zone</span>
                </div>
                <p class="location-desc-mobile mb-0">
                  We have many partners in the Canggu area.
                </p>
              </div>
            </div>

            <div class="col-6 mb-3 px-2">
              <div class="location-tooltip-mobile h-100 p-2">
                <div class="location-header-mobile d-flex align-items-center mb-2">
                  <div class="location-number-mobile me-2">3</div>
                  <img src="/assets/img/officer.png" alt="Icon" class="location-icon-mobile me-2">
                  <span class="location-title-mobile fw-bold">Berawa Zone</span>
                </div>
                <p class="location-desc-mobile mb-0">
                  Berawa is also our coverage area.
                </p>
              </div>
            </div>

            <div class="col-6 mb-3 px-2">
              <div class="location-tooltip-mobile h-100 p-2">
                <div class="location-header-mobile d-flex align-items-center mb-2">
                  <div class="location-number-mobile me-2">4</div>
                  <img src="/assets/img/officer.png" alt="Icon" class="location-icon-mobile me-2">
                  <span class="location-title-mobile fw-bold">Pecatu Zone</span>
                </div>
                <p class="location-desc-mobile mb-0">
                  We Eagle Protect have covered the Uluwatu area, we help work together with local and international parties.
                </p>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="service-list-section py-5" data-aos="fade-up">
    <div class="container-fluid text-white">
      <div class="p-custom-mobile-section-service-head">
        <span class="txt_about">Services</span>
        <h2 class="roboto-h2-mobile mt-2 mb-5">Eagle Protect Provides the Best Service and What Clients Need Most</h2>
      </div>
      
      <!-- Item 1 -->
      <div class="col-md-6 mb-4">
        <div class="row border-bottom py-2 align-items-center">
          <div class="p-custom-mobile-section-service">
            <div class="col-2 font-color-number-mobile me-3">01</div>
            <div class="col-10">
              <div class="roboto-h5-mobile mb-1">The Services We Offer are Varied</div>
              <div class="font-color lato-regular-mobile me-3">
                We offer our clients various types of subscription packages ranging from basic to premium, as well as additional options such as SOS buttons, advanced supervision equipment, and online support applications.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-md-6 mb-4">
        <div class="row border-bottom py-2 align-items-center">
          <div class="p-custom-mobile-section-service">
            <div class="col-2 font-color-number-mobile me-3">02</div>
            <div class="col-10">
              <div class="roboto-h5-mobile mb-2">Our Customer Service is Always Ready</div>
              <div class="font-color lato-regular-mobile me-3">
                All packages ensure a 24/7 hotline in both Indonesian and English, along with guaranteed response times.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-md-6 mb-4">
        <div class="row border-bottom py-2 align-items-center">
          <div class="p-custom-mobile-section-service">
            <div class="col-2 font-color-number-mobile me-3">03</div>
            <div class="col-10">
              <div class="roboto-h5-mobile mb-2">Our Technicians are Full of Dedication</div>
              <div class="font-color lato-regular-mobile me-3">
                24/7 technicians are available for supervision equipment maintenance.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-md-6 mb-4">
        <div class="row border-bottom py-2 align-items-center">
          <div class="p-custom-mobile-section-service">
            <div class="col-2 font-color-number-mobile me-3">04</div>
            <div class="col-10">
              <div class="roboto-h5-mobile mb-2">We Can Be Relied On Even In An Emergency</div>
              <div class="font-color lato-regular-mobile me-3">
                We coordinate with authorities and emergency responders in emergency situations.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-md-6 mb-4">
        <div class="row border-bottom py-2 align-items-center">
          <div class="p-custom-mobile-section-service">
            <div class="col-2 font-color-number-mobile me-3">05</div>
            <div class="col-10">
              <div class="roboto-h5-mobile mb-2">All Services Provided Can be Adjusted</div>
              <div class="font-color lato-regular-mobile me-3">
                Additional services available include security officers, translation, legal assistance, ambulance services, first aid, and other services that work in cooperation with the authorities.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-vision-section-mobile" data-aos="fade-up">
    <div class="container-fluid p-custom-mobile-our-vision">
      <div class="row align-items-center">
        <div class="col-md-6">
          <span class="txt_about">We are Confident</span>
          <h2 class="txt-lh-52-mobile text-white mb-5">At Eagle Protect, We Stand Apart Through Our Unparalleled Blend of Expertise</h2>
          <p class="text-white txt-desc-mobile">Our elite team—comprising security experts, former law enforcement officers, investigative professionals, legal scholars, and military veterans—works to secure and develop smart city ecosystems. Partnering with police forces, government entities, and top healthcare institutions like Kasih Ibu and Siloam Hospitals, we create a cohesive safety network. As the only all-in-one security provider in Bali, we collaborate with Visvasitha Legal Team and Polres Badung to offer seamless legal and safety support, ensuring top-tier protection and peace of mind.</p>
          <button class="btn custom-outline-btn-mobile mt-4">Contact Us</button>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?= base_url('assets/img/bg-hero-2.png') ?>" alt="Our Vision" class="img-fluid justify-content-end">
        </div>
      </div>
    </div>
  </section>

  <section class="running-text-mobile" data-aos="fade-up">
    <div class="scrolling-wrapper-mobile">
      <div class="scrolling-text-mobile">
        <span class="gradient-text">Feel Safe &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp Feel Free  &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
        <span class="gradient-text">Feel Safe &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp Feel Free &nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
      </div>
    </div>
  </section>

  <section class="footer-mod" data-aos="fade-up">
    <div class="container-fluid">
        <div class="border-bottom-custom">
          <section class="footer-bg-image-mobile d-flex flex-column align-items-center justify-content-center text-white">
            <div class="container text-center footer-txt-mobile p-4">
              <p>CONTACT US FOR COMPREHENSIVE SECURITY SOLUTIONS!</p>
              <a href="#contact-form" class="btn btn-light-custom">Contact Us</a>
            </div>
            <div class="container text-center mt-2">
              <img src="<?= base_url('assets/img/footer-img-right-mobile.png') ?>" alt="img-footer-mobile" class="footer-img-right-mobile">
            </div>
          </section>

          <section class="justify-content-center justify-content-lg-between p-custom-mobile-section">
              <div class="container-fluid text-left text-md-start">
                <div class="row mt-5">
                  
                  <div class="col-12 text-left mb-5">
                    <img src="<?= base_url('assets/img/eagle-logo-img.png') ?>" alt="Logo">
                  </div>

                  <div class="col-4 mb-4">
                    <h6 class="fw-bold mb-4">Page</h6>
                    <div class="footer-info-mobile">
                        <p><a href="#!" class="text-reset text-decoration-none">Home</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Packages</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Services</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Projects</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Teams</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Contacts</a></p>
                    </div>
                  </div>

                  <div class="col-6 mb-4">
                    <h6 class="fw-bold mb-4">Address</h6>
                    <div class="d-flex align-items-start mb-3 Denpasar Office:">
                        <i class="fas fa-map-marker-alt me-2 mt-1"></i>
                        <span>
                            <span class="manrope-bold-mobile">Seminyak Office:</span> <span class="manrope-regular-mobile">Jalan Kunti Seminyak-Badung</span>
                        </span>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-2 mt-1"></i>
                        <span>
                            <span class="manrope-bold-mobile">Denpasar Office:</span> <span class="manrope-regular-mobile">Indonesia Cargo Indah Residence, Jalan Pondok Indah I No. 15, Ds. Batur, Denpasar Utara-Bali</span>
                        </span>
                    </div>
                  </div>

                  <div class="col-6 mb-4 mt-3">
                    <!-- <h6 class="fw-bold mb-5">Contact</h6> -->
                    <div class="footer-info-mobile">
                        <span class="mb-2">Sales Inquiries:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>sales@eagleprotect.id</p>
                        <span class="mb-2">HRD Department:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>hrd@eagleprotect.id</p>
                    </div>
                  </div>

                  <div class="col-6 mb-4 mt-3">
                    <!-- <h6 class="fw-bold mb-5 invisible">Contact</h6> -->
                    <div class="footer-info-mobile">
                        <span class="mb-2">General Inquiries:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>info@eagleprotect.id</p>
                        <span class="mb-2">Instagram:</span><p class="mt-3 me-3 footer-border"><i class="fab fa-instagram me-2"></i>@eagleprotect.bali</p>
                    </div>
                  </div>
                </div>
              </div>
          </section>
        </div>

        <!-- <div class="container-fluid px-4 py-3">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-start">
                    <small class="text-reset">Copyright @ <?=date('Y')?></small>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-reset text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-reset text-decoration-none">Terms & Conditions</a>
                </div>
            </div>
        </div> -->
        <div class="container-fluid px-4 py-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap footer-bar">
              <small class="text-reset">Copyright @ <?= date('Y') ?></small>
              <div class="d-flex flex-wrap gap-2">
                <a href="#" class="text-reset manrope-regular-mobile text-decoration-none">Privacy Policy</a>
                <a href="#" class="text-reset manrope-regular-mobile text-decoration-none">Terms & Conditions</a>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  $(document).ready(function () {
    AOS.init({
        duration: 1000, // opsional, atur durasi animasi
        once: false,     // animasi hanya muncul sekali
    });
    const navbar = $('#navbar');
    const spacer = $('#navbar-spacer');
    const logo = $('#navbar-logo');

    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#navbar').addClass('sticky');
        $('#navbar-logo').attr('src', '<?= base_url('assets/img/eagle-logo-img-black.svg') ?>');
        navbar.addClass('sticky');
        spacer.show();
      } else {
        $('#navbar').removeClass('sticky');
        $('#navbar-logo').attr('src', '<?= base_url('assets/img/eagle-logo-img-white.svg') ?>');
        navbar.removeClass('sticky');
        spacer.hide();
      }
      
       // Sticky untuk mobile
      if ($('#navbar-mobile').is(':visible')) {
        if ($(this).scrollTop() > 50) {
          $('#navbar-mobile').addClass('sticky');
          $('#navbar-logo-mobile').attr('src', '<?= base_url('assets/img/eagle-logo-img-black.svg') ?>');
        } else {
          $('#navbar-mobile').removeClass('sticky');
          $('#navbar-logo-mobile').attr('src', '<?= base_url('assets/img/eagle-logo-img-black.svg') ?>');
        }
      }
      
    });
    function animateCounter($el) {
    const countTo = $el.attr('data-target');
      $({ countNum: 0 }).animate(
        { countNum: countTo },
        {
          duration: 2000,
          easing: 'swing',
          step: function () {
            $el.text(Math.floor(this.countNum));
          },
          complete: function () {
            $el.text(this.countNum);
          }
        }
      );
    }

    function isInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
      );
    }
    $(window).on('scroll resize', function () {
      $('.counter').each(function () {
        const $this = $(this);

        if (isInViewport(this) && !$this.hasClass('counted')) {
          animateCounter($this);
          $this.addClass('counted');
        }

        // reset jika ingin animasi muncul ulang setelah scroll keluar-masuk
        if (!isInViewport(this)) {
          $this.removeClass('counted').text('0');
        }
      });
    });

    // Trigger awal kalau langsung kelihatan di atas
    $(window).trigger('scroll');

    function revealOnScroll() {
      $('.fade-in').each(function (i) {
        var windowBottom = $(window).scrollTop() + $(window).height();
        var elementTop = $(this).offset().top;

        if (elementTop < windowBottom - 150) {
          $(this).addClass('show');
        } else {
          $(this).removeClass('show');
        }
      });
    }

    $(window).on('scroll load', function () {
      revealOnScroll();
    });


  });
 </script>
<link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
<div class="only-desktop">
  <section>
      <div><?= $this->include('layout/header') ?></div>
  </section>

  <section class="hero-section d-flex align-items-center justify-content-center text-white">
      <div class="bg-hero position-absolute w-100 h-100"></div>
      <div class="bg-hero-back position-absolute w-100 h-100"></div>
      <div class="bg-hero-front position-absolute w-100 h-100"></div>
      <div class="container-fluid">
          <div class="row align-items-center">          
          <div class="col-md-6 mt-5 mb-md-0">
              <img src="<?= base_url('assets/img/hero-group.png') ?>" alt="hero-img" class="img-hero">
          </div>

          <div class="col-md-6 offset-md-3 mt-5 text-md-start text-center">
              <img src="<?= base_url('assets/img/eagle-logo.png') ?>" alt="eagle-logo" class="eagle-logo">
              <h2 class="slogan position-relative">FEEL SAFE, FEEL FREE</h2>
              <p class="lato-regular position-relative">Live, Work, and Enjoy Life without the constant worry of what could go wrong.</p>
              <div class="btn-style-hero mt-5">
                  <button class="btn btn-outline-danger btn-xl btn-style-hero" onclick="location.href='<?= base_url('/our_team') ?>'">OUR TEAM</button>
                  <button class="btn btn btn-danger btn-xl contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'">CONTACT US</button>
              </div>
          </div>
          </div>
    </div>

  </section>

  <section class="about-us-section py-3 p-custom fade-in" style="--delay: 0.4s">
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
              <div class="col-md-6 d-flex align-items-start pl-3">
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

  <section class="cta-section text-center py-5 fade-in" style="--delay: 0.8s">
      <div class="quote-bg"></div>
      <div class="quote-front-bg"></div>
      <div class="container-fluid position-relative text-white">
          <div class="icon-eagle mb-5"></div>
          <h2 class="fw-bold mb-3 cta-txt">" Eagle Protect is committed to delivering services that adhere to the highest market standards and fulfilling all promises made to our clients. "</h2>
      </div>
  </section>

  <section class="map-coverage-section position-relative fade-in" style="--delay: 0.12s">
    <div class="container-fluid p-50">
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

  <section class="service-list-section py-5 fade-in" style="--delay: 0.16s">
    <div class="container-fluid p-custom-mobile-section-cta text-white">
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

  <section class="our-vision-section pt-3 position-relative fade-in" style="--delay: 0.20s">
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

  <section class="running-text fade-in" style="--delay: 0.24s">
    <div class="scrolling-wrapper">
      <div class="scrolling-text">
        <span class="gradient-text">Feel Safe <img src="<?= base_url('assets/img/dot.png') ?>"> Feel Free <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
        <span class="gradient-text">Feel Safe <img src="<?= base_url('assets/img/dot.png') ?>"> Feel Free <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
      </div>
    </div>
  </section>

  <section>
      <div><?= $this->include('layout/footer') ?></div>
  </section>
</div>

<div class="only-mobile">
  <section>
      <div><?= $this->include('layout/header') ?></div>
  </section>

  <section class="hero-section align-items-center justify-content-center text-white">
      <div class="bg-hero position-absolute w-100 h-100"></div>
      <div class="bg-hero-back position-absolute w-100 h-100"></div>
      <div class="bg-hero-front position-absolute w-100 h-100"></div>
      <div class="container-fluid mt-7">
        <div class="row align-items-center">
          <div class="col-md-6 p-4 text-center">
              <img src="<?= base_url('assets/img/eagle-logo.png') ?>" alt="eagle-logo" class="eagle-logo">
              <h2 class="slogan-mobile position-relative">FEEL SAFE, FEEL FREE</h2>
              <p class="inter-mobile position-relative">Live, Work, and Enjoy Life without the constant worry of what could go wrong.</p>
              <div class="btn-style-hero align-items-center justify-content-center mt-5">
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

  <section class="about-us-section py-3 p-custom-mobile fade-in" style="--delay: 0.4s">
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

  <section class="cta-section-mobile text-center py-5 fade-in" style="--delay: 0.8s">
      <div class="quote-bg"></div>
      <div class="quote-front-bg"></div>
      <div class="container-fluid position-relative p-custom-mobile-section-cta text-white">
          <div class="icon-eagle mb-5"></div>
          <h2 class="mb-3 cta-txt-mobile">" Eagle Protect is committed to delivering services that adhere to the highest market standards and fulfilling all promises made to our clients. "</h2>
      </div>
  </section>

  <section class="map-coverage-section position-relative fade-in" style="--delay: 0.12s">
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

  <section class="service-list-section py-5 fade-in" style="--delay: 0.16s">
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

  <section class="our-vision-section-mobile fade-in" style="--delay: 0.20s">
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

  <section class="running-text-mobile fade-in" style="--delay: 0.24s">
    <div class="scrolling-wrapper-mobile">
      <div class="scrolling-text-mobile">
        <span class="gradient-text">Feel Safe &nbsp&nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp&nbsp Feel Free  &nbsp&nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
        <span class="gradient-text">Feel Safe &nbsp&nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> &nbsp&nbsp Feel Free &nbsp&nbsp <img src="<?= base_url('assets/img/dot.png') ?>"> </span>
      </div>
    </div>
  </section>

  <section>
      <div><?= $this->include('layout/footer') ?></div>
  </section>
</div>

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
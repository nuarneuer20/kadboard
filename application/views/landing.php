<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>assets/"
  data-template="front-pages">
  <head>
    <?php echo $header; ?>

    <style media="screen">
    .landing-hero .hero-animation-img .hero-dashboard-img img {
      width: 80%!important;
    }
    </style>
  </head>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MJ028CFBL2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-MJ028CFBL2');
	</script>

  <body>
    <script src="<?php echo base_url(); ?>assets/vendor/js/dropdown-hover.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-menu-2 ti-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">kadboard.</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-x ti-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingContact">Contact us</a>
              </li>
							<li class="nav-item">
                <a class="nav-link fw-medium" href="<?php echo base_url(); ?>kad-kahwin">Kad Kahwin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <i class="ti ti-sm"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                    <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                    <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                    <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="<?php echo base_url(); ?>login" class="btn btn-primary"
                ><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
          <div class="container">
            <div class="hero-text-box text-center">
              <h1 class="text-primary hero-title display-6 fw-bold">Template for managing your online invitation</h1>
              <h2 class="hero-sub-title h6 mb-4 pb-1">
                A User-Friendly & easy to use online invitation<br class="d-none d-lg-block" />
                <!-- Pelbagai Design yang Menarik -->
                <!-- Free for Early Adopters -->
              </h2>
              <div class="landing-hero-btn d-inline-block position-relative">
                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Get it now
                  <img
                    src="<?php echo base_url(); ?>assets/img/front-pages/icons/Join-community-arrow.png"
                    alt="Join community arrow"
                    class="scaleX-n1-rtl">
                </span>
                <a href="<?php echo base_url(); ?>kad-kahwin" class="btn btn-primary btn-lg">Premium Template</a>
              </div>
            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img mt-5">
              <a href="<?php echo base_url(); ?>kad-kahwin" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img text-center" style="width: 80%;">
                  <img
                    src="<?php echo base_url(); ?>assets/kad/landing.png"
                    alt="hero dashboard"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                  <!-- <img
                    src="<?php echo base_url(); ?>assets/kad/landing.png"
                    alt="hero elements"
                    class="position-absolute hero-elements-img animation-img top-0 start-0"
                    data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" /> -->
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <!-- <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Useful Features</span>
          </div> -->
          <h3 class="text-center mb-1">
            <span class="section-title">Everything you need</span> to start creating online invitations.
          </h3>
          <p class="text-center mb-3 mb-md-5 pb-3">
            Not just a template, but a template rich in features.
          </p>
          <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/laptop.png" alt="laptop charging" />
              </div>
              <h5 class="mb-3">Fully Customized</h5>
              <p class="features-icon-description">
                You can enable or disable each feature as you like.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/rocket.png" alt="transition up" />
              </div>
              <h5 class="mb-3">Continuous Updates</h5>
              <p class="features-icon-description">
                We don't stop here, there are new templates and features.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/keyboard.png" alt="google docs" />
              </div>
              <h5 class="mb-3">Well Documented</h5>
              <p class="features-icon-description">
                An easy-to-follow instruction with lots of references and examples.
              </p>
            </div>
            <!-- <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/check.png" alt="3d select solid" />
              </div>
              <h5 class="mb-3">API Ready</h5>
              <p class="features-icon-description">
                Just change the endpoint and see your own data loaded within seconds.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/user.png" alt="lifebelt" />
              </div>
              <h5 class="mb-3">Excellent Support</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="text-center mb-3">
                <img src="<?php echo base_url(); ?>assets/img/front-pages/icons/keyboard.png" alt="google docs" />
              </div>
              <h5 class="mb-3">Well Documented</h5>
              <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
            </div> -->
          </div>
        </div>
      </section>
      <!-- Useful features: End -->

      <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Contact US</span>
          </div>
          <h3 class="text-center mb-1"><span class="section-title">Let's work</span> together</h3>
          <p class="text-center mb-4 mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img
                  src="<?php echo base_url(); ?>assets/kad/support.jpg"
                  alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl" />
                <div class="pt-3 px-4 pb-1">
                  <div class="row gy-3 gx-md-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="ti ti-mail ti-sm"></i></div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h5 class="mb-0">
                            <a href="mailto:hi@kadboard.com" class="text-heading">hi@kadboard.com</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-2 me-2">
                          <i class="ti ti-phone-call ti-sm"></i>
                        </div>
                        <div>
                          <p class="mb-0">Phone</p>
                          <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-1">Send a message</h4>
                  <p class="mb-4">
                    If you would like to discuss anything related to payment, account, licensing,<br
                      class="d-none d-lg-block" />
                    or have pre-sales questions, you’re at the right place.
                  </p>
                  <form id="contact-form" action="<?php echo base_url(); ?>contact" method="post">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                        <input type="text" class="form-control" id="contact-form-fullname" name="Name" placeholder="Your name" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          name="Email"
                          class="form-control"
                          placeholder="your@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Message</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          name="Message"
                          rows="8"
                          placeholder="Write a message"></textarea>
                      </div>
                      <div class="col-12">
                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- / Sections:End -->

    <?php echo $footer; ?>

    <script type="text/javascript">
    $("#contact-form").unbind('submit').bind('submit', function() {
      var form = $(this);
      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serialize(),
        dataType: 'json',
        success:function(data)
        {
          $('.txt_csrfname').val(data.token);
          if (data.status == true)
          {
            $("#contact-form")[0].reset();
            notification('black','slideBottomRight','Message',data.message,10000);
          }else{
            notification('black','slideBottomRight','Message',data.message,10000);
          }
        },
        error: function(xhr, status, error) {
          notification('black','slideBottomRight','Message','Something went wrong. Please try again later.',10000);
        },
      });
      return false;
    });
    </script>
  </body>
</html>

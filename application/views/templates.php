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

    .iphone-mockup {
      position: relative;
      width: 66%; /* Adjust the width and height according to your PNG image size */
      height: 0;
      padding-bottom: 133.3%; /* 375px / 281.25px = 133.3%, maintain the aspect ratio */
      margin: 0 auto; /* Center the container horizontally */
      overflow: hidden;
    }

    .iphone-mockup:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 70%;
      height: 70%;
      background: url('<?php echo base_url(); ?>assets/kad/iphone.png') no-repeat center center; /* Use a frame if needed */
      background-size: contain;
      z-index: 1;
    }

    .phone {
      width: 65%;
      height: 66%;
      object-fit: cover;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 30px;
    }

    .button-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 50%;
        z-index: 2;
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
            <a href="<?php echo base_url(); ?>" class="app-brand-link">
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
                <a class="nav-link fw-medium" href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="<?php echo base_url(); ?>#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="<?php echo base_url(); ?>#landingContact">Contact Us</a>
              </li>
							<li class="nav-item active">
                <a class="nav-link fw-medium" aria-current="page" href="<?php echo base_url(); ?>templates">Templates</a>
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
      <section id="hero-animation" class="landing-hero" style="border-radius:0px;">
        <div id="landingHero" class="position-relative">
          <div class="container">
            <div class="hero-text-box text-center">
              <h1 class="text-primary hero-title display-6 fw-bold">Free premium online invitations</h1>
              <h2 class="hero-sub-title h6 mb-4 pb-1">
                Offer valid for the early birds only!
              </h2>
            </div>

            <div class="row">

              <?php foreach ($design as $row): ?>
                <div class="col-md-4">
                  <div class="iphone-mockup">
                      <img class="phone" src="<?php echo base_url().$row->DesignUrl; ?>" alt="iPhone Mockup">
                      <div class="button-container">
                        <h6 class="mb-5">
                          <strong style="color: <?php echo $row->TitleColor; ?>;"><?php echo $row->DesignSku; ?></strong>
                        </h6>
                        <a href="<?php echo base_url(); ?>checkout/<?php echo $row->DesignSku; ?>">
                          <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-dark">CHOOSE</button>
                          </div>
                        </a>
                        <a target="_blank" href="<?php echo base_url(); ?>preview/<?php echo $row->DesignSku; ?>">
                          <div class="d-grid gap-2">
                            <button class="btn btn-light">PREVIEW</button>
                          </div>
                        </a>
                      </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>


          </div>
        </div>
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

    </div>

    <!-- / Sections:End -->

    <?php echo $footer; ?>

    <script>

    </script>
  </body>
</html>

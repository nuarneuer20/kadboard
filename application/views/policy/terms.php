<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>assets/"
  data-template="horizontal-menu-template-no-customizer">
  <head>
    <?php echo $header; ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-xl-flex py-0 me-4">
              <a href="<?php echo base_url(); ?>main" class="app-brand-link gap-2">
                <span class="app-brand-text demo menu-text fw-bold">Kadboard.</span>
              </a>
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


              <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
                <h3 class="text-center">Terms & Conditions</h3>
              </div>

              <div class="help-center-popular-articles py-5">
                  <div class="container-xl">
                    <div class="row">
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">1. Acceptance of Terms</h4>
                        <p class="text-justify">
                          By accessing and using the services provided by Kadboard.com ("the Website"), you agree to comply with and be bound by the following terms and conditions. If you do not agree with any part of these terms, please do not use our services.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">2. Services</h4>
                        <p class="text-justify">
                          Kadboard.com offers online invitation card creation. Users can customize and design digital invitation cards for various events.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">3. User Registration</h4>
                        <p class="text-justify">
                          To access certain features of the Website, you may be required to register for an account. You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">4. User Content</h4>
                        <p class="text-justify">
                          You retain ownership of the content you create on Kadboard.com. By uploading, submitting, or displaying your content, you grant Kadboard.com a non-exclusive, royalty-free license to use, reproduce, adapt, publish, and distribute the content for the purpose of providing the services.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">5. Payment and Fees</h4>
                        <p class="text-justify">
                          Payment for services may be required. Prices and fees are subject to change without notice. Payments are non-refundable unless otherwise stated.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">6. Intellectual Property</h4>
                        <p class="text-justify">
                          All content on the Website, including but not limited to text, graphics, logos, and images, is the property of Kadboard.com and is protected by copyright and other intellectual property laws.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">7. Privacy</h4>
                        <p class="text-justify">
                          Your use of our services is subject to our Privacy Policy, which can be found <a href="<?php echo base_url(); ?>privacy">here</a> .
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">8. Limitation of Liability</h4>
                        <p class="text-justify">
                          Kadboard.com shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">9. Termination</h4>
                        <p class="text-justify">
                          Kadboard.com reserves the right to terminate or suspend user accounts and access to services at its sole discretion, without notice, for any reason, including a breach of these terms.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">10. Governing Law</h4>
                        <p class="text-justify">
                          These terms and conditions are governed by the laws of Malaysia. Any disputes arising from the use of Kadboard.com will be subject to the exclusive jurisdiction of the Malaysian courts.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>


          </div>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://kadboard.com" target="_blank" class="fw-medium">Kadboard.</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="<?php echo base_url(); ?>terms" target="_blank" class="footer-link me-4">Terms & Conditions</a>
                    <a href="<?php echo base_url(); ?>privacy" target="_blank" class="footer-link d-none d-sm-inline-block">Privacy Policy</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <?php echo $footer; ?>
    <!-- Page JS -->
  </body>
</html>

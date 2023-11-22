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
                <h3 class="text-center">Privacy Policy</h3>
              </div>

              <div class="help-center-popular-articles py-5">
                  <div class="container-xl">
                    <div class="row">
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">1. Introduction</h4>
                        <p class="text-justify">
                          Welcome to Kadboard.com. This Privacy Policy explains how we collect, use, and protect your personal information when you use our online invitation card services.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">2. Services</h4>
                        <p class="text-justify">
                          We collect personal information provided by users during the registration and card customization process. This may include:
                          <br><br>
                          * Name <br>
                          * Email address <br>
                          * Contact information <br>
                          * Event details
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">3. How We Use Your Information</h4>
                        <p class="text-justify">
                          We use the collected information for the following purposes:
                          <br><br>
                          *To process payments <br>
                          *To improve our services and user experience
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">4. Data Security</h4>
                        <p class="text-justify">
                          We implement security measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">5. Third-Party Disclosure</h4>
                        <p class="text-justify">
                          We do not sell, trade, or otherwise transfer your personal information to third parties. However, this does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, as long as those parties agree to keep this information confidential.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">6. Cookies</h4>
                        <p class="text-justify">
                          We use cookies to enhance user experience. Users can choose to set their web browser to refuse cookies or to alert them when cookies are being sent.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">7. Your Rights</h4>
                        <p class="text-justify">
                          You have the right to access, correct, or delete your personal information. If you wish to exercise any of these rights, please contact us using the information provided below.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">8. Changes to the Privacy Policy</h4>
                        <p class="text-justify">
                          We may update our Privacy Policy from time to time. Any changes will be posted on this page.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">9. Contact Information</h4>
                        <p class="text-justify">
                          If you have any questions or concerns about this Privacy Policy, you may contact us at hi@kadboard.com.
                        </p>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2 pb-3">10. Compliance with Malaysian Law</h4>
                        <p class="text-justify">
                          This Privacy Policy is designed to comply with the Personal Data Protection Act (PDPA) of Malaysia.
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

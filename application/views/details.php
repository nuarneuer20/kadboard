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
              <a href="<?php echo base_url(); ?>" class="app-brand-link gap-2">
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
                <h3 class="text-center">Login Details</h3>
              </div>

              <div class="help-center-popular-articles py-5">
                  <div class="container-xl">
                    <div class="row">
                      <div class="col-lg-10 mx-auto mb-4">
                        <h4 class="text-start mt-2">1. Login Details Link</h4>
                        <p class="text-justify">
                          Save below link for future reference.
                        </p>
                        <div class="input-group">
                          <input id="link" type="text" class="form-control" value="<?php echo base_url(); ?>details/<?php echo $id; ?>">
                          <button class="btn btn-outline-primary waves-effect copy" type="button" data-link="<?php echo base_url(); ?>details/<?php echo $id; ?>">Copy Link</button>
                        </div>
                      </div>

                      <div class="col-lg-10 mx-auto mb-4">
                        <h4 class="text-start mt-2">2. Login Page Link</h4>
                        <p class="text-justify">
                          Please click on the link below and enter your login details. Once done, you can begin managing your invitation cards.
                        </p>
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?php echo base_url(); ?>login">
                          <button class="btn btn-outline-primary waves-effect clicking" type="button" data-link="<?php echo base_url(); ?>login">Go to Login</button>
                        </div>
                      </div>
                      <div class="col-lg-10 mx-auto">
                        <h4 class="text-start mt-2">3. Login Details</h4>
                        <p class="text-justify">
                          Email: <strong><?php echo $details->Email; ?></strong>
                          <br>
                          Password: <strong><?php echo hashids_decrypt($details->Password); ?></strong>
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

    <script type="text/javascript">
      $('.copy').on('click', function(){
        var link = $('#link');
        link.select();
        document.execCommand('copy');
      });

      $('.clicking').on('click', function(){
        var link = $(this).data('link');

        window.open(link, '_blank');
      });
    </script>
  </body>
</html>

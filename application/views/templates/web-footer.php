<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
  <div class="footer-bottom py-3">
    <div
      class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text"
          >©
          <script>
            document.write(new Date().getFullYear());
          </script>
        </span>
        <a href="<?php echo base_url(); ?>" target="_blank" class="fw-medium text-white footer-link">Kadboard.</a>
        <span class="footer-text">All Right Reserved.</span>
      </div>
      <div class="d-none d-lg-inline-block">
        <!-- <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
          >License</a
        >
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
          >More Themes</a
        > -->

        <a href="<?php echo base_url(); ?>terms" target="_blank" class="footer-link me-4">Terms & Conditions</a>
        <a href="<?php echo base_url(); ?>privacy" target="_blank" class="footer-link d-none d-sm-inline-block">Privacy Policy</a>
      </div>
      <!-- <div>
        <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
          <img
            src="<?php echo base_url(); ?>assets/img/front-pages/icons/github-light.png"
            alt="github icon"
            data-app-light-img="front-pages/icons/github-light.png"
            data-app-dark-img="front-pages/icons/github-dark.png" />
        </a>
        <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
          <img
            src="<?php echo base_url(); ?>assets/img/front-pages/icons/facebook-light.png"
            alt="facebook icon"
            data-app-light-img="front-pages/icons/facebook-light.png"
            data-app-dark-img="front-pages/icons/facebook-dark.png" />
        </a>
        <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
          <img
            src="<?php echo base_url(); ?>assets/img/front-pages/icons/twitter-light.png"
            alt="twitter icon"
            data-app-light-img="front-pages/icons/twitter-light.png"
            data-app-dark-img="front-pages/icons/twitter-dark.png" />
        </a>
        <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
          <img
            src="<?php echo base_url(); ?>assets/img/front-pages/icons/instagram-light.png"
            alt="google icon"
            data-app-light-img="front-pages/icons/instagram-light.png"
            data-app-dark-img="front-pages/icons/instagram-dark.png" />
        </a>
      </div> -->
    </div>
  </div>
</footer>
<!-- Footer: End -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/node-waves/node-waves.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url(); ?>assets/vendor/libs/nouislider/nouislider.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url(); ?>assets/js/front-main.js"></script>

<!-- Page JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/front-page-landing.js"></script> -->

<script src="<?php echo base_url(); ?>assets/third-party/retro-notify/js/retronotify.js"></script>
<script type="text/javascript">
function notification(color,animate,header,message,delay){
  new RetroNotify({
    style: color,
    animate: animate,
    contentHeader: header,
    contentText: message,
    closeDelay: delay
  });
}
</script>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="<?php echo base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/i18n/i18n.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/third-party/retro-notify/js/retronotify.js"></script>

<!-- Page JS -->

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

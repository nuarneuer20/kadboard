<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/kad/kadboard.png" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Icons -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome.css" /> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/tabler-icons.css" />
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/flag-icons.css" /> -->

<!-- Core CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css" /> -->

<!-- Vendors CSS -->
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/node-waves/node-waves.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.css" /> -->
<!-- Page CSS -->

<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/third-party/snow/snow.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/third-party/retro-notify/css/retronotify.css">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MJ028CFBL2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MJ028CFBL2');
</script>


<style media="screen">

html {
  /* background-color: #ebebeb; */
  background-color: #fff;
}

body, html {
  overflow-x: hidden;
}

.main{
  max-width: 480px;
  width: 100%;
  margin: 0 auto;
  background-color: #fff;
  box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
  -moz-box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
  -webkit-box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
}

.start{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 480px;
  width: 100%;
  height: 100%;
  text-align: center;
  background-color: black;
  z-index: 99;
  background-image: url(<?php echo base_url().$DesignUrl; ?>);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
  -moz-box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
  -webkit-box-shadow: 6px 0 4px -4px #c5c5c5, -6px 0 4px -4px #c5c5c5;
}

.inside {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 480px;
  width: 100%;
  height: auto;
  text-align: center;
  z-index: 999;
}

.hidden{
  display: none;
}

nav{
  max-width: 480px;
  position: fixed;
  bottom: 0;
  background-color: white;
  padding: 12px;
  width: 100%;
  -webkit-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.1);
  -moz-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.1);
  box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.1);
}

.menu-box{
  display: flex;
  justify-content: space-around;
}

.nav-item{
  align-items: center;
  text-decoration: none;
  /* color: white; */
  padding: 5px 16px;
  border-radius: 50px;
  background-color: white;
  color: black;
  cursor: pointer;
}

.nav-font{
  font-size: 10px;
}

.introduction {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -55%);
  /* width: 50%; */
  max-width: 480px;
  width: 100%;
  height: auto;
  /* text-align: center; */
}

.bg-image{
  background-image: url(<?php echo base_url().$DesignUrl; ?>);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height:92vh;
}

.wedding-font{
  /* font-family: 'Parisienne', cursive; */
  font-family: 'Alex Brush', cursive;
}

.wedding-title{
  font-size: 60px;
  margin-bottom: 0px!important;
  line-height: 1.10!important;
}

.show-box{
  position: fixed;
  bottom: 78px;
  max-width: 480px;
  width: 100%;
  border-radius: 20px 20px 0px 0px;
  box-shadow: 0 15px 25px rgba(129, 124, 124, 0.8);
  backdrop-filter: blur(8px);
  background-color: rgba(255, 255, 255, 0.5);
}

.hidden-box{
  display: none;
}

.bottom-pad{
  padding-bottom: 78px;
}

.container {
  color: #333;
  margin: 0 auto;
  text-align: center;
}

li {
  display: inline-block;
  font-size: 15px;
  list-style-type: none;
  padding: 1em;
  /* text-transform: uppercase; */
}

li span {
  display: block;
  font-size: 30px;
  font-weight: bold;
}

.scrollable-div {
  width: 100%;
  height: 300px;
  overflow: auto;
  padding: 10px;
}

.snow {
  background: <?php echo $DesignColor; ?>!important;
}

</style>

<!-- Helpers -->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/js/helpers.js"></script>
<script src="<?php echo base_url(); ?>assets/js/config.js"></script> -->

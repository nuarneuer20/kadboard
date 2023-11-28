<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>assets/"
  data-template="horizontal-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>MY WEDDING | PREVIEW</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Page CSS -->

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third-party/snow/snow.css" />

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
      background-image: url(<?php echo base_url().$design->DesignUrl; ?>);
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

    /* .opening{
      position: fixed;
      background-color: black;
      height:100vh;
      z-index: 99999;
    } */

    /* #canvas {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    } */

    nav{
      max-width: 480px;
      /* display: flex;
      justify-content: space-around; */
      position: fixed;
      bottom: 0;
      /* right: 0;
      left: 0; */
      background-color: white;
      padding: 12px;
      /* position: sticky;
      bottom: 0; */
      width: 100%;
      /* border-radius: 20px 20px 0px 0px; */
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
      background-image: url(<?php echo base_url().$design->DesignUrl; ?>);
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
      background: <?php echo $design->DesignColor; ?>!important;
    }

    </style>

    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/helpers.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
  </head>

  <body>

    <div id="snow-fall" class="hidden">
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
      <div class="snow"></div>
    </div>

    <div id="start" class="start">
      <div class="inside">
        <h5 class="mb-4">WALIMATULURUS</h5>
        <h6 class="wedding-font wedding-title">Haziqah</h6>
        <h6 class="wedding-font wedding-title" style="margin-top: -20px;">&</h6>
        <h6 class="wedding-font wedding-title" style="margin-top: -20px;">Anwar</h6>
        <small>
          <i>*Kad undangan ini mengandungi lagu.</i>
        </small>
        <br>
        <button type="button" name="button" class="btn btn-dark mt-4" id="opening">BUKA</button>
      </div>
    </div>

    <div class="main hidden">

      <div class="bg-image">
        <div class="introduction text-center">
          <h5 class="mb-4">WALIMATULURUS</h5>
          <img src="<?php echo base_url()."assets/kad/top-leaf.png"; ?>" width="50%" style="padding: 15px;">
          <h6 class="wedding-font wedding-title">Haziqah</h6>
          <h6 class="wedding-font wedding-title" style="margin-top: -20px;">&</h6>
          <h6 class="wedding-font wedding-title" style="margin-top: -20px;">Anwar</h6>
          <img src="<?php echo base_url()."assets/kad/bot-leaf.png"; ?>" width="50%" style="padding: 15px;">
          <h6>ISNIN</h6>
          <h6>06.06.2022</h6>
          <h6>07 ZULKAEDAH 1443</h6>
        </div>
      </div>

      <div class="row">

        <div class="col-12 text-center" style="padding-top: 60px;">
          <h4>
            <strong>
              بسم الله الرحمن الرحيم
            </strong>
          </h4>
        </div>

        <div class="col-12 mt-4 text-center">
          <h6>Assalamualaikum Warahmatullahih Wabarakatuh <br> Dengan izin Allah S.W.T kami,</h6>
        </div>

        <div class="col-12 mt-4 text-center">
          <p style="font-size: 20px; font-weight: bold;">
            ALI BIN ABU <br>
            & <br>
            JAMALIAH BINTI AHMAD
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <h6>
            Dengan segala hormatnya mempersilakan <br>
            Tuan/Puan/Dato'/Datin/Encik/Cik <br>
            ke majlis perkahwinan anakanda kami
          </h6>
        </div>

        <div class="col-12 mt-4 text-center">
          <p style="font-size: 20px; font-weight: bold;">
            ANWAR BIN SAAD <br>
            & <br>
            NUR HAZIQAH BINTI HARRIS FADILAH
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Tarikh</strong>
          </h1>
          <p>
            Sabtu, 21 Disember 2023
            <br>
            bersamaan 16 Rejab 1440H
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Tempat</strong>
          </h1>
          <p>
            Dewan Seri Cempaka MPKJ
            <br>
            Persiaran Saujana Impian, Saujana Impian, <br>
            43000 Kajang, Selangor
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Atur Cara Majlis</strong>
          </h1>
          <p>
            Keluarga Pengantin:
            <br>
            11:00 Pagi - 1:00 Petang
          </p>
          <p>
            Jiran dan sanak saudara:
            <br>
            1:00 Petang - 2.30 Petang
          </p>
          <p>
            Rakan-rakan:
            <br>
            2:30 Petang - 4.00 Petang
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <p>
            Sila sahkan kehadiran anda dengan <br> mengisi <strong>RSVP</strong> dibawah
          </p>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Kehadiran</strong>
          </h1>
          <ul style="padding-left: 0;">
            <li>
              <span>2000</span>
              Hadir
            </li>
            <li>
              <span>10</span>
              Tidak Hadir
            </li>
          </ul>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Menanti Hari</strong>
          </h1>
          <ul style="padding-left: 0;">
            <li><span id="days"></span>Hari</li>
            <li><span id="hours"></span>Jam</li>
            <li><span id="minutes"></span>Minit</li>
            <li><span id="seconds"></span>Saat</li>
          </ul>
        </div>

        <div class="col-12 mt-4 text-center">
          <h1 class="wedding-font">
            <strong>Ucapan</strong>
          </h1>

          <button type="button" name="button" class="btn btn-dark mb-2 toggle-box" data-target="box-6">
            Tambah Ucapan
          </button>

          <div class="scrollable-div">
            <p>
              <strong>Muhammad Adam</strong><br>
              <i>Tahniah! Semoga bahagia hingga ke syurga!</i>
            </p>

            <p>
              <strong>Syazihah</strong><br>
              <i>Tahniah! Semoga berkekalan hingga ke syurga!</i>
            </p>

            <p>
              <strong>Farhan</strong><br>
              <i>Tahniah weh! Dah nak kawin dah kau</i>
            </p>

            <p>
              <strong>Farhan</strong><br>
              <i>Tahniah weh! Dah nak kawin dah kau</i>
            </p>

            <p>
              <strong>Farhan</strong><br>
              <i>Tahniah weh! Dah nak kawin dah kau</i>
            </p>

            <p>
              <strong>Farhan</strong><br>
              <i>Tahniah weh! Dah nak kawin dah kau</i>
            </p>

            <p>
              <strong>Farhan</strong><br>
              <i>Tahniah weh! Dah nak kawin dah kau</i>
            </p>
          </div>

        </div>

      </div>











      <div class="bottom-pad"></div>

      <div id="box-1" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <h5>HADIR KE MAJLIS ?</h5>
            </div>
            <div class="col-12 text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-dark waves-effect waves-light pilih" data-id="hadir">
                  <i class="tf-icons ti ti-square-rounded-check"></i>
                </button>
                <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">INGATKAN SAYA</button> -->
                <button type="button" class="btn btn-dark waves-effect waves-light pilih" data-id="tidak">
                  <i class="tf-icons ti ti-square-rounded-x"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="box-1-1" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <input type="text" class="form-control mb-2" placeholder="Nombor Telefon *">
              <select class="form-control mb-2" id="kehadiran" name="">
                <option value="">Pilih Jumlah Kehadiran</option>
                <?php for ($i=1; $i < 15; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?> Orang</option>
                <?php } ?>
              </select>

              <button type="button" name="button" class="btn btn-dark" id="sahkan">Hantar</button>
              <button type="button" name="button" class="btn btn-dark" id="batal">Batal</button>
            </div>
          </div>
        </div>
      </div>

      <div id="box-2" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <h5>HUBUNGI</h5>
            </div>
            <div class="col-12 text-center">
              <div class="d-flex justify-content-between">
                <h6>Sabaruddin (Bapa)</h6>
                <div>
                  <a href="https://api.whatsapp.com/send?phone=60132376804&text=" target="_blank" class="me-2">
                    <i class="ti ti-brand-whatsapp"></i>
                  </a>
                  <a href="tel:60132376804">
                    <i class="ti ti-phone"></i>
                  </a>
                </div>
              </div>
              <div class="d-flex justify-content-between">
                <h6>Sabariah(Ibu)</h6>
                <div>
                  <a href="https://api.whatsapp.com/send?phone=60132376804&text=" target="_blank" class="me-2">
                    <i class="ti ti-brand-whatsapp"></i>
                  </a>
                  <a href="tel:60132376804">
                    <i class="ti ti-phone"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="box-3" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <h5>LOKASI</h5>
            </div>
            <div class="col-12 text-center">
              <div class="btn-group mb-2" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-dark waves-effect waves-light">
                  <i class="tf-icons ti ti-brand-google-maps"></i>
                </button>
                <button type="button" class="btn btn-dark waves-effect waves-light">BUKA DI APLIKASI MAPS</button>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-dark waves-effect waves-light">
                  <i class="tf-icons ti ti-brand-waze"></i>
                </button>
                <button type="button" class="btn btn-dark waves-effect waves-light">BUKA DI APLIKASI WAZE</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="box-4" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <h5>KALENDAR</h5>
            </div>
            <div class="col-12 text-center">
              <div class="col-12 text-center">
                <div class="btn-group mb-2" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-dark waves-effect waves-light">
                    <i class="tf-icons ti ti-brand-google"></i>
                  </button>
                  <button type="button" class="btn btn-dark waves-effect waves-light">TAMBAH DI GOOGLE CALENDAR</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-dark waves-effect waves-light">
                    <i class="tf-icons ti ti-brand-apple"></i>
                  </button>
                  <button type="button" class="btn btn-dark waves-effect waves-light">TAMBAH DI APPLE CALENDAR</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="box-5" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <iframe id="youtubeIframe" width="100%" height="auto" style="border-radius: 10px;" src="https://www.youtube.com/embed/kH7wlLOQMNM?si=UmZdpBfRHdf4rKWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div id="box-6" class="card show-box hidden-box">
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-center">
              <h5>UCAPAN</h5>
            </div>
            <div class="col-12 text-center">
              <div>
                <!-- <label for="defaultFormControlInput" class="form-label">Nama</label> -->
                <input type="text" class="form-control mb-2" id="defaultFormControlInput" placeholder="Nama Anda *">
                <textarea class="form-control mb-2" name="name" placeholder="Ucapan Anda *"></textarea>
                <div class="d-grid gap-2">
                  <button type="button" name="button" class="btn btn-dark">Hantar Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav>
        <div class="menu-box">
          <div class="nav-item text-center toggle-box" data-target="box-1">
             <i class="tf-icons ti ti-armchair"></i><br>
            <span class="nav-font">RSVP</span>
          </div>

          <div class="nav-item text-center toggle-box" data-target="box-4">
            <i class="tf-icons ti ti-calendar-event"></i><br>
            <span class="nav-font">KALENDAR</span>
          </div>

          <div class="nav-item text-center toggle-box" data-target="box-5" id="playButton">
            <i class="tf-icons ti ti-player-play"></i><br>
            <span class="nav-font">LAGU</span>
          </div>

          <div class="nav-item text-center toggle-box" data-target="box-3">
            <i class="tf-icons ti ti-map-pin"></i><br>
            <span class="nav-font">LOKASI</span>
          </div>

          <div class="nav-item text-center toggle-box" data-target="box-2">
            <i class="tf-icons ti ti-phone"></i><br>
            <span class="nav-font">HUBUNGI</span>
          </div>

        </div>
      </nav>

    </div>



  </body>

  <script src="<?php echo base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/hammer/hammer.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/i18n/i18n.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js/menu.js"></script>

  <!-- Main JS -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <!-- Page JS -->

  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <script type="text/javascript">
    feather.replace();

    $('#opening').on('click', function(){
      $('#start').animate({opacity: 0}, 1000, function(){
          $(this).addClass('hidden');
      });

      $('.main').animate({opacity: 1}, 1000)
          .removeClass('hidden');

      $('#snow-fall')
          .css({ height: 0, display: 'block' })
          .animate({ height: '100%' }, 1000)
          .removeClass('hidden');

      play();
    });

    function play(){
      var iframe = document.getElementById('youtubeIframe');
      var src = iframe.src;

      // Check if the video is already playing
      if (src.includes('autoplay=1')) {
        // Pause the video
        iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
      } else {
        // Play the video
        iframe.src = src + '&autoplay=1&loop=1';
      }
    }

    $(document).on('click', '.toggle-box', function (event) {
      event.stopPropagation();
      var targetBox = $(this).data('target');
      $('.hidden-box').not('#' + targetBox).slideUp();
      $('#' + targetBox).slideToggle();
    });

    $(document).on('click', function () {
      $('.hidden-box').slideUp();
    });

    $('.hidden-box').on('click', function (event) {
      event.stopPropagation();
    });

    $('.pilih').on('click', function () {
      var id = $(this).data('id');
      if (id == 'hadir') {
        $('#kehadiran').show();
      }else {
        $('#kehadiran').hide();
      }
      $('#box-1-1').slideToggle();
    });

    $('#batal').on('click', function () {
      $('#box-1-1').slideToggle();
    });

    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

      let countDown = new Date('Apr 20, 2024 06:00:00').getTime(),
      x = setInterval(function() {

      let now = new Date().getTime(),
      distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
      document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
      document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
      document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second);

  </script>

</html>

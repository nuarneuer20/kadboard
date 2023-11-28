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

        <?php echo $navbar; ?>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row mb-4">
                <div class="col-md-6 col-12 mx-auto">

                </div>
              </div>

              <div class="row mb-4">
                <div class="col-md-6 col-12 mx-auto">
                  <img class="card-img card-img-left" style="object-fit: cover;object-position: top center;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);  background-position: top; border-radius: 5px;" src="<?php echo base_url().$details->DesignUrl; ?>" alt="Card image" height="230px">
                </div>
              </div>

              <form id="modify-form" action="<?php echo base_url(); ?>save" method="post">

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-4">
                          <h5 class="mb-0">WALIMATULURUS</h5>
                          <!-- <small>
                            <i>* Butiran ini digunakan untuk muka pertama.</i>
                          </small> -->
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Bride and Groom's Short Names</label>
                          <input type="text" class="form-control text-center" name="BrideShortName" placeholder="Adam & Hawa">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Bride and Groom's Full Names</label>
                          <input type="text" class="form-control text-center" name="BrideFullName" placeholder="Muhammad Adam Bin Abu Bakar & Siti Hawa Bin Saifuddin">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Parent's Full Names</label>
                          <input type="text" class="form-control text-center" name="ParentName" placeholder="Abu Bakar Bin Abdullah & Yasmin Binti Zainal">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <!-- <h5 class="mb-0">Butiran Nama Penuh Pengantin</h5> -->
                          <small>
                            <i>* The opening words of the ceremony. </i>
                          </small>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Bismillah</label>
                          <textarea name="Bismillah" class="form-control text-center">بسم الله الرحمن الرحيم</textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Greetings</label>
                          <textarea name="Greetings" class="form-control text-center">Assalamualaikum Warahmatullahih Wabarakatuh
  Dengan izin Allah S.W.T kami,</textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Speech</label>
                          <textarea name="Speech" class="form-control text-center" rows="3">Dengan segala hormatnya mempersilakan
  Tuan/Puan/Dato'/Datin/Encik/Cik
  ke majlis perkahwinan anakanda kami</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <h5 class="mb-0">Wedding Details</h5>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Day</label>
                          <select class="form-control text-center" name="WeddingDay">
                            <option value="Sabtu">Sabtu</option>
                            <option value="Ahad">Ahad</option>
                            <option value="Isnin">Isnin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Khamis">Khamis</option>
                            <option value="Jumaat">Jumaat</option>
                          </select>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Date</label>
                          <input type="date" class="form-control text-center" name="WeddingDate">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Date in Hijri Calendar</label>
                          <input type="text" class="form-control text-center" name="WeddingDateHijri" placeholder="16 Rejab 1440H">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Full Wedding Address</label>
                          <textarea class="form-control mb-2 text-center" rows="4" name="WeddingAddress" placeholder="Dewan Sri Cempaka MPKJ,
  Persiaran Saujana Impian, Saujana Impian,
  43000 Kajang, Selangor"></textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Address Coordinate</label><small> <i>*Get it Google Maps</i> </small>
                          <input type="text" class="form-control text-center" name="WeddingCoordinate" placeholder="3.0158146464174247, 101.79303831018107">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <h5 class="mb-0">Wedding Event</h5>
                          <small>
                            <i>* Change if needed</i>
                          </small>
                        </div>
                        <div class="mb-2">
                          <textarea class="form-control text-center" name="name" rows="8" cols="80" placeholder=""> Keluarga Pengantin:
  11:00 Pagi - 1:00 Petang

  Jiran dan sanak saudara:
  1:00 Petang - 2.30 Petang

  Rakan-rakan:
  2:30 Petang - 4.00 Petang </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <h5 class="mb-0">RSVP Details</h5>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Last Date of RSVP</label>
                          <input type="date" class="form-control text-center" name="RSVPDate">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Total Number of Guest</label>
                          <input type="number" class="form-control text-center" name="GuestNumber" value="1000">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Limit of each Guest</label>
                          <input type="number" class="form-control text-center" name="LimitGuestNumber" value="10">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <h5 class="mb-0">Contact Details</h5>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Contact Name</label>
                          <input type="text" class="form-control text-center" name="ContactName" placeholder="Abu Bakar (Ayah)">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Contact Number</label>
                          <input type="number" class="form-control text-center" name="ContactNumber" placeholder="0123456789">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-2">
                          <h5 class="mb-0">Opening Song</h5>
                          <small>
                            <i>* Please copy from Youtube link like below example. Leave it blank if not needed.</i>
                          </small>
                        </div>
                        <div class="mb-2">
                          <input type="text" class="form-control text-center" name="YouTube" value="https://www.youtube.com/watch?v=Nnd9UT8sgvU">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="mb-2">
                          <h5 class="mb-0 text-center">Invitation Features</h5>
                          <small class="text-center">
                            <i>* Turn it off to hide the feature on the online invitation card</i>
                          </small>
                        </div>
                        <div class="mb-2">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" checked name="ShowOpening">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Opening Song</span>
                          </label>
                        </div>
                        <div class="mb-2">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" checked name="ShowAttendance">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Attendance (Kehadiran)</span>
                          </label>
                        </div>
                        <div class="mb-2">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" checked name="ShowDays">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Counting Days (Menanti Hari)</span>
                          </label>
                        </div>
                        <div class="mb-2">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" checked name="ShowSpeech">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Speech (Ucapan)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="d-grid gap-2">
                      <button type="button" name="button" class="btn btn-dark">Simpan</button>
                    </div>
                  </div>
                </div>

              </form>

            </div>
            <!--/ Content -->

            <!-- Footer -->
            <?php echo $footer; ?>
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

    <?php echo $bottom; ?>
  </body>
</html>

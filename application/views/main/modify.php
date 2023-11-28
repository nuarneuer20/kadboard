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

              <form id="modify-form" action="<?php echo base_url(); ?>save-invitation" method="post">

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="mb-4">
                          <h5 class="mb-0">WALIMATULURUS</h5>
                          <small>
                            <i>* Press "enter" to add new line.</i>
                          </small>
                        </div>


                        <?php if (empty($bride)) { ?>
                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Bride and Groom's Short Names *</label>
                            <!-- <input type="text" class="form-control text-center" name="BrideShortName" placeholder="Adam & Hawa"> -->

                            <textarea class="form-control text-center" name="BrideShortName" rows="3" placeholder="Adam
&
Hawa"></textarea>
                          </div>

                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Bride and Groom's Full Names *</label>
                            <!-- <input type="text" class="form-control text-center" name="BrideFullName" placeholder="Muhammad Adam Bin Abu Bakar & Siti Hawa Bin Saifuddin"> -->

                            <textarea class="form-control text-center" name="BrideFullName" rows="3" placeholder="Muhammad Adam Bin Abu Bakar
&
Siti Hawa Bin Saifuddin"></textarea>
                          </div>
                        <?php }else { ?>

                          <?php foreach ($bride as $row): ?>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Bride and Groom's Short Names *</label>
                              <!-- <input type="text" class="form-control text-center" name="BrideShortName" placeholder="Adam & Hawa" value="<?php echo $row->BrideName; ?>"> -->
                              <textarea class="form-control text-center" name="BrideShortName" rows="3" placeholder="Adam
&
Hawa"><?php echo $row->BrideName; ?></textarea>
                            </div>
                          <?php endforeach; ?>

                          <?php foreach ($bride as $row): ?>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Bride and Groom's Full Names *</label>
                              <!-- <input type="text" class="form-control text-center" name="BrideFullName" placeholder="Muhammad Adam Bin Abu Bakar & Siti Hawa Bin Saifuddin" value="<?php echo $row->BrideFullName; ?>"> -->
                              <textarea class="form-control text-center" name="BrideFullName" rows="3" placeholder="Muhammad Adam Bin Abu Bakar
  &
  Siti Hawa Bin Saifuddin"><?php echo $row->BrideFullName; ?></textarea>
                            </div>
                          <?php endforeach; ?>

                        <?php } ?>

                        <?php if (empty($parent)) { ?>
                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Parent's Full Names *</label>
                            <!-- <input type="text" class="form-control text-center" name="ParentName" placeholder="Abu Bakar Bin Abdullah & Yasmin Binti Zainal"> -->
                            <textarea class="form-control text-center" name="ParentName" rows="3" placeholder="Abu Bakar Bin Abdullah
&
Yasmin Binti Zainal"></textarea>
                          </div>
                        <?php }else { ?>
                          <?php foreach ($parent as $row): ?>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Parent's Full Names *</label>
                              <!-- <input type="text" class="form-control text-center" name="ParentName" placeholder="Abu Bakar Bin Abdullah & Yasmin Binti Zainal" value="<?php echo $row->ParentName; ?>"> -->
                              <textarea class="form-control text-center" name="ParentName" rows="3" placeholder="Abu Bakar Bin Abdullah
  &
  Yasmin Binti Zainal"><?php echo $row->ParentName; ?></textarea>
                            </div>
                          <?php endforeach; ?>
                        <?php } ?>

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
                          <textarea name="Bismillah" class="form-control text-center">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Greetings *</label>
                          <textarea name="Greetings" class="form-control text-center"><?php if ($details->Greetings != '') { echo $details->Greetings; }else { ?>Assalamualaikum Warahmatullahih Wabarakatuh
  Dengan izin Allah S.W.T kami,<?php } ?></textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Speech *</label>
                          <textarea name="Speech" class="form-control text-center" rows="3"><?php if ($details->Speech != '') { echo $details->Speech; }else { ?>Dengan segala hormatnya mempersilakan
Tuan/Puan/Dato'/Datin/Encik/Cik
ke majlis perkahwinan anakanda kami<?php } ?></textarea>
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
                          <label for="defaultFormControlInput" class="form-label">Wedding Day *</label>
                          <select class="form-control text-center" name="WeddingDay" id="WeddingDay">
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
                          <label for="defaultFormControlInput" class="form-label">Wedding Start Date & Time*</label>
                          <input type="datetime-local" class="form-control text-center" name="WeddingStartDate" value="<?php echo $details->WeddingStartDate; ?>">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding End Date & Time *</label>
                          <input type="datetime-local" class="form-control text-center" name="WeddingEndDate" value="<?php echo $details->WeddingEndDate; ?>">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Date in Hijri Calendar</label>
                          <input type="text" class="form-control text-center" name="WeddingDateHijri" placeholder="16 Rejab 1440H" value="<?php echo $details->WeddingDateHijri; ?>">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Full Wedding Address *</label>
                          <textarea class="form-control mb-2 text-center" rows="4" name="WeddingAddress" placeholder="Dewan Sri Cempaka MPKJ,
  Persiaran Saujana Impian, Saujana Impian,
  43000 Kajang, Selangor"><?php echo $details->WeddingAddress; ?></textarea>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Wedding Address Coordinate *</label><br>
                          <small> <i>*Get it Google Maps</i> </small>
                          <input type="text" class="form-control text-center" name="WeddingCoordinate" placeholder="3.0158146464174247, 101.79303831018107" value="<?php echo $details->WeddingCoordinate; ?>">
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
                          <h5 class="mb-0">Wedding Event *</h5>
                          <small>
                            <i>* Change if needed</i>
                          </small>
                        </div>
                        <div class="mb-2">
                          <textarea class="form-control text-center" name="WeddingEvent" rows="8" cols="80"><?php if ($details->WeddingEvent != '') { echo $details->WeddingEvent; }else { ?>Keluarga Pengantin:
11:00 Pagi - 1:00 Petang

Jiran dan sanak saudara:
1:00 Petang - 2.30 Petang

Rakan-rakan:
2:30 Petang - 4.00 Petang<?php } ?></textarea>
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
                          <label for="defaultFormControlInput" class="form-label">Last Date of RSVP *</label>
                          <input type="date" class="form-control text-center" name="ReservationDate" value="<?php echo $details->ReservationDate; ?>">
                        </div>

                        <?php if (empty($rsvp)) { ?>
                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Total Number of Guest *</label>
                            <input type="number" class="form-control text-center" name="GuestNumber" value="1000">
                          </div>
                        <?php }else { ?>
                          <?php foreach ($rsvp as $row): ?>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Total Number of Guest *</label>
                              <input type="number" class="form-control text-center" name="GuestNumber" value="<?php echo $row->TotalGuest; ?>">
                            </div>
                          <?php endforeach; ?>
                        <?php } ?>

                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Limit of each Guest *</label>
                          <input type="number" class="form-control text-center" name="GuestLimit" value="<?php if ($details->GuestLimit != '') { echo $details->GuestLimit; }else { ?>10<?php } ?>">
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
                        <?php if (empty($contact)) { ?>
                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Contact Name *</label>
                            <input type="text" class="form-control text-center" name="ContactName" placeholder="Abu Bakar (Ayah)">
                          </div>
                          <div class="mb-2">
                            <label for="defaultFormControlInput" class="form-label">Contact Number *</label>
                            <input type="number" class="form-control text-center" name="ContactNumber" placeholder="0123456789">
                          </div>
                        <?php }else { ?>
                          <?php foreach ($contact as $row): ?>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Contact Name *</label>
                              <input type="text" class="form-control text-center" name="ContactName" placeholder="Abu Bakar (Ayah)" value="<?php echo $row->ContactName; ?>">
                            </div>
                            <div class="mb-2">
                              <label for="defaultFormControlInput" class="form-label">Contact Number *</label>
                              <input type="number" class="form-control text-center" name="ContactNumber" placeholder="0123456789" value="<?php echo $row->ContactNumber; ?>">
                            </div>
                          <?php endforeach; ?>
                        <?php } ?>
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
                          <input type="text" class="form-control text-center" name="YouTube" value="<?php if ($details->OpeningSong != '') { echo $details->OpeningSong; }else { ?>https://www.youtube.com/watch?v=Nnd9UT8sgvU<?php } ?>">
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
                            <input type="checkbox" class="switch-input" <?php if ($details->ShowSong == '1') { echo "checked"; } ?> name="ShowOpening">
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
                            <input type="checkbox" class="switch-input" <?php if ($details->ShowAttendance == '1') { echo "checked"; } ?> name="ShowAttendance">
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
                            <input type="checkbox" class="switch-input" <?php if ($details->ShowDay == '1') { echo "checked"; } ?> name="ShowDays">
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
                            <input type="checkbox" class="switch-input" <?php if ($details->ShowSpeech == '1') { echo "checked"; } ?> name="ShowSpeech">
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
                      <input type="hidden" name="InvitationId" value="<?php echo hashids_encrypt($details->InvitationId); ?>">
                      <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                      <button type="submit" name="button" class="btn btn-dark">Simpan</button>
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

    <script type="text/javascript">

    $('#WeddingDate').val("<?php echo $details->WeddingDay; ?>").change();

    $("#modify-form").unbind('submit').bind('submit', function() {
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
            // window.location.href = "<?php echo base_url()."main"; ?>";
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

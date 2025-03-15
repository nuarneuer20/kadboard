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

                <?php if ($details->PackageId == 3): ?>
                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">
                        <div class="divider text-start">
                          <div class="divider-text">Background Settings</div>
                        </div>
                        <div class="mb-1">
                          <label for="formFile" class="form-label">Opening Background</label>
                          <input class="form-control" type="file" name="OpeningBackground">
                        </div>
                        <?php if ($details->OpeningBackground != ''): ?>
                          <div class="mb-2">
                            <img class="card-img card-img-left" style="object-fit: cover;object-position: center center;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);  background-position: top; border-radius: 5px;" src="<?php echo base_url().$details->OpeningBackground; ?>" alt="Card image" height="230px">
                          </div>
                        <?php endif; ?>
                        <div class="mb-4">
                          <small>
                            <i>* You can upload background image with or without details</i>
                          </small>
                        </div>
                        <div class="mb-1">
                          <label for="formFile" class="form-label">Main Background</label>
                          <input class="form-control" type="file" name="MainBackground">
                        </div>
                        <?php if ($details->MainBackground != ''): ?>
                          <div class="mb-2">
                            <img class="card-img card-img-left" style="object-fit: cover;object-position: center center;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);  background-position: top; border-radius: 5px;" src="<?php echo base_url().$details->MainBackground; ?>" alt="Card image" height="230px">
                          </div>
                        <?php endif; ?>
                        <div class="mb-2 text-start">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" <?php if ($details->HideCustom == '1') { echo "checked"; } ?> name="HideCustom">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Hide custom background</span>
                          </label>
                        </div>
                        <div class="mb-2 text-start">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" <?php if ($details->HideDetails == '1') { echo "checked"; } ?> name="HideDetails">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Hide details in background</span>
                          </label>
                        </div>
                        <div class="divider text-start">
                          <div class="divider-text">Background Settings</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body text-center">

                        <div class="mb-4">
                          <!-- <h5 class="mb-0">WALIMATULURUS</h5> -->
                          <label class="form-label">Select Event Type *</label>
                          <select class="form-control text-center" name="EventType" id="EventType">
                            <option value="WALIMATULURUS">WALIMATULURUS</option>
                            <option value="MAJLIS PERKAHWINAN">MAJLIS PERKAHWINAN</option>
                            <option value="MAJLIS PERTUNANGAN">MAJLIS PERTUNANGAN</option>
                          </select>
                        </div>
                        <div class="mb-4">
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
                        <?php $i = 1; if (empty($contact)) { ?>
                          <div id="contactlist">
                            <div class="contact" id="contact-1">
                              <div class="mb-2">
                                <label for="defaultFormControlInput" class="form-label">Contact Name *</label>
                                <input type="text" class="form-control text-center" name="ContactName-1" placeholder="Abu Bakar (Ayah)">
                              </div>
                              <div class="mb-2">
                                <label for="defaultFormControlInput" class="form-label">Contact Number *</label>
                                <input type="number" class="form-control text-center" name="ContactNumber-1" placeholder="60123456789">
                              </div>
                            </div>
                            <hr class="mt-4">
                          </div>
                          <!-- <button type="button" class="btn btn-dark" name="button">More Contact</button> -->
                        <?php }else { ?>
                          <div id="contactlist">
                            <?php $i = 1; foreach ($contact as $row): ?>
                              <div class="contact" id="contact-<?php echo $i; ?>">
                                <div class="mb-2">
                                  <label for="defaultFormControlInput" class="form-label">Contact Name *</label>
                                  <input type="text" class="form-control text-center" name="ContactName-<?php echo $i; ?>" placeholder="Abu Bakar (Ayah)" value="<?php echo $row->ContactName; ?>">
                                </div>
                                <div class="mb-2">
                                  <label for="defaultFormControlInput" class="form-label">Contact Number *</label>
                                  <input type="number" class="form-control text-center" name="ContactNumber-<?php echo $i; ?>" placeholder="60123456789" value="<?php echo $row->ContactNumber; ?>">
                                </div>
                                <input type="hidden" name="ContactId-<?php echo $i; ?>" value="<?php echo $row->ContactId; ?>">
                                <?php if ($i != 1){ ?>
                                  <a href="#!" class="remove" data-row="<?php echo $i; ?>" data-id="<?php echo $row->ContactId; ?>">
                                    <div class="divider">
                                      <div class="divider-text">Remove Contact</div>
                                    </div>
                                  </a>
                                <?php }else { ?>
                                  <!-- <a href="#!"> -->
                                    <div class="divider">
                                      <div class="divider-text">Default Contact</div>
                                    </div>
                                  <!-- </a> -->
                                <?php } ?>
                              </div>
                            <?php $i++; endforeach; ?>
                          </div>
                        <?php } ?>
                        <input type="hidden" name="Count" id="Count" value="<?php echo $i; ?>">
                        <button type="button" class="btn btn-dark mt-2" id="more-contact" name="button">More Contact</button>
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
                        <div class="mb-4">
                          <label class="switch switch-success">
                            <input type="checkbox" class="switch-input" <?php if ($details->ShowSnow == '1') { echo "checked"; } ?> name="ShowSnow">
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="ti ti-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="ti ti-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">Snow Drop Effect</span>
                          </label>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Opening Word Color</label>
                          <input type="color" class="form-control" name="OpeningColor" value="<?php echo $details->OpeningColor? $details->OpeningColor:$details->TitleColor; ?>">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Main Word Color</label>
                          <input type="color" class="form-control" name="MainColor" value="<?php echo $details->MainColor? $details->MainColor:$details->TitleColor; ?>">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Snow Drop Color</label>
                          <input type="color" class="form-control" name="SnowColor" value="<?php echo $details->SnowColor? $details->SnowColor:$details->DesignColor; ?>">
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

    $('#EventType').val("<?php echo $details->EventType; ?>").change();
    $('#WeddingDate').val("<?php echo $details->WeddingDay; ?>").change();

    // $("#modify-form").unbind('submit').bind('submit', function() {
    //   var form = $(this);
    //   $.ajax({
    //     url: form.attr('action'),
    //     type: form.attr('method'),
    //     data: form.serialize(),
    //     dataType: 'json',
    //     success:function(data)
    //     {
    //       $('.txt_csrfname').val(data.token);
    //       if (data.status == true)
    //       {
    //         // window.location.href = "<?php echo base_url()."main"; ?>";
    //         notification('black','slideTopRight','Message',data.message,10000);
    //       }else{
    //         notification('black','slideTopRight','Message',data.message,10000);
    //       }
    //     },
    //     error: function(xhr, status, error) {
    //       notification('black','slideTopRight','Message','Something went wrong. Please try again later.',10000);
    //     },
    //   });
    //   return false;
    // });

    $("#modify-form").unbind('submit').bind('submit', function() {

      var form     = $(this);
      var formUp   = $(this)[0];
      var dataForm = new FormData(formUp);

      $.ajax({
          contentType: 'multipart/form-data',
          url: form.attr('action'),
          type: form.attr('method'),
          data: dataForm,
          dataType: 'json',
          contentType: false,
          processData: false,
          async:true,
          success:function(data)
          {
            $('.txt_csrfname').val(data.token);
            if (data.status == true)
            {
              // window.location.href = "<?php echo base_url()."main"; ?>";
              notification('black','slideTopRight','Message',data.message,10000);
              setTimeout(
                function()
                {
                  window.location.reload();
                }, 1000
              );
            }else{
              notification('black','slideTopRight','Message',data.message,10000);
            }
          },
          error: function(xhr, status, error) {
            notification('black','slideTopRight','Message','Something went wrong. Please try again later.',10000);
          },
      });
      return false;
    });

    $("#more-contact").on('click', function(){

      var total = $('.contact').length + 1;

      var contact = '<div class="contact" id="contact-'+total+'">'+
                      '<div class="mb-2">'+
                        '<label for="defaultFormControlInput" class="form-label">Contact Name *</label>'+
                        '<input type="text" class="form-control text-center" name="ContactName-'+total+'" placeholder="Abu Bakar (Ayah)" value="">'+
                      '</div>'+
                      '<div class="mb-2">'+
                        '<label for="defaultFormControlInput" class="form-label">Contact Number *</label>'+
                        '<input type="number" class="form-control text-center" name="ContactNumber-'+total+'" placeholder="60123456789" value="">'+
                      '</div>'+
                      '<a href="#!" class="remove" data-row="'+total+'" data-id="0">'+
                        '<div class="divider">'+
                          '<div class="divider-text">Remove Contact</div>'+
                        '</div>'+
                      '</a>'
                    '</div>';

      $('#contactlist').append(contact);
      $('#Count').val(total);
    });

    $("#contactlist").on('click','.remove', function(){
      var row = $(this).data('row');
      var id = $(this).data('id');

      if (id != 0) {
        var csrfName   = $('.txt_csrfname').attr('name');
        var csrfHash   = $('.txt_csrfname').val();

        $.ajax({
          url		   : "<?php echo base_url();?>main/remove",
          type		 : "POST",
          dataType : "JSON",
          data		 :{id:id, [csrfName]: csrfHash},
          success	 :function(data)  {
            $('.txt_csrfname').val(data.token);
            $("#contact-"+row).remove();
            notification('black','slideTopRight','Message',data.result,10000);
          },
          error: function(xhr, status, error) {
            // getToken();
          }
        });
      }else {
        $("#contact-"+row).remove();
      }

    });

    // $(".remove").on('click', function(){
    //   var row = $(this).data('row');
    //   $("#contact-"+row).remove();
    // });

    </script>
  </body>
</html>

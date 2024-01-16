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
                  <!-- <div class="d-grid gap-2">
                    <button type="button" name="button" class="btn btn-primary">Find more template</button>
                  </div> -->
                </div>
              </div>

              <div class="row mb-5">

                <?php $i=1; foreach ($invitation as $row):
                  $searchFor  = $row->InvitationId;
            			$filterbyid =
            			array_values(array_filter($bride, function($element) use($searchFor){
            				return isset($element->InvitationId) && $element->InvitationId == $searchFor;
            			}));

                  if (empty($filterbyid)) {
                    $title = 'Untitled';
                  }else {
                    $title = '';
                    foreach ($filterbyid as $irow) {
                      $title .= $irow->BrideName;
                    }
                  }

                  if ($row->WeddingStartDate == null) {
                    $date = 'Not set';
                  }else {
                    $date = date('d/m/Y', strtotime($row->WeddingStartDate));
                  }
                ?>

                  <div class="col-md-6">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img class="card-img card-img-left" style="object-fit: cover;" src="<?php echo base_url().$row->DesignUrl; ?>" alt="Card image" height="255px">
                        </div>

                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="row mb-4">
                              <div class="col-6">
                                <a href="<?php echo base_url()."modify/".hashids_encrypt($row->InvitationId,'config',15); ?>">
                                  <div class="d-grid gap-2">
                                    <button type="button" name="button" class="btn btn-dark">Edit</button>
                                  </div>
                                </a>
                              </div>
                              <div class="col-6">
                                <a target="_blank" href="<?php echo base_url()."invitation/".hashids_encrypt($row->InvitationId,'config',10); ?>">
                                  <div class="d-grid gap-2">
                                    <button type="button" name="button" class="btn btn-dark">View Invitation</button>
                                  </div>
                                </a>
                              </div>
                              <div class="col-6 mt-2">
                                <div class="d-grid gap-2">
                                  <input type="hidden" id="link-<?php echo $i; ?>" value="<?php echo base_url()."invitation/".hashids_encrypt($row->InvitationId,'config',10); ?>">
                                  <button type="button" name="button" class="btn btn-dark copy" data-id="<?php echo $i; ?>">Copy Link</button>
                                </div>
                              </div>
                              <div class="col-6 mt-2">
                                <a href="<?php echo base_url()."guest/".hashids_encrypt($row->InvitationId,'config',15); ?>">
                                  <div class="d-grid gap-2">
                                    <button type="button" name="button" class="btn btn-dark">View Guest</button>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text">
                              Type: <?php echo $row->EventType; ?>
                            </p>
                            <p class="card-text"><small class="text-muted">Event date: <?php echo $date; ?></small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php $i++; endforeach; ?>

              </div>

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
    $('.copy').on('click', function(){
      var id = $(this).data('id');
      var copyText = document.getElementById("link-"+id);
      copyText.type = 'text';
      copyText.select();
      document.execCommand("copy");
      copyText.type = 'hidden';

      alert('Link has been copied');
    });
    </script>
  </body>
</html>

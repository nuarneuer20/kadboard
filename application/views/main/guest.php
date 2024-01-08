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

              <div class="card">
                <h5 class="card-header">Guest List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Guest Name</th>
                        <th class="text-center">Guest Phone</th>
                        <th class="text-center">Total Guest</th>
                        <th class="text-center">Attend</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $tot = 0; foreach ($guest as $row):
                        if ($row->Attend == 1) {
                          $attend = 'Hadir';
                        }else {
                          $attend = 'Tidak Hadir';
                        }

                        $tot += $row->TotalGuest;
                      ?>
                        <tr>
                          <td><?php echo $row->GuestName; ?></td>
                          <td class="text-center"><?php echo $row->GuestNumber; ?></td>
                          <td class="text-center"><?php echo $row->TotalGuest; ?></td>
                          <td class="text-center"><?php echo $attend; ?></td>
                        </tr>
                      <?php endforeach; ?>
                      <tr class="bg-dark">
                        <td class="text-end text-white" colspan="3">TOTAL GUEST</td>
                        <td class="text-center text-white"><?php echo $tot; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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

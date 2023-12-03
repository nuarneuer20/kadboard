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
                  <img class="card-img" style="object-fit: cover; object-position: top center;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);  background-position: top; border-radius: 5px;" src="<?php echo base_url().$design->DesignUrl; ?>" alt="Card image" height="230px">
                </div>
              </div>

              <form id="checkout-form" action="<?php echo base_url(); ?>payment" method="post">
                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="mb-2">
                          <h5 class="mb-0">Customer Details</h5>
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Name *</label>
                          <input type="text" class="form-control" name="Name">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Email *</label>
                          <input type="email" class="form-control" name="Email">
                        </div>
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Phone Number *</label>
                          <input
                            type="number"
                            class="form-control"
                            name="MobileNumber"
                            placeholder="60123456789"
                            pattern="(\+?6?01)[0-46-9]-*[0-9]{7,8}"
                            autofocus />
                        </div>
                        <div class="mb-3">
                          <label for="defaultFormControlInput" class="form-label">Coupon *</label>
                          <input type="text" class="form-control" name="Coupon">
                        </div>
                        <div class="mb-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="Terms" />
                            <label class="form-check-label" for="terms-conditions">
                              I agree to the
                              <a target="_blank" href="<?php echo base_url(); ?>terms">Terms and Conditions</a> &
                              <a target="_blank" href="<?php echo base_url(); ?>privacy">Privacy Policy</a>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title m-0">Checkout Details</h5>
                      </div>
                      <div class="card-datatable table-responsive">
                        <table class="datatables-order-details table border-top">
                          <thead>
                            <tr>
                              <th>Item</th>
                              <th class="text-center">Price</th>
                              <th class="text-center">QTY</th>
                              <th class="text-end">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><?php echo $design->DesignSku; ?></td>
                              <td class="text-center">RM 60.00</td>
                              <td class="text-center">1</td>
                              <td class="text-end">RM 60.00</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-center m-3 mb-2 p-1">
                          <div class="order-calculations">
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100 text-heading">Subtotal:</span>
                              <h6 class="mb-0">RM 60.00</h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100 text-heading">Discount:</span>
                              <h6 class="mb-0">- RM 60.00</h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100 text-heading">Tax:</span>
                              <h6 class="mb-0">RM 0.00</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <h6 class="w-px-100 mb-0">Total:</h6>
                              <h6 class="mb-0">RM 0.00</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6 col-12 mx-auto">
                    <div class="d-grid gap-2">
                      <input type="hidden" name="DesignId" value="<?php echo $design->DesignId; ?>">
                      <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                      <button type="submit" name="button" class="btn btn-dark">CHECKOUT</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <!--/ Content -->

            <?php echo $footer; ?>

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
    $("#checkout-form").unbind('submit').bind('submit', function() {
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
            if (data.login == true) {
              window.location.href = "<?php echo base_url()."main"; ?>";
            }else {
              window.location.href = "<?php echo base_url()."details/"; ?>"+data.message;
            }
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
    </script>
  </body>
</html>

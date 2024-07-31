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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third-party/notiflix/notiflix-3.2.7.min.css" />

    <style>
      .StripeElement {
          /* box-sizing: border-box;
          height: 40px;
          padding: 10px 12px;
          border: 1px solid transparent;
          border-radius: 4px;
          background-color: white;
          box-shadow: 0 1px 3px 0 #e6ebf1;
          -webkit-transition: box-shadow 150ms ease;
          transition: box-shadow 150ms ease; */

          display: block;
          width: 100%;
          padding: 0.422rem 0.875rem;
          font-size: 0.9375rem;
          font-weight: 400;
          line-height: 1.5;
          color: #6f6b7d;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #dbdade;
          appearance: none;
          border-radius: 0.375rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      .StripeElement--focus {
        color: #6f6b7d;
        background-color: #fff;
        border-color: #7367f0;
        outline: 0;
        box-shadow: 0 0.125rem 0.25rem rgba(165, 163, 174, 0.3);
      }

      .StripeElement--invalid {
          border-color: #fa755a;
      }

      .StripeElement--webkit-autofill {
          background-color: #fefde5 !important;
      }

      #card-errors {
        color: #fa755a;
        margin-top: 5px;
      }
    </style>
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

              <form id="checkout-form" action="<?php echo base_url(); ?>validation" method="post">
              <!-- <form id="payment-form" action="<?php echo base_url(); ?>payment" method="post"> -->
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
                        <div class="mb-2">
                          <label for="defaultFormControlInput" class="form-label">Package</label>
                          <select class="form-control" name="Package" id="PackageId">
                            <?php foreach ($package as $row): ?>
                              <option <?php if ($row->PackageId == 2): ?>selected<?php endif; ?> value="<?php echo $row->PackageId; ?>"><?php echo $row->PackageName; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="alert alert-dark mb-0 mt-2" role="alert">
                            <strong>FEATURES</strong> : &nbsp <span id="features"></span>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="defaultFormControlInput" class="form-label">Coupon</label>
                          <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                            Sila dapat coupon diskaun di tiktok <a href="https://www.tiktok.com/@kadboard.com?lang=en" target="_blank">kadboard.com</a>
                          </div>
                          <div class="input-group">
                            <input type="text" class="form-control" name="Coupon" placeholder="Enter coupon">
                            <button class="btn btn-outline-primary waves-effect" type="button" id="search-coupon">CHECK COUPON</button>
                          </div>
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
                        <h5 class="card-title m-0">Item Details</h5>
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
                              <td class="text-center">RM <span class="original">0.00</span> </td>
                              <td class="text-center">1</td>
                              <td class="text-end">RM <span class="original">0.00</span></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-center m-3 mb-2 p-1">
                          <div class="order-calculations">
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100 text-heading">Subtotal:</span>
                              <h6 class="mb-0">RM <span class="original">0.00</span></h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100 text-heading">Discount:</span>
                              <h6 class="mb-0">RM <span class="discount">0.00</span></h6>
                            </div>
                            <div class="d-flex justify-content-between">
                              <h6 class="w-px-100 mb-0">Total:</h6>
                              <h6 class="mb-0">RM <span class="total">0.00</span></h6>
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
                      <button type="submit" name="button" class="btn btn-dark">PAY WITH DEBIT/CREDIT</button>
                    </div>
                  </div>
                </div>
              </form>

              <form id="hidden-form" action="<?php echo base_url(); ?>verifiying" method="post">
                <input type="hidden" name="SubmitName" id="name">
                <input type="hidden" name="SubmitEmail" id="email">
                <input type="hidden" name="SubmitMobileNumber" id="mobilenumber">
                <input type="hidden" name="SubmitCoupon" id="coupon">
                <input type="hidden" name="Package" id="package">
                <input type="hidden" name="DesignId" value="<?php echo $design->DesignId; ?>">
                <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
              </form>

              <!-- Modal -->
              <div class="modal fade" id="stripe-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div>
                        <h5 class="modal-title" id="modalCenterTitle">DEBIT/CREDIT CARD PAYMENT</h5>
                        One-time payment only
                      </div>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form id="payment-form">
                        <div class="row">
                          <div class="col-12 mb-2">
                            <label class="form-label" for="CardHolderName">Card Holder Name</label>
                            <input type="text" id="CardHolderName" class="form-control" placeholder="Your name" />
                          </div>
                          <div class="col-12 mb-4">
                            <div>
                              <label class="form-label" for="card-element">Credit or Debit Card</label>
                              <div id="card-element" class="StripeElement StripeElement--empty"></div>
                              <div id="card-errors" role="alert"></div>
                            </div>
                          </div>
                          <div class="col-12 mb-4 d-grid">
                            <button type="submit" id="paynow" class="btn btn-dark">PAY</button>
                          </div>
                          <div class="col-12 text-center">
                            <img src="<?php echo base_url(); ?>assets/stripe/Powered by Stripe - black.svg" height="40px;">
                          </div>
                        </div>
                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                      </form>
                    </div>
                  </div>
                </div>
              </div>


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
    <script src="<?php echo base_url(); ?>assets/third-party/notiflix/notiflix-3.2.7.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/third-party/notiflix/notiflix-loading-aio-3.2.7.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/third-party/notiflix/notiflix-aio-3.2.7.min.js"></script>

    <script src="https://js.stripe.com/v3/"></script>

    <script type="text/javascript">
    // $(document).ajaxStart(function() {
    //     Notiflix.Loading.standard();
    // });
    //
    // $(document).ajaxStop(function() {
    //     Notiflix.Loading.remove();
    // });

    var subtotal = 0;
    var discount = 0;
    var total = 0;
    var name = '';
    var email = '';
    var mobilenumber = '';
    var coupon = '';
    var package = 0;

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
            name         = data.field.Name;
            email        = data.field.Email;
            mobilenumber = data.field.MobileNumber;
            coupon       = data.field.Coupon;
            package      = data.field.Package;
            $('#stripe-modal').modal('show');
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

    $('#search-coupon').on('click', function(){
      check_coupon();
    });

    function check_coupon(){
      var csrfName   = $('.txt_csrfname').attr('name');
      var csrfHash   = $('.txt_csrfname').val();

      var Coupon = $("input[name=Coupon]").val();

      $.ajax({
        url		   : "<?php echo base_url();?>coupon",
        type		 : "POST",
        dataType : "JSON",
        data		 :{Coupon:Coupon, [csrfName]: csrfHash},
        success	 :function(data)  {
          $('.txt_csrfname').val(data.token);
          get_package();
          notification('black','slideRightBottom','Message',data.message,10000);
        },
        error: function(xhr, status, error) {
          // getToken();
        }
      });
    }

    $('#PackageId').on('change', function(){
      get_package();
    });

    get_package();

    function get_package(){
      var csrfName   = $('.txt_csrfname').attr('name');
      var csrfHash   = $('.txt_csrfname').val();

      var Package = $("#PackageId").val();
      var Coupon = $("input[name=Coupon]").val();

      $.ajax({
        url		   : "<?php echo base_url();?>package",
        type		 : "POST",
        dataType : "JSON",
        data		 :{Package:Package,Coupon:Coupon, [csrfName]: csrfHash},
        success	 :function(data)  {
          $('.txt_csrfname').val(data.token);
          $('#features').html(data.response.PackageDescription);
          $('.original').html(data.calculation.original);
          $('.discount').html(data.calculation.discount);
          $('.total').html(data.calculation.total);

          subtotal = data.calculation.original;
          discount = data.calculation.discount;
          total    = data.calculation.total;
        },
        error: function(xhr, status, error) {
          // getToken();
        }
      });
    }

    $("#hidden-form").unbind('submit').bind('submit', function() {
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

    // Create a Stripe client.
    var stripe = Stripe('<?php echo $this->config->item('stripe_publishable_key'); ?>');
    var elements = stripe.elements();
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Sen", sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var card = elements.create('card', {style: style});
    card.mount('#card-element');

    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {

      event.preventDefault();

      if ($('#CardHolderName').val() == '') {
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = 'Card holder name is required.';
      }else {
        $('#paynow').attr('disabled', 'disabled');
        Notiflix.Loading.standard();

        stripe.createPaymentMethod({
            type: 'card',
            card: card,
        }).then(function(result) {
          if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            $('#paynow').removeAttr('disabled');
            Notiflix.Loading.remove();
          }else {
            var csrfName   = $('.txt_csrfname').attr('name');
            var csrfHash   = $('.txt_csrfname').val();

            $.ajax({
                url: '<?php echo base_url('stripe'); ?>',
                method: 'POST',
                data: {
                  Amount: total,
                  Name: name,
                  Mobile: mobilenumber,
                  Email: email,
                  Coupon: coupon,
                  SubTotal: subtotal,
                  Discount: discount,
                  Total: total,
                  Package: package,
                  [csrfName]: csrfHash
                },
                success: function(response) {
                  var transaction = JSON.parse(response).TransactionId;
                  var clientSecret = JSON.parse(response).clientSecret;

                  get_token();

                  stripe.confirmCardPayment(clientSecret, {
                    payment_method: result.paymentMethod.id
                  }).then(function(result) {
                    if (result.error) {
                      var errorElement = document.getElementById('card-errors');

                      send_error(transaction, result.error.code, result.error.message);

                      errorElement.textContent = result.error.message;

                      $('#paynow').removeAttr('disabled');
                      Notiflix.Loading.remove();
                    } else {
                      if (result.paymentIntent.status === 'succeeded') {
                        $('#name').val(name);
                        $('#email').val(email);
                        $('#mobilenumber').val(mobilenumber);
                        $('#coupon').val(coupon);
                        $('#package').val(package);
                        $('#discount').val(discount);
                        $('#subtotal').val(subtotal);
                        $('#total').val(total);

                        send_error(transaction, 'success', 'Payment successfully');

                        $('#hidden-form').submit();
                      }
                    }
                  });
                }
            });
          }
        });
      }
    });

    function send_error(response, code, message){
      var csrfName   = $('.txt_csrfname').attr('name');
      var csrfHash   = $('.txt_csrfname').val();

      $.ajax({
        url		   : "<?php echo base_url();?>error",
        type		 : "POST",
        dataType : "JSON",
        data		 :{TransactionId:response,Code:code ,Message:message	,[csrfName]: csrfHash},
        success	 :function(data)  {
          $('.txt_csrfname').val(data.token);
        },
        error: function(xhr, status, error) {
          // getToken();
        }
      });
    }

    function get_token(){
      $.ajax({
        url		   : "<?php echo base_url();?>get_token",
        type		 : "GET",
        dataType : "JSON",
        success	 :function(data)  {
          $('.txt_csrfname').val(data.token);
        },
        error: function(xhr, status, error) {
          // getToken();
        }
      });
    }

    </script>
  </body>
</html>

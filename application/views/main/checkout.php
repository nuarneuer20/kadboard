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

    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid #ccd0d2;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
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

              <!-- <form id="checkout-form" action="<?php echo base_url(); ?>checkout/stripe" method="post"> -->
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



              <!-- <form action="<?php echo base_url(); ?>stripe" method="post" id="payment-form">
                  <input type="email" name="stripeEmail" placeholder="Email Address">
                  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="pk_test_51OhwsEFYjbsGTXVacZ31UEl0CIb8pPMUluKHVEvdOx0Jtla5XVb7VPVbJNyfJsKqOz9N5xLNNAeTevgXSYnpKO9p0050yEekIv"
                          data-amount="5000"
                          data-currency="myr"
                          data-name="Test Charge"
                          data-description="Charge for Test"
                          data-locale="auto">
                  </script>
              </form> -->

              <form action="<?php echo base_url(); ?>stripe" method="post" id="payment-form">
                  <div class="form-row">
                      <label for="card-element">Credit or debit card</label>
                      <div id="card-element">
                          <!-- A Stripe Element will be inserted here. -->
                      </div>
                      <!-- Used to display form errors. -->
                      <div id="card-errors" role="alert"></div>
                  </div>
                  <button type="submit">Submit Payment</button>
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

    <script src="https://js.stripe.com/v3/"></script>

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

    // Create a Stripe client.
        var stripe = Stripe('pk_test_51OhwsEFYjbsGTXVacZ31UEl0CIb8pPMUluKHVEvdOx0Jtla5XVb7VPVbJNyfJsKqOz9N5xLNNAeTevgXSYnpKO9p0050yEekIv');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
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

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form.
            form.submit();
        }
    </script>
  </body>
</html>

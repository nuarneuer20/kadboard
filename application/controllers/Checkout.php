<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require FCPATH  . 'vendor/autoload.php';
require_once 'vendor/autoload.php';

class Checkout extends CI_Controller {

	function __construct(){
    parent:: __construct();
    $this->load->model('Checkout_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\

		$this->global_data['CustomerId'] = $this->session->userdata('CustomerId');
    $this->global_data['Email']      = $this->session->userdata('Email');
		$this->global_data['logged_in']  = $this->session->userdata('logged_in');

		$this->global_data['CreatedDate']  = date("Y-m-d H:i:s", time());
  	$this->global_data['CreatedBy']    = $this->global_data['CustomerId'];
  	$this->global_data['UpdatedDate']  = date("Y-m-d H:i:s", time());
  	$this->global_data['UpdatedBy']    = $this->global_data['CustomerId'];
  }

	public function validate()
	{
		$data = array_merge($this->global_data);
		$sku = $this->uri->segment(2);

		$data['header'] = $this->load->view('templates/main-header','',true);
    $data['navbar'] = $this->load->view('templates/main-navbar',$data,true);
		$data['footer'] = $this->load->view('templates/main-footer','',true);
		$data['bottom'] = $this->load->view('templates/main-bottom','',true);

		$data['design'] = $this->Checkout_model->get_design($sku);
		$data['package'] = $this->Checkout_model->get_package();

		$this->load->view('main/checkout',$data);
	}

	function package(){
    $data = array_merge($this->global_data);

		$get = $this->input->post();

		$response = $this->Checkout_model->get_package_details($get['Package']);

		$coupon = $this->Checkout_model->get_coupon($get['Coupon']);

		if (isset($coupon)) {
			$usage = $this->Checkout_model->count_coupon($coupon->CouponId);
			if ($coupon->CouponStatusId == 3 || date('Y-m-d') >= $coupon->ExpiryDate) {
				$status    = false;
			}elseif (date('Y-m-d') >= $coupon->ExpiryDate) {
				$status    = false;
			}elseif ($usage == $coupon->Quantity || $usage > $coupon->Quantity) {
				$status    = false;
			}else {
				$status    = true;
			}
		}else {
			$status    = false;
		}

		$send['original'] = $response->PackagePrice;
		if ($status == true) {
			if ($coupon->Discount != 0) {
				$discount = ($response->PackagePrice * $coupon->Discount) / 100;
				$send['discount'] = number_format($discount,2);
				$total = $send['original'] - $send['discount'];
				$send['total'] = number_format($total,2);
			}else {
				$send['discount'] = '0.00';
				$send['total'] = $response->PackagePrice;
			}
		}else {
			$send['discount'] = '0.00';
			$send['total'] = $response->PackagePrice;
		}

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = true;
    $result['response']  = $response;
		$result['calculation']  = $send;

    echo json_encode($result);
  }

	function validation(){

    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('Name', 'name', 'required');
    $this->form_validation->set_rules('Email', 'email', 'required|is_unique[customer.Email]',
			array('is_unique' => 'Email already exist. Please login to your account')
		);
		$this->form_validation->set_rules('MobileNumber', 'mobile number', 'required');
		$this->form_validation->set_rules('Terms', 'terms', 'required',
			array('required' => 'You must agree to the Terms & Conditions and Privacy Policy')
		);

    if ($this->form_validation->run() == FALSE) {
      // Validation failed
      $status = false;
      $error  = $this->form_validation->error_array();

      $response = '';
      foreach ($error as $key => $value) {
        $response .= $value.'<br>';
      }
      $errorcode = 400;

    } else {
			$status = true;
      $get = $this->input->post();
			$coupon = $this->Checkout_model->get_coupon($get['Coupon']);

			if (isset($coupon)) {
				$usage = $this->Checkout_model->count_coupon($coupon->CouponId);
				if ($coupon->CouponStatusId == 3 || date('Y-m-d') >= $coupon->ExpiryDate) {
					$response = 'Proceed to payment';
				}elseif (date('Y-m-d') >= $coupon->ExpiryDate) {
					$response = 'Proceed to payment';
				}elseif ($usage == $coupon->Quantity || $usage > $coupon->Quantity) {
					$response = 'Proceed to payment';
				}else {
					if ($coupon->Discount == 0) {
						$response = 'Redeemed';
					}else {
						$response = 'Proceed to payment';
					}
				}
			}else {
				$response = 'Proceed to payment';
			}

    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;
		$result['field']    = $this->input->post();

    echo json_encode($result);
  }

	function coupon(){
    $data = array_merge($this->global_data);

		$this->form_validation->set_rules('Coupon', 'coupon', 'required');

		if ($this->form_validation->run() == FALSE) {
      // Validation failed
      $status = false;
			$response = 'No coupon was submitted';
      $errorcode = 400;

    } else {

			$get = $this->input->post();

			//Check Coupon
			$coupon = $this->Checkout_model->get_coupon($get['Coupon']);
			$button = 'PAY WITH DEBIT/CREDIT';
			if (isset($coupon)) {
				$usage = $this->Checkout_model->count_coupon($coupon->CouponId);
				if ($coupon->CouponStatusId == 3 || date('Y-m-d') >= $coupon->ExpiryDate) {
					$status    = false;
					$response  = 'Coupon already expired. Please enter another coupon.';
					$errorcode = 400;
				}elseif (date('Y-m-d') >= $coupon->ExpiryDate) {
					$status    = false;
					$response  = 'Coupon invalid. Please enter correct coupon.';
					$errorcode = 400;
				}elseif ($usage == $coupon->Quantity || $usage > $coupon->Quantity) {
					$status    = false;
					$response  = 'Coupon has been fully redeemed. Please enter correct coupon.';
					$errorcode = 400;
				}else {
					$status    = true;
					$response  = 'Coupon valid';
					$errorcode = 200;
					if ($coupon->Discount == 0) {
						$button = 'REDEEM COUPON';
					}else {
						$button = 'PAY WITH DEBIT/CREDIT';
					}
				}
			}else {
				$status    = false;
				$response  = 'Coupon invalid. Please enter correct coupon';
				$errorcode = 400;
			}
		}

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;
		$result['button']   = $button;

    echo json_encode($result);
  }

	function payment(){

    $data = array_merge($this->global_data);

		$get = $this->input->post();

		if ($data['logged_in'] != TRUE) {
			//Generate Login
			$password = rand(1000,9999);
			$send = [
				'CustomerName' => $get['SubmitName'],
				'Email'        => $get['SubmitEmail'],
				'MobileNumber' => $get['SubmitMobileNumber'],
				'Password'     => hashids_encrypt($password),
			];

			$data['CustomerId'] = $this->Checkout_model->insert_customer($send);
			$data['CreatedBy'] = $data['CustomerId'];
		}

		$coupon = $this->Checkout_model->get_coupon($get['SubmitCoupon']);

		$cid = 0;
		if (isset($coupon)) {
			$cid = $coupon->CouponId;
		}

		//Assign Invitation
		$loggerid = $this->App_logger_model->insert_app_logger($data);
		$invite = [
			'CustomerId'         => $data['CustomerId'],
			'DesignId'           => $get['DesignId'],
			'CouponId'           => $cid,
			'InvitationStatusId' => 1,
			'AppLoggerId'        => $loggerid,
		];
		$this->Checkout_model->create_invitation($invite);

		$status    = true;
		$response  = hashids_encrypt($data['CustomerId'],'config',8);
		$errorcode = 200;

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;
		$result['login']    = $data['logged_in'];

    echo json_encode($result);
  }

	function details(){
		$data = array_merge($this->global_data);

		$data['id'] = $this->uri->segment(2);
		$id = hashids_decrypt($this->uri->segment(2),'config',8);

		$data['header'] = $this->load->view('templates/auth-header','',true);
		$data['footer'] = $this->load->view('templates/auth-footer','',true);

		$data['details'] = $this->Checkout_model->get_details($id);

		$this->load->view('details',$data);
	}

	public function stripe() {
		$data = array_merge($this->global_data);

    \Stripe\Stripe::setApiKey($this->config->item('stripe_api_key'));

		$get = $this->input->post();

		$coupon = $this->Checkout_model->get_coupon($get['Coupon']);

		$CouponId = 0;
		if (isset($coupon)) {
			$CouponId = $coupon->CouponId;
		}

		$send = [
			'Name' => $get['Name'],
			'Email' => $get['Email'],
			'MobileNumber' => $get['Mobile'],
			'CouponId' => $CouponId,
			'PackageId' => $get['Package'],
			'SubTotal' => $get['SubTotal'],
			'Discount' => $get['Discount'],
			'Total' => $get['Total'],
			'TransactionDate' => date('Y-m-d H:i:s')
		];

		$TransactionId = $this->Checkout_model->insert_transaction($send);

		$amount = $get['Amount'] * 100;

    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount'        => $amount,
        'currency'      => 'myr',
				'description'   => 'KADBOARD: '.$TransactionId,
				'receipt_email' => $get['Email'],
    ]);

		$result['token']         = $data['csrf']['hash'];
		$result['clientSecret']  = $paymentIntent->client_secret;
		$result['TransactionId'] = hashids_encrypt($TransactionId,'config',8);

    echo json_encode($result);
  }

	function error(){
    $data = array_merge($this->global_data);

		$get = $this->input->post();

		$send = [
			'TransactionId' => hashids_decrypt($get['TransactionId'],'config',8),
			'ReturnCode'    => $get['Code'],
			'ReturnMessage' => $get['Message'],
		];
		$this->Checkout_model->update_transaction($send);

    $result['token']    = $data['csrf']['hash'];

    echo json_encode($result);
  }

	function get_token(){
    $data = array_merge($this->global_data);

    $result['token']    = $data['csrf']['hash'];
    echo json_encode($result);
  }



}

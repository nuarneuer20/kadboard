<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

		$this->load->view('main/checkout',$data);
	}

	function payment(){
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('Name', 'name', 'required');
    $this->form_validation->set_rules('Email', 'email', 'required|is_unique[customer.Email]',
			array('is_unique' => 'Email already exist. Please use another email')
		);
		$this->form_validation->set_rules('MobileNumber', 'mobile number', 'required');
		$this->form_validation->set_rules('Coupon', 'coupon', 'required');
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
			$get = $this->input->post();

			//Check Coupon
			$coupon = $this->Checkout_model->get_coupon($get['Coupon']);

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
					if ($data['logged_in'] != TRUE) {
						//Generate Login
						$password = rand(1000,9999);
						$send = [
							'CustomerName' => $get['Name'],
							'Email'        => $get['Email'],
							'MobileNumber' => $get['MobileNumber'],
							'Password'     => hashids_encrypt($password),
						];

			      $data['CustomerId'] = $this->Checkout_model->insert_customer($send);
						$data['CreatedBy'] = $data['CustomerId'];
					}

					//Assign Invitation
					$loggerid = $this->App_logger_model->insert_app_logger($data);
					$invite = [
						'CustomerId'         => $data['CustomerId'],
						'DesignId'           => $get['DesignId'],
						'CouponId'           => $coupon->CouponId,
						'InvitationStatusId' => 1,
						'AppLoggerId'        => $loggerid,
					];
		      $this->Checkout_model->create_invitation($invite);

					$status    = true;
					$response  = hashids_encrypt($data['CustomerId']);
					$errorcode = 200;
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
		$result['login']    = $data['logged_in'];

    echo json_encode($result);
  }

	function details(){
		$data = array_merge($this->global_data);

		$data['id'] = $this->uri->segment(2);
		$id = hashids_decrypt($this->uri->segment(2));

		$data['header'] = $this->load->view('templates/auth-header','',true);
		$data['footer'] = $this->load->view('templates/auth-footer','',true);

		$data['details'] = $this->Checkout_model->get_details($id);

		$this->load->view('details',$data);
	}

}

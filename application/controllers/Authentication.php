<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    $this->load->model('Authentication_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\
  }

	public function index()
	{
    $data['header'] = $this->load->view('templates/auth-header','',true);
    $data['footer'] = $this->load->view('templates/auth-footer','',true);

		$this->load->view('login',$data);
	}

  function login(){
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

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
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->Authentication_model->verify($username, $password);

      if ($user) {

        $user_data = array(
          'CustomerId' => $user->CustomerId,
          'Email'      => $user->Email,
          'logged_in'  => TRUE
        );
        $this->session->set_userdata($user_data);

        $status    = true;
        $response  = 'Successfully Login!';
        $errorcode = 200;
      } else {
        $status    = false;
        $response  = 'Username or password is wrong!';
        $errorcode = 400;
      }
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

    echo json_encode($result);
  }

  function logout(){
    $this->session->sess_destroy();
    redirect();
  }

  public function register()
	{
    $data = array_merge($this->global_data);

    $data['header'] = $this->load->view('templates/auth-header','',true);
    $data['footer'] = $this->load->view('templates/auth-footer','',true);

		$this->load->view('register',$data);
	}

  public function registration()
	{
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('MobileNumber', 'mobile number', 'required');
    $this->form_validation->set_rules('email', 'email', 'required|is_unique[customer.Email]',array(
        'is_unique'     => 'This %s already exists.'
      )
    );
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('terms', 'terms', 'required',array(
        'required'     => 'You must agree to the Terms & Conditions and Privacy Policy'
      )
    );

    if($this->form_validation->run() == TRUE){
      $get = $this->input->post();

      $register = [
        'MobileNumber' => $get['MobileNumber'],
        'Email'        => $get['email'],
        'Password'     => hashids_encrypt($get['password']),
      ];
      $this->Authentication_model->insert($register);

      $status    = true;
      $response  = 'Successfully registered!';
      $errorcode = 200;
    }else {
      $status    = false;
      $error = $this->form_validation->error_array();

      $response = '';
      foreach ($error as $key => $value) {
        $response .= $value.'<br>';
      }
      $errorcode = 400;
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

    echo json_encode($result);
	}
}

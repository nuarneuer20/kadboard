<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    $this->load->model('Main_model');

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

  public function guest()
	{
    $data = array_merge($this->global_data);

    $id = hashids_decrypt($this->uri->segment(2),'config',15);

    $data['header'] = $this->load->view('templates/main-header','',true);
    $data['navbar'] = $this->load->view('templates/main-navbar',$data,true);
		$data['footer'] = $this->load->view('templates/main-footer','',true);
		$data['bottom'] = $this->load->view('templates/main-bottom','',true);

    $data['guest'] = $this->Main_model->get_guest($id);

    $this->load->view('main/guest',$data);
	}
}

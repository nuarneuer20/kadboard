<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
    $data['header'] = $this->load->view('templates/main-header','',true);
    $data['footer'] = $this->load->view('templates/main-footer','',true);

		$this->load->view('main',$data);
	}
}

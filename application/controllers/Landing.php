<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct()
  {
    parent:: __construct();
    $this->load->model('Landing_model');

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
		$data['header'] = $this->load->view('templates/web-header','',true);
    $data['footer'] = $this->load->view('templates/web-footer','',true);

		$this->load->view('landing',$data);
	}

	public function templates()
	{
		$data['header'] = $this->load->view('templates/web-header','',true);
    $data['footer'] = $this->load->view('templates/web-footer','',true);

		$data['design'] = $this->Landing_model->design();

		$this->load->view('templates',$data);
	}
}

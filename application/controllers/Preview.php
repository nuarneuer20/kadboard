<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {

	function __construct()
  {
    parent:: __construct();
    $this->load->model('Preview_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\
  }

	public function display()
	{
		$sku = $this->uri->segment(2);

		$data['design'] = $this->Preview_model->get_design($sku);

		$this->load->view('preview',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends CI_Controller {

	public function terms()
	{
		$data['header'] = $this->load->view('templates/main-header','',true);
    $data['footer'] = $this->load->view('templates/main-footer','',true);

		$this->load->view('policy/terms',$data);
	}

	public function privacy()
	{
		$data['header'] = $this->load->view('templates/main-header','',true);
    $data['footer'] = $this->load->view('templates/main-footer','',true);

		$this->load->view('policy/privacy',$data);
	}
}

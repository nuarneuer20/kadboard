<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function get_design($sku){
    $this->db->where('DesignSku',$sku);
    $query = $this->db->get('design');
    return $query->row();
  }
}

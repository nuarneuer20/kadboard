<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function design(){
    $this->db->where('DesignTypeId',1);
    $query = $this->db->get('design');
    return $query->result();
  }
}

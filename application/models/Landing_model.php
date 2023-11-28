<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function design(){
    $query = $this->db->get('design');
    return $query->result();
  }
}

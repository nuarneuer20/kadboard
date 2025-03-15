<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function insert($data){
    $this->db->insert('customer',$data);
    return $this->db->insert_id();
  }

  function verify($username,$password){
    $this->db->where('Email',$username);
    // $this->db->where('Password',hashids_encrypt($password));
    $query = $this->db->get('customer');
    return $query->row();
  }
}

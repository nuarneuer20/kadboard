<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function get_design($sku){
    $this->db->select('*');
    $this->db->where('DesignSku',$sku);
    $query = $this->db->get('design');
    return $query->row();
  }

  function get_package(){
    $this->db->select('*');
    $this->db->where('PackageStatusId',1);
    $query = $this->db->get('package');
    return $query->result();
  }

  function get_package_details($id){
    $this->db->select('*');
    $this->db->where('PackageId',$id);
    $query = $this->db->get('package');
    return $query->row();
  }

  function insert_customer($data){
    $this->db->insert('customer',$data);
    return $this->db->insert_id();
  }

  function create_invitation($data){
    $this->db->insert('invitation',$data);
    return $this->db->insert_id();
  }

  function get_details($id){
    $this->db->select('*');
    $this->db->where('CustomerId',$id);
    $query = $this->db->get('customer');
    return $query->row();
  }

  function get_coupon($id){
    $this->db->select('*');
    $this->db->where('CouponCode',$id);
    $this->db->where('CouponStatusId !=',1);
    $query = $this->db->get('coupon');
    return $query->row();
  }

  function count_coupon($id){
    $this->db->select('*');
    $this->db->where('CouponId',$id);
    $query = $this->db->get('invitation');
    return $query->num_rows();
  }

  function insert_transaction($data){
    $this->db->insert('transaction',$data);
    return $this->db->insert_id();
  }

  function update_transaction($data){
    $this->db->where('TransactionId',$data['TransactionId']);
    return $this->db->update('transaction',$data);
  }
}

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

  function get_invitation_details($id){
    $this->db->where('PreviewId',$id);
    $query = $this->db->get('preview');
    return $query->row();
  }

  function get_bride($id){
    $this->db->where('PreviewId',$id);
    $query = $this->db->get('previewbride');
    return $query->result();
  }

  function get_parent($id){
    $this->db->where('PreviewId',$id);
    $query = $this->db->get('previewparent');
    return $query->result();
  }

  function get_rsvp($id){
    $this->db->where('PreviewId',$id);
    $query = $this->db->get('previewreservation');
    return $query->result();
  }

  function get_contact($id){
    $this->db->where('PreviewId',$id);
    $query = $this->db->get('previewcontact');
    return $query->result();
  }

  function get_comment($id){
    $this->db->where('PreviewId',$id);
    $this->db->order_by('CommentId','desc');
    $query = $this->db->get('previewcomment');
    return $query->result();
  }

  function insert_comment($data){
    $this->db->insert('previewcomment',$data);
    return $this->db->insert_id();
  }

  function check_guest($id,$num){
    $this->db->where('PreviewId',$id);
    $this->db->where('GuestNumber',$num);
    $query = $this->db->get('previewguest');
    return $query->row();
  }

  function insert_guest($data){
    $this->db->insert('previewguest',$data);
    return $this->db->insert_id();
  }

  function update_guest($data){
    $this->db->where('GuestId',$data['GuestId']);
    return $this->db->update('previewguest',$data);
  }

  function get_not_attend($id){
    $this->db->where('PreviewId',$id);
    $this->db->where('Attend',2);
    $query = $this->db->get('previewguest');
    return $query->num_rows();
  }

  function get_attend($id){
    $this->db->select('SUM(TotalGuest) as Total');
    $this->db->where('PreviewId',$id);
    $this->db->where('Attend',1);
    $query = $this->db->get('previewguest');
    $result = $query->row();
    if ($result->Total != null) {
      $value = $result->Total;
    }else {
      $value = 0;
    }
    return $value;
  }
}

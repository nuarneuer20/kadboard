<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function get_invitation_details($id){
    $this->db->join('design','design.DesignId = invitation.DesignId');
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('invitation');
    return $query->row();
  }

  function get_bride($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('bride');
    return $query->result();
  }

  function get_parent($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('parent');
    return $query->result();
  }

  function get_rsvp($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('reservation');
    return $query->result();
  }

  function get_contact($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('contact');
    return $query->result();
  }

  function get_comment($id){
    $this->db->where('InvitationId',$id);
    $this->db->order_by('CommentId','desc');
    $query = $this->db->get('comment');
    return $query->result();
  }

  function insert_comment($data){
    $this->db->insert('comment',$data);
    return $this->db->insert_id();
  }

  function check_guest($id,$num){
    $this->db->where('InvitationId',$id);
    $this->db->where('GuestNumber',$num);
    $query = $this->db->get('guest');
    return $query->row();
  }

  function insert_guest($data){
    $this->db->insert('guest',$data);
    return $this->db->insert_id();
  }

  function update_guest($data){
    $this->db->where('GuestId',$data['GuestId']);
    return $this->db->update('guest',$data);
  }

  function get_not_attend($id){
    $this->db->where('InvitationId',$id);
    $this->db->where('Attend',2);
    $query = $this->db->get('guest');
    return $query->num_rows();
  }

  function get_attend($id){
    $this->db->select('SUM(TotalGuest) as Total');
    $this->db->where('InvitationId',$id);
    $this->db->where('Attend',1);
    $query = $this->db->get('guest');
    $result = $query->row();
    if ($result->Total != null) {
      $value = $result->Total;
    }else {
      $value = 0;
    }
    return $value;
  }

}

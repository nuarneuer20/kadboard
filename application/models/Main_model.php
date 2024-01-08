<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
	}

  function get_invitation($id){
    $this->db->join('design','design.DesignId = invitation.DesignId');
    $this->db->where('CustomerId',$id);
    $query = $this->db->get('invitation');
    return $query->result();
  }

  function get_invitation_bride($id){
    $this->db->where_in('InvitationId',$id);
    $query = $this->db->get('bride');
    return $query->result();
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

  function get_guest($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('guest');
    return $query->result();
  }

  function update_invite($data){
    $this->db->where('InvitationId',$data['InvitationId']);
    return $this->db->update('invitation',$data);
  }

  function check_bride($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('bride');
    return $query->row();
  }

  function insert_bride($data){
    $this->db->insert('bride',$data);
    return $this->db->insert_id();
  }

  function update_bride($data){
    $this->db->where('BrideId',$data['BrideId']);
    return $this->db->update('bride',$data);
  }

  function check_parent($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('parent');
    return $query->row();
  }

  function insert_parent($data){
    $this->db->insert('parent',$data);
    return $this->db->insert_id();
  }

  function update_parent($data){
    $this->db->where('ParentId',$data['ParentId']);
    return $this->db->update('parent',$data);
  }

  function check_reservation($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('reservation');
    return $query->row();
  }

  function insert_reservation($data){
    $this->db->insert('reservation',$data);
    return $this->db->insert_id();
  }

  function update_reservation($data){
    $this->db->where('ReservationId',$data['ReservationId']);
    return $this->db->update('reservation',$data);
  }

  function check_contact($id){
    $this->db->where('InvitationId',$id);
    $query = $this->db->get('contact');
    return $query->row();
  }

  function insert_contact($data){
    $this->db->insert('contact',$data);
    return $this->db->insert_id();
  }

  function update_contact($data){
    $this->db->where('ContactId',$data['ContactId']);
    return $this->db->update('contact',$data);
  }
}

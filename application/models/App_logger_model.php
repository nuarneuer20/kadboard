<?php
class App_logger_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
  }

  public function insert_app_logger($obj){
    $data = array(
      'CreatedDate' => $obj['CreatedDate'],
      'CreatedBy'   => $obj['CreatedBy']
    );
    $this->db->insert('applogger', $data);
  	return $this->db->insert_id();
  }

  public function update_app_logger($obj){
  	$this->load->helper('url');
    $data = array(
      'UpdatedDate' => $obj['UpdatedDate'],
      'UpdatedBy'   => $obj['UpdatedBy']
    );
  	$this->db->where('AppLoggerId', $obj['AppLoggerId']);
  	return $this->db->update('applogger', $data);
  }

}

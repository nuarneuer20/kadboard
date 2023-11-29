<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	function __construct()
  {
    parent:: __construct();
    $this->load->model('View_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\
  }

	public function invitation()
	{
		$data = array_merge($this->global_data);

		$id = hashids_decrypt($this->uri->segment(2),'config',10);

		$data['details'] = $this->View_model->get_invitation_details($id);
		$data['bride']   = $this->View_model->get_bride($id);
    $data['parent']  = $this->View_model->get_parent($id);
    $data['rsvp']    = $this->View_model->get_rsvp($id);
    $data['contact'] = $this->View_model->get_contact($id);

		$data['WeddingTitle'] = 'MAJLIS PERKHAWINAN ';
		foreach ($data['bride'] as $row) {
			$data['WeddingTitle'] .= mb_strtoupper($row->BrideName);
		}

		$data['header'] = $this->load->view('templates/view-header',$data,true);
    $data['footer'] = $this->load->view('templates/view-footer','',true);

		$this->load->view('view/wedding',$data);
	}

	function comment(){
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('CommentName', 'comment name', 'required',array(
        'required'     => 'Sili isi nama anda'
      )
		);
    $this->form_validation->set_rules('Comment', 'comment', 'required',array(
        'required'     => 'Sila isi ucapan anda'
      )
		);

    if ($this->form_validation->run() == FALSE) {
      // Validation failed
      $status = false;
      $error  = $this->form_validation->error_array();

      $response = '';
      foreach ($error as $key => $value) {
        $response .= $value.'<br>';
      }
      $errorcode = 400;

    } else {
			$get = $this->input->post();
      $get = $this->security->xss_clean($get);

      $inviteid = hashids_decrypt($get['InvitationId']);

			$comment = [
				'InvitationId' => $inviteid,
				'CommentName'  => $get['CommentName'],
				'Comment'      => $get['Comment'],
			];
			$this->View_model->insert_comment($comment);

			$status    = true;
      $response  = 'Ucapan anda berjaya disampaikan';
      $errorcode = 200;
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

    echo json_encode($result);
  }

	function load(){
    $data = array_merge($this->global_data);

		$inviteid = hashids_decrypt($this->input->post('id'));

		$comment = $this->View_model->get_comment($inviteid);

		$com = '';
		foreach ($comment as $row) {
			$com .= '<p>
										<strong>'.$row->CommentName.'</strong><br>
										<i>'.nl2br($row->Comment).'</i>
									</p>';
		}

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = true;
    $result['result']   = $com;

    echo json_encode($result);
  }

	function rsvp(){
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('GuestName', 'guest name', 'required',array(
        'required'     => 'Sili isi nama anda'
      )
		);
    $this->form_validation->set_rules('GuestNumber', 'nombor telefon', 'required',array(
        'required'     => 'Sila isi nombor telefon anda'
      )
		);

    if ($this->form_validation->run() == FALSE) {
      // Validation failed
      $status = false;
      $error  = $this->form_validation->error_array();

      $response = '';
      foreach ($error as $key => $value) {
        $response .= $value.'<br>';
      }
      $errorcode = 400;

    } else {
			$get = $this->input->post();
      $get = $this->security->xss_clean($get);

      $inviteid = hashids_decrypt($get['InvitationId']);

			$checkguest = $this->View_model->check_guest($inviteid,$get['GuestNumber']);

			if ($get['flag'] == 'hadir') {
				$flag = 1;
			}else {
				$flag = 2;
			}

			if (isset($checkguest)) {
				$guest = [
					'GuestId'      => $checkguest->GuestId,
					'InvitationId' => $inviteid,
					'GuestName'    => $get['GuestName'],
					'GuestNumber'  => $get['GuestNumber'],
					'TotalGuest'   => $get['GuestLimit'],
					'Attend'       => $flag,
				];
				$this->View_model->update_guest($guest);
				$message = 'Anda berjaya kemaskini RSVP';
			}else {
				$guest = [
					'InvitationId' => $inviteid,
					'GuestName'    => $get['GuestName'],
					'GuestNumber'  => $get['GuestNumber'],
					'TotalGuest'   => $get['GuestLimit'],
					'Attend'       => $flag,
				];
				$this->View_model->insert_guest($guest);
				$message = 'Anda berjaya hantar RSVP';
			}

			$status    = true;
      $response  = $message;
      $errorcode = 200;
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

    echo json_encode($result);
  }

	function attend(){
    $data = array_merge($this->global_data);

		$inviteid = hashids_decrypt($this->input->post('id'));

		$attend = $this->View_model->get_attend($inviteid);
		$notattend = $this->View_model->get_not_attend($inviteid);

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = true;
    $result['attend']   = $attend;
		$result['notattend']   = $notattend;

    echo json_encode($result);
  }
}

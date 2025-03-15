<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}

    $this->load->model('Main_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\

    $this->global_data['CustomerId'] = $this->session->userdata('CustomerId');
    $this->global_data['Email']      = $this->session->userdata('Email');
		$this->global_data['logged_in']  = $this->session->userdata('logged_in');

		$this->global_data['CreatedDate']  = date("Y-m-d H:i:s", time());
  	$this->global_data['CreatedBy']    = $this->global_data['CustomerId'];
  	$this->global_data['UpdatedDate']  = date("Y-m-d H:i:s", time());
  	$this->global_data['UpdatedBy']    = $this->global_data['CustomerId'];
  }

	public function index()
	{
    $data = array_merge($this->global_data);

    $data['header'] = $this->load->view('templates/main-header','',true);
    $data['navbar'] = $this->load->view('templates/main-navbar',$data,true);
		$data['footer'] = $this->load->view('templates/main-footer','',true);
		$data['bottom'] = $this->load->view('templates/main-bottom','',true);

    $data['invitation'] = $this->Main_model->get_invitation($data['CustomerId']);

    $invite = [];
    foreach ($data['invitation'] as $row) {
      $invite[] = $row->InvitationId;
    }
    $data['bride'] = $this->Main_model->get_invitation_bride($invite);

		$this->load->view('main/main',$data);
	}

	public function guest()
	{
    $data = array_merge($this->global_data);

    $id = hashids_decrypt($this->uri->segment(2),'config',15);

    $data['header'] = $this->load->view('templates/main-header','',true);
    $data['navbar'] = $this->load->view('templates/main-navbar',$data,true);
		$data['footer'] = $this->load->view('templates/main-footer','',true);
		$data['bottom'] = $this->load->view('templates/main-bottom','',true);

    $data['guest'] = $this->Main_model->get_guest($id);

    $this->load->view('main/guest',$data);
	}

  public function modify()
	{
    $data = array_merge($this->global_data);

    $id = hashids_decrypt($this->uri->segment(2),'config',15);

    $data['header'] = $this->load->view('templates/main-header','',true);
    $data['navbar'] = $this->load->view('templates/main-navbar',$data,true);
		$data['footer'] = $this->load->view('templates/main-footer','',true);
		$data['bottom'] = $this->load->view('templates/main-bottom','',true);

    $data['details'] = $this->Main_model->get_invitation_details($id);
    $data['bride']   = $this->Main_model->get_bride($id);
    $data['parent']  = $this->Main_model->get_parent($id);
    $data['rsvp']    = $this->Main_model->get_rsvp($id);
    $data['contact'] = $this->Main_model->get_contact($id);

    if (isset($data['details'])) {
      $this->load->view('main/modify',$data);
    }else {
      $this->load->view('main/modify-empty',$data);
    }
	}

  function save(){
    $data = array_merge($this->global_data);

    $this->form_validation->set_rules('BrideShortName', 'bride & groom short name', 'required');
    $this->form_validation->set_rules('BrideFullName', 'bride & groom full name', 'required');
    $this->form_validation->set_rules('ParentName', 'parent name', 'required');
    $this->form_validation->set_rules('Greetings', 'greetings', 'required');
    $this->form_validation->set_rules('Speech', 'speech', 'required');
    $this->form_validation->set_rules('WeddingDay', 'wedding day', 'required');
    $this->form_validation->set_rules('WeddingStartDate', 'wedding start date', 'required');
    $this->form_validation->set_rules('WeddingEndDate', 'wedding end date', 'required');
    $this->form_validation->set_rules('WeddingAddress', 'wedding address', 'required');
    $this->form_validation->set_rules('WeddingCoordinate', 'wedding coordinate', 'required');
    $this->form_validation->set_rules('WeddingEvent', 'wedding event', 'required');
    $this->form_validation->set_rules('ReservationDate', 'RSVP date', 'required');
    $this->form_validation->set_rules('GuestNumber', 'number of guest', 'required');
    $this->form_validation->set_rules('GuestLimit', 'limit of each guest', 'required');
    $this->form_validation->set_rules('ContactName-1', 'contact name', 'required');
    $this->form_validation->set_rules('ContactNumber-1', 'wedding coordinate', 'required');

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

      if (isset($get['HideCustom'])) { $custom = 1; }else { $custom = 0; }
      if (isset($get['HideDetails'])) { $details = 1; }else { $details = 0; }
      if (isset($get['ShowOpening'])) { $opening = 1; }else { $opening = 0; }
      if (isset($get['ShowAttendance'])) { $attend = 1; }else { $attend = 0; }
      if (isset($get['ShowDays'])) { $showday = 1; }else { $showday = 0; }
      if (isset($get['ShowSpeech'])) { $showspeech = 1; }else { $showspeech = 0; }
      if (isset($get['ShowSnow'])) { $showsnow = 1; }else { $showsnow = 0; }

      $invite = [
        'InvitationId'      => $inviteid,
        'EventType'         => $get['EventType'],
        'Bismillah'         => $get['Bismillah'],
        'Greetings'         => $get['Greetings'],
        'Speech'            => $get['Speech'],
        'WeddingDay'        => $get['WeddingDay'],
        'WeddingStartDate'  => $get['WeddingStartDate'],
        'WeddingEndDate'    => $get['WeddingEndDate'],
        'WeddingDateHijri'  => $get['WeddingDateHijri'],
        'WeddingAddress'    => $get['WeddingAddress'],
        'WeddingCoordinate' => $get['WeddingCoordinate'],
        'WeddingEvent'      => $get['WeddingEvent'],
        'ReservationDate'   => $get['ReservationDate'],
        'GuestLimit'        => $get['GuestLimit'],
        'OpeningSong'       => $get['YouTube'],
        'ShowSong'          => $opening,
        'ShowAttendance'    => $attend,
        'ShowDay'           => $showday,
        'ShowSpeech'        => $showspeech,
        'ShowSnow'          => $showsnow,
        'HideCustom'        => $custom,
        'HideDetails'       => $details,
        'OpeningColor'      => $get['OpeningColor'],
        'MainColor'         => $get['MainColor'],
        'SnowColor'         => $get['SnowColor'],
      ];
      $this->Main_model->update_invite($invite);

      $checkbride = $this->Main_model->check_bride($inviteid);
      if (isset($checkbride)) {
        $bride = [
          'BrideId'       => $checkbride->BrideId,
          'InvitationId'  => $inviteid,
          'BrideName'     => $get['BrideShortName'],
          'BrideFullName' => $get['BrideFullName'],
        ];
        $this->Main_model->update_bride($bride);
      }else {
        $bride = [
          'InvitationId'  => $inviteid,
          'BrideName'     => $get['BrideShortName'],
          'BrideFullName' => $get['BrideFullName'],
        ];
        $this->Main_model->insert_bride($bride);
      }

      $checkparent = $this->Main_model->check_parent($inviteid);
      if (isset($checkparent)) {
        $parent = [
          'ParentId'        => $checkparent->ParentId,
          'InvitationId'    => $inviteid,
          'ParentName'      => $get['ParentName'],
        ];
        $this->Main_model->update_parent($parent);
      }else {
        $parent = [
          'InvitationId'    => $inviteid,
          'ParentName'      => $get['ParentName'],
        ];
        $this->Main_model->insert_parent($parent);
      }

      $checkrsvp = $this->Main_model->check_reservation($inviteid);
      if (isset($checkrsvp)) {
        $rsvp = [
          'ReservationId'   => $checkrsvp->ReservationId,
          'InvitationId'    => $inviteid,
          'ReservationName' => 'Default',
          'TotalGuest'      => $get['GuestNumber'],
        ];
        $this->Main_model->update_reservation($rsvp);
      }else {
        $rsvp = [
          'InvitationId'    => $inviteid,
          'ReservationName' => 'Default',
          'TotalGuest'      => $get['GuestNumber'],
        ];
        $this->Main_model->insert_reservation($rsvp);
      }

      for ($i=1; $i < $get['Count'] + 1; $i++) {

        if (isset($get['ContactId-'.$i])) {
          $id = $get['ContactId-'.$i];
          $checkcontact = $this->Main_model->check_contact($inviteid,$id);
          $contact = [
            'ContactId'     => $checkcontact->ContactId,
            'InvitationId'  => $inviteid,
            'ContactName'   => $get['ContactName-'.$i],
            'ContactNumber' => $get['ContactNumber-'.$i],
          ];
          $this->Main_model->update_contact($contact);
        }else {
          if (isset($get['ContactName-'.$i]) && $get['ContactName-'.$i] != '') {
            $contact = [
              'InvitationId'  => $inviteid,
              'ContactName'   => $get['ContactName-'.$i],
              'ContactNumber' => $get['ContactNumber-'.$i],
            ];
            $this->Main_model->insert_contact($contact);
          }
        }
      }

      //INSERT IMAGE
      if(isset($_FILES['OpeningBackground'])){
        $this->upload_opening($get);
        sleep(1);
      }
      $this->upload_main($get);

      $status    = true;
      $response  = 'Your online invitation has been saved';
      $errorcode = 200;
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

    echo json_encode($result);
  }

  function upload_opening($get)
  {
		$data = array_merge($this->global_data);

    $_FILES['file'] = $_FILES['OpeningBackground'];

		$foldertype = $get['InvitationId'];

    $result = '';

    if(isset($_FILES['file'])){

			if (!is_dir('custom/')){
				mkdir('./custom/', 0777, true);
			}

	    $dir_exist = true; // flag for checking the directory exist or not
			if (!is_dir('custom/'.$foldertype.'/')){
        mkdir('./custom/'.$foldertype.'/', 0777, true);
        $dir_exist = false; // dir not exist
      }

      $array            = explode('.', $_FILES['file']['name']);
      $extension        = end($array);
      $originalFileName = str_replace(' ', '_', $array[0]);
      $originalName     = $array[0];
			$newFileName      = 'opening_'.date('d_m_Y_G_i_s').".".$extension;

      $data['NewFileName']      = $newFileName;
      $data['OriginalFileName'] = $_FILES['file']['name'];
      $data['NewPath']          = "custom/$foldertype/".$newFileName;

      $config['file_name']     = $newFileName;
      $config['upload_path']   = "custom/$foldertype/";
      $config['allowed_types'] = 'png|jpeg|jpg';
      $config['max_size']      = '100000';

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $data['upload_data'] = '';

      if (!$this->upload->do_upload('file',$newFileName)) {
        $data['invalid'] = FALSE;
        $data            = array('msg' => $this->upload->display_errors());
        $result          = 'Please upload required background';
      }else {
        $data['invalid']       = FALSE;
        $upload_data           = $this->upload->data();
        $downloadsData['file'] = $upload_data['file_name'];

        //REMOVE OLD FILE
        $chekfile = $this->Main_model->check_file(hashids_decrypt($get['InvitationId']));

        if ($chekfile->OpeningBackground != '') {
          unlink($chekfile->OpeningBackground);
        }

        $invite = [
          'InvitationId'      => hashids_decrypt($get['InvitationId']),
          'OpeningBackground' => $data['NewPath'],
        ];
        $this->Main_model->update_invite($invite);
      }
	  }
	  return $result;
  }

  function upload_main($get)
  {
		$data = array_merge($this->global_data);

    $_FILES['file'] = $_FILES['MainBackground'];

		$foldertype = $get['InvitationId'];

    $result = '';

    if(isset($_FILES['file'])){

			if (!is_dir('custom/')){
				mkdir('./custom/', 0777, true);
			}

	    $dir_exist = true; // flag for checking the directory exist or not
			if (!is_dir('custom/'.$foldertype.'/')){
        mkdir('./custom/'.$foldertype.'/', 0777, true);
        $dir_exist = false; // dir not exist
      }

      $array            = explode('.', $_FILES['file']['name']);
      $extension        = end($array);
      $originalFileName = str_replace(' ', '_', $array[0]);
      $originalName     = $array[0];
			$newFileName      = 'main_'.date('d_m_Y_G_i_s').".".$extension;

      $data['NewFileName']      = $newFileName;
      $data['OriginalFileName'] = $_FILES['file']['name'];
      $data['NewPath']          = "custom/$foldertype/".$newFileName;

      $config['file_name']     = $newFileName;
      $config['upload_path']   = "custom/$foldertype/";
      $config['allowed_types'] = 'png|jpeg|jpg';
      $config['max_size']      = '100000';

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $data['upload_data'] = '';

      if (!$this->upload->do_upload('file',$newFileName)) {
        $data['invalid'] = FALSE;
        $data            = array('msg' => $this->upload->display_errors());
        $result          = 'Please upload required background';
      }else {
        $data['invalid']       = FALSE;
        $upload_data           = $this->upload->data();
        $downloadsData['file'] = $upload_data['file_name'];

        //REMOVE OLD FILE
        $chekfile = $this->Main_model->check_file(hashids_decrypt($get['InvitationId']));

        if ($chekfile->MainBackground != '') {
          unlink($chekfile->MainBackground);
        }

        $invite = [
          'InvitationId'      => hashids_decrypt($get['InvitationId']),
          'MainBackground'    => $data['NewPath'],
        ];
        $this->Main_model->update_invite($invite);
      }
	  }
	  return $result;
  }

  function remove(){
    $data = array_merge($this->global_data);

		$id = $this->input->post('id');

		if ($this->Main_model->remove_contact($id)) {
      $message = 'Contact has been removed';
    }else {
      $message = 'Something went wrong. Please try again later.';
    }

    $result['token']    = $data['csrf']['hash'];
    $result['status']   = true;
    $result['result']   = $message;

    echo json_encode($result);
  }
}

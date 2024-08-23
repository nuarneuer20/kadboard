<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct()
  {
    parent:: __construct();
    $this->load->model('Landing_model');

    //CSRF PROTECTION\\
    $this->global_data['csrf'] =
    [
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    ];
    //CSRF PROTECTION\\
  }

	public function index()
	{
		$data['header'] = $this->load->view('templates/web-header','',true);
    $data['footer'] = $this->load->view('templates/web-footer','',true);

		$this->load->view('landing',$data);
	}

	public function templates()
	{
		$data['header'] = $this->load->view('templates/web-header','',true);
    $data['footer'] = $this->load->view('templates/web-footer','',true);

		$data['design'] = $this->Landing_model->design();
		$data['package'] = $this->Landing_model->package();

		$this->load->view('templates',$data);
	}

	function contact(){
		$data = array_merge($this->global_data);

		$this->form_validation->set_rules('Name', 'name', 'required');
    $this->form_validation->set_rules('Email', 'email', 'required|valid_email');
    $this->form_validation->set_rules('Message', 'message', 'required');

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

			// Send email reset
			$email["from"]    =	$get['Email'];
			$email["to"]      = "hi@kadboard.com";
			$email["bcc"]     = "anwarsaad.work@gmail.com";
			$email["subject"] = "KADBOARD: NEW MESSAGE";
			$email["message"] = "<html>
														<body style='background: #F6F6F6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0;'>
															<div style='background: #F6F6F6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0;'>
															<table cellspacing='0' cellpadding='0' border='0' height='100%' width='100%'>
																<tr>
																<td align='center' valign='top' style='padding: 20px 0=20px 0'>
																<table align='center' bgcolor='FFFFFF' cellspacing='0' cellpadding='10' border='0' width='96%' style='border:1px solid #E0E0E0;'>
																<tr>
																	<td  valign='top'  width='30%'><table>
																		<tr>
																			<td align='center' valign='top'><img width='80%' src='https://kadboard.com/assets/kad/kadboard.png' alt='Venovox Online Screening System' border='0'/></td>
																		</tr> </table>
																	</td>
																	<td><table>
																		<tr>
																			<td valign='top'>
																				<h1 style='font-size: 12px; font-weight: 800; line-height: 22px; margin: 0 0 11px 0;'>Full Name: ".$get['Name']."</h1>
																				<h1 style='font-size: 12px; font-weight: 800; line-height: 22px; margin: 0 0 11px 0;'>Email: ".$get['Email']."</h1>
																				<p style='font-size: 12px; line-height: 16px; margin: 0 0 8px 0;'>".$get['Message']."</p>
																			</td>
																		</tr>
																		<tr>
																			<td style='background-color=#EAEAEA; text-align: left;'><p style='font-size:12px; margin:0; text-align: left;'>Thank you, <br><br> <strong>kadboard.com </strong></p>
																			</table></td>
																		</tr>
																	</td>
																</tr>
																</table>
																</td>
																</tr>
															</table>
															</div>
														</body>
													</html>";

			$sent = $this->sendMail($email);

			if ($sent == true) {
				$status    = true;
        $response  = 'Your email has been sent';
			}else {
				$status    = false;
        $response  = 'Something went wrong. Please try again later.';
			}

		}


		$result['token']    = $data['csrf']['hash'];
    $result['status']   = $status;
    $result['message']  = $response;

		echo json_encode($result);
	}

	function sendMail($obj){
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->set_crlf( "\r\n" );
		$this->email->from($obj["from"]);
		$this->email->to($obj["to"]);
		$this->email->bcc($obj["bcc"]);

		$this->email->subject($obj["subject"]);
		$this->email->message($obj["message"]);

		if ($this->email->send()) {
			$message = true;
		} else {
			$message = $this->email->print_debugger();
		}
		return $message;
	}
}

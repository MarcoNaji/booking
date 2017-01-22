<?php 
date_default_timezone_set('Asia/Kuala_Lumpur');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

class index extends CI_Controller{
    
    function __construct(){
        parent::__construct();

    }
    // login page
    public function index(){
		
		$this->load->view('login');
    }
	//...................................................
	
	// login validation
    
    public function process(){
    	$this->load->library('password');
		$username = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));

		if($username != "" && $password != "")
		{
        $this->load->model('login_model');
        
		
			$result = $this->login_model->validate($username);
			$data['row'] = $result['row'];
			$number_row = $result['num_row'];
			
			foreach($data['row'] as $row):{
				$user_id = $row->uid;
				$status = $row->status;
				$pass = $row->pass;
			}endforeach;
			
			if($number_row != 0){
			$check_hashed_pass = $this->password->user_check_password($password, $pass);
				if($check_hashed_pass != false){
					
					if($status != 0){
						$result = $this->login_model->get_role($user_id);
						$data['row'] = $result['row'];
						
						$role= 2;
						
						foreach($data['row'] as $row):{
						$role = $row->rid;	
						}endforeach;
						
						$data = array(
								'user_id' => $row->uid,
								'validated' => true
						);
						$this->session->set_userdata($data);
						
						if($role == 3){
							redirect('admin');
						}elseif($role == 2){
							redirect('user');
						}
						
						
					}else{
						$this->session->set_flashdata('error_msg', 'Sorry, This Account has not been activated or is blocked.');
						redirect('index');
					}
					
				}else{
					$this->session->set_flashdata('error_msg', 'Sorry, Password not match.');
					redirect('index');
				}
			}else{
				$this->session->set_flashdata('error_msg', 'Sorry, unrecognized username.');
				redirect('index');
			}
		
		}else{
			$this->session->set_flashdata('error_msg', 'Please fill up all the feilds.');
			redirect('index');
		}
		      
    }
	//..................................................
	
	//reset passowrd
	
	function send_instruction()
{
	    $datestring = "%Y-%m-%d";
        $time = time();
		$current_date = mdate($datestring, $time);
		
		$datestring = "%H:%i:%s";
        $time = time();
		$current_time = mdate($datestring, $time);
		$expiry_datestring = "%Y-%m-%d %H:%i:%s";
		$expiry_time = time() + (60 * 60 * 3);
	
	$user_ic = $this->security->xss_clean($this->input->post('user_ic'));
	$user_role = $this->security->xss_clean($this->input->post('user_role'));
	$this->load->model('login_model');
    $result = $this->login_model->validate_for_reset( $user_ic, $user_role);  
	$data['user'] = $result['row'];
	$exist = $result['num_row'];
   
    if( $exist != 0 ){
		foreach($data['user'] as $row):{
		$email = $row->email;	
		}endforeach;
		
		$hashed_ic = sha1($user_ic);
		$hashed_role = sha1($user_role);
		$token_id = sha1(uniqid($user_ic.$current_date.$current_time.mt_rand(), true));
		
		$data = array(
			'token_id' => $token_id,
			'status' => 'active',
			'expiry_time' => mdate($expiry_datestring, $expiry_time)
				);
		$this->login_model->add_token($data);
		
		//send mail
		
		
		
		/*
	$config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '7';
    $config['smtp_user']    = 'hemodialysismanagement@gmail.com';
    $config['smtp_pass']    = 'dialysis_system';
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or text
	$config['wordwrap'] = TRUE;
    $config['validation'] = TRUE; // bool whether to validate email or not
	 
	 
		$config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'hemodialysismanagement@gmail.com', // change it to yours
  'smtp_pass' => 'dialysis_system', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE

		$this->email->initialize($config);

        $message = 'You recently requested a password reset for your Hemodialysis Management account. To create a new password, click on the link below:'."<br>";
		$message .= anchor(base_url('index.php/index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id), 'Reset My Password', '')."<br><br>";
		$message .= 'Please try to reset your password within 3 hours, otherwise your recovery link will become invalid.'."<br><br>";
		$message .= 'This request was made on '.$current_date. ' at '.$current_time. '. (Malaysian Time)'."<br><br>";
		$message .= 'Regards,'."<br>";
		$message .= 'Hemodialysis Management Adminstration'."<br><br>";
		$message .= '********************************************************'."<br><br>";
		$message .= 'Please do not reply to this message. Mail sent to this address cannot be answered.'."<br><br>";
		
       // $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('Hemodialysis Management'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('password recovery');
      $this->email->message($message);
      $this->email->send();
	  );*/
	   $message = 'You recently requested a password reset for your Hemodialysis Management account. To create a new password, click on the link below:'."<br>";
		$message .= anchor(base_url('index.php/index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id), 'Reset My Password', '')."<br><br>";
		$message .= 'Please try to reset your password within 3 hours, otherwise your recovery link will become invalid.'."<br><br>";
		$message .= 'This request was made on '.$current_date. ' at '.$current_time. '. (Malaysian Time)'."<br><br>";
		$message .= 'Regards,'."<br>";
		$message .= 'Hemodialysis Management Adminstration'."<br><br>";
		$message .= '********************************************************'."<br><br>";
		$message .= 'Please do not reply to this message. Mail sent to this address cannot be answered.'."<br><br>";
	  
	 $mail = new PHPMailer();
     $mail->IsSMTP(); // we are going to use SMTP
	 $mail->IsHTML(true);
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 587;    //465 forssl               // SMTP port to connect to GMail
        $mail->Username   = "hemodialysismanagement@gmail.com";  // user email address
        $mail->Password   = "dialysis_system";            // password in GMail
     $mail->SetFrom('hemodialysismanagement@gmail.com', 'Hemodialysis Management');  //Who is sending the email
        $mail->Subject    = "Password Recovery";
        $mail->Body      = $message;
        $destino = $email; // Who is addressed the email to
        $mail->AddAddress($destino);
		$mail->Send();
		
		$em   = explode("@",$email);
    $name = implode(array_slice($em, 0, count($em)-1), '@');
    $len  = strlen($name);
	$string_len  = floor($len/2);
	$asterisk_len  = $len - $string_len;

    $hidden_email = substr($name,0, $string_len) . str_repeat('*', $asterisk_len) . "@" . end($em);
		
       $results['args1'] = "0";
$results['args2'] = "Instructions are sent to ".$hidden_email;
echo json_encode($results);
    }else{
         $results['args1'] = "1";
$results['args2'] = "Your IC Does not exist in our Database!";
echo json_encode($results);
    }
}

function reset_pass($hashed_ic, $hashed_role, $token_id)
{
	$this->load->model('login_model');
	$result = $this->login_model->get_user_identity( $hashed_ic, $hashed_role);  
	$data['user'] = $result['row'];
	$exist = $result['num_row'];
	
	if($exist != 0){
	
	foreach($data['user'] as $row):{
	$name =$row->name;	
	}endforeach;
	$result = $this->login_model->get_token($token_id);  
	$data['token'] = $result['row'];
	$token_exist = $result['num_row'];
	if($token_exist !=0){
	$data['name'] = $name;
	$data['hash_ic'] = $hashed_ic;
	$data['hash_role'] = $hashed_role;
	$data['token_id'] = $token_id;
	$data['error'] = 0;
	
	$this->load->view('reset_pass_header', $data);
	  $this->load->view('reset_pass_side_menu');
	  $this->load->view('reset_pass', $data);
	  $this->load->view('footer');
	}else{
		$data['name'] = $name;
		$data['error'] = 1;
		$data['message'] = "The account recovery information has expired and is no longer valid.";
	
	  $this->load->view('reset_pass_header', $data);
	  $this->load->view('reset_pass_side_menu');
	  $this->load->view('reset_pass_error', $data);
	  $this->load->view('footer');	
	}
	
	}else{
		$data['error'] = 2;
		$data['message'] = "Sorry we could not varify your identity";
		
	  $this->load->view('reset_pass_header', $data);
	  $this->load->view('reset_pass_side_menu');
	  $this->load->view('reset_pass_error', $data);
	  $this->load->view('footer');	
			
	}
	
	}
	
	function confirm_reset_pass($hashed_ic, $hashed_role, $token_id)
{
	$this->load->model('login_model');
	$result = $this->login_model->get_token($token_id);  
	$data['token'] = $result['row'];
	$token_exist = $result['num_row'];
	if($token_exist !=0){
		$new_pass = $this->security->xss_clean($this->input->post('new_pass'));
		$confirm_pass = $this->security->xss_clean($this->input->post('confirm_pass'));
		
		if($new_pass != "" && $confirm_pass != ""){
			if(strlen($new_pass) >= 6){
			if($new_pass == $confirm_pass){
				
			$data = array(
			'password' => md5($new_pass)
				);
		$this->login_model->reset_pass($hashed_ic, $hashed_role, $data);
		
			$data = array(
			'status' => "inactive"
				);
		$this->login_model->update_token($token_id, $data);
		
		$this->session->set_flashdata('success_msg', ' Password Reset Successfully, Use your New Password to Login.');
			redirect('index');
			
			}else{
			$this->session->set_flashdata('error_msg', 'Your New Password and Confirm Password Do not Match!');
			redirect('index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id);	
			}
			}else{$this->session->set_flashdata('error_msg', 'Password Must Contain Atleast Six characters. Try again.');
			redirect('index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id);}
		}else{
			$this->session->set_flashdata('error_msg', 'Please Enter your New Password and Confirm it in the Provided areas!');
			redirect('index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id);
		}
		
	
	}else{
		
		redirect('index/reset_pass/'.$hashed_ic.'/'.$hashed_role.'/'.$token_id);
		
	}
	
	}

}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

 class user extends CI_Controller{
	 
    function __construct(){
		
        parent::__construct();
        $this->check_isvalidated();
        $this->check_is_drupal_validated();
		 $this->check_isBlocked();
		
    }
    
 public function index(){
 	$this->load->model('booking_model');
 	 
 	$user_id= $this->session->userdata('user_id');
 	
 	$result = $this->booking_model->get_user_data($user_id);
 	$data['row'] = $result['row'];
 	
 	foreach($data['row'] as $row):{
 		$data['name'] = $row->name;
 	}endforeach;
		
      $this->load->view('user/header', $data);
	  $this->load->view('user/side_menu');
	  $this->load->view('user/dashboard');
	  $this->load->view('footer');
	
    }
    
    private function check_is_drupal_validated(){
    	$this->load->model('booking_model');
    
    	$user_id= $this->session->userdata('user_id');
    	$session_id= $this->session->userdata('session_id');
    
    	//session valid
    	$result = $this->booking_model->check_session($user_id, $session_id);
    	$sess_number_row = $result['num_row'];
    
    	if($sess_number_row == 0){
    		$this->session->sess_destroy();
    		$this->session->set_flashdata('error_msg', 'Sorry, your session expired, try to login again.');
    		redirect('index');
    			
    	}
    
    
    
    }
	
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('index');
        }
		
    }
	
	  
   private function check_isBlocked(){
   		$status = 0;
   		$this->load->model('booking_model');
   		
		$user_id= $this->session->userdata('user_id');
		
		$result = $this->booking_model->get_user_data($user_id);
		$data['row'] = $result['row'];
		
		foreach($data['row'] as $row):{
			$status = $row->status;
		}endforeach;

        if($status != 1){
        	$this->session->sess_destroy();
            redirect('index');
        }
		
	}
	
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('index');
    }
    
    
    //booking
    
    public function function_room(){
    
    	$f_id= 1;
    	$this->load->model('booking_model');
    	
    	$user_id= $this->session->userdata('user_id');
    	
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    	 
    	$result = $this->booking_model->get_all_slot($f_id);
    	$data['slot'] = $result['row'];
    
    	$this->load->view('user/header', $data);
    	$this->load->view('user/side_menu');
    	$this->load->view('user/function_room', $data);
    	$this->load->view('footer');
    
    }
    public function tennis_court(){
    
    	$f_id= 2;
    	$this->load->model('booking_model');
    	
    	$user_id= $this->session->userdata('user_id');
    	 
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	 
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    
    	$result = $this->booking_model->get_all_slot($f_id);
    	$data['slot'] = $result['row'];
    
    	$this->load->view('user/header', $data);
    	$this->load->view('user/side_menu');
    	$this->load->view('user/tennis_court', $data);
    	$this->load->view('footer');
    
    }
    public function bbq_area(){
    
    	$f_id= 3;
    	$this->load->model('booking_model');
    	
    	$user_id= $this->session->userdata('user_id');
    	 
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	 
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    
    	$result = $this->booking_model->get_all_slot($f_id);
    	$data['slot'] = $result['row'];
    
    	$this->load->view('user/header', $data);
    	$this->load->view('user/side_menu');
    	$this->load->view('user/bbq_area', $data);
    	$this->load->view('footer');
    
    }
    
    function get_slot($fac_id)
    {
    	$date = $this->input->post('date');
    
    	$this->load->model('booking_model');
    	$result = $this->booking_model->get_slot_availablity($date, $fac_id );  #send the post variable to the model
    	$data['booking'] = $result['row'];
    	 
    	// set text compatible IE7, IE8
    	header('Content-type: text/plain');
    	// set json non IE
    	header('Content-type: application/json');
    	//value got from the get metho
    
    	echo json_encode($data);
    
    }
    
    function get_slot_info()
    {
    	$slot_id = $this->input->post('slot');
    
    	$this->load->model('booking_model');
    	$result = $this->booking_model->get_slot_info($slot_id);  #send the post variable to the model
    
    
    	// set text compatible IE7, IE8
    	header('Content-type: text/plain');
    	// set json non IE
    	header('Content-type: application/json');
    	//value got from the get metho
    
    	echo json_encode($result);
    
    }
    
    function make_booking($fac_id)
    {
    	$user_id= $this->session->userdata('user_id');
    	 
    	$date = $this->input->post('date');
    	$slot = $this->input->post('slot');
    	
    	$data = array(
    			'date' => $date,
    			'slot_id' => $slot,
    			'f_id' => $fac_id,
    			'status' => "Pending",
    			'request_by' => $user_id,
    			'request_date' => date('Y-m-d H:i:s'),
    			'payment_method' => "Cash",
    			'Paid' => "No"
    	);
    
    	$this->load->model('booking_model');
    	$result = $this->booking_model->add_booking($fac_id, $date, $slot, $data);  #send the post variable to the model
    	 
    	if($result){
    
    		$this->session->set_flashdata('success_msg', ' Successfully Booked. Waiting for Approval.');
    		if($fac_id ==1){
    		redirect('user/function_room');
    		}elseif($fac_id ==2){
    		redirect('user/tennis_court');
    		}elseif($fac_id ==3){
    		redirect('user/bbq_area');
    		}
    
    	}else{
    		$this->session->set_flashdata('error_msg', 'Error Has Occurred. Please Try Again.');
    		if($fac_id ==1){
    		redirect('user/function_room');
    		}elseif($fac_id ==2){
    		redirect('user/tennis_court');
    		}elseif($fac_id ==3){
    		redirect('user/bbq_area');
    		}
    
    	}
    
    }
	
	
	
	
	
	
 }
 ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

 class admin extends CI_Controller{
	 
    function __construct(){
		
        parent::__construct();
        $this->check_is_drupal_validated();
        $this->check_isvalidated();
		 $this->check_isBlocked();
		 $this->check_isAdmin();
		
    }
    
 public function index(){
 	$this->load->model('booking_model');
 	 
 	$user_id= $this->session->userdata('user_id');
 	
 	$result = $this->booking_model->get_user_data($user_id);
 	$data['row'] = $result['row'];
 	
 	foreach($data['row'] as $row):{
 		$data['name'] = $row->name;
 	}endforeach;
		
      $this->load->view('admin/header', $data);
	  $this->load->view('admin/side_menu');
	  $this->load->view('admin/dashboard');
	  $this->load->view('footer');
	
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
	
	private function check_isAdmin(){
		$role= 2;
		$this->load->model('booking_model');
		 
		$user_id= $this->session->userdata('user_id');
	
		$result = $this->booking_model->get_role($user_id);
		$data['row'] = $result['row'];
						
		$role= 2;
						
		foreach($data['row'] as $row):{
		$role = $row->rid;	
		}endforeach;
	
		if($role != 3){
			$this->session->sess_destroy();
			redirect('index');
		}
	
	}
	
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('index');
    }
    
    //facility
    
   
    
    public function facility(){
    
    	$this->load->model('booking_model');
    	 
    	 
    	$user_id= $this->session->userdata('user_id');
    	 
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	 
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    	 
    	$result = $this->booking_model->get_all_facility();
    	$data['facility'] = $result['row'];
    	 
    	
    		 
    		$this->load->view('admin/header', $data);
    		$this->load->view('admin/side_menu');
    		$this->load->view('admin/facility', $data);
    		$this->load->view('footer');
    	
    
    }
    
    public function add_facility(){
    
    	$this->load->model('booking_model');
    	$this->load->library('create_id');
    
    
    	$user_id= $this->session->userdata('user_id');
    
    
    	$fac_name = $this->input->post('facility_name');
		$fac_description = $this->input->post('facility_discription');
		$admin_approve = $this->input->post('admin_aproval');
		$email_notify = $this->input->post('email_notification');
		$advance_booking = $this->input->post('advance_booking');
		$cancel_booking = $this->input->post('cancel_booking');
		$next_booking = $this->input->post('next_booking');
		
		$path = './assets/img/facility';
		
		$pic_name = "facility".$this->create_id->get_id();
		
		if($fac_name != ''){
			if($admin_approve != 1){
				$admin_approve = 0;
			}
			if($email_notify != 1){
				$email_notify = 0;
			}
			
			if($_FILES['fileInput']['error'] != 4){
					
				$config['upload_path'] = $path;
				$config['file_name'] = "'$pic_name'.jpg";
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = '*';
				$config['max_size'] = 0;
			
				$this->upload->initialize($config);
			
			
				$this->upload->do_upload('fileInput');
				$data = $this->upload->data();
			
				$file_name = $data['file_name'];
			
					
				$data = array(
						'name' => $fac_name,
						'image_name' => $file_name,
						'description' => $fac_description,
						'next_book_time' => $next_booking,
						'cancel_time' => $cancel_booking,
						'book_before' => $advance_booking,
						'admin_approval' => $admin_approve,
						'email_notification' => $email_notify
				);
				$this->booking_model->add_facility($data);
			
				redirect('admin/facility');
					
			
			}else{
					
			$this->session->set_flashdata('error_msg', ' Required Fields Must Not Be Left Blank. Try Again');
			redirect('admin/facility');
			
			}
			
			
		}else{
			$this->session->set_flashdata('error_msg', ' Required Fields Must Not Be Left Blank. Try Again');
			redirect('admin/facility');
		}
    	 
    
    }
    
    public function view_facility($fac_id){
    
    	$this->load->model('booking_model');
    
    
    	$user_id= $this->session->userdata('user_id');
    
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    
    	$result = $this->booking_model->get_facility($fac_id);
    	$data['facility'] = $result['row'];
    	
    	$result = $this->booking_model->get_all_slot($fac_id);
    	$data['facility_slot'] = $result['num_row'];
    
    	 
    	 
    	$this->load->view('admin/header', $data);
    	$this->load->view('admin/side_menu');
    	$this->load->view('admin/view_facility', $data);
    	$this->load->view('footer');
    	 
    
    }
    
    public function edit_facility($fac_id){
    
    	$this->load->model('booking_model');
    	
    	$user_id= $this->session->userdata('user_id');
    
    
    	$fac_name = $this->input->post('facility_name');
    	$fac_description = $this->input->post('facility_discription');
    	$admin_approve = $this->input->post('admin_aproval');
    	$email_notify = $this->input->post('email_notification');
    	$advance_booking = $this->input->post('advance_booking');
    	$cancel_booking = $this->input->post('cancel_booking');
    	$next_booking = $this->input->post('next_booking');
    	$status = $this->input->post('status');
    
    	if($fac_name != ''){
    		if($admin_approve != 1){
    			$admin_approve = 0;
    		}
    		if($email_notify != 1){
    			$email_notify = 0;
    		}
    				
    				
    			$data = array(
    					'name' => $fac_name,
    					'description' => $fac_description,
    					'next_book_time' => $next_booking,
    					'cancel_time' => $cancel_booking,
    					'book_before' => $advance_booking,
    					'admin_approval' => $admin_approve,
    					'email_notification' => $email_notify,
    					'status' => $status
    			);
    			$this->booking_model->update_facility($fac_id, $data);
    				
    			redirect('admin/view_facility/'.$fac_id);
    			
    			
    	}else{
    		$this->session->set_flashdata('error_msg', ' Required Fields Must Not Be Left Blank. Try Again');
    		redirect('admin/view_facility/'.$fac_id);
    	}
    
    
    }
    
    public function change_image($fac_id){
    
    	$this->load->model('booking_model');
    	$this->load->library('create_id');
    	
    	$new_image_name = "facility".$this->create_id->get_id();
    	$path = './assets/img/facility';
    	
    	$result = $this->booking_model->get_facility($fac_id);
    	$data['facility'] = $result['row'];
    	
    	foreach($data['facility'] as $row):{
    	$image_name = $row->image_name;
    		
    	} endforeach;
    	
    	$old_path = './assets/img/facility/'.$image_name;
    
    
    	$user_id= $this->session->userdata('user_id');
    
    
    if($_FILES['fileInput']['error'] != 4){
					
				$config['upload_path'] = $path;
				$config['file_name'] = "'$new_image_name'.jpg";
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = '*';
				$config['max_size'] = 0;
			
				$this->upload->initialize($config);
			
			
				$this->upload->do_upload('fileInput');
				$data = $this->upload->data();
			
				$file_name = $data['file_name'];
			
					
				$data = array(
						'image_name' => $file_name
						
				);
				$this->booking_model->update_facility($fac_id, $data);
				
				unlink($old_path);
			
				redirect('admin/view_facility/'.$fac_id);
					
			
			}else{
					
			$this->session->set_flashdata('error_msg', ' Required Fields Must Not Be Left Blank. Try Again');
			redirect('admin/view_facility/'.$fac_id);
			
			}
    
    
    }
    
    
    //................................................................
    
    //slot
    
 public function slot($fac_id){
    
    	$this->load->model('booking_model');
    	 
    	 
    	$user_id= $this->session->userdata('user_id');
    	 
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	 
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    	
    	$result = $this->booking_model->get_facility($fac_id);
    	$data['facility'] = $result['row'];
    	 
    	$result = $this->booking_model->get_all_slot($fac_id);
    	$data['facility_slot'] = $result['row'];
    	 
    	
    		 
    		$this->load->view('admin/header', $data);
    		$this->load->view('admin/side_menu');
    		$this->load->view('admin/slot', $data);
    		$this->load->view('footer');
    	
    
    }
    
    
    //................................................................
    
    
    //reporting
    
    public function report($facility_type = null, $report_type = null){
    
    	$this->load->model('booking_model');
    	
    	
    	$user_id= $this->session->userdata('user_id');
    	
    	$result = $this->booking_model->get_user_data($user_id);
    	$data['row'] = $result['row'];
    	
    	foreach($data['row'] as $row):{
    		$data['name'] = $row->name;
    	}endforeach;
    	
    	$result = $this->booking_model->get_all_facility();
    	$data['facility'] = $result['row'];
    	
    	$data['report_type'] = $report_type;
    	$data['facility_type'] = $facility_type;
    	
    	if($report_type == null || $report_type== "daily"){
    	$today = date("Y-m-d");
    	$result = $this->booking_model->get_daily_report($today, $facility_type);
    	$data['report'] = $result['row'];
    	
    	$result = $this->booking_model->get_all_slot_all();
    	$data['slot'] = $result['row'];
    	
    	$result = $this->booking_model->get_all_user();
    	$data['user'] = $result['row'];
    	
    	$this->load->view('admin/header', $data);
    	$this->load->view('admin/side_menu');
    	$this->load->view('admin/report', $data);
    	$this->load->view('footer');
    	}
    	
    	if($report_type== "monthly"){
    		$this_month = date("m");
    		$this_year = date("Y");
    		$result = $this->booking_model->get_monthly_report($this_month, $this_year, $facility_type);
    		$data['report'] = $result['row'];
    		 
    		$result = $this->booking_model->get_all_slot_all();
    		$data['slot'] = $result['row'];
    		 
    		$result = $this->booking_model->get_all_user();
    		$data['user'] = $result['row'];
    		 
    		$this->load->view('admin/header', $data);
    		$this->load->view('admin/side_menu');
    		$this->load->view('admin/report', $data);
    		$this->load->view('footer');
    	}
    	
    	if($report_type== "annually"){
    		$this_year = date("Y");
    		$result = $this->booking_model->get_annually_report($this_year, $facility_type);
    		$data['report'] = $result['row'];
    		 
    		$result = $this->booking_model->get_all_slot_all();
    		$data['slot'] = $result['row'];
    		 
    		$result = $this->booking_model->get_all_user();
    		$data['user'] = $result['row'];
    		 
    		$this->load->view('admin/header', $data);
    		$this->load->view('admin/side_menu');
    		$this->load->view('admin/report', $data);
    		$this->load->view('footer');
    	}
    
    }
   

 }
 ?>
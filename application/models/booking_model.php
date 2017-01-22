<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */
class booking_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function check_session($id, $session){
    
    
    	$q = $this->db->select('*')
    	->from('sessions')
    	->where('uid', $id)
    	->where('sid', $session);
    
    	$q = $this->db->get();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
    
    public function get_role($user_id){
    
    
    	$q = $this->db->select('*')
    	->from('users_roles')
    	->where('uid', $user_id);
    
    	$q = $this->db->get();
    	$res['row'] = $q->result();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
    
    public function get_user_data($user_id){
    
    
    	$q = $this->db->select('*')
    	->from('users')
    	->where('uid', $user_id);
    
    	$q = $this->db->get();
    	$res['row'] = $q->result();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
   
	
    public function get_all_slot($id){
    	 
    	$q = $this->db->select('*')
    	->from('slot')
    	->where('f_id', $id);
    	$q = $this->db->get();
    	$res['row'] = $q->result();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    	 
    
    }
    
    public function get_all_slot_all(){
    
    	$q = $this->db->select('*')
    	->from('slot');
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    
    
    }
    
    public function get_all_user(){
    
    	$q = $this->db->select('*')
    	->from('users');
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    
    
    }
    
    public function get_slot_availablity($date, $fac_id){
    
    	$q = $this->db->select('*')
    	->from('booking')
    	->where('f_id', $fac_id)
    	->where('date', $date)
    	->where('status !=', "Cancelled")
    	->where('status !=', "Rejected");
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    
    
    }
    
    public function add_booking($fac_id, $date, $slot, $data){
    
    	$this->db->from('booking')
    	->where('date', $date)
    	->where('slot_id', $slot)
    	->where('f_id', $fac_id)
    	->where('status !=', "Cancelled")
    	->where('status !=', "Rejected");
    	$rs = $this->db->get();
    	$rs->row_array();
    	// Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
    	
    		return false;
    
    	}
    	else{
    		$this->db->insert('booking', $data);
    		return true;
    	}
    }
    
    public function add_facility($data){
    
    	$this->db->insert('facility', $data);
    }
    
    public function get_slot_info($slot_id){
    	// grab user input
    	$this->db->select('*');
    	$this->db->from('slot');
    	$this->db->where('id', $slot_id );
    
    	$query = $this->db->get();
    	
    	foreach ($query->result() as $row) {
    		$data = array(
    				'from' => $row->from,
    				'to' => $row->to
    		);
    		 
    	}
    	return $data;
    	 
    
    	 
    }
    
    public function get_all_facility(){
    		
    	$q = $this->db->select('*')
    	->from('facility');
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    		
    
    }
    
    public function get_facility($fac_id){
    
    
    	$q = $this->db->select('*')
    	->from('facility')
    	->where('fac_id', $fac_id);
    
    	$q = $this->db->get();
    	$res['row'] = $q->result();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
    
    public function update_facility($fac_id, $data){
    		
    	$this->db->where('fac_id', $fac_id);
    	$this->db->update('facility', $data);
    	 
    
    }
    
    public function get_daily_report($date, $facility){
    	
    	if($facility == null || $facility == "all"){
    	$q = $this->db->select('*')
    	->from('booking')
    	->where('date', $date)
    	->where('status', "Accepted")
    	->order_by('date', 'desc');
    	}else{
    
    	$q = $this->db->select('*')
    	->from('booking')
    	->where('date', $date)
    	->where('status', "Accepted")
    	->where('f_id', $facility)
    	->order_by('date', 'desc');
    	}
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    	
    
    
    }
    
    public function get_monthly_report($month, $year, $facility){
    	 
    	if($facility == null || $facility == "all"){
    		$q = $this->db->select('*')
    		->from('booking')
    		->where('MONTH(date)', $month)
    		->where('YEAR(date)', $year)
    		->where('status', "Accepted")
    		->order_by('date', 'desc');
    	}else{
    
    		$q = $this->db->select('*')
    		->from('booking')
    		->where('MONTH(date)', $month)
    		->where('YEAR(date)', $year)
    		->where('status', "Accepted")
    		->where('f_id', $facility)
    		->order_by('date', 'desc');
    	}
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    	 
    
    
    }
    
    public function get_annually_report($date, $facility){
    
    	if($facility == null || $facility == "all"){
    		$q = $this->db->select('*')
    		->from('booking')
    		->where('YEAR(date)', $date)
    		->where('status', "Accepted")
    		->order_by('date', 'desc');
    	}else{
    
    		$q = $this->db->select('*')
    		->from('booking')
    		->where('YEAR(date)', $date)
    		->where('status', "Accepted")
    		->where('f_id', $facility)
    		->order_by('date', 'desc');
    	}
    
    	$res['row'] = $q->get()->result();
    
    	return $res;
    
    
    
    }
	
	
	
}
?>
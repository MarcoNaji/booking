<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

class login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    // admin login query 
    public function validate($username){
        
        
        $q = $this->db->select('*')
	 			   ->from('users')
				   ->where('mail', $username);
	 
	$q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
    }
    
    
	
	//..............................................
	//get role to login
    public function get_role($user_id){
    
    
    	$q = $this->db->select('*')
    	->from('users_roles')
    	->where('uid', $user_id);
    
    	$q = $this->db->get();
    	$res['row'] = $q->result();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
	// reset password query
    public function validate_for_reset($ic, $role){
		
		if($role == "neph"){
			
		 $q = $this->db->select('*')
	 			   ->from('neph')
				   ->where('neph_ic', $ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;	
		}
		
		if($role == "doc"){
			
			 $q = $this->db->select('*')
	 			   ->from('doc')
				   ->where('doc_ic', $ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
		
		if($role == "owner"){
			
			 $q = $this->db->select('*')
	 			   ->from('owner')
				   ->where('owner_ic', $ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
		
		if($role == "staff"){
			
			 $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('staff_ic', $ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
        
        
       
    }
	
	public function get_user_identity($hash_ic, $hash_role){
		
		if($hash_role == sha1("neph")){
			
		 $q = $this->db->select('*')
	 			   ->from('neph')
				   ->where('sha1(neph_ic)', $hash_ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;	
		}
		
		if($hash_role == sha1("doc")){
			
			 $q = $this->db->select('*')
	 			   ->from('doc')
				   ->where('sha1(doc_ic)', $hash_ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
		
		if($hash_role == sha1("owner")){
			
			 $q = $this->db->select('*')
	 			   ->from('owner')
				   ->where('sha1(owner_ic)', $hash_ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
		
		if($hash_role == sha1("staff")){
			
			 $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('sha1(staff_ic)', $hash_ic)
				   ->where('deleted', -1);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
			
		}
        
        
       
    }
	
	
	public function add_token($data){
				 
      $this->db->insert('pass_reset', $data);  
	}
	
	public function get_token($token_id){
		$datestring = "%Y-%m-%d %H:%i:%s";
        $time = time();
		$current_datetime = mdate($datestring, $time);
			
		 $q = $this->db->select('*')
	 			   ->from('pass_reset')
				   ->where('token_id', $token_id)
				   ->where('status', 'active')
				   ->where('expiry_time >',$current_datetime);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;	
		
	}
	
	public function reset_pass($hash_ic, $hash_role, $data){
		
		if($hash_role == sha1("neph")){
		 $this->db->where('sha1(neph_ic)', $hash_ic);
		 $this->db->update('neph', $data); 	
		 
		}
		
		if($hash_role == sha1("doc")){
		$this->db->where('sha1(doc_ic)', $hash_ic);
		$this->db->update('doc', $data);		
			
		}
		
		if($hash_role == sha1("owner")){
		$this->db->where('sha1(owner_ic)', $hash_ic);
		$this->db->update('owner', $data);	
			
		}
		
		if($hash_role == sha1("staff")){
		$this->db->where('sha1(staff_ic)', $hash_ic);
		$this->db->update('medical_staff', $data);	
			
		}
		 
	}
	
	public function update_token($token_id, $data){
       $this->db->where('token_id', $token_id);
 	   $this->db->update('pass_reset', $data);    
	}
	
	//..............................................
	
	public function validate_id($id){
	
	
		$q = $this->db->select('*')
		->from('users')
		->where('uid', $id);
	
		$q = $this->db->get();
		$res['row'] = $q->result();
		$res['num_row']= $q->num_rows();
	
		return $res;
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
	
}
?>
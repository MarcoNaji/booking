<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */
class admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
   
	
	
	
	//admin queries
	
    public function check_session($id, $session){
    
    
    	$q = $this->db->select('*')
    	->from('sessions')
    	->where('uid', $id)
    	->where('sid', $session);
    
    	$q = $this->db->get();
    	$res['num_row']= $q->num_rows();
    
    	return $res;
    }
	
	public function get_password($id){
        // grab user input
   $this->db->select('password');
    $this->db->from('admin');
    $this->db->where('admin_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->password;
   
}
return $data;
	    
  
   
	}
	
	public function change_password($data, $id){
       $this->db->where('admin_id', $id);
$this->db->update('admin', $data);    
	}
	
	public function get_admin($id){
       
    $this -> db -> select('*');
    $this -> db -> from('admin');
    $this -> db -> where('admin_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function get_all_facility(){
		 
		$q = $this->db->select('*')
		->from('facility');
	
		$res['row'] = $q->get()->result();
	
		return $res;
		 
	
	}
	
	//.................................................
	
	
	// manage nephrologist queries
	
	public function get_all_neph(){
       
     $q = $this->db->select('*')
	 			   ->from('neph');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_neph_with_deleted(){
       
     $q = $this->db->select('*')
	 			   ->from('neph');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_neph($id){
       
    $this -> db -> select('*');
    $this -> db -> from('neph');
    $this -> db -> where('neph_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function add_neph($data, $ic){
		 
		$this->db->from('neph')
            	 ->where('neph_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->insert('neph', $data);
		return true;
	}
	}
	
	public function update_neph($data, $id){
				 
      $this->db->where('neph_id', $id);
	  $this->db->update('neph', $data);
	    
        
	}
	
	public function update_neph_with_validation($data, $id, $new_ic, $old_ic){
		
	  if($new_ic != $old_ic){
	  
	  $this->db->from('neph')
            	 ->where('neph_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->where('neph_id', $id);
	 	$this->db->update('neph', $data);
	  	return true;
		}
		  
		  
	  }else{
				 
      $this->db->where('neph_id', $id);
	  $this->db->update('neph', $data);
	  return true;
	  }
        
	}
	
	public function delete_neph($id){
		 
	  $data = array(
			'deleted' => 1
				);	
				 
      $this->db->where('neph_id', $id);
	  $this->db->update('neph', $data);
	    
        
	}
	
	public function undelete_neph($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
      $this->db->where('neph_id', $id);
	  $this->db->update('neph', $data);
	    
        
	}
	
	//............................................................
	
	// manage doctor queries
	
	public function get_all_doc(){
       
     $q = $this->db->select('*')
	 			   ->from('doc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_doc_with_deleted(){
       
     $q = $this->db->select('*')
	 			   ->from('doc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_doc($id){
       
    $this -> db -> select('*');
    $this -> db -> from('doc');
    $this -> db -> where('doc_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function add_doc($data, $ic){
		
		$this->db->from('neph')
            	 ->where('neph_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->insert('doc', $data);
		return true;
	}
	}
	
	public function update_doc($data, $id){
				 
      $this->db->where('doc_id', $id);
	  $this->db->update('doc', $data);
	    
        
	}
	
	public function update_doc_with_validation($data, $id, $new_ic, $old_ic){
				 
      if($new_ic != $old_ic){
	  
	  $this->db->from('neph')
            	 ->where('neph_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->where('doc_id', $id);
	 	$this->db->update('doc', $data);
	  	return true;
		}
		  
		  
	  }else{
				 
      $this->db->where('doc_id', $id);
	  $this->db->update('doc', $data);
	  return true;
	  }
	    
        
	}
	
	public function delete_doc($id){
		 
	  $data = array(
			'deleted' => 1
				);	
				 
      $this->db->where('doc_id', $id);
	  $this->db->update('doc', $data);
	    
        
	}
	
	public function undelete_doc($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
      $this->db->where('doc_id', $id);
	  $this->db->update('doc', $data);
	    
        
	}
	
	
	//.........................................................
	
	// manage dialysis center queries
	
	public function get_all_center(){
       
     $q = $this->db->select('*')
	 			   ->from('center');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_center($id){
       
    $this -> db -> select('*');
    $this -> db -> from('center');
    $this -> db -> where('center_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function get_center_id($id){
        
   $this->db->select('center_id');
    $this->db->from('medical_staff');
    $this->db->where('staff_id', $id);

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->center_id;
   
}
return $data;
	    
  
   
	}
	
	public function get_center_name($id){
        
   $this->db->select('name');
    $this->db->from('center');
    $this->db->where('center_id', $id);

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->name;
   
}
return $data;
	    
  
   
	}
	
	public function add_center($data){
		 

       $this->db->insert('center', $data);
       $insert_id = $this->db->insert_id();
       $this->db->trans_complete();
       return array('id' => $insert_id);
	  
	}
	
	public function add_center_shift($data){
			
	
		$this->db->insert('shift', $data);
		 
	}
	
	public function add_machine($data){
		$this->db->insert('machine', $data);
	}
	
	public function add_machine_info($data){
		$this->db->insert('machine_info', $data);
	}
	
	public function update_center($data, $id){
				 
      $this->db->where('center_id', $id);
	  $this->db->update('center', $data);
	    
        
	}
	
	public function delete_center($id){
		 
	  $data = array(
			'deleted' => 1
				);	
				 
      $this->db->where('center_id', $id);
	  $this->db->update('medical_staff', $data);
	  $this->db->where('center_id', $id)->update('center', $data);
        
	}
	
	public function undelete_center($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
	  $this->db->where('center_id', $id)->update('center', $data);
        
	}
	
	
	//............................................................
	
	// manage center owner queries
	
	public function get_all_center_owner(){
       
     $q = $this->db->select('*')
	 			   ->from('owner');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_center_owner_without_d(){
       
     $q = $this->db->select('*')
	 			   ->from('owner')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function add_center_owner($data, $ic){
		 
		$this->db->from('neph')
            	 ->where('neph_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->insert('owner', $data);
		return true;
	}
	}
	
	public function get_center_owner($id){
       
    $this -> db -> select('*');
    $this -> db -> from('owner');
    $this -> db -> where('owner_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function update_center_owner($data, $id){
				 
      $this->db->where('owner_id', $id);
	  $this->db->update('owner', $data);
	    
        
	}
	
	public function update_center_owner_with_validation($data, $id, $new_ic, $old_ic){
				 
      if($new_ic != $old_ic){
	  
	  $this->db->from('neph')
            	 ->where('neph_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->where('owner_id', $id);
	 	$this->db->update('owner', $data);
	  	return true;
		}
		  
		  
	  }else{
				 
      $this->db->where('owner_id', $id);
	  $this->db->update('owner', $data);
	  return true;
	  }
	    
        
	}
	
	public function delete_center_owner($id){
		 
	  $data = array(
			'deleted' => 1
				);	
				 
      $this->db->where('owner_id', $id);
	  $this->db->update('owner', $data);
	    
        
	}
	
	public function undelete_center_owner($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
      $this->db->where('owner_id', $id);
	  $this->db->update('owner', $data);
	    
        
	}
	
	//.........................................................
	
	// manage medical staff queries
	
	public function get_all_staff($id){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('center_id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_staff($id){
       
    $this -> db -> select('*');
    $this -> db -> from('medical_staff');
    $this -> db -> where('staff_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function add_staff($data, $ic){
		 
		$this->db->from('neph')
            	 ->where('neph_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->insert('medical_staff', $data);
		return true;
	}
	}
	
	public function update_staff($data, $id){
				 
      $this->db->where('staff_id', $id);
	  $this->db->update('medical_staff', $data);
	    
        
	}
	
	public function update_staff_with_validation($data, $id, $new_ic, $old_ic){
				 
      if($new_ic != $old_ic){
	  
	  $this->db->from('neph')
            	 ->where('neph_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('doc')
            	 ->where('doc_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('owner')
            	 ->where('owner_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}
		$this->db->from('medical_staff')
            	 ->where('staff_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() != '0' ){
       

       
	   return false;

    	}else{
        $this->db->where('staff_id', $id);
	 	$this->db->update('medical_staff', $data);
	  	return true;
		}
		  
		  
	  }else{
				 
      $this->db->where('staff_id', $id);
	  $this->db->update('medical_staff', $data);
	  return true;
	  }
	    
        
	}
	
	public function delete_staff($id){
		 
	  $data = array(
			'deleted' => 1
				);	
				 
      $this->db->where('staff_id', $id);
	  $this->db->update('medical_staff', $data);
	    
        
	}
	
	public function undelete_staff($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
      $this->db->where('staff_id', $id);
	  $this->db->update('medical_staff', $data);
	    
        
	}
	
	//.........................................................
	
	//work manager quieries
	
	public function get_work_manager(){
       
     $q = $this->db->select('*')
	 			   ->from('work_manager');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function update_work_manager($data, $id){
		 		 
      $this->db->where('id', $id);
	  $this->db->update('work_manager', $data);
	    
        
	}
	//...................................
	
	//patient
	
	public function get_all_pat(){
       
     $q = $this->db->select('*')
	 			   ->from('patient');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function undelete_pat($id){
		 
	  $data = array(
			'deleted' => -1
				);	
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('patient', $data);
	    
        
	}
	
	
	//........................................
	
	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* ===================================================

 * Author :Ammar Naji Ahmed.
 * E-mail :amar_ash@yahoo.com
 * Phone  :0176937076
 
 * Copyright : NI Solution ========================================================== */

class ndo_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	
	//change password for nephrologist queries
	
	public function get_neph_password($id){
        
   $this->db->select('password');
    $this->db->from('neph');
    $this->db->where('neph_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->password;
   
}
return $data;
	    
  
   
	}
	
	public function change_neph_password($data, $id){
       $this->db->where('neph_id', $id);
$this->db->update('neph', $data);    
	}
	
	//.................................................
	
	
	//change password for doctor queries
	
	public function get_doc_password($id){
        
   $this->db->select('password');
    $this->db->from('doc');
    $this->db->where('doc_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->password;
   
}
return $data;
	    
  
   
	}
	
	public function change_doc_password($data, $id){
       $this->db->where('doc_id', $id);
$this->db->update('doc', $data);    
	}
	
	//.................................................
	
	
	//change password for owner queries
	
	public function get_owner_password($id){
        
   $this->db->select('password');
    $this->db->from('owner');
    $this->db->where('owner_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->password;
   
}
return $data;
	    
  
   
	}
	
	public function change_owner_password($data, $id){
       $this->db->where('owner_id', $id);
$this->db->update('owner', $data);    
	}
	
	//.................................................
	
	//change password for staff queries
	
	public function get_staff_password($id){
        
   $this->db->select('password');
    $this->db->from('medical_staff');
    $this->db->where('staff_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->password;
   
}
return $data;
	    
  
   
	}
	
	public function change_staff_password($data, $id){
       $this->db->where('staff_id', $id);
$this->db->update('medical_staff', $data);    
	}
	
	//.................................................
	
	// nephrologist queries
	
	public function get_neph($id){
       
    $this -> db -> select('*');
    $this -> db -> from('neph');
    $this -> db -> where('neph_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function update_neph_profile($data, $id){
				 
      $this->db->where('neph_id', $id);
	  $this->db->update('neph', $data);
	    
        
	}
	
	
	//.................................................
	
	// doctors queries
	
	public function get_doc($id){
       
    $this -> db -> select('*');
    $this -> db -> from('doc');
    $this -> db -> where('doc_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function update_doc_profile($data, $id){
				 
      $this->db->where('doc_id', $id);
	  $this->db->update('doc', $data);
	    
        
	}
	
	
	//.................................................
	
	//owner queries
	
	public function get_owner($id){
       
    $this -> db -> select('*');
    $this -> db -> from('owner');
    $this -> db -> where('owner_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function update_owner_profile($data, $id){
				 
      $this->db->where('owner_id', $id);
	  $this->db->update('owner', $data);
	    
        
	}
	
	
	//....................................................
	
	// staff queries
	public function get_all_staff_for_owner(){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
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
	
	public function get_staff($id){
       
    $this -> db -> select('*');
    $this -> db -> from('medical_staff');
    $this -> db -> where('staff_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function update_staff_profile($data, $id){
				 
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
	
	public function get_all_staff(){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_staff_d(){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	public function get_all_staff_of_center($center_id){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('center_id',$center_id)
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_staff_for_clerk($center_id){
       
     $q = $this->db->select('*')
	 			   ->from('medical_staff')
				   ->where('center_id',$center_id)
				   ->where('role != ', 'clerk')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	//.........................................................
	
	//patient queries
	
	//get queries
	
	//get patient excluding deleted
	public function get_all_pat($id){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('center_id', $id)
				   ->where('deleted', -1);
	 
	$q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	//get patient including deleted
	public function get_all_pat_d($id){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('center_id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_pat_for_neph($id){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('neph_id', $id)
				   ->where('deleted', -1);
	 
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_all_pat_for_neph_center($id, $center){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('neph_id', $id)
				   ->where('center_id', $center)
				   ->where('deleted', -1);
	 
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_all_pat_for_doc($id){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('doc_id', $id)
				   ->where('deleted', -1);
	 
	  $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_all_pat_for_doc_center($id, $center){
       
     $q = $this->db->select('*')
	 			   ->from('patient')
				   ->where('doc_id', $id)
				   ->where('center_id', $center)
				   ->where('deleted', -1);
	 
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	//by IC
	public function get_pat_info($ic){
       
    $this -> db -> select('*');
    $this -> db -> from('patient');
    $this -> db -> where('pat_ic', $ic);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	//by ID
	public function get_pat_info_id($id){
       
    $this -> db -> select('*');
    $this -> db -> from('patient');
    $this -> db -> where('pat_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	
	
	//history info
	public function get_history_info($id){
       
    $this -> db -> select('*');
    $this -> db -> from('patient_history');
    $this -> db -> where('pat_id', $id);
	$this -> db ->order_by('action_date', 'desc');
	$this -> db ->order_by('action_time', 'desc');

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function get_history_info_detail($id){
       
    $this -> db -> select('*');
    $this -> db -> from('patient_history');
    $this -> db -> where('history_id', $id);

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	//get patient name
	
	public function get_pat_name($id){
        
   $this->db->select('name');
    $this->db->from('patient');
    $this->db->where('pat_id', $id );

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->name;
   
}
return $data;
	    
  
   
	}
	
	public function get_medical_info($id){
       
    $this -> db -> select('*');
    $this -> db -> from('medical_info');
    $this -> db -> where('pat_id', $id);
   

    $query = $this->db->get();
    return $query->result();
	    
        
	}
	
	public function get_pat_pic($id){
		 $q = $this->db->select('*')
	 			   ->from('medical_images')
				   ->where('pat_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	// slot queries by center
	public function get_all_slot_sch($id){
       
     $q = $this->db->select('*')
	 			   ->from('slot_sch')
				   ->where('center_id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	// slot queries by patient
	public function get_pat_sch($id){
       
     $q = $this->db->select('*')
	 			   ->from('slot_sch')
				   ->where('pat_id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	// slot queries by day
	public function get_day_slot_sch($center_id, $day){
       
     $q = $this->db->select('*')
	 			   ->from('slot_sch')
				   ->where('center_id', $center_id)
				   ->where('day', $day);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//get queries ..........................
	
	
	//add queries 
	
	public function add_pat($data, $ic){
		 
		$this->db->from('patient')
            	 ->where('pat_ic', $ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() == '0' ){
       

       $this->db->insert('patient', $data);
	   $insert_id = $this->db->insert_id();
   					$this->db->trans_complete();
					
	   return array('result' => 'true', 'id' => $insert_id);

    	}
	}
	
	public function add_pat_history($data){
				 
      $this->db->insert('patient_history', $data);  
	}
	
	public function add_pat_sch($data, $slot_id, $center_id){
		$this->db->from('slot_sch')
            	 ->where('slot_id', $slot_id)
				 ->where('center_id', $center_id);
				 $rs = $this->db->get();
				 $rs->row_array();
				 if ($rs->num_rows() == '0' ){
       

      $this->db->insert('slot_sch', $data);

    	}
		     
	}
	
	
	public function add_pat_med_problem($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $summary){
				 
      $this->db->insert('gses', $data1);
	  $this->db->insert('endo', $data2);
	  $this->db->insert('gastro', $data3);
	  $this->db->insert('res_system', $data4);
	  $this->db->insert('musc', $data5);
	  $this->db->insert('card', $data6);
	  $this->db->insert('hema', $data7);
	  $this->db->insert('neuro', $data8);
	  $this->db->insert('other_problem', $data9);
	  $this->db->insert('problem_summary', $summary);
	    
        
	}
	
	
	public function add_pat_medication($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $plan){
				 
      $this->db->insert('arb_blocker', $data1);
	  $this->db->insert('beta_blocker', $data2);
	  $this->db->insert('ace_inhibitors', $data3);
	  $this->db->insert('ccb_blocker', $data4);
	  $this->db->insert('avd_vitamin', $data5);
	  $this->db->insert('hematinics', $data6);
	  $this->db->insert('aab_blocker', $data7);
	  $this->db->insert('vasodilators', $data8);
	  $this->db->insert('phosphate_binders', $data9);
	  $this->db->insert('diuretics', $data10);
	  $this->db->insert('erythorpoetin', $data11);
	  $this->db->insert('other_medic', $data12);
	  $this->db->insert('plan', $plan);
	    
        
	}
			//medical info
			
			public function add_medic_info($data){
				 
      $this->db->insert('medical_info', $data);
        
	}
	
	//medical images
			
			public function add_medical_img($data){
				 
      $this->db->insert('medical_images', $data);
        
	}
	
	//add queries..........................
	
	//update queries
	
	public function update_pat_info($data, $id){
	
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('patient', $data);
	    
        
	}
	
	public function delete_pat_neph_con($data, $center_id, $neph_id){
	
				 
      $this->db->where('center_id', $center_id);
	  $this->db->where('neph_id', $neph_id);
	  $this->db->update('patient', $data);
	    
        
	}
	
	public function delete_pat_doc_con($data, $center_id, $doc_id){
	
				 
      $this->db->where('center_id', $center_id);
	  $this->db->where('doc_id', $doc_id);
	  $this->db->update('patient', $data);
	    
        
	}
	
	public function validate_and_update_pat_info($data, $id, $new_ic, $old_ic){
		
		if($new_ic != $old_ic){
			
		$this->db->from('patient')
            	 ->where('pat_ic', $new_ic);
    	$rs = $this->db->get();
     	$rs->row_array();
            // Here we are check if that entry exists
    	if ($rs->num_rows() == '0' ){
			
      $this->db->where('pat_id', $id);
	  $this->db->update('patient', $data);
	  
	   return true;

    	}else{
        
		return false;
	}
		}else{
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('patient', $data);
	    
		return true;
		}
	}
	
	public function update_medical_info($data, $id){
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('medical_info', $data);
	    
        
	}
	
	public function update_pat_med_problem($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9,$summary, $id){
	  $this->db->where('pat_id', $id);		 
      $this->db->update('gses', $data1);
	  $this->db->where('pat_id', $id);
	  $this->db->update('endo', $data2);
	  $this->db->where('pat_id', $id);
	  $this->db->update('gastro', $data3);
	  $this->db->where('pat_id', $id);
	  $this->db->update('res_system', $data4);
	  $this->db->where('pat_id', $id);
	  $this->db->update('musc', $data5);
	  $this->db->where('pat_id', $id);
	  $this->db->update('card', $data6);
	  $this->db->where('pat_id', $id);
	  $this->db->update('hema', $data7);
	  $this->db->where('pat_id', $id);
	  $this->db->update('neuro', $data8);
	  $this->db->where('pat_id', $id);
	  $this->db->update('other_problem', $data9);
	  $this->db->where('pat_id', $id);
	  $this->db->update('problem_summary', $summary);
	    
        
	}
	
	public function update_pat_medication($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $plan, $id){
		
	  $this->db->where('pat_id', $id);		 
      $this->db->update('arb_blocker', $data1);
	  $this->db->where('pat_id', $id);
	  $this->db->update('beta_blocker', $data2);
	  $this->db->where('pat_id', $id);
	  $this->db->update('ace_inhibitors', $data3);
	  $this->db->where('pat_id', $id);
	  $this->db->update('ccb_blocker', $data4);
	  $this->db->where('pat_id', $id);
	  $this->db->update('avd_vitamin', $data5);
	  $this->db->where('pat_id', $id);
	  $this->db->update('hematinics', $data6);
	  $this->db->where('pat_id', $id);
	  $this->db->update('aab_blocker', $data7);
	  $this->db->where('pat_id', $id);
	  $this->db->update('vasodilators', $data8);
	  $this->db->where('pat_id', $id);
	  $this->db->update('phosphate_binders', $data9);
	  $this->db->where('pat_id', $id);
	  $this->db->update('diuretics', $data10);
	  $this->db->where('pat_id', $id);
	  $this->db->update('erythorpoetin', $data11);
	  $this->db->where('pat_id', $id);
	  $this->db->update('other_medic', $data12);
	  $this->db->where('pat_id', $id);
	  $this->db->update('plan', $plan);
	    
        
	}
	
	//update queries.........................
	
	
	// delete queries 
	
	public function delete_pic($id){
		 
      $this->db->where('id', $id)->delete('medical_images');
	
	}
	
	public function delete_pat_sch($id){
		 
      $this->db->where('pat_id', $id)->delete('slot_sch');
	
	}
	
	
	
	public function delete_pat($id, $data){	
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('patient', $data);
	    
        
	}
	//.........................................
	
	// patient record queriies
	
	public function get_pat_record($id){
       
     $q = $this->db->select('*')
	 			   ->from('d_record')
				   ->where('pat_id', $id)
				   ->order_by('treatment_no', 'asc');
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
       
	}
	
	public function get_record_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('d_record')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_hd_treatment($id){
       
     $q = $this->db->select('*')
	 			   ->from('hd_treatment')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_pre_assessment($id){
       
     $q = $this->db->select('*')
	 			   ->from('pre_hd_assessment')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_observation($id){
       
     $q = $this->db->select('*')
	 			   ->from('observation')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_observation_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('observation_detail')
				   ->where('record_id', $id)
				   ->order_by('starting_time', 'asc');
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row'] = $q->num_rows();
	 
	 return $res;
	    
       
	}
	
	public function get_post_assessment($id){
       
     $q = $this->db->select('*')
	 			   ->from('post_hd_assessment')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_critical_incident($id){
       
     $q = $this->db->select('*')
	 			   ->from('critical_incident')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_performance_measurement($id){
       
     $q = $this->db->select('*')
	 			   ->from('performance_measurement')
				   ->where('record_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	
	
	public function add_record($data){
				 
      $this->db->insert('d_record', $data);
        
	}
	
	public function add_hd_treatment($data){
				 
      $this->db->insert('hd_treatment', $data);
        
	}
	
	public function add_pre_hd_assessment($data){
				 
      $this->db->insert('pre_hd_assessment', $data);
        
	}
	
	public function add_observation($data){
				 
      $this->db->insert('observation', $data);
        
	}
	
	
	public function add_observation_detail($data){
				 
      $this->db->insert('observation_detail', $data);
        
	}
	
	public function add_post_hd_assessment($data){
				 
      $this->db->insert('post_hd_assessment', $data);
        
	}
	
	public function add_critical_incident($data){
				 
      $this->db->insert('critical_incident', $data);
        
	}
	
	public function add_performance_measurement($data){
				 
      $this->db->insert('performance_measurement', $data);
        
	}
	
	public function edit_record($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('d_record', $data);
	    
        
	}
	
	public function edit_treatment($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('hd_treatment', $data);
	    
        
	}
	
	public function edit_pre_assessment($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('pre_hd_assessment', $data);
	    
        
	}
	
	public function edit_observation($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('observation', $data);
	    
        
	}
	
	public function edit_post_assessment($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('post_hd_assessment', $data);
	    
        
	}
	
	public function edit_critical_incident($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('critical_incident', $data);
	    
        
	}
	
	public function edit_performance_measurement($data, $id){
				 
      $this->db->where('record_id', $id);
	  $this->db->update('performance_measurement', $data);
	    
        
	}
	
	
	public function delete_ob_detail($id){
		 
      $this->db->where('id', $id)->delete('observation_detail');
	
	}
	
	public function delete_all_ob_detail($id){
		 
      $this->db->where('record_id', $id)->delete('observation_detail');
	
	}
	
	/*
	public function delete_record($id){
		 
      $this->db->where('id', $id)->delete('d_record');
	
	}
	*/
	
	
	//............................................
	
	// patient clinical and boichem summary queriies
	
	public function get_clinical_summary($id){
       
     $q = $this->db->select('*')
	 			   ->from('clinical_summary')
				   ->where('pat_id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_clinical_xyz($id){
       
     $q = $this->db->select('*')
	 			   ->from('clinical_xyz')
				   ->where('pat_id', $id)
				   ->order_by('date', 'desc');
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	  $res['num_row'] = $q->num_rows();
	 
	 return $res;
	    
       
	}
	
	public function get_clinical_xyz_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('clinical_xyz')
				   ->where('id', $id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 
	 return $res;
	    
       
	}
	
	public function get_clinical_xyz_report($year, $month){
       
     $q = $this->db->select('*')
	 			   ->from('clinical_xyz')
				   ->where('month(date)', $month)
  				   ->where('year(date) ', $year)
 				   ->order_by('date','ASC');
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
       
	}
	
	public function get_clinical_xyz_reportB($year){
       
	 
	 $query=$this->db->query("SELECT *
FROM clinical_xyz m 
JOIN (
SELECT pat_id, id
FROM clinical_xyz
where year(date) = $year 

) mm
USING(pat_id,id)");
	 
	
	 
	 return $query->result();
	 
	 
	    
       
	}
	
	
	public function add_clinical_summary($data){
				 
      $this->db->insert('clinical_summary', $data);
        
	}
	
	
	public function edit_clinical_summary($data, $id){
				 
      $this->db->where('pat_id', $id);
	  $this->db->update('clinical_summary', $data);
	    
        
	}
	
	
	public function add_clinical_xyz($data){
				 
      $this->db->insert('clinical_xyz', $data);
        
	}
	
	public function edit_clinical_xyz($data, $id){
				 
     $this->db->where('id', $id);
	  $this->db->update('clinical_xyz', $data);
        
	}
	
	public function delete_xyz($id){
		 
      $this->db->where('id', $id)->delete('clinical_xyz');
	
	}
	
	//............................................	
		
	//get medical problem queries

	public function get_gses($id){
       
     $q = $this->db->select('*')
	 			   ->from('gses')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_endo($id){
       
     $q = $this->db->select('*')
	 			   ->from('endo')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_gastro($id){
       
     $q = $this->db->select('*')
	 			   ->from('gastro')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}
	
	public function get_res_system($id){
       
     $q = $this->db->select('*')
	 			   ->from('res_system')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_musc($id){
       
     $q = $this->db->select('*')
	 			   ->from('musc')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}		
	
	public function get_card($id){
       
     $q = $this->db->select('*')
	 			   ->from('card')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_hema($id){
       
     $q = $this->db->select('*')
	 			   ->from('hema')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}		
	
	public function get_neuro($id){
       
     $q = $this->db->select('*')
	 			   ->from('neuro')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_other_problem($id){
       
     $q = $this->db->select('*')
	 			   ->from('other_problem')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}
	
	public function get_problem_summary($id){
       
     $q = $this->db->select('*')
	 			   ->from('problem_summary')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}				
	
	//......................................................
	
	//get medications queries

	public function get_arb($id){
       
     $q = $this->db->select('*')
	 			   ->from('arb_blocker')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_beta($id){
       
     $q = $this->db->select('*')
	 			   ->from('beta_blocker')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_ace($id){
       
     $q = $this->db->select('*')
	 			   ->from('ace_inhibitors')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_ccb($id){
       
     $q = $this->db->select('*')
	 			   ->from('ccb_blocker')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}		
	
	public function get_vitamin_d($id){
       
     $q = $this->db->select('*')
	 			   ->from('avd_vitamin')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_hematinics($id){
       
     $q = $this->db->select('*')
	 			   ->from('hematinics')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_aab($id){
       
     $q = $this->db->select('*')
	 			   ->from('aab_blocker')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_vas($id){
       
     $q = $this->db->select('*')
	 			   ->from('vasodilators')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_phosphate($id){
       
     $q = $this->db->select('*')
	 			   ->from('phosphate_binders')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_diur($id){
       
     $q = $this->db->select('*')
	 			   ->from('diuretics')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_ery($id){
       
     $q = $this->db->select('*')
	 			   ->from('erythorpoetin')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_ery(){
       
     $query=$this->db->query("SELECT *
FROM erythorpoetin m 
JOIN (
SELECT pat_id,MAX(id) id
FROM erythorpoetin 
GROUP BY pat_id
) mm
USING(pat_id,id)");
	 
	
	 
	 return $query->result();
	    
        
	}	
	
	public function get_other_medic($id){
       
     $q = $this->db->select('*')
	 			   ->from('other_medic')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_medic_plan($id){
       
     $q = $this->db->select('*')
	 			   ->from('plan')
				   ->where('pat_id',$id)
				    ->order_by('id', 'desc')
					->limit('1');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}						
	
			
	
	//......................................................
	
	//get medical problem history queries

	public function get_gses_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('gses')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_endo_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('endo')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_gastro_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('gastro')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}
	
	public function get_res_system_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('res_system')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_musc_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('musc')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}		
	
	public function get_card_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('card')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_hema_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('hema')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}		
	
	public function get_neuro_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('neuro')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}	
	
	public function get_other_problem_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('other_problem')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}
	
	public function get_problem_summary_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('problem_summary')
				   ->where('history_id',$id);
	 
	 $q = $this->db->get();
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 return $res;
	    
        
	}				
	
	//......................................................
	
	//get medications queries

	public function get_arb_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('arb_blocker')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_beta_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('beta_blocker')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_ace_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('ace_inhibitors')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_ccb_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('ccb_blocker')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}		
	
	public function get_vitamin_d_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('avd_vitamin')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_hematinics_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('hematinics')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_aab_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('aab_blocker')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_vas_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('vasodilators')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_phosphate_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('phosphate_binders')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_diur_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('diuretics')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_ery_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('erythorpoetin')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}	
	
	public function get_other_medic_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('other_medic')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_medic_plan_his($id){
       
     $q = $this->db->select('*')
	 			   ->from('plan')
				   ->where('history_id',$id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
			
	//..............................................
	
	//nephrologist queries
	
	public function get_all_neph(){
       
     $q = $this->db->select('*')
	 			   ->from('neph')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//get nephrologist including deleted
	
	public function get_all_neph_d(){
       
     $q = $this->db->select('*')
	 			   ->from('neph');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function request_neph($data){
				 
      $this->db->insert('neph_visit_request', $data);
        
	}
	
	public function get_neph_request($center_id, $id){
       
     $q = $this->db->select('*')
	 			   ->from('neph_visit_request')
				   ->where('center_id',$center_id)
				   ->where('neph_id', $id)
				   ->order_by('date', 'desc')
				   ->order_by('time', 'desc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_neph_request_for_neph_view($id){
       
     $q = $this->db->select('*')
	 			   ->from('neph_visit_request')
				   ->where('neph_id', $id)
				   ->order_by('date', 'desc')
				   ->order_by('time', 'desc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_neph_req_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('neph_visit_request')
				   ->where('id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function update_req_for_neph($id, $data){
				 
      $this->db->where('id', $id);
	  $this->db->update('neph_visit_request', $data);
	    
        
	}
	
	public function delete_neph_req($id){
		 
      $this->db->where('id', $id)->delete('neph_visit_request');
	
	}
	
	//supervision requests
	
	public function req_sup_neph($data){
				 
      $this->db->insert('neph_supervision_request', $data);
        
	}
	
	public function get_center_superviser_neph($center_id){
		 $q = $this->db->select('*')
	 			   ->from('neph_supervision_request')
				   ->where('center_id', $center_id)
				   ->where('status', "accepted");
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_neph_supervision_request($center_id, $neph_id){
		 $q = $this->db->select('*')
	 			   ->from('neph_supervision_request')
				   ->where('center_id', $center_id)
				   ->where('neph_id', $neph_id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_neph_supervision_request_for_neph_view($neph_id){
		 $q = $this->db->select('*')
	 			   ->from('neph_supervision_request')
				   ->where('neph_id', $neph_id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_neph_sup_req_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('neph_supervision_request')
				   ->where('id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function update_req_sup_neph($data, $id){
				 
      $this->db->where('id', $id);
	  $this->db->update('neph_supervision_request', $data);
	    
        
	}
	
	public function delete_neph_sup_req($id){
		 
      $this->db->where('id', $id)->delete('neph_supervision_request');
	
	}
	
	
	//...........................................
	
	//doctor queries
	
	public function get_all_doc(){
       
     $q = $this->db->select('*')
	 			   ->from('doc')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//get doctor including deleted
	
	public function get_all_doc_d(){
       
     $q = $this->db->select('*')
	 			   ->from('doc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function request_doc($data){
				 
      $this->db->insert('doc_visit_request', $data);
        
	}
	
	public function get_doc_request($center_id, $ic){
       
     $q = $this->db->select('*')
	 			   ->from('doc_visit_request')
				   ->where('center_id',$center_id)
				   ->where('doc_id', $ic)
				   ->order_by('date', 'desc')
				   ->order_by('time', 'desc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_doc_request_for_doc_view($ic){
       
     $q = $this->db->select('*')
	 			   ->from('doc_visit_request')
				   ->where('doc_id', $ic)
				   ->order_by('date', 'desc')
				   ->order_by('time', 'desc');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_doc_req_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('doc_visit_request')
				   ->where('id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function update_req_for_doc($id, $data){
				 
      $this->db->where('id', $id);
	  $this->db->update('doc_visit_request', $data);
	    
        
	}
	
	public function delete_doc_req($id){
		 
      $this->db->where('id', $id)->delete('doc_visit_request');
	
	}
	
	//supervision request
	
	public function req_sup_doc($data){
				 
      $this->db->insert('doc_supervision_request', $data);
        
	}
	
	public function get_center_superviser_doc($center_id){
		 $q = $this->db->select('*')
	 			   ->from('doc_supervision_request')
				   ->where('center_id', $center_id)
				   ->where('status', "accepted");
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_doc_supervision_request($center_id, $doc_id){
		 $q = $this->db->select('*')
	 			   ->from('doc_supervision_request')
				   ->where('center_id', $center_id)
				   ->where('doc_id', $doc_id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_doc_supervision_request_for_doc_view($doc_id){
		 $q = $this->db->select('*')
	 			   ->from('doc_supervision_request')
				   ->where('doc_id', $doc_id);
	 $q = $this->db->get(); 
	 $res['row'] = $q->result();
	 $res['num_row']= $q->num_rows();
	 
	 return $res;
	    
        
	}
	
	public function get_doc_sup_req_detail($id){
       
     $q = $this->db->select('*')
	 			   ->from('doc_supervision_request')
				   ->where('id', $id);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function update_req_sup_doc($data, $id){
				 
      $this->db->where('id', $id);
	  $this->db->update('doc_supervision_request', $data);
	    
        
	}
	
	public function delete_doc_sup_req($id){
		 
      $this->db->where('id', $id)->delete('doc_supervision_request');
	
	}
	
	//...........................................
	
	//owner queries
	
	public function get_all_owner(){
       
     $q = $this->db->select('*')
	 			   ->from('owner')
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//get owner including deleted owners
	
	public function get_all_owner_d(){
       
     $q = $this->db->select('*')
	 			   ->from('owner');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	public function get_all_owner_of_center($center_id){
       
     $q = $this->db->select('*')
	 			   ->from('owner')
				   ->where('center_id',$center_id)
				   ->where('deleted', -1);
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//...........................................
	
	// ajax check availablity 
	public function get_all_patient_ic($ic) {
    $this->db->select('pat_ic');
	$this->db->from('patient');
    $this->db->where('pat_ic', $ic);
    
    $query = $this->db->get();
    if( $query->num_rows() > 0 ){
        return true;
    }else{
        return false;
    }
}
	
	
	//................................
	
	// center queries
	
	public function get_all_center(){
       
     $q = $this->db->select('*')
	 			   ->from('center')
				   ->where('deleted', -1);
	 
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
    $data = $row->center_id;
   
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
	
	public function get_center_num_machine($id){
        
   $this->db->select('machine');
    $this->db->from('center');
    $this->db->where('center_id', $id);

    $query = $this->db->get();

     

foreach ($query->result() as $row) {
    $data =$row->machine;
   
}
return $data;
	    
  
   
	}
	
	public function update_center($data, $id){
				 
      $this->db->where('center_id', $id);
	  $this->db->update('center', $data);
	    
        
	}
	
	public function get_all_machine($center_id){
		$q = $this->db->select('*')
		->from('machine')
		->join('machine_info', 'machine.info_id = machine_info.info_id')
		->where('machine.center_id', $center_id);
	
		$res['row'] = $q->get()->result();
	
		return $res; 
	}
	
	public function get_all_running_machine($center_id){
		$q = $this->db->select('*')
		->from('machine')
		->join('machine_info', 'machine.info_id = machine_info.info_id')
		->where('machine.center_id', $center_id)
		->where('machine_info.status', 1);
	
		$res['row'] = $q->get()->result();
	
		return $res;
	}
	
	public function get_machine($machine_id){
		$q = $this->db->select('*')
		->from('machine')
		->join('machine_info', 'machine.info_id = machine_info.info_id')
		->where('machine.machine_id', $machine_id);
	
		$res['row'] = $q->get()->result();
	
		return $res;
	}
	
	public function get_machine_usage($machine_id){
		$q = $this->db->select('*')
		->from('d_record')
		->where('machine_id', $machine_id)
		->order_by("date", "desc")
		->order_by("arrival_time", "asc")
		->order_by("leaving_time", "asc");
	
		$res['row'] = $q->get()->result();
	
		return $res;
	}
	
	public function add_machine($data){
		$this->db->insert('machine', $data);
	}
	
	public function add_machine_info($data){
		$this->db->insert('machine_info', $data);
	}
	
	public function edit_machine($data, $machine_id){
			
		$this->db->where('machine_id', $machine_id);
		$this->db->update('machine', $data);
		 
	
	}
	
	public function get_all_shift($center_id){
		$q = $this->db->select('*')
		->from('shift')
		->where('center_id', $center_id)
		->order_by("from", "asc");
	
		$res['row'] = $q->get()->result();
	
		return $res;
	}
	
	public function get_shift($shift_id){
		$q = $this->db->select('*')
		->from('shift')
		->where('shift_id', $shift_id);
	
		$res['row'] = $q->get()->result();
	
		return $res;
	}
	
	public function add_shift($data){
			
	
		$this->db->insert('shift', $data);
			
	}
	
	public function edit_shift($data, $shift_id){
			
		$this->db->where('shift_id', $shift_id);
		$this->db->update('shift', $data);
			
	
	}
	
	public function delete_shift($shift_id){
			
		$this->db->where('shift_id', $shift_id)->delete('slot_sch');
		$this->db->where('shift_id', $shift_id)->delete('shift');
	
	}
	
	//work manager quieries
	
	public function get_work_manager(){
       
     $q = $this->db->select('*')
	 			   ->from('work_manager');
	 
	 $res['row'] = $q->get()->result();
	 
	 return $res;
	    
        
	}
	
	//...........................................
	
}
?>
<?php

class Adminmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		$this->load->database(); //AUTOLOAD better option
		
    }
    public function login1_valid($username,$password){
        $password=md5($password);
        $q=$this->db->where(['a_name'=>$username,'a_password'=>$password])
                     ->get('admin');

        //return $q->result(); //return array
        // To return rows
        if($q->num_rows()){
            //return TRUE;
            return $q->row()->a_id;
        }
        else{
            return FALSE;
        }    
         
    }
    public function login2_valid($email,$password){

        $password=md5($password);
        $q=$this->db->where(['a_email'=>$email,'a_password'=>$password])
                     ->get('admin');

        if($q->num_rows()){
            //return TRUE;
            return $q->row()->a_id;
        }
        else{
            return FALSE;
        }    
         
    }
    public function add_school_admin($array){
        return $this->db->insert('school_admin',$array);
    }
	
	function show_admin_id($id){
		$this->db->where('a_id', $id);
		$query = $this->db->get('admin');
		$result = $query->result();
		return $result;
	}
	function show_sa_admin_list(){
		/*$query = $this->db
                 
                  ->from('school_admin')                  
                  ->get();*/
         $sql = "SELECT school_admin.*,school.school_name from school_admin, school where school_admin.school_id=school.school_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;	;
	}

	function view_school_admin_full_list(){
		$query = $this->db
                 
                  ->from('school_admin')                  
                  ->get();        
		$result = $query->result();
		return $result;	
	}
	
	public function school_list(){
		$query = $this->db
                 
                  ->from('school')                  
                  ->get();
		$result = $query->result();
		return $result;	
    }
	
	function show_school_info($s_id){
		$this->db->where('school_id',$s_id);
		$query = $this->db->get('school');
		$result = $query->result();
		return $result;
	}
	
	
	public function reject($school_id,$register_reject_reason_data)
	{		
		 return $this->db				
				  ->where('school_id',$school_id)
				  ->update('school',$register_reject_reason_data);

	}
	
	public function approve($school_id,$register_approved_data)
	{		
		 return $this->db				
				  ->where('school_id',$school_id)
				  ->update('school',$register_approved_data);

	}
	
	public function pending($school_id,$register_pending_data)
	{		
		 return $this->db				
				  ->where('school_id',$school_id)
				  ->update('school',$register_pending_data);

	}

	public function delete_school_admin($s_admin_id){
		$this->db->where('sa_id', $s_admin_id);
   		$this->db->delete('school_admin'); 
	}
}
?>
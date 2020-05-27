<?php

class Usermodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		$this->load->database(); //AUTOLOAD better option
		
    }
    
	function show_usr_details($id){
		$this->db->where('usr_id',$id);
		$query = $this->db->get('user');
		$result = $query->result();
		return $result;
	}
	
	public function restore_profile($u_id,array $u)
	{		
		//Updating School details in DB
		 return $this->db
				  ->where('usr_id',$u_id)
				  ->update('user',$u);

	}

}
?>
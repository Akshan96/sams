<?php

class S_adminmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		$this->load->database(); //AUTOLOAD better option
		
    }
    
	function show_school_admin_id($id){
		$this->db->where('sa_id',$id);
		$query = $this->db->get('school_admin');
		$result = $query->result();
		return $result;
	}
	
	function show_school_info($s_id){
		$this->db->where('school_id',$s_id);
		$query = $this->db->get('school');
		$result = $query->result();
		return $result;
	}
	
	public function check_register_status($id){
		$this->db->where('school_id',$id);
		$this->db->where('register_status','approved');
        $query = $this->db->get('school');
        return $query->result();
	}
	
	public function update_profile($sa_id,array $sa)
	{		
		 return $this->db
				  ->where('sa_id',$sa_id)
				  ->update('school_admin',$sa);

	}
	
	public function restore_school_details($s_id,array $s)
	{		
		//Updating School details in DB
		 return $this->db
				  ->where('school_id',$s_id)
				  ->update('school',$s);

	}
	
	public function add_school_details($array){
        return $this->db->insert('school',$array);
    }
	
	public function show_school_id($code){
		$this->db->select('school_id');
		$this->db->where('school_code',$code);
		$query = $this->db->get('school');
		$result = $query->result();
		return $result;
	}
	
	public function add_school_id_in_school_admin($sa_id, $school_id){
		$this->db->where('sa_id',$sa_id);
        return $this->db->update('school_admin',$school_id);
    }

    public function add_school_sub_admin($array){
        return $this->db->insert('school_admin',$array);
    }
	
	public function update_logo($s_id,array $s)
	{		
		 return $this->db
				  ->where('school_id',$s_id)
				  ->update('school',$s);

	}
	
	function show_admission_form_list($sa_id){
		/*$query = $this->db
                 
                  ->from('school_admin')                  
                  ->get();*/
		//$sa_id = 4;
        $sql = "SELECT admission_form.*, user.*, school_admin.sa_name, school.school_name from admission_form, school_admin, school, user where admission_form.school_id=school_admin.school_id and school_admin.sa_id = $sa_id and school.school_id=admission_form.school_id and user.usr_id= admission_form.usr_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;	;
	}

	function show_admission_form_notify($sa_id){
		/*$query = $this->db
                 
                  ->from('school_admin')                  
                  ->get();*/
		//$sa_id = 4;
        $sql = "SELECT admission_form.*, user.*, school_admin.sa_name, school.school_name from admission_form, school_admin, school, user where admission_form.school_id=school_admin.school_id and school_admin.sa_id = $sa_id and school.school_id=admission_form.school_id and user.usr_id= admission_form.usr_id ORDER BY admission_form.submitted_at DESC LIMIT 5";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;	
	}
    
	function admission_form_info($a_id){
		$this->db->where('admission_form_id',$a_id);
		$query = $this->db->get('admission_form');
		$result = $query->result();
		return $result;
	}
	
	
	public function reject($admission_form_id,$form_reject_reason_data)
	{		
		 return $this->db				
				  ->where('admission_form_id',$admission_form_id)
				  ->update('admission_form',$form_reject_reason_data);

	}
	
	public function approve($admission_form_id,$form_approved_data)
	{		
		 return $this->db				
				  ->where('admission_form_id',$admission_form_id)
				  ->update('admission_form',$form_approved_data);

	}
	
	public function pending($admission_form_id,$form_pending_data)
	{		
		 return $this->db				
				  ->where('admission_form_id',$admission_form_id)
				  ->update('admission_form',$form_pending_data);

	}

	function view_school_admin_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_admin');
		 $result = $query->result();
		 return $result;
	}

	public function add_school_fee_details($array){
        return $this->db->insert('school_fee_details',$array);
    }

    public function add_school_amenities($array){
        return $this->db->insert('school_amenities',$array);
    }
    public function add_school_features($array){
        return $this->db->insert('school_features',$array);
    }
    public function add_school_principal_details($array){
        return $this->db->insert('school_principal_details',$array);
    }


    function fee_structure_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_fee_details');
		 $result = $query->result();
		 return $result;
	}

	 function amenities_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_amenities');
		 $result = $query->result();
		 return $result;
	}

	 function feature_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_features');
		 $result = $query->result();
		 return $result;
	}

	 function principal_details_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_principal_details');
		 $result = $query->result();
		 return $result;
	}


	function count_school_admin($school_id){
		
		$sql = "SELECT COUNT(sa_id) as cadmin FROM school_admin where school_id = $school_id;";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_school_major_admin($school_id){
		
		$sql = "SELECT COUNT(sa_id) as cmadmin FROM school_admin where school_id = $school_id and major = 1;";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_school_sub_admin($school_id){
		
		$sql = "SELECT COUNT(sa_id) as csadmin FROM school_admin where (school_id = $school_id and (major != 1 or major = 0 or major IS NULL));";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_admission($school_id){
		
		$sql = "SELECT COUNT(admission_form_id) as cadmit FROM admission_form where school_id = $school_id;";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_pending_admission($school_id){
		
		$sql = "SELECT COUNT(admission_form_id) as cpadmit FROM admission_form where school_id = $school_id and form_status = 'pending';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_approved_admission($school_id){
		
		$sql = "SELECT COUNT(admission_form_id) as caadmit FROM admission_form where school_id = $school_id and form_status = 'approved';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function count_rejected_admission($school_id){
		
		$sql = "SELECT COUNT(admission_form_id) as cradmit FROM admission_form where school_id = $school_id and form_status = 'rejected';";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function add_school_school_news($array){
        return $this->db->insert('school_news',$array);
    }

    function school_news_list($school_id){
		
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_news');
		 $result = $query->result();
		 return $result;
	}

	function school_news_by_id($s_news_id){
		
		 $this->db->where('school_news_id',$s_news_id);
		 $query = $this->db->get('school_news');
		 $result = $query->result();
		 return $result;
	}

	public function restore_school_news($school_news_id,array $news)
	{		
		//Updating School details in DB
		 return $this->db
				  ->where('school_news_id',$school_news_id)
				  ->update('school_news',$news);

	}

	public function delete_school_news($news_id){
		$this->db->where('school_news_id', $news_id);
   		$this->db->delete('school_news'); 
	}
	public function delete_school_fee($fee_id){
		$this->db->where('fee_id', $fee_id);
   		$this->db->delete('school_fee_details'); 
	}

	public function delete_school_amenities($amenities_id){
		$this->db->where('amenities_id', $amenities_id);
   		$this->db->delete('school_amenities'); 
	}

	public function delete_school_features($features_id){
		$this->db->where('feature_id', $features_id);
   		$this->db->delete('school_features'); 
	}

	public function delete_school_principal($principal_id){
		$this->db->where('principal_id', $principal_id);
   		$this->db->delete('school_principal_details'); 
	}

	public function delete_school_admin($s_admin_id){
		$this->db->where('sa_id', $s_admin_id);
   		$this->db->delete('school_admin'); 
	}
}
?>
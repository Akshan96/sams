<?php

class admissionmodel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_school_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school');
        return $query->result();
	}
	
	public function add_admission_form($array){
        return $this->db->insert('admission_form',$array);
    }

    public function show_admission_list($uid){
        $sql = "SELECT admission_form.* , school.school_name from admission_form, school where usr_id = $uid and school.school_id = admission_form.school_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result; ;
    }

    public function show_admission_data($admission_form_id){
        $sql = "SELECT admission_form.* , school.school_name, user.usr_fname, user.usr_lname  from admission_form, school, user where admission_form_id = $admission_form_id and school.school_id = admission_form.school_id and user.usr_id = admission_form.usr_id";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result; ;
    }
}


?>
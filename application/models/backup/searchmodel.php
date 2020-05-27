<?php

class searchmodel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
	public function selectorganizer ($search,$city,$board) {
		
		$this->db->like(array('school_name' => $search, 'school_city' => $city, 'school_type' => $board));
        $query  =   $this->db->get('school');
        return $query->result();
	}
	public function getschool_by_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school');
        return $query->result();
	}
}


?>
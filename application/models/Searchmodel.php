<?php

class searchmodel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
	public function selectorganizer ($search,$city,$board) {
		
		$this->db->like(array('school_name' => $search, 'school_city' => $city, 'register_status'=>'approved', 'school_type' => $board));
        $query  =   $this->db->get('school');
        return $query->result();
	}

	public function advselectorganizer ($search,$board,$medium,$state,$district,$city,$area) {
		
		$this->db->like(array
						('register_status'=>'approved',
						'school_name' => $search, 
						'school_type' => $board,
						'school_medium' => $medium,
						'school_state' => $state, 
						'school_district' => $district,
						'school_city' => $city,  
						'school_area' => $area));
        $query  =   $this->db->get('school');
        return $query->result();
	}

	public function getschool_by_id($id){
		$this->db->where('school_id',$id);
		$this->db->where('register_status','approved');
        $query = $this->db->get('school');
        return $query->result();
	}

	public function getschool_by_usr_city($city){
		$this->db->where('school_city',$city);
		$this->db->where('register_status','approved');
		$this->db->order_by('rand()');
		$this->db->limit(10); 
        $query = $this->db->get('school');
        return $query->result();
	}

	public function getschool_featured(){
		//where status feature clause
		$this->db->where('register_status','approved');
		$this->db->order_by('rand()');
		$this->db->limit(3); 
        $query = $this->db->get('school');
        return $query->result();
	}

	public function getschool_listing(){
		//where status feature clause
		$this->db->where('register_status','approved');
		$this->db->order_by('rand()');
		//$this->db->limit(8); 
        $query = $this->db->get('school');
        return $query->result();
	}
}


?>
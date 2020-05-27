<?php

class Schoolmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		
    }
    
	public function getschool_by_id($id){
		$this->db->where('school_id',$id);
		$this->db->where('register_status','approved');
        $query = $this->db->get('school');
        return $query->result();
	}

	public function getschool_principal_by_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school_principal_details');
        return $query->result();
	}

	public function getschool_fee_by_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school_fee_details');
        return $query->result();
	}

	public function getschool_features_by_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school_features');
        return $query->result();
	}

	public function getschool_amenities_by_id($id){
		$this->db->where('school_id',$id);
        $query = $this->db->get('school_amenities');
        return $query->result();
	}

	function school_news_list($school_id){
		/*
		 $this->db->where('school_id',$school_id);
		 $query = $this->db->get('school_news');
		 $result = $query->result();
		 return $result;*/

		$sql = "SELECT school_news.*, school_admin.sa_name from school_news, school_admin where school_news.school_id=$school_id and school_admin.sa_id = school_news.created_by ORDER BY school_news.created_at DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function school_detailed_news($s_news){
		$sql = "SELECT school_news.*, school_admin.sa_name, school.school_name 
				from school_news, school_admin, school 
				where school_news.school_news_id = $s_news 
				and school_admin.sa_id = school_news.created_by 
				and school_admin.school_id = school.school_id";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function newsfeed(){
		$sql = "SELECT school_news.*, school_admin.sa_name, school.school_name 
				from school_news, school_admin, school 
				where school_admin.sa_id = school_news.created_by 
				and school_admin.school_id = school.school_id LIMIT 8";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function feature_news_list(){
		$this->db->order_by('rand()');
		$this->db->limit(5); 
        $query = $this->db->get('school_news');
        return $query->result();
	}

	function school_fees_calc(){
		
	}

}
?>
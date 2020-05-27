<?php

class loginmodel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function get_user_email($userid, $pwd)
    {
        $this->db->where('usr_email',$userid);
        $this->db->where('usr_pass', $pwd);
        $query = $this->db->get('user');
        return $query->result();
    }
    function get_user_mnumber($userid, $pwd)
    {
        $this->db->where('usr_mobile', $userid);
        $this->db->where('usr_pass', $pwd);
        $query = $this->db->get('user');
        return $query->result();
    }
    function insert_user($data)
    {
        return $this->db->insert('user', $data);
    }
}


?>
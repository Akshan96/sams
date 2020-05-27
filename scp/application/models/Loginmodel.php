<?php

class LoginModel extends CI_Model{

    public function login_valid($username,$password){
        
        $password=md5($password);
        $q=$this->db->where(['sa_name'=>$username,'sa_password'=>$password])
                     ->get('school_admin');

        //return $q->result(); //return array
        // To return rows
        /* if($q->num_rows()){
            //return TRUE;
            return $q->row()->id;
        } 
			
        else{
            return FALSE;
        }   */ 
         return $q->result();
    }
}


?>
<?php

class Admin extends CI_Controller{

    public function __construct(){
			parent::__construct();
            $this->load->helper(array('form'));
			$this->load->model('adminmodel');
	}
    public function index(){
        
        if($this->session->userdata('admin_id')){
            return redirect('admin/dashboard');
        }     
        //$this->load->helper('url'); //Autoload done
        $this->load->view('admin/home');
    }

    public function login(){

        $this->load->library('form_validation');
            
                //success
                $username = $this->input->post('a_name');
                $email = $this->input->post('a_name');
                $password = $this->input->post('a_password');

                $this->load->model('adminmodel');
                $login1_id = $this->adminmodel->login1_valid($username,$password);
                $login2_id = $this->adminmodel->login2_valid($email,$password);
                if($login1_id){
                    //echo "Authencation successful using username";
                     //session library autoloaded  
                    $this->session->set_userdata('admin_id',$login1_id);
                    return redirect('admin/dashboard');
                }
                elseif($login2_id){
                    //echo "Authencation successful using email";
                    $this->session->set_userdata('admin_id',$login2_id);
                    return redirect('admin/dashboard');  
                }
                else{
                    //echo "Authencation Failed";
                    $this->session->set_flashdata('login_failed','Invalid Username / Password');
                    return redirect('admin');
                }
                
            

                
    }
    public function logout(){
        $this->session->unset_userdata('admin_id');
        return redirect('admin');
    }
		
	public function dashboard(){
		if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
		$id = $this->session->userdata('admin_id');       
        $data['admin_details'] = $this->adminmodel->show_admin_id($id);        
        $data['schoollist'] = $this->adminmodel->school_list();
		
		
		
        $this->load->view('admin/dashboard', $data);
    }
	
	public function add_school_admin(){
		if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
		$id = $this->session->userdata('admin_id');
		$data['admin_details'] = $this->adminmodel->show_admin_id($id);
        $this->load->view('admin/add_school_admin', $data);
    }
    public function store_school_admin(){	
		if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
            $datafortb_school_admin = array(
					'sa_name' => $this->input->post('sa_name'),
					'sa_email' => $this->input->post('sa_email'),
					'sa_password' => md5($this->input->post('sa_password')),
                    'by_admin' => $this->session->userdata('admin_id'),
                    'major' => "1",
					'sa_signup_date' => date('Y-m-d h:i:sa', time())
				    );        
					
            if(($this->adminmodel->add_school_admin($datafortb_school_admin))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Admin Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Admin Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('admin/add_school_admin');       
    }
	
	public function reject(){

        if( ! $this->session->userdata('admin_id'))
            return redirect('admin');        
          
		$school_id = $this->input->post('school_id');
		$register_reject_reason_data = array(					
					'register_reject_reason' => $this->input->post('register_reject_reason'),
					'register_status' => 'rejected',
					'approved_at' => ''
					);
		$data = $this->adminmodel->show_school_info($school_id);
		$register_status = $data[0]->register_status;
		
		if($register_status == 'rejected'){
			$this->session->set_flashdata('r_feedback',"School is Already Rejected*");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('admin/dashboard');
		}
		else
		{ 
			if( $this->adminmodel->reject($school_id,$register_reject_reason_data)) {
				$this->session->set_flashdata('r_feedback',"School Successfully Rejected!");
				$this->session->set_flashdata('feedback_class','alert-warning');
				

			}else {
				$this->session->set_flashdata('r_feedback',"Failed to Reject, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('admin/dashboard');
		} 		
    }
	
	public function approve(){

        if( ! $this->session->userdata('admin_id'))
            return redirect('admin');        
          
		$school_id = $this->input->post('school_id');
		$register_approved_data = array(					
					'approved_at' => date('Y-m-d h:i:sa', time()),
					'register_status' => 'approved',
					'register_reject_reason' => ''
					);
		$data = $this->adminmodel->show_school_info($school_id);
		$register_status = $data[0]->register_status;
		
		if($register_status == 'approved'){
			$this->session->set_flashdata('a_feedback',"School is Already Approved*");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('admin/dashboard');
		}
		else
		{ 
			if( $this->adminmodel->approve($school_id,$register_approved_data)) {
				$this->session->set_flashdata('a_feedback',"School Successfully Approved!");
				$this->session->set_flashdata('feedback_class','alert-success');
				

			}else {
				$this->session->set_flashdata('a_feedback',"Failed to Approve, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('admin/dashboard');
		} 		
    }
	
	public function pending(){

        if( ! $this->session->userdata('admin_id'))
            return redirect('admin');        
          
		$school_id = $this->input->post('school_id');
		$register_pending_data = array(					
					'approved_at' => '',
					'register_status' => 'pending',
					'register_reject_reason' => ''
					);
		$data = $this->adminmodel->show_school_info($school_id);
		$register_status = $data[0]->register_status;
		
		if($register_status == 'pending'){
			$this->session->set_flashdata('p_feedback',"School status is already Pending* ");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('admin/dashboard');
		}
		else
		{ 
			if( $this->adminmodel->pending($school_id,$register_pending_data)) {
				$this->session->set_flashdata('p_feedback',"School Successfully moved to Pending status!");
				$this->session->set_flashdata('feedback_class','alert-info');
				

			}else {
				$this->session->set_flashdata('p_feedback',"Failed to pending, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('admin/dashboard');
		} 		
    }

    public function view_school_admin(){
		if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
		$id = $this->session->userdata('admin_id');       
        $data['admin_details'] = $this->adminmodel->show_admin_id($id);        
        $data['schoollist'] = $this->adminmodel->school_list();
		$data['school_admin_list'] = $this->adminmodel->show_sa_admin_list();
		
		
        $this->load->view('admin/view_school_admin', $data);
    }

    public function view_school_admin_full_list(){
		if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
		$id = $this->session->userdata('admin_id');       
        $data['admin_details'] = $this->adminmodel->show_admin_id($id);        
        $data['schoollist'] = $this->adminmodel->school_list();
		$data['school_admin_list'] = $this->adminmodel->view_school_admin_full_list();
		
		
        $this->load->view('admin/view_school_admin_full_list', $data);
    }

    public function delete_sadmin(){

        if( ! $this->session->userdata('admin_id'))
				return redirect('admin');
		$id = $this->session->userdata('admin_id');       
        $data['admin_details'] = $this->adminmodel->show_admin_id($id);        
        //$data['schoollist'] = $this->adminmodel->school_list();
		//$data['school_admin_list'] = $this->adminmodel->show_sa_admin_list();       
          
		$sadmin_id = $this->input->post('sa_id');
		if( $this->adminmodel->delete_school_admin($sadmin_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School Admin successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('admin/view_school_admin_full_list');
		 		
    }
	
	
}
?>
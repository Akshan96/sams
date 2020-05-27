<?php
    class user extends CI_Controller{
        
    	public function __construct(){
			parent::__construct();
			$this->load->helper(array('form','url','html'));
			$this->load->helper(array('form','url'));
			$this->load->helper(array('url','html')); 
			$this->load->library(array('session', 'form_validation','pagination'));
			$this->load->database();
			$this->load->model('loginmodel');
			$this->load->model('searchmodel');
		}
        public function index(){
            $this->load->view('public/index');
        }
		public function newsfeed(){
			$this->load->view('public/newsfeed');
		}
        public function login()
    	{
				// get form input
				$userid = $this->input->post("email");
	        	$password = md5($this->input->post("password"));

				//form validation
				//$this->form_validation->set_rules("email", "Email-ID", "trim|required");
			
			
				// check for user credentials
				$uresult1 = $this->loginmodel->get_user_email($userid, $password);
				$uresult2 = $this->loginmodel->get_user_mnumber($userid, $password);
				if (count($uresult1) > 0)
				{
					// set session
					$sess_data = array(
								'login' => TRUE, 
								'email' => $uresult1[0]->usr_email,
								'mnumber' => $uresult1[0]->usr_mobile,
								'uid' => $uresult1[0]->id
								);
					$this->session->set_userdata($sess_data);
					redirect("user/index");
				}
				else if(count($uresult2) > 0)
				{
					// set session
					$sess_data = array(
								'login' => TRUE, 
								'email' => $uresult2[0]->usr_email,
								'mnumber' => $uresult2[0]->usr_mobile,
								'uid' => $uresult2[0]->id
								);
					$this->session->set_userdata($sess_data);
					redirect("user/index");
					
				}
				else
				{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
					redirect('user/index');
				}
			
	    }
		function signup()
		{
			// set form validation rules
			//$this->form_validation->set_rules('email', 'Email ID', 'trim|is_unique[user.email]');
			//$this->form_validation->set_rules('mnumber', 'Mobile Number', 'trim|is_unique[user.mnumber]');
			//$this->form_validation->set_rules('password', 'Password', 'trim');
			//$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim');
			
			// submit
			if (empty($this->input->post('mnumber')))
	        {
				// fails
				$this->load->view('public/index');
	        }
			else
			{
				//insert user details into db
				$date = date('m/d/Y h:i:s a', time());
				$data = array(
					'usr_mobile' => $this->input->post('mnumber'),
					'usr_email' => $this->input->post('email'),
					'usr_pass' => md5($this->input->post('password')),
					'usr_signup_date' => date('Y/d/m', time())
				);
				
				if ($this->loginmodel->insert_user($data))
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
					redirect('user/index');
				}
				else
				{
					// error
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
					redirect('user/index');
				}
			}
		}
		public function search(){
			$city = $_GET['city'];
			$board = $_GET['board'];
			if(isset($_GET ['search']) && !empty($_GET['search'])) {

				$search = $_GET['search'];
				
				
				
				if($this->searchmodel->selectorganizer($search,$city,$board))
				{
				   $data["results"] = $this->searchmodel->selectorganizer($search,$city,$board);
				   $this->load->view('public/result',$data);
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found!</div>');
					$this->load->view('public/result');
				}
			}else if(isset($_GET ['search']) && empty($_GET['search'])){
				$search= '';
				
				if($this->searchmodel->selectorganizer($search,$city,$board))
				{
				   $data["results"] = $this->searchmodel->selectorganizer($search,$city,$board);
				   $this->load->view('public/result',$data);
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found!</div>');
					$this->load->view('public/result');
				}
			}
		}
		function profile(){
			if(isset($_GET ['school']) && !empty($_GET['school'])) {
				$id = $_GET ['school'];
				$data["results"] = $this->searchmodel->getschool_by_id($id);
				$this->load->view('public/profile',$data);
			}
		}
		function admission(){
			if(isset($_GET ['school']) && !empty($_GET['school'])) {
				$id = $_GET ['school'];
				$data["results"] = $this->searchmodel->getschool_by_id($id);
				$data["submitadmission"]=false;
				$this->load->view('public/admission',$data);
			}
			if(isset($_POST ['submit'])){
				$data["submitadmission"]=true;
				$this->load->view('public/admission',$data);
			}
		}
	    function logout()
		{
			// destroy session
	        $data = array('login' => '', 'email' => '','mnumber' => '', 'uid' => '');
	        $this->session->unset_userdata($data);
	        $this->session->sess_destroy();
			redirect('user');
		}
    }

?>
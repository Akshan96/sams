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
			$this->load->model('admissionmodel');
            $this->load->model('Usermodel');
            $this->load->model('Schoolmodel');
            
		}
        public function index(){
            
            $data['featured_school'] = $this->searchmodel->getschool_featured();
            $data["feature_news_list"] = $this->Schoolmodel->feature_news_list();
            if ($this->session->userdata('uid')){
                $id = $this->session->userdata('uid');
                $user_data = $this->Usermodel->show_usr_details($id);
                $city =  $user_data[0]->usr_city;
                //echo $city;
                $data['school_near'] = $this->searchmodel->getschool_by_usr_city($city);
                //print_r($data);
                $this->load->view('public/index', $data);
            }
            else
            {
                $this->load->view('public/index',$data);
            }
        }

        public function login(){
            $this->load->view('public/login');
        }

        public function login_auth()
        {
            
                $this->load->library('user_agent');
                if ($this->agent->is_referral())
                {
                echo $this->agent->referrer();
                }
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
                                'uid' => $uresult1[0]->usr_id
                                );
                    $this->session->set_userdata($sess_data);
                    redirect("user/index");
                    redirect($this->agent->referrer());
                }
                else if(count($uresult2) > 0)
                {
                    // set session
                    $sess_data = array(
                                'login' => TRUE, 
                                'email' => $uresult2[0]->usr_email,
                                'mnumber' => $uresult2[0]->usr_mobile,
                                'uid' => $uresult2[0]->usr_id
                                );
                    $this->session->set_userdata($sess_data);
                    redirect("user/index");
                    redirect($this->agent->referrer());
                }
                else
                {
                    $this->session->set_flashdata('msg',"Oops!! Wrong Email-ID or Password!");
                    $this->session->set_flashdata('feedback_class','alert-danger text-center');
                    //redirect('user/index');
                    redirect($this->agent->referrer());
                }
        }

        public function profile(){

            if( ! $this->session->userdata('login'))
                return redirect('user');

            $id = $this->session->userdata('uid');
              
            $data['usr_details'] = $this->Usermodel->show_usr_details($id);
            //print_r($data);
            $data['u_admission_list'] = $this->admissionmodel->show_admission_list($id);
            
            $this->load->view('public/profile', $data);
        }

        public function restore_profile(){
            //Updating school details in DB
            if( ! $this->session->userdata('login'))
                    return redirect('user');
            $id = $this->session->userdata('uid');
            $user_data= $this->Usermodel->show_usr_details($id);
            $usr_id = $user_data[0]->usr_id;
            //echo $s_id;
            
            $updatefortb_user = array(
                        'usr_fname' => $this->input->post('usr_fname'),                 
                        'usr_lname' => $this->input->post('usr_lname'),
                        'usr_email' => $this->input->post('usr_email'),
                        'usr_mobile' => $this->input->post('usr_mobile'),
                        'usr_address' => $this->input->post('usr_address'),
                        'usr_city' => $this->input->post('usr_city'),
                        'usr_state' => $this->input->post('usr_state'),
                        'usr_pincode' => $this->input->post('usr_pincode'),
                        'last_updated_at' => date('Y-m-d h:i:sa', time())
                        );
                                        

            if($this->Usermodel->restore_profile($usr_id,$updatefortb_user)){
                
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"Profile Updated Successfully!");
                $this->session->set_flashdata('feedback_class','alert-success text-center');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"Failed to Update Profile, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger text-center');
            }
            return redirect('user/profile');
    
        }

        public function std_admission_form(){
            if( ! $this->session->userdata('login'))
                    return redirect('user');

            $id = $this->session->userdata('uid');      
                  
                
            if(isset($_GET ['admission']) && !empty($_GET['admission'])) {
                    $admission_form_id = $_GET ['admission'];    
                    $data['u_admission_details']= $this->admissionmodel->show_admission_data($admission_form_id);
                    //print_r($data);
            }
            
            $this->load->view('public/std_admission_form',$data);
        
        }
    


        public function register(){
            $this->load->view('public/register');
        }

        function signup()
        {
            $this->load->library('user_agent');
            if ($this->agent->is_referral())
            {
            echo $this->agent->referrer();
            }
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
                    //$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                    $this->session->set_flashdata('msg',"You are Successfully Registered! Please login to access your Profile!");
                    $this->session->set_flashdata('feedback_class','alert-success text-center');
                    //redirect('user/index');
                    redirect($this->agent->referrer());
                }
                else
                {
                    // error
                    //$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    $this->session->set_flashdata('msg',"Oops! Error.  Please try again later!!!");
                    $this->session->set_flashdata('feedback_class','alert-danger text-center');
                    //redirect('user/index');
                    redirect($this->agent->referrer());
                }
            }
        }

        public function search(){
            $city = $_GET['city'];
            $board = $_GET['board'];
            $data["feature_news_list"] = $this->Schoolmodel->feature_news_list();
            if(isset($_GET ['search']) && !empty($_GET['search'])) {

                $search = $_GET['search'];
                               
                if($this->searchmodel->selectorganizer($search,$city,$board))
                {
                   $data["results"] = $this->searchmodel->selectorganizer($search,$city,$board);
                   $this->session->set_flashdata('smsg','<div class="alert alert-info text-center"><b>Search Results</b> City:-'.$city.', Board:- '.$board.'</div>');
                   $this->load->view('public/school_listing',$data);
                }
                else
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found! | Go through few listed Schools</div>');
                    $this->load->view('public/school_listing');
                }
            }else if(isset($_GET ['search']) && empty($_GET['search'])){
                $search= '';
                
                if($this->searchmodel->selectorganizer($search,$city,$board))
                {
                   $data["results"] = $this->searchmodel->selectorganizer($search,$city,$board);
                   $this->session->set_flashdata('smsg','<div class="alert alert-info text-center"><b>Search Results</b> City:-'.$city.', Board:- '.$board.'</div>');
                   $this->load->view('public/school_listing',$data);
                 
                }
                else
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found! | Go through few listed Schools</div>');
                    $this->load->view('public/school_listing');
                }
            }
        }

        public function adv_search(){

            $state = $_GET['state'];
            $district = $_GET['district'];
            $city = $_GET['city'];
            $area = $_GET['area'];
            $board = $_GET['board'];
            $medium = $_GET['medium'];

            //echo "Values:-".$state,$district,$city,$area,$board,$medium;
            $data["feature_news_list"] = $this->Schoolmodel->feature_news_list();
            if(isset($_GET ['search']) && !empty($_GET['search'])) {

                $search = $_GET['search'];
                               
                if($this->searchmodel->advselectorganizer($search,$board,$medium,$state,$district,$city,$area))
                {
                   $data["results"] = $this->searchmodel->advselectorganizer($search,$board,$medium,$state,$district,$city,$area);
                   $this->session->set_flashdata('smsg','<div class="alert alert-info text-center"><b>Search Results</b> City:-'.$city.', Board:- '.$board.', Medium:-'.$medium.', State:-'.$state.', District:-'.$district.', City:-'.$city.', Area:-'.$area.'</div>');
                   $this->load->view('public/school_listing',$data);
                }
                else
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found! | Go through few listed Schools</div>');
                    $this->load->view('public/school_listing');
                }
            }else if(isset($_GET ['search']) && empty($_GET['search'])){
                $search= '';
                
                if($this->searchmodel->advselectorganizer($search,$board,$medium,$state,$district,$city,$area))
                {
                   $data["results"] = $this->searchmodel->advselectorganizer($search,$board,$medium,$state,$district,$city,$area);
                   $this->session->set_flashdata('smsg','<div class="alert alert-info text-center"><b>Search Results</b> City:-'.$city.', Board:- '.$board.', Medium:-'.$medium.', State:-'.$state.', District:-'.$district.', City:-'.$city.', Area:-'.$area.'</div>');
                   $this->load->view('public/school_listing',$data);
                 
                }
                else
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! No School Found! </div>');
                    $this->load->view('public/school_listing',$data);
                }
            }
        }

        function school_details(){
            if(isset($_GET ['school']) && !empty($_GET['school'])) {
                $id = $_GET ['school'];
                $data["school_details"] = $this->searchmodel->getschool_by_id($id);
                //print_r($data);
                //$this->load->view('public/school_details',$data);

                $data["school_principal_details"] = $this->Schoolmodel->getschool_principal_by_id($id);
                $data["school_fee_details"] = $this->Schoolmodel->getschool_fee_by_id($id);
                $data["school_features_details"] = $this->Schoolmodel->getschool_features_by_id($id);
                $data["school_amenities_details"] = $this->Schoolmodel->getschool_amenities_by_id($id);
                $data["school_news_list"] = $this->Schoolmodel->school_news_list($id);

                if ($this->session->userdata('uid')){
                $id = $this->session->userdata('uid');
                $user_data = $this->Usermodel->show_usr_details($id);
                $city =  $user_data[0]->usr_city;

                $data['school_near'] = $this->searchmodel->getschool_by_usr_city($city);
  
                $this->load->view('public/school_details', $data);
                }
                else
                {
                    $this->load->view('public/school_details',$data);
                }
            }
            
        }

        public function school_listing(){
            $data["results"] = $this->searchmodel->getschool_listing();
            $data["feature_news_list"] = $this->Schoolmodel->feature_news_list();
            $this->load->view('public/school_listing',$data);
            
        }

        public function aboutus(){
            $this->load->view('public/aboutus');
        }

        
        public function school_admission(){
            if(isset($_GET ['school']) && !empty($_GET['school'])) {
                $id = $_GET ['school'];
                $data["results"] = $this->searchmodel->getschool_by_id($id);
                $approve_check = $this->searchmodel->getschool_by_id($id);
                $status = $approve_check[0]->register_status;
                if($status == 'approved'){
                    $data["submitadmission"]=false;
                    $this->load->view('public/school_admission',$data);
                }
                else{
                    return redirect('user');
                }
            }
            if(isset($_POST ['submit'])){
                $approve_check = $this->searchmodel->getschool_by_id($id);
                $status = $approve_check[0]->register_status;
                if($status == 'approved'){
                    $data["submitadmission"]=true;
                    $this->load->view('public/school_admission',$data);
                }
                else{
                    return redirect('user');
                }
            }
        }

        function submit_admission_form(){
            if( ! $this->session->userdata('login'))
                return redirect('user');
            
            $uid = $this->session->userdata('uid');

            if(isset($_GET ['school']) && !empty($_GET['school'])) {
                $id = $_GET ['school'];
                
                $approve_check = $this->searchmodel->getschool_by_id($id);
                $status = $approve_check[0]->register_status;
                if($status != 'approved'){
                    return redirect('user');
                }


                if(isset($_FILES['passport_photo'])){
                    if(isset($_FILES['passport_photo']) && is_uploaded_file($_FILES['passport_photo']['tmp_name'])){
                        //Configure
                        //set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
                        $config['upload_path'] = 'uploads/admission_form/passport_photo';
                        // set the filter image types
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '100';
                        $config['overwrite'] = TRUE;
                        //renaming   
                        $photov1 = $this->input->post('fname');   
                        $photov2 = $this->input->post('mobile');
                        
                        $photo = $photov1.$photov2;

                        $config['file_name'] = $photo;
                        //load the upload library
                        $this->load->library('upload', $config);    
                        $this->upload->initialize($config);     
                        //$this->upload->set_allowed_types('*');
                        $data['upload_data'] = '';
                        $filename = '';
                        
                        
                            //if not successful, set the error message
                            if (!$this->upload->do_upload('passport_photo')) {
                                //$e = $this->upload->display_errors();
                                //echo "Try Again -> Error : ";
                                //echo $e;
                                $this->session->set_flashdata('feedback',"Invalid Image, Change a few things up and try submitting again.");
                                $this->session->set_flashdata('feedback_class','alert-danger');
                                return redirect('user/school_admission?school='.$id);
                            } else { 
                                //echo "upload succcess";
                                //$data['upload_data'] = $this->upload->data();
                                $data = $this->upload->data();              
                                $file_name =   $data['file_name'];
                                $file_ext = $data['file_ext'];              
                                $file_name = $photo;
                                $photo = $file_name.$file_ext;
                                //print_r($avatar);
                            }
                            
                    }
                    
                    
                }
                
                
                $data["results"] = $this->searchmodel->getschool_by_id($id);                
                $data["uemail"] = $this->session->userdata('email');
                $data["umob"] = $this->session->userdata('mnumber');
                $data["uid"] = $this->session->userdata('uid');
                $usr_id = $this->session->userdata('uid');
                $school_id = $_GET ['school'];
                
                
                $datafortb_admission_form = array(
                    'fname' => $this->input->post('fname'),
                    'mname' => $this->input->post('mname'),
                    'lname' => $this->input->post('lname'),
                    'passport_photo' => $photo,
                    'dob' => $this->input->post('dob'),
                    'religion' => $this->input->post('religion'),
                    'gender' => $this->input->post('gender'),
                    'father_name' => $this->input->post('father_name'),
                    'mother_name' => $this->input->post('mother_name'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'mobile' => $this->input->post('mobile'),
                    'address' => $this->input->post('address'),
                    'permanent_address' => $this->input->post('permanent_address'),
                    'native_place' => $this->input->post('native_place'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'nationality' => $this->input->post('nationality'),
                    'applied_standard' => $this->input->post('applied_standard'),
                    'previous_standard' => $this->input->post('previous_standard'),
                    'previous_school' => $this->input->post('previous_school'),
                    'previous_percentage' => $this->input->post('previous_percentage'),
                    'previous_medium' => $this->input->post('previous_medium'),
                    'std_description' => $this->input->post('std_description'),
                    //'residential_proof' => $this->input->post('residential_proof'),
                    'form_status' => 'pending',
                    'usr_id' => $usr_id,
                    'school_id' => $school_id,
                    
                    'submitted_at' => date('Y-m-d h:i:sa', time())
                    );        
                    
                if($this->admissionmodel->add_admission_form($datafortb_admission_form))
                {
                        $this->load->view('public/admission_form_invoice',$data);
                }
                
            }
            else{
                echo "Access Denied or Failed to Submit";
            }
        }

        public function admission_form_invoice(){
            $this->load->view('public/admission_form_invoice');
        }

        public function school_gallery(){
            $this->load->view('public/school_gallery');
        }

        public function school_news(){
            if(isset($_GET ['school']) && !empty($_GET['school'])) {
                $id = $_GET ['school'];
                $data["school_details"] = $this->searchmodel->getschool_by_id($id);
                //print_r($data);
                //$this->load->view('public/school_details',$data);

                $data["school_news_list"] = $this->Schoolmodel->school_news_list($id);

                
            }
            $this->load->view('public/school_news',$data);
        }

        public function newsfeed(){
            $data["newsfeed"] = $this->Schoolmodel->newsfeed();
            $this->load->view('public/newsfeed',$data);
        }

        public function school_detailed_news(){
             if(isset($_GET ['s_news']) && !empty($_GET['s_news'])) {
                $s_news = $_GET ['s_news'];

                $data["feature_news_list"] = $this->Schoolmodel->feature_news_list();
                $data["s_news"] = $this->Schoolmodel->school_detailed_news($s_news);

                $this->load->view('public/school_detailed_news',$data);
            }
            
        }


        function logout()
        {
            // destroy session
            
            $this->load->library('user_agent');
            if ($this->agent->is_referral())
            {
            echo $this->agent->referrer();
            }
            
            $data = array('login' => '', 'email' => '','mnumber' => '', 'uid' => '');
            $this->session->unset_userdata($data);
            $this->session->sess_destroy();
            //redirect('user');
            redirect($this->agent->referrer());
        }
    }

?>
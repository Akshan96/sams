<?php

class S_admin extends CI_Controller{

    public function __construct(){
			parent::__construct();
            $this->load->helper(array('form'));
			$this->load->model('s_adminmodel');

			
			
			
        }
	
    public function index(){

		if($this->session->userdata('sa_admin_id')){
            return redirect('s_admin/dashboard');
        }     
        $this->load->view('login');
    }
	
	

    public function login(){
		if($this->session->userdata('sa_admin_id')){
            return redirect('s_admin');
        }
		$this->load->view('login');
                
    }
	public function login_valid()
    {
              
                $username = $this->input->post('sa_name');
                $password = $this->input->post('sa_password');                

                $this->load->model('loginmodel');
                $login_data = $this->loginmodel->login_valid($username,$password);                
                if(count($login_data)>0){
                    $this->session->set_userdata('sa_admin_id',$login_data[0]->sa_id);                   
                    return redirect('s_admin/dashboard');         
                }                
                else{
                    //echo "Authencation Failed";
                    $this->session->set_flashdata('login_failed','Invalid  Name / Password ');
                    return redirect('s_admin/login');
                }
                
            

    }
    public function logout(){

    	date_default_timezone_set('Asia/Kolkata');
		$data = array(
        'last_active' => date('Y-m-d h:i:sa', time())
		);
		$id = $this->session->userdata('sa_admin_id');
		$this->db->where('sa_id', $id);
		$this->db->update('school_admin', $data);
		
        $this->session->unset_userdata('sa_admin_id');
        return redirect('s_admin');
    }
		
	public function dashboard(){
		
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');       
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
        $data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
        
        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;
        $data['school_details'] = $this->s_adminmodel->show_school_info($s_id);
		$data['count_admin'] = $this->s_adminmodel->count_school_admin($s_id);
		$data['count_madmin'] = $this->s_adminmodel->count_school_major_admin($s_id);
		$data['count_sadmin'] = $this->s_adminmodel->count_school_sub_admin($s_id);

		$data['count_admission'] = $this->s_adminmodel->count_admission($s_id);
		$data['count_padmission'] = $this->s_adminmodel->count_pending_admission($s_id);
		$data['count_aadmission'] = $this->s_adminmodel->count_approved_admission($s_id);
		$data['count_radmission'] = $this->s_adminmodel->count_rejected_admission($s_id);

        $this->load->view('dashboard', $data);
    }
			
	public function register_school(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id'); 
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);      
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;
		
		/*Notified in view
		$approve_check = $this->s_adminmodel->check_register_status($id);
		$status = $approve_check[0]->register_status;
		if($status != 'approved'){
			
		}
		*/
		
		$data['school_details'] = $this->s_adminmodel->show_school_info($s_id);
        $this->load->view('add_schooldetails', $data);
    }
	
	public function store_school_details(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');

		$sa_id = $this->session->userdata('sa_admin_id');
		
			$datafortb_school = array(
					'school_name' => $this->input->post('school_name'),					
					'school_code' => $this->input->post('school_code'),
					'school_type' => implode(',',$this->input->post('school_type')),
					'school_medium' => implode(',',$this->input->post('school_medium')),
					'school_branchno' => $this->input->post('school_branchno'),
					'school_address' => $this->input->post('school_address'),
					'school_area' => $this->input->post('school_area'),
					'school_city' => $this->input->post('school_city'),
					'school_pincode' => $this->input->post('school_pincode'),
					'school_district' => $this->input->post('school_district'),									
					'school_state' => $this->input->post('school_state'),
					'school_email' => $this->input->post('school_email'),
					'school_mobile' => $this->input->post('school_mobile'),
					'school_phone' => $this->input->post('school_phone'),
					'school_website' => $this->input->post('school_website'),
					'school_info' => $this->input->post('school_info'),
					'created_by' => $this->session->userdata('sa_admin_id'),				
					'created_at' => date('Y-m-d h:i:sa', time()),
					'register_status' => 'pending',
				    );        
					
            if(($this->s_adminmodel->add_school_details($datafortb_school))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Details Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
				
				$code = $this->input->post('school_code');      				
				$s_details = $this->s_adminmodel->show_school_id($code);
				
				$update_data = array(
					'school_id' => $s_details[0]->school_id
				);
				
				if(($this->s_adminmodel->add_school_id_in_school_admin($sa_id,$update_data))){
					
				}
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Details Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/register_school');
    }
	
	public function update_school_details(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');       
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;
		$data['school_details'] = $this->s_adminmodel->show_school_info($s_id);        
        $this->load->view('update_schooldetails', $data);

    }
	
	public function restore_school_details(){
		//Updating school details in DB
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
		$id = $this->session->userdata('sa_admin_id');
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;
		//echo $s_id;
		
		$updatefortb_school = array(
					'school_name' => $this->input->post('school_name'),					
					'school_code' => $this->input->post('school_code'),
					'school_type' => implode(',',$this->input->post('school_type')),
					'school_medium' => implode(',',$this->input->post('school_medium')),
					'school_branchno' => $this->input->post('school_branchno'),
					'school_address' => $this->input->post('school_address'),
					'school_area' => $this->input->post('school_area'),
					'school_city' => $this->input->post('school_city'),
					'school_pincode' => $this->input->post('school_pincode'),
					'school_district' => $this->input->post('school_district'),									
					'school_state' => $this->input->post('school_state'),
					'school_email' => $this->input->post('school_email'),
					'school_mobile' => $this->input->post('school_mobile'),
					'school_phone' => $this->input->post('school_phone'),
					'school_website' => $this->input->post('school_website'),
					'school_info' => $this->input->post('school_info'),
					'last_updated_by' => $this->session->userdata('sa_admin_id'),
					'last_updated_at' => date('Y-m-d h:i:sa', time())
					);
										

			if($this->s_adminmodel->restore_school_details($s_id,$updatefortb_school)){
				
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Details Updated Successfully!");
                $this->session->set_flashdata('feedback_class','alert-success text-center');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"Failed to Update School Details, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger text-center');
            }
            return redirect('s_admin/update_school_details');
	
    }

	
	public function school_news(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');     
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);  
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['school_news_list'] = $this->s_adminmodel->school_news_list($school_id);
        $this->load->view('school_news', $data);
		
    }

    public function store_school_news(){
    	if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;

			$datafortb_school_news = array(
					's_news_title' => $this->input->post('s_news_title'),
					's_news_description' => $this->input->post('s_news_description'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id
					//'created_at' => date('Y-m-d h:i:sa', time())
				    );        

					
            if(($this->s_adminmodel->add_school_school_news($datafortb_school_news))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School News/Article Details Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School News/Article Details Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/school_news');
       		  		
    }

	public function update_school_news(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');  
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);     
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['school_news_list'] = $this->s_adminmodel->school_news_list($school_id);

        if(isset($_GET ['s_news']) && !empty($_GET['s_news'])) {
        	$s_news_id = $_GET ['s_news'];
        	$data['school_news'] = $this->s_adminmodel->school_news_by_id($s_news_id);
        }

        $this->load->view('update_school_news', $data);
    }

    public function restore_school_news(){
		
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
		$id = $this->session->userdata('sa_admin_id');
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;
		
		$school_news_id = $this->input->post('school_news_id');
		$updatetb_school_news = array(
					's_news_title' => $this->input->post('s_news_title'),
					's_news_description' => $this->input->post('s_news_description'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id
					//'created_at' => date('Y-m-d h:i:sa', time())
				    ); 
			
			if($this->s_adminmodel->restore_school_news($school_news_id,$updatetb_school_news)){
				
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School News/Article Details Updated Successfully!");
                $this->session->set_flashdata('feedback_class','alert-success text-center');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School News/Article Details Updated, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger text-center');
            }
		          
            return redirect('s_admin/update_school_news?s_news='.$school_news_id);
	
    }

    public function delete_school_news(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$s_news_id = $this->input->post('school_news_id');
		if( $this->s_adminmodel->delete_school_news($s_news_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School News successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/school_news');
		 		
    }

    public function fee_structure(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');      
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id); 
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['fee_structure_list'] = $this->s_adminmodel->fee_structure_list($school_id);


        $this->load->view('fee_structure', $data);
    }

    public function store_fee_structure(){
    	if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;

			$datafortb_school_fee_details = array(
					'education_level' => $this->input->post('edu_level'),
					'fee_annum' => $this->input->post('fee'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id,
					'created_at' => date('Y-m-d h:i:sa', time())
				    );        

					
            if(($this->s_adminmodel->add_school_fee_details($datafortb_school_fee_details))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Fee Details Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Fee Details Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/fee_structure');
       		  		
    }

    public function delete_fee_structure(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$fee_id = $this->input->post('fee_id');
		if( $this->s_adminmodel->delete_school_fee($fee_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School Features successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/fee_structure');
		 		
    }

    public function amenities(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');  
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);     
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['amenities_list'] = $this->s_adminmodel->amenities_list($school_id);

        $this->load->view('amenities', $data);
    }

    public function store_amenities(){
    	if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;

			$datafortb_school_amenities = array(
					'amenity_name' => $this->input->post('amenities'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id,
					'created_at' => date('Y-m-d h:i:sa', time())
				    );        

					
            if(($this->s_adminmodel->add_school_amenities($datafortb_school_amenities))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Amenity Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Amenity Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/amenities');
       		  		
    }

    public function delete_amenities(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$amenities_id = $this->input->post('amenities_id');
		if( $this->s_adminmodel->delete_school_amenities($amenities_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School Amenities successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/amenities');
		 		
    }


    public function featured(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');   
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);    
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['feature_list'] = $this->s_adminmodel->feature_list($school_id);
        
        $this->load->view('featured', $data);
    }

    public function store_features(){
    	if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;

			$datafortb_school_features = array(
					'feature_name' => $this->input->post('feature_name'),
					'feature_description' => $this->input->post('feature_details'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id,
					'created_at' => date('Y-m-d h:i:sa', time())
				    );        

					
            if(($this->s_adminmodel->add_school_features($datafortb_school_features))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Feature Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Feature Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/featured');
       		  		
    }

    public function delete_features(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$school_features_id = $this->input->post('feature_id');
		if( $this->s_adminmodel->delete_school_features($school_features_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School News successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/featured');
		 		
    }

    public function principal_details(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');   
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);    
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);


        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$school_id = $school_admin_data[0]->school_id;
        $data['principal_details_list'] = $this->s_adminmodel->principal_details_list($school_id);

        $this->load->view('principal_details', $data);
    }


    public function store_principal_details(){
    	if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$insert_school_id = $school_admin_data[0]->school_id;

			$datafortb_school_principal_details = array(
					'principal_full_name' => $this->input->post('principal_name'),
					'principal_of_edu_level' => $this->input->post('principal_edu_level'),
					'contact_no' => $this->input->post('principal_contact'),
					'email' => $this->input->post('principal_email'),
                    'created_by' => $id,
                    'school_id' => $insert_school_id,
					'created_at' => date('Y-m-d h:i:sa', time())
				    );        

					
            if(($this->s_adminmodel->add_school_principal_details($datafortb_school_principal_details))){
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"School Principal Details Successfully Added!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"School Principal Details Failed to Add, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/principal_details');
       		  		
    }

    public function delete_principal_details(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$principal_id = $this->input->post('principal_id');
		if( $this->s_adminmodel->delete_school_principal($principal_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School News successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/principal_details');
		 		
    }

	public function admission_activity(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');       
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);      
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;		
		//echo $s_id;
		$form_data= $this->s_adminmodel->show_admission_form_list($id);
		//echo '<pre>',print_r($form_data,1),'</pre>';
		//print_r($form_data);
		$data['admission_list']= $this->s_adminmodel->show_admission_form_list($id);
        $this->load->view('admission_activity', $data);
		
    }
	
	public function admission_notification(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id'); 
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);      
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
        $this->load->view('admission_notification', $data);
		
    }
	
	public function profile(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
        $this->load->view('profile', $data);
		
    }
	
	public function update_profile(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$sa_id = $this->session->userdata('sa_admin_id');
		$sa_data = $this->s_adminmodel->show_school_admin_id($sa_id);
		
		if($sa_id){
			if(isset($_FILES['sa_avatar'])){
				if(isset($_FILES['sa_avatar']) && is_uploaded_file($_FILES['sa_avatar']['tmp_name'])){
					//Configure
					//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
					$config['upload_path'] = 'uploads/avatars';
					// set the filter image types
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '100';
					$config['overwrite'] = TRUE;
					//renaming 		
					$config['file_name'] = $sa_id;
					//load the upload library
					$this->load->library('upload', $config);    
					$this->upload->initialize($config);	    
					//$this->upload->set_allowed_types('*');
					$data['upload_data'] = '';
					$filename = '';
					
					
						//if not successful, set the error message
						if (!$this->upload->do_upload('sa_avatar')) {
							//$e = $this->upload->display_errors();
							//echo "Try Again -> Error : ";
							//echo $e;
							$this->session->set_flashdata('feedback',"Invalid Image, Change a few things up and try submitting again.");
							$this->session->set_flashdata('feedback_class','alert-danger');
							return redirect('s_admin/profile');
						} else { 
							//echo "upload succcess";
							//$data['upload_data'] = $this->upload->data();
							$data = $this->upload->data();				
							$file_name =   $data['file_name'];
							$file_ext = $data['file_ext'];				
							$file_name = $sa_id;
							$avatar = $file_name.$file_ext;
							//print_r($avatar);
						}
						
				}else{
					$avatar = $sa_data[0]->sa_avatar;
				}
				
			}else{
				$avatar = $sa_data[0]->sa_avatar;
			}
			
            $profileupdatefortb_school_admin = array(
					'sa_name' => $this->input->post('sa_name'),                
					'sa_email' => $this->input->post('sa_email'),
					'sa_mobile' =>$this->input->post('sa_mobile'),
					'sa_avatar' => $avatar
					);
					
					if(trim($this->input->post('sa_password'))!="" && !empty(trim($this->input->post('sa_password')))){
						$profileupdatefortb_school_admin["sa_password"] = md5($this->input->post('sa_password'));
					}
			//return $this->s_adminmodel->update_profile($sa_id,$profileupdatefortb_school_admin);
			if($this->s_adminmodel->update_profile($sa_id,$profileupdatefortb_school_admin)){
				
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"Proflie Updated Successfully!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"Failed to Update Profile, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/profile');
		
		}
	}

	public function create_sub_admin(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$major = $school_admin_data[0]->major;
		//echo $major;

		
		if(($major>0)){
	        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);

	        $school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
			$s_id = $school_admin_data[0]->school_id;	

	        $data['s_admin_list'] = $this->s_adminmodel->view_school_admin_list($s_id);
	        $this->load->view('create_subadmin', $data);
		}
		else
       	{
       		echo "Abuser LOL";
       	}
       	  		
    }

    public function store_school_sub_admin(){	
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			$id = $this->session->userdata('sa_admin_id');
			$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
			$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
			//echo $school_id_data[0]->school_id;	
			$insert_school_id = $school_admin_data[0]->school_id;
			$major = $school_admin_data[0]->major;

            $datafortb_school_admin = array(
					'sa_name' => $this->input->post('sa_name'),
					'sa_email' => $this->input->post('sa_email'),
					'sa_password' => md5($this->input->post('sa_password')),
                    'by_sa_admin' => $this->session->userdata('sa_admin_id'),
                    'school_id' => $insert_school_id,
					'sa_signup_date' => date('Y-m-d h:i:sa', time()),
					'major' => 0
				    );        
			if(($major>0)){		
	            if(($this->s_adminmodel->add_school_sub_admin($datafortb_school_admin))){
	                //flash message insert successfully
	                $this->session->set_flashdata('feedback',"School Sub Admin Successfully Added!");
	                $this->session->set_flashdata('feedback_class','alert-success');
	            }
	            else{
	                //Insert failed
	                $this->session->set_flashdata('feedback',"School Sub Admin Failed to Add, Change a few things up and try submitting again.");
	                $this->session->set_flashdata('feedback_class','alert-danger');
	            }
	            return redirect('s_admin/create_sub_admin');
       		}
       		else
       		{
       			echo "Abuser LOL";
       		}
    }
	
   
    public function delete_sadmin(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$sadmin_id = $this->input->post('sa_id');
		if( $this->s_adminmodel->delete_school_admin($sadmin_id)) {
			
		}
		$this->session->set_flashdata('d_feedback',"School Admin successfully deleted");
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('s_admin/create_sub_admin');
		 		
    }

	public function gallery(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');
			
		$id = $this->session->userdata('sa_admin_id');  
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;		
		$data['school_details'] = $this->s_adminmodel->show_school_info($s_id);
        $data['s_admin_details'] = $this->s_adminmodel->show_school_admin_id($id);
        $this->load->view('gallery', $data);
		
    }
	
	public function update_logo(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');

		
		$id = $this->session->userdata('sa_admin_id');    
		$data['admission_list']= $this->s_adminmodel->show_admission_form_notify($id);         
		$school_admin_data= $this->s_adminmodel->show_school_admin_id($id);
		$s_id = $school_admin_data[0]->school_id;
		$s_data = $this->s_adminmodel->show_school_info($s_id);
		
		
		if($s_id){
			if(isset($_FILES['school_logo'])){
				if(isset($_FILES['school_logo']) && is_uploaded_file($_FILES['school_logo']['tmp_name'])){
					//Configure
					//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
					$config['upload_path'] = '../assets/s_img';
					// set the filter image types
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '100';
					$config['overwrite'] = TRUE;
					//renaming 		
					$config['file_name'] = $s_id;
					//load the upload library
					$this->load->library('upload', $config);    
					$this->upload->initialize($config);	    
					//$this->upload->set_allowed_types('*');
					$data['upload_data'] = '';
					$filename = '';
					
					
						//if not successful, set the error message
						if (!$this->upload->do_upload('school_logo')) {
							//$e = $this->upload->display_errors();
							//echo "Try Again -> Error : ";
							//echo $e;
							$this->session->set_flashdata('feedback',"Invalid Image, Change a few things up and try submitting again.");
							$this->session->set_flashdata('feedback_class','alert-danger');
							return redirect('s_admin/gallery');
						} else { 
							//echo "upload succcess";
							//$data['upload_data'] = $this->upload->data();
							$data = $this->upload->data();				
							$file_name =   $data['file_name'];
							$file_ext = $data['file_ext'];				
							$file_name = $s_id;
							$school_logo = $file_name.$file_ext;
							//print_r($school_logo);
						}
						
				}else{
					$school_logo = $s_data[0]->school_logo;
				}
				
			}else{
				$school_logo = $s_data[0]->school_logo;
			}
			
            $logoupdatefortb_school = array(
					'school_logo' => $school_logo
					);
					
			
			if($this->s_adminmodel->update_logo($s_id,$logoupdatefortb_school)){
				
                //flash message insert successfully
                $this->session->set_flashdata('feedback',"Logo Updated Successfully!");
                $this->session->set_flashdata('feedback_class','alert-success');
            }
            else{
                //Insert failed
                $this->session->set_flashdata('feedback',"Failed to Update Logo, Change a few things up and try submitting again.");
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('s_admin/gallery');
		
		}
	}
	
	public function reject(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');        
          
		$admission_form_id = $this->input->post('admission_form_id');
		$form_reject_reason_data = array(					
					'form_reject_reason' => $this->input->post('form_reject_reason'),
					'form_status' => 'rejected',
					'approved_at' => '',
					'status_changed_by' => $this->session->userdata('sa_admin_id')
					);
		$data = $this->s_adminmodel->admission_form_info($admission_form_id);
		$form_status = $data[0]->form_status;
		
		if($form_status == 'rejected'){
			$this->session->set_flashdata('r_feedback',"Admission Form is Already Rejected*");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('s_admin/admission_activity');
		}
		else
		{ 
			if( $this->s_adminmodel->reject($admission_form_id,$form_reject_reason_data)) {
				$this->session->set_flashdata('r_feedback',"Admission Form Successfully Rejected!");
				$this->session->set_flashdata('feedback_class','alert-warning');
				

			}else {
				$this->session->set_flashdata('r_feedback',"Failed to Reject, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('s_admin/admission_activity');
		} 		
    }
	
	public function approve(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');        
          
		$admission_form_id = $this->input->post('admission_form_id');
		$form_approved_data = array(					
					'approved_at' => date('Y-m-d h:i:sa', time()),
					'form_status' => 'approved',
					'form_reject_reason' => '',
					'status_changed_by' => $this->session->userdata('sa_admin_id')
					);
		$data = $this->s_adminmodel->admission_form_info($admission_form_id);
		$form_status = $data[0]->form_status;
		
		if($form_status == 'approved'){
			$this->session->set_flashdata('a_feedback',"Admission Form is Already Approved*");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('s_admin/admission_activity');
		}
		else
		{ 
			if( $this->s_adminmodel->approve($admission_form_id,$form_approved_data)) {
				$this->session->set_flashdata('a_feedback',"Admission Form Successfully Approved!");
				$this->session->set_flashdata('feedback_class','alert-success');
				

			}else {
				$this->session->set_flashdata('a_feedback',"Failed to Approve, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('s_admin/admission_activity');
		} 		
    }
	
	public function pending(){

        if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');       
          
		$admission_form_id = $this->input->post('admission_form_id');
		$form_pending_data = array(					
					'approved_at' => '',
					'form_status' => 'pending',
					'form_reject_reason' => '',
					'status_changed_by' => $this->session->userdata('sa_admin_id')
					);
		$data = $this->s_adminmodel->admission_form_info($admission_form_id);
		$form_status = $data[0]->form_status;
		
		if($form_status == 'pending'){
			$this->session->set_flashdata('p_feedback',"Admission Form status is already Pending* ");
			$this->session->set_flashdata('feedback_class','alert-info');
			return redirect('s_admin/admission_activity');
		}
		else
		{ 
			if( $this->s_adminmodel->pending($admission_form_id,$form_pending_data)) {
				$this->session->set_flashdata('p_feedback',"Admission Form Successfully moved to Pending status!");
				$this->session->set_flashdata('feedback_class','alert-info');
				

			}else {
				$this->session->set_flashdata('p_feedback',"Failed to pending, Try again Later!");
				$this->session->set_flashdata('feedback_class','alert-danger');
				# insert failed
			}
			return redirect('s_admin/admission_activity');
		} 		
    }

    public function std_admission_form(){
		if( ! $this->session->userdata('sa_admin_id'))
				return redirect('s_admin/login');

		$id = $this->session->userdata('sa_admin_id');       

        $data['school_details'] = $this->s_adminmodel->show_school_info($id);      
			
		if(isset($_GET ['admission']) && !empty($_GET['admission'])) {
            	$admission_id = $_GET ['admission'];	
            	//echo $admission_id;
        		//$formdata= $this->s_adminmodel->admission_form_info($admission_id);
            	$data['admission_data']= $this->s_adminmodel->admission_form_info($admission_id);
            	//print_r($formdata);
        }
		
        $this->load->view('std_admission_form',$data);
		
    }
	
	
}
?>
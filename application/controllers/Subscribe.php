<?php

class Subscribe extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
        $this->load->helper('form');	
		$this->load->library('My_phpmailer');
	}
	public function index()
	{
		echo "Subscribe Controller - Index page";
		
	}
	
	public function send_mail() { 

		//echo "lel";
		

		 // HTML email starts here
   
		 $message = '
		<p style="text-indent: 50px;">Hello,</p>

		<p style="margin-left: 50px;">

		<b>
		Subscription to your Email will be Activate Soon.
		</b>.<br/>
		<b>
		Your Email Address has been added to mail list.
		</b>.<br/>
		<b>
		School Admission System Community is Thanking you for Subscribing.	
		</b>
		</p>';
	   
	   // HTML email ends here



		$receiver_email = $this->input->post('s_email');
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host     = "smtp.gmail.com"; // SMTP server
		$mail->Username = "info@simplifyingadmission.ml"; // "The account"
		$mail->Password = "SAMS&gtu2018"; // "The password"
		$mail->Port = 587; // "The port"
		$mail->Subject    = "SAMS[Support] Subscription";
		//$mail->AddEmbeddedImage('images/logo1.jpg', 'logo1'); //Attachment use this in html -> 		<img src=\"cid:logo1\" />
        $mail->Body      = $message;
		$mail->AddAddress($receiver_email);
		$mail->From = 'info@simplifyingadmission.ml';
		$mail->FromName = '[SAMS]School Admission System';
		$mail->IsHTML(true);
		
		
		//Send mail 
        if(!$mail->Send()) 
        {
        	//echo "error";
			$this->session->set_flashdata("email_sent","Error in subscription, Try again later."); 
			$this->session->set_flashdata('feedback_class','alert-danger text-center');
			return redirect('user'); 
        }
			
		else
		{
			//echo "success";
			$this->session->set_flashdata("email_sent","Successfully done.");
			$this->session->set_flashdata('feedback_class','alert-success text-center');
			return redirect('user');
		}
			
		/*
        $this->session->set_flashdata("email_sent","Email sent successfully."); 
        else 
        $this->session->set_flashdata("email_sent","Error in sending Email."); 
        $this->load->view('email_form'); 
		*/
      
	}
      
	
}
?>
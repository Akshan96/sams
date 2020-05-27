<!DOCTYPE html>
<html lang="en">
<head>
		<title>Add School | Dashboard - Admin Panel</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url("admin_assets/css/bootstrap.css"); ?>" rel='stylesheet' type='text/css' /><!--You can use link tag too , refer documentation -->
        <script src="<?php echo base_url("admin_assets/js/jquery-3.1.1.js");?>"></script>
        <script src="<?php echo base_url("admin_assets/js/bootstrap.min.js");?>"></script>
        

		<script>
				$(document).ready(function(){
				//Email
				function isEmail(email) {
				  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				  return regex.test(email);
				}
				//keyup - when start typing in input
				$('#sa_email').keyup(function(e){
					if(!$('#sa_email').val()){
						e.preventDefault();
						$('#email_error').html("Email Required");
					}else if(!isEmail($('#sa_email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}else{
						$('#email_error').html("");
					}
				});							
				/*on Blur-when moving to other input
				$('#sa_email').blur(function(e){
					if(!$('#sa_email').val()){
						e.preventDefault();
						$('#email_error').html("Required");
					}else if(!isEmail($('#r_email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}else{
						$('#email_error').html("");
					}
				});
				*/				
				//username
				$('#sa_name').keyup(function(e){
					if(!$('#sa_name').val()){
						e.preventDefault();
						$('#name_error').html("Name Required");
					}else if($('#sa_name').val().length < 4 ){
						e.preventDefault();
						$('#name_error').html("Should contain at least 4 characters");
					}else{
						$('#name_error').html("");
					}
				});
				//password
				function isPassword(pass) {
				  var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}+$/;
				  return regex.test(pass);
				}
				$('#sa_password').keyup(function(e){
					if(!$('#sa_password').val()){
						e.preventDefault();
						$('#password_error').html("Password Required");
					}else if($('#sa_password').val().length < 6 ){
						e.preventDefault();
						$('#password_error').html("Should contain at least 6 characters");
					}else{
						$('#password_error').html("");
					}
				});
				//confirm password
				/*
				$('#conf_password').keyup(function(e){
					var pass = $('#r_password').val();
					var pass2 = $('#conf_password').val();
					if(!$('#conf_password').val()){
						e.preventDefault();
						$('#conf_password_error').html("Required");
					}else if(pass != pass2){
						e.preventDefault();
						$('#conf_password_error').html("Password don't match");
					}else{
						$('#conf_password_error').html("");
					}
				});
				*/
				
				//use click to check validation in autosaved too.
				$('input[type="submit"]').click(function(e){
					var pass = $('#sa_password').val();
					//email
					if(!$('#sa_email').val()){
						e.preventDefault();
						$('#email_error').html("Email Required");
					}else if(!isEmail($('#sa_email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}
					else if(!$('#sa_name').val()){
						e.preventDefault();
						$('#name_error').html("Name Required");
					}else if($('#sa_name').val().length < 4 ){
						e.preventDefault();
						$('#name_error').html("Should contain at least 4 characters");
					}				
					else if(!$('#sa_password').val()){
						e.preventDefault();
						$('#password_error').html("Password Required");
					}else if($('#sa_password').val().length < 6 ){
						e.preventDefault();
						$('#password_error').html("Should contain at least 6 characters");
					}					
					else{
						$('#email_error','#name_error','#password_error').html("");
					}														
				});
			});
		</script>
</head>

<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <b><a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">Admin Panel</a></b>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!--
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Add Activites <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Edit Activites</a></li>
        </ul> -->
        <!-- Getting username -->

        <ul class="nav navbar-nav navbar-right">
            <li><a href=""><span class="text text-default"><em><b>Welcome, <font color="#25ff00"><?php echo $admin_details[0]->a_name;?></font></b></em></span></a></li>
            <li><a href="<?= base_url('admin/logout') ?>">Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
       <div class="row col-md-12">
            <ul class="nav nav-pills">
                <li class=""><a href="<?= base_url('admin/dashboard') ?>">Schools</a></li>
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">School Admins<span class="caret"></span></a>                
                    <ul class="dropdown-menu">
                    <li class="active"><a href="<?= base_url('admin/add_school_admin') ?>">Add School Admin</a></li>
                    <li><a href="<?= base_url('admin/view_school_admin') ?>">View School Admin</a></li>
                    <li><a href="<?= base_url('admin/view_school_admin_full_list') ?>">School Admin Full List</a></li>
                    <li class="divider"></li>
                    <li><a href="#">More</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
    </div>    
    <div class="container">
       <div class="row col-md-12">
            <?php echo form_open('admin/store_school_admin','class="form-horizontal"');?>
            
            <fieldset>
                <center><legend>Add School Admin</legend></center>
                <!-- Flash Data Login Error-->
                <?php if( $feedback = $this->session->flashdata('feedback')):
                        $feedback_class = $this->session->flashdata('feedback_class');?>
                <div class="row">
                    <div class="col-md-6 col-lg-offset-3">
                        <div class="alert alert-dismissible <?= $feedback_class ?>">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?= $feedback?></strong> 
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
				
				<div class="form-group">
                    <label class="col-md-3 control-label">School Admin Name</label>
                    <div class="col-md-6">
                        <?php echo form_input(['name'=>'sa_name','id'=>'sa_name','class'=>'form-control','placeholder'=>'Valid School Admin Name','type'=>'text','value'=>set_value('sa_name')]);?>
                        <!--<input type="text" class="form-control" id="sa_name" name="f_name" placeholder="First Name  Middle Name  Last Name"> -->
                    </div>
                    <div class="col-md-3">
                        <p id="name_error" style="color:red"></p>
                    </div>
                </div>
				
                <div class="form-group">
                    <label class="col-md-3 control-label">School Admin Email Id</label>
                    <div class="col-md-6">
                        <?php echo form_input(['name'=>'sa_email','id'=>'sa_email','class'=>'form-control','placeholder'=>'Email Address','type'=>'text','value'=>set_value('sa_email')]);?>
                        <!--<input type="text" class="form-control" id="sa_email" name="f_email" placeholder="Email Address">-->
                    </div>
                    <div class="col-md-3">
                        <p id="email_error" style="color:red"></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                        <?php echo form_password(['name'=>'sa_password','id'=>'sa_password','class'=>'form-control','placeholder'=>'Password','type'=>'password']);?>
                        <!--<input type="password" class="form-control" id="sa_password" name="f_password" placeholder="Password">-->
                    </div>
                    <div class="col-md-3">
                        <p id="password_error" style="color:red"></p>
                    </div>
                </div>
               
                <div class="form-group">
                <div class="col-md-12 col-md-offset-3">
                    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);?>
                    <!--<button type="reset" class="btn btn-default">Cancel</button>-->
                    <?php echo form_submit(['name'=>'submit','value'=>'Add School Admin','type'=>'submit','class'=>'btn btn-primary']);?>
                    <!--<button type="submit" class="btn btn-primary">Add</button>-->
                </div>
                </div>
            </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
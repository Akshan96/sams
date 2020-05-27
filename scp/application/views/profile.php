<?php include 'header.php';?>
<?php include 'sidebar.php';?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">School Admission System</a>
							</li>
							<li class="active">Profile</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Profile
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- Fetching All Details of user From Database And Showing In a Form -->
								<?php foreach ($s_admin_details as $sa){ ?>
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('s_admin/update_profile')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Edit Profile</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Name </label>

												<div class="col-sm-9">
													<input type="text" id="sa_name" name="sa_name" value="<?php echo $sa->sa_name; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="name_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>	
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

												<div class="col-sm-9">
													<input type="text" id="sa_email" name="sa_email" value="<?php echo $sa->sa_email; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="email_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile No. </label>

												<div class="col-sm-9">
													<input type="text" id="sa_mobile" name="sa_mobile" value="<?php echo $sa->sa_mobile; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="mobile_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<style>
												.btn-file {
													position: relative;
													overflow: hidden;
												}
												.btn-file input[type=file] {
													position: absolute;
													top: 0;
													right: 0;
													min-width: 100%;
													min-height: 100%;
													font-size: 100px;
													text-align: right;
													filter: alpha(opacity=0);
													opacity: 0;
													outline: none;
													background: white;
													cursor: inherit;
													display: block;
												}

												#img-upload{
													width: 20%;
												}
												.nbtn {
													display: inline-block;
													margin-bottom: 0;
													font-weight: 400;
													text-align: center;
													vertical-align: middle;
													touch-action: manipulation;
													cursor: pointer;
													border: 1px solid transparent;
													white-space: nowrap;
													padding: 6px 12px;
													border-radius: 0px !important;
													font-size: 14px;
													line-height: 1.42857143;
													border-radius: 4px;
													-webkit-user-select: none;
													-moz-user-select: none;
													-ms-user-select: none;
													user-select: none;
												}
											</style>
											
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Avatar </label>

												<div class="col-sm-9">
													<div class="input-group">
														<span class="input-group-btn">
															<span class="nbtn btn-primary btn-file">
																Browse… <input type="file" id="imgInp" name="sa_avatar" accept="image/*">
															</span>
														</span>
													<input class="col-xs-10 col-sm-4" type="text" placeholder="<?php echo $sa->sa_avatar; ?>" class="form-control" readonly>
													</div>
													<img style="padding:10px"; id='img-upload'/>
													
												</div>
											</div>
											</fieldset>
											
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Change Password  </label>

												<div class="col-sm-9">
													<input type="password" id="sa_password" name="sa_password"  class="col-xs-10 col-sm-5" />
													
												</div>
											</div>
											</fieldset>

											<div class="space-4"></div>

											
											<div class="clearfix">
											
												<div class="col-md-offset-3 col-md-9">
													<div class="space-4"></div>
													<input type="submit" value="Update" class="btn btn-info" />
													&nbsp; &nbsp; &nbsp;													
													<input type="reset" value="Reset" class="btn" />
												</div>
											</div>
											<div class="space-4"></div>
											<!-- Flash Data Login Error-->
											<?php if( $feedback = $this->session->flashdata('feedback')):
													$feedback_class = $this->session->flashdata('feedback_class');?>
											<div class="row">
												<div class="col-xs-12">
													<div class="alert alert-dismissible text-center <?= $feedback_class ?>">
														<button type="button" class="close" data-dismiss="alert">&times;</button>
														<strong><?= $feedback?></strong> 
													</div>
												</div>
											</div>
											<?php endif; ?>
											<div class="space-4"></div>
										</div>
									</div>
								</form>
								<?php } ?>
								<script
								  src="https://code.jquery.com/jquery-3.2.1.js">
								</script>
								
								<script>
								$(document).ready( function() {
									$(document).on('change', '.btn-file :file', function() {
									var input = $(this),
										label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
									input.trigger('fileselect', [label]);
									});

									$('.btn-file :file').on('fileselect', function(event, label) {
										
										var input = $(this).parents('.input-group').find(':text'),
											log = label;
										
										if( input.length ) {
											input.val(log);
										} else {
											if( log ) alert(log);
										}
									
									});
									function readURL(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();
											
											reader.onload = function (e) {
												$('#img-upload').attr('src', e.target.result);
											}
											
											reader.readAsDataURL(input.files[0]);
										}
									}

									$("#imgInp").change(function(){
										readURL(this);
									}); 	
								});
								</script>
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
									//mobile no
									function isMobile(mobile) {
									  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
									  return phoneNumberPattern.test(mobile);
									}									
									$('#sa_mobile').keyup(function(e){
										if(!$('#sa_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile No. Required");
										}else if(!isMobile($('#sa_mobile').val())){
											e.preventDefault();
											$('#mobile_error').html("Invalid Mobile No.");
										}else{
											$('#mobile_error').html("");
										}
									});
									//password
									/*
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
									*/
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
										else if(!$('#sa_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile Required");
										}else if(!isMobile($('#sa_mobile').val())){
											e.preventDefault();
											$('#mobile_error').html("Mobile No. should be Valid");
										}													
										else{
											$('#email_error','#name_error','#mobile_error').html("");
										}														
									});
								});
								</script>
										
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>		
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
							<li class="active">School Details</li>
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
								Update School Details
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->
						<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
						<div class="row">
							<div class="col-xs-12">
								<?php if($s_admin_details[0]->school_id < 1 ){?>
								<div class="alert alert-warning">
											
											<strong>Sorry!!</strong>
											Your School is not yet Registered. Firstly, Make sure you have Registered your School.
											<br>
								</div>
								<?php } ?>
								<?php if($s_admin_details[0]->major < 1 ) { ?>
									<div class="alert alert-danger">
											
											<strong>Oops!</strong>
											You don't have enough permission to access this system. 
											<br>
									</div>
								<?php } ?>
								<!-- PAGE CONTENT BEGINS -->
								<!-- Fetching All Details of user From Database And Showing In a Form -->
								<?php if($s_admin_details[0]->major > 0 ) { ?>
								<?php foreach ($school_details as $school){ ?>
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/restore_school_details')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Edit School Details</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
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
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Name </label>

												<div class="col-sm-9">
													<input type="text" id="school_name" name="school_name" value="<?php echo $school->school_name; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="name_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Code </label>

												<div class="col-sm-9">
													<input type="text" id="school_code" name="school_code" value="<?php echo $school->school_code; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="code_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>											
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Type (multiple allowed) </label>

												<div class="col-sm-9">
													
													<select multiple class="chosen-select  col-xs-10 col-sm-5"  name="school_type[]" id="school_type" data-placeholder="Choose Board Type...">
																<!--<option value="<?php echo $school->school_type; ?>"><?php echo $school->school_type; ?></option> -->
																<option disabled selected value> -- select an option -- </option>
																<option value="GSEB">GSEB</option>
																<option value="ICSE">ICSE</option>
																<option value="CBSE">CBSE</option>					
													</select>

												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="type_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>											
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Medium (multiple allowed)</label>

												<div class="col-sm-9">
													
													<select multiple class="chosen-select  col-xs-10 col-sm-5" name="school_medium[]" id="school_medium" data-placeholder="Choose Medium Type...">																
																<!--<option value="<?php echo $school->school_medium; ?>"><?php echo $school->school_medium; ?></option> -->
																<option disabled selected value> -- select an option -- </option>
																<option value="English">English</option>
																<option value="Gujarati">Gujarati</option>					
													</select>

												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="medium_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Branch No. </label>

												<div class="col-sm-9">
													<input type="text" id="school_branchno" name="school_branchno" value="<?php echo $school->school_branchno; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="branch_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Address </label>

												<div class="col-sm-9">
													<input type="text" id="school_address" name="school_address" value="<?php echo $school->school_address; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="address_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Area </label>

												<div class="col-sm-9">
													<input type="text" id="school_area" name="school_area" value="<?php echo $school->school_area; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="area_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School City </label>

												<div class="col-sm-9">
													
													<select class="col-xs-10 col-sm-5 " id="school_city" name="school_city"  required>
																<option value="<?php echo $school->school_city; ?>"><?php echo $school->school_city; ?></option>
																<option disabled selected value> -- select an option -- </option>
																<option value="Ahmedabad">Ahmedabad</option>
																<option value="Gandhinagar">Gandhinagar</option>
																<option value="Surat">Surat</option>
																<option value="Vadodara">Vadodara</option>
													</select>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="city_error" style="color:red"></span>
												</span>
												</div>
											</div>
											
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Pincode </label>

												<div class="col-sm-9">
													<input type="text" id="school_pincode" name="school_pincode" value="<?php echo $school->school_pincode; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="pincode_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School District </label>

												<div class="col-sm-9">													
													<select class=" col-xs-10 col-sm-5" id="school_district" name="school_district" placeholder="" required>
																<option value="<?php echo $school->school_district; ?>"><?php echo $school->school_district; ?></option>
																<option value="Ahmedabad">Ahmedabad</option>
																<option value="Gandhinagar">Gandhinagar</option>
																<option value="Surat">Surat</option>
																<option value="Vadodara">Vadodara</option>
													</select>
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="district_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School State </label>

												<div class="col-sm-9">													
													<select class="col-xs-10 col-sm-5" id="school_state" name="school_state" placeholder="" required>
																<option value="<?php echo $school->school_state; ?>"><?php echo $school->school_state; ?></option>
																<option value="Gujarat">Gujarat</option>
																<option value="Delhi">Delhi</option>
																<option value="Maharashtra">Maharashtra</option>
													</select>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="state_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>											
											<div class="space-4"></div>
											<fieldset>	
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Email </label>

												<div class="col-sm-9">
													<input type="text" id="school_email" name="school_email" value="<?php echo $school->school_email; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="email_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Mobile No. </label>

												<div class="col-sm-9">
													<input type="text" id="school_mobile" name="school_mobile" value="<?php echo $school->school_mobile; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="mobile_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Phone </label>

												<div class="col-sm-9">
													<input type="text" id="school_phone" name="school_phone" value="<?php echo $school->school_phone; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="phone_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Website </label>

												<div class="col-sm-9">
													<input type="text" id="school_website" name="school_website" value="<?php echo $school->school_website; ?>" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="website_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Info </label>

												<div class="col-sm-9">													
													<textarea id="school_info" name="school_info" class="col-xs-10 col-sm-5" required><?php echo $school->school_info; ?></textarea>
													<script>
													CKEDITOR.replace( 'school_info' );
													</script>												
												</div>
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="info_error" style="color:red"></span>
												</span>
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
										</div>																						
										</div>
									</div>
								</form>
								<script src="<?php echo base_url("assets/js/ace-elements.min.js"); ?>"></script>
								<script src="<?php echo base_url("assets/js/ace.min.js"); ?>"></script>
								<script src="<?php echo base_url("assets/js/chosen.jquery.min.js"); ?>"></script>
								<script>

									if(!ace.vars['touch']) {
										$('.chosen-select').chosen({allow_single_deselect:true}); 
										//resize the chosen on window resize
								
										$(window)
										.off('resize.chosen')
										.on('resize.chosen', function() {
											$('.chosen-select').each(function() {
												 var $this = $(this);
												 $this.next().css({'width': $this.parent().width()});
											})
										}).trigger('resize.chosen');
										//resize chosen on sidebar collapse/expand
										$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
											if(event_name != 'sidebar_collapsed') return;
											$('.chosen-select').each(function() {
												 var $this = $(this);
												 $this.next().css({'width': $this.parent().width()});
											})
										});
								
								
										$('#chosen-multiple-style .btn').on('click', function(e){
											var target = $(this).find('input[type=radio]');
											var which = parseInt(target.val());
											if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
											 else $('#form-field-select-4').removeClass('tag-input-style');
										});
									}
								</script>	
								<script
								  src="https://code.jquery.com/jquery-3.2.1.js">
								</script>								
								<script>
								$(document).ready(function(){
									//Email
									function isEmail(email) {
									  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
									  return regex.test(email);
									}
									//keyup - when start typing in input
									$('#school_email').keyup(function(e){
										if(!$('#school_email').val()){
											e.preventDefault();
											$('#email_error').html("Email Required");
										}else if(!isEmail($('#school_email').val())){
											e.preventDefault();
											$('#email_error').html("Invalid Email");
										}else{
											$('#email_error').html("");
										}
									});							
									
									$('#school_email').blur(function(e){
										if(!$('#school_email').val()){
											e.preventDefault();
											$('#email_error').html("Email Required");
										}else if(!isEmail($('#school_email').val())){
											e.preventDefault();
											$('#email_error').html("Invalid Email");
										}else{
											$('#email_error').html("");
										}
									});
									
									$('#school_name').blur(function(e){
										if(!$('#school_name').val()){
											e.preventDefault();
											$('#name_error').html("School Name Required");
										}else if($('#school_name').val().length < 3 ){
											e.preventDefault();
											$('#name_error').html("Enter Valid Name");
										}else{
											$('#name_error').html("");
										}
									});
												
									//schoolname
									$('#school_name').keyup(function(e){
										if(!$('#school_name').val()){
											e.preventDefault();
											$('#name_error').html("Name Required");
										}else if($('#school_name').val().length < 3 ){
											e.preventDefault();
											$('#name_error').html("Enter Valid Name");
										}else{
											$('#name_error').html("");
										}
									});
									//school_code
									$('#school_code').keyup(function(e){
										if(!$('#school_code').val()){
											e.preventDefault();
											$('#code_error').html("Code Required");
										}else{
											$('#code_error').html("");
										}
									});
									//school_type
									$('#school_type').keyup(function(e){
										if(!$('#school_type').val()){
											e.preventDefault();
											$('#type_error').html("Type Required");
										}else{
											$('#type_error').html("");
										}
									});
									//school_medium
									$('#school_medium').keyup(function(e){
										if(!$('#school_medium').val()){
											e.preventDefault();
											$('#medium_error').html("Medium Required");
										}else{
											$('#medium_error').html("");
										}
									});
									//school_branchno
									$('#school_branchno').keyup(function(e){
										if(!$('#school_branchno').val()){
											e.preventDefault();
											$('#branch_error').html("Branch Required");
										}else{
											$('#branch_error').html("");
										}
									});
									//school_address
									$('#school_address').keyup(function(e){
										if(!$('#school_address').val()){
											e.preventDefault();
											$('#address_error').html("Address Required");
										}else{
											$('#address_error').html("");
										}
									});
									//school_area
									$('#school_area').keyup(function(e){
										if(!$('#school_area').val()){
											e.preventDefault();
											$('#area_error').html("Area Required");
										}else{
											$('#area_error').html("");
										}
									});
									//school_city
									$('#school_city').keyup(function(e){
										if(!$('#school_city').val()){
											e.preventDefault();
											$('#city_error').html("City Required");
										}else{
											$('#city_error').html("");
										}
									});
									//school_pincode
									$('#school_pincode').keyup(function(e){
										if(!$('#school_pincode').val()){
											e.preventDefault();
											$('#pincode_error').html("Pincode Required");
										}else{
											$('#pincode_error').html("");
										}
									});
									//school_district
									$('#school_district').keyup(function(e){
										if(!$('#school_district').val()){
											e.preventDefault();
											$('#district_error').html("District Required");
										}else{
											$('#district_error').html("");
										}
									});
									//school_state
									$('#school_state').keyup(function(e){
										if(!$('#school_state').val()){
											e.preventDefault();
											$('#state_error').html("State Required");
										}else{
											$('#state_error').html("");
										}
									});
									//school_website
									/*
									$('#school_website').keyup(function(e){
										if(!$('#school_website').val()){
											e.preventDefault();
											$('#website_error').html("Code Required");
										}else{
											$('#website_error').html("");
										}
									});
									*/
									//school_info
									$('#school_info').keyup(function(e){
										if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("School Info Required");
										}else{
											$('#info_error').html("");
										}
									});
									//mobile no
									function isMobile(mobile) {
									  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
									  return phoneNumberPattern.test(mobile);
									}									
									$('#school_mobile').keyup(function(e){
										if(!$('#school_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile No. Required");
										}else if(!isMobile($('#school_mobile').val())){
											e.preventDefault();
											$('#mobile_error').html("Invalid Mobile No.");
										}else{
											$('#mobile_error').html("");
										}
									});
									//school_phone
									$('#school_phone').keyup(function(e){
										if(!$('#school_phone').val()){
											e.preventDefault();
											$('#phone_error').html("Phone No. Required");
										}else{
											$('#phone_error').html("");
										}
									});
									
									//school_code
									$('#school_code').blur(function(e){
										if(!$('#school_code').val()){
											e.preventDefault();
											$('#code_error').html("Code Required");
										}else{
											$('#code_error').html("");
										}
									});
									//school_type
									$('#school_type').blur(function(e){
										if(!$('#school_type').val()){
											e.preventDefault();
											$('#type_error').html("Type Required");
										}else{
											$('#type_error').html("");
										}
									});
									//school_medium
									$('#school_medium').blur(function(e){
										if(!$('#school_medium').val()){
											e.preventDefault();
											$('#medium_error').html("Medium Required");
										}else{
											$('#medium_error').html("");
										}
									});
									//school_branchno
									$('#school_branchno').blur(function(e){
										if(!$('#school_branchno').val()){
											e.preventDefault();
											$('#branch_error').html("Branch Required");
										}else{
											$('#branch_error').html("");
										}
									});
									//school_address
									$('#school_address').blur(function(e){
										if(!$('#school_address').val()){
											e.preventDefault();
											$('#address_error').html("Address Required");
										}else{
											$('#address_error').html("");
										}
									});
									//school_area
									$('#school_area').blur(function(e){
										if(!$('#school_area').val()){
											e.preventDefault();
											$('#area_error').html("Area Required");
										}else{
											$('#area_error').html("");
										}
									});
									//school_city
									$('#school_city').blur(function(e){
										if(!$('#school_city').val()){
											e.preventDefault();
											$('#city_error').html("City Required");
										}else{
											$('#city_error').html("");
										}
									});
									//school_pincode
									$('#school_pincode').blur(function(e){
										if(!$('#school_pincode').val()){
											e.preventDefault();
											$('#pincode_error').html("Pincode Required");
										}else{
											$('#pincode_error').html("");
										}
									});
									//school_district
									$('#school_district').blur(function(e){
										if(!$('#school_district').val()){
											e.preventDefault();
											$('#district_error').html("District Required");
										}else{
											$('#district_error').html("");
										}
									});
									//school_state
									$('#school_state').blur(function(e){
										if(!$('#school_state').val()){
											e.preventDefault();
											$('#state_error').html("State Required");
										}else{
											$('#state_error').html("");
										}
									});
									//school_website
									/*
									$('#school_website').blur(function(e){
										if(!$('#school_website').val()){
											e.preventDefault();
											$('#website_error').html("Code Required");
										}else{
											$('#website_error').html("");
										}
									});
									*/
									//school_info
									$('#school_info').blur(function(e){
										if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("School Info Required");
										}else{
											$('#info_error').html("");
										}
									});
									//mobile no
									function isMobile(mobile) {
									  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
									  return phoneNumberPattern.test(mobile);
									}									
									$('#school_mobile').blur(function(e){
										if(!$('#school_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile No. Required");
										}else if(!isMobile($('#school_mobile').val())){
											e.preventDefault();
											$('#mobile_error').html("Invalid Mobile No.");
										}else{
											$('#mobile_error').html("");
										}
									});
									//school_phone
									$('#school_phone').blur(function(e){
										if(!$('#school_phone').val()){
											e.preventDefault();
											$('#phone_error').html("Phone No. Required");
										}else{
											$('#phone_error').html("");
										}
									});
									
									//use click to check validation in autosaved too.
									$('input[type="submit"]').click(function(e){
										var pass = $('#sa_password').val();
							
										if(!$('#school_name').val()){
											e.preventDefault();
											$('#name_error').html("Name Required");
										}else if($('#school_name').val().length < 3 ){
											e.preventDefault();
											$('#name_error').html("Enter Valid Name");
										}
										else if(!$('#school_email').val()){
											e.preventDefault();
											$('#email_error').html("Email Required");
										}else if(!isEmail($('#school_email').val())){
											e.preventDefault();
											$('#email_error').html("Invalid Email");
										}										
										else if(!$('#school_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile Required");
										}else if(!isMobile($('#school_mobile').val())){
											e.preventDefault();
											$('#mobile_error').html("Mobile No. should be Valid");
										}
										else if(!$('#school_code').val()){
											e.preventDefault();
											$('#code_error').html("Code Required");
										}
										else if(!$('#school_type').val()){
											e.preventDefault();
											$('#type_error').html("Type Required");
										}
										else if(!$('#school_medium').val()){
											e.preventDefault();
											$('#medium_error').html("Medium Required");
										}
										else if(!$('#school_branchno').val()){
											e.preventDefault();
											$('#branch_error').html("Branch No. Required");
										}
										else if(!$('#school_address').val()){
											e.preventDefault();
											$('#address_error').html("Address Required");
										}
										else if(!$('#school_area').val()){
											e.preventDefault();
											$('#area_error').html("Area Required");
										}
										else if(!$('#school_city').val()){
											e.preventDefault();
											$('#city_error').html("City Required");
										}
										else if(!$('#school_pincode').val()){
											e.preventDefault();
											$('#pincode_error').html("Pincode Required");
										}
										else if(!$('#school_district').val()){
											e.preventDefault();
											$('#district_error').html("District Required");
										}
										else if(!$('#school_state').val()){
											e.preventDefault();
											$('#state_error').html("State Required");
										}
										else if(!$('#school_phone').val()){
											e.preventDefault();
											$('#phone_error').html("Phone Required");
										}
										else if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("Info Required");
										}
										else{
											$('#email_error','#name_error','#mobile_error','#code_error','#type_error','#medium_error','#branch_error','#address_error','#area_error','#city_error','#pincode_error','#district_error','#state_error','#phone_error','#info_error').html("");
										}														
									});
								});
								</script>
								<?php } ?>
								<?php } ?>
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>		
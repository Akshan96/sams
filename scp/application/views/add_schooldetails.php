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
								Register Your School
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->
						<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
						<div class="row">
							<div class="col-xs-12">
								<?php if($school_details!=null){ if($school_details[0]->register_status == 'rejected' ){ ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
									</button>		
											<strong>Sorry !</strong>
											Your school is rejected, Your school details are false or incorrect, Update valid details and let us notify.
											<br>
									<div id="accordion" class="accordion-style1 panel-group">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
														Reason :-
													</a>
												</h4>
											</div>

											<div class="panel-collapse collapse in" id="collapseOne">
												<div class="panel-body">
													<?php echo $school_details[0]->register_reject_reason; ?>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<?php } ?>
								<?php if($school_details[0]->register_status == 'pending' ){ ?>
								<div class="alert alert-warning">
									<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
									</button>		
											<strong>Thanks for registering school !</strong>
											Your school status is pending and waiting for approval. Once approved you will be notified.
											<br>
								</div>
								<?php }?>
								<?php if($school_details[0]->register_status == 'approved' ){ ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
									</button>		
											<strong>Congratulations !</strong>
											Your School is approved, Now you can access to various other features of this system and your school details will be shown to public.
											<br>
								</div>
								<?php }}?>
								<?php if($s_admin_details[0]->school_id >0 ){ ?>
								<div class="alert alert-info">
											
											<strong>Heads up!</strong>
											Your School is already Registered.
											<br>
								</div>

								<style>
								  
								  th{
								  font-weight: bold;
								  font-size: 1.75em;
								  text-align:center;
								  color: #a57b00;
								  }
								  td{
									color: #17202A;									
									text-align:center;
								  }
									td:nth-child(1){
										font-weight: bold;
										color: #17202A;
										text-align:center;
									  }								  
									

								/* multi option*/
									
	
								</style>
								<?php  foreach ($school_details as $school): ?>
								<div class="col-md-6">
									<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Registered School Details</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th colspan="2" style="text-align:center;"><?= $school->school_name; ?></th>														  
															</tr>
														  </thead>
														  <tbody>
															<tr>
																<td>School Code</td>
																<td><span class="label label-lg label-warning arrowed-in arrowed-in-right"><?= $school->school_code; ?></span></td>
															</tr>
															<tr>
																<td>School Type</td>
																<td><span class="label label-lg label-primary arrowed arrowed-right"><?= $school->school_type; ?></span></td>
															</tr>
															<tr>
																<td>School Medium</td>
																<td><span class="label label-lg label-success arrowed arrowed-right"><?= $school->school_medium; ?></span></td>
															</tr>
															<tr>
																<td>School Branch No.</td>
																<td><span class="badge badge-pink"><?= $school->school_branchno; ?></span></td>
															</tr>
															<tr>
																<td>School Address</td>
																<td><?= $school->school_address; ?></td>
															</tr>
															<tr>
																<td>School Area</td>
																<td><?= $school->school_area; ?></td>
															</tr>
															<tr>
																<td>School City</td>
																<td><?= $school->school_city; ?></td>
															</tr>
															<tr>
																<td>School Pincode</td>
																<td><?= $school->school_pincode; ?></td>
															</tr>
															<tr>
																<td>School District</td>
																<td><?= $school->school_district; ?></td>
															</tr>
															<tr>
																<td>School State</td>
																<td><?= $school->school_state; ?></td>
															</tr>
															<tr>
																<td>School Email</td>
																<td><?= $school->school_email; ?></td>
															</tr>
															<tr>
																<td>School Mobile</td>
																<td><?= $school->school_mobile; ?></td>
															</tr>
															<tr>
																<td>School Phone</td>
																<td><?= $school->school_phone; ?></td>
															</tr>
															<tr>
																<td>School Website</td>
																<td><a href="<?= $school->school_website ?>"><?= $school->school_website ?></a></td>
															</tr>														
															<tr>
																<td> Registered By</td>
																<td><?= $school->created_by; ?></td>
															</tr>
															<tr>
																<td> Registered At</td>
																<td><?= $school->created_at; ?></td>
															</tr>
															<tr>
																<td>Last Updated By</td>
																<td><?= $school->last_updated_by; ?></td>
															</tr>														
															<tr>
																<td>Last Updated At</td>
																<td><?= $school->last_updated_at; ?></td>
															</tr>																													
														  </tbody>
														</table>
													</div>
												</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget-box">
												<div class="widget-header">
													<h4 class="widget-title">Registered School Information</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<?= $school->school_info; ?>
													</div>
												</div>
									</div>
								</div>
																
								<?php endforeach; ?>
								
								<?php }elseif($s_admin_details[0]->major >0 ){ ?>
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/store_school_details')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Enter Valid School Details</h4>

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
													<input type="text" id="school_name" name="school_name" placeholder="Enter valid School Name" class="col-xs-10 col-sm-5" required/>
													
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
													<input type="text" id="school_code" name="school_code" placeholder="Enter valid School Code" class="col-xs-10 col-sm-5" required/>
												
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
													
													<select  multiple class="chosen-select form-control" name="school_type[]" id="school_type" data-placeholder="Choose Board Type...">
														
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
													
													<select multiple class="chosen-select form-control" name="school_medium[]" id="school_medium" data-placeholder="Choose Medium Type...">						
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
													<input type="text" id="school_branchno" name="school_branchno" placeholder="Enter valid School Branch No./Code" class="col-xs-10 col-sm-5" required/>
												
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
													<textarea id="school_address" name="school_address" placeholder="Enter valid School Address" class="col-xs-10 col-sm-5" required></textarea>
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
													<input type="text" id="school_area" name="school_area" placeholder="Enter valid School Area" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="area_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right"  id="form-field-select-4" for="form-field-1"> School City </label>

												<div class="col-sm-9">
													
													<select class="col-xs-10 col-sm-5" id="school_city" name="school_city" placeholder="Choose City.." required>
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
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Pincode </label>

												<div class="col-sm-9">
													<input type="text" id="school_pincode" name="school_pincode" placeholder="Enter valid School Pincode" class="col-xs-10 col-sm-5" required/>
												
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
													<select class="col-xs-10 col-sm-5" id="school_district" name="school_district" placeholder="" required>
																<option disabled selected value> -- select an option -- </option>
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
																<option disabled selected value> -- select an option -- </option>
																<option value="Gujarat">Gujarat</option>
																<!-- <option value="Delhi">Delhi</option>
																<option value="Maharashtra">Maharashtra</option>	-->														
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
													<input type="text" id="school_email" name="school_email" placeholder="Enter valid School Email" class="col-xs-10 col-sm-5" required/>
												
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
													<input type="text" id="school_mobile" name="school_mobile" placeholder="Enter valid School Mobile No." class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="mobile_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> School Phone No. </label>

												<div class="col-sm-9">
													<input type="text" id="school_phone" name="school_phone" placeholder="Enter valid School Phone No." class="col-xs-10 col-sm-5" required/>
												
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
													<input type="text" id="school_website" name="school_website" placeholder="Enter School Website" class="col-xs-10 col-sm-5" required/>
												
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
													<textarea id="school_info" name="school_info" placeholder="Enter School Info" class="col-xs-10 col-sm-5" required></textarea>
													<script>
													CKEDITOR.replace( 'school_info' );
													</script>
													<span class="middle" id="info_error" style="color:red"></span>
												</div>
											</div>
											</fieldset>

											<div class="space-4"></div>


											<div class="clearfix">
												<div class="col-md-offset-3 col-md-9">
													
													<input type="submit" value="Register" class="btn btn-info" />
													&nbsp; &nbsp; &nbsp;													
													<input type="reset" value="Reset" class="btn" />
												</div>
											</div>
											
											<div class="space-4"></div>
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
									/*
									$('#school_info').keyup(function(e){
										if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("School Info Required");
										}else{
											$('#info_error').html("");
										}
									});
									*/
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
									/*
									$('#school_info').blur(function(e){
										if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("School Info Required");
										}else{
											$('#info_error').html("");
										}
									});
									*/
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
										}/*
										else if(!$('#school_info').val()){
											e.preventDefault();
											$('#info_error').html("Info Required");
										} */
										else{
											$('#email_error','#name_error','#mobile_error','#code_error','#type_error','#medium_error','#branch_error','#address_error','#area_error','#city_error','#pincode_error','#district_error','#state_error','#phone_error').html("");
										}														
									});
								});
								</script>
								<?php }else{ ?>
									<div class="alert alert-danger">
											
											<strong>Oops!</strong>
											You don't have enough permission to access this system. 
											<br>
									</div>
									
									<?php  foreach ($school_details as $school): ?>
									<div class="col-md-6">
										<div class="widget-box">
													<div class="widget-header">
														<h4 class="widget-title">Registered School Details</h4>
													</div>

													<div class="widget-body">
														<div class="widget-main no-padding">
															<table class="table table-hover">
															  <thead>
																<tr>
																  <th colspan="2" style="text-align:center;"><?= $school->school_name; ?></th>														  
																</tr>
															  </thead>
															  <tbody>
																<tr>
																	<td>School Code</td>
																	<td><span class="label label-lg label-warning arrowed-in arrowed-in-right"><?= $school->school_code; ?></span></td>
																</tr>
																<tr>
																	<td>School Type</td>
																	<td><span class="label label-lg label-primary arrowed arrowed-right"><?= $school->school_type; ?></span></td>
																</tr>
																<tr>
																	<td>School Medium</td>
																	<td><span class="label label-lg label-success arrowed arrowed-right"><?= $school->school_medium; ?></span></td>
																</tr>
																<tr>
																	<td>School Branch No.</td>
																	<td><span class="badge badge-pink"><?= $school->school_branchno; ?></span></td>
																</tr>
																<tr>
																	<td>School Address</td>
																	<td><?= $school->school_address; ?></td>
																</tr>
																<tr>
																	<td>School Area</td>
																	<td><?= $school->school_area; ?></td>
																</tr>
																<tr>
																	<td>School City</td>
																	<td><?= $school->school_city; ?></td>
																</tr>
																<tr>
																	<td>School Pincode</td>
																	<td><?= $school->school_pincode; ?></td>
																</tr>
																<tr>
																	<td>School District</td>
																	<td><?= $school->school_district; ?></td>
																</tr>
																<tr>
																	<td>School State</td>
																	<td><?= $school->school_state; ?></td>
																</tr>
																<tr>
																	<td>School Email</td>
																	<td><?= $school->school_email; ?></td>
																</tr>
																<tr>
																	<td>School Mobile</td>
																	<td><?= $school->school_mobile; ?></td>
																</tr>
																<tr>
																	<td>School Phone</td>
																	<td><?= $school->school_phone; ?></td>
																</tr>
																<tr>
																	<td>School Website</td>
																	<td><a href="<?= $school->school_website ?>"><?= $school->school_website ?></a></td>
																</tr>														
																<tr>
																	<td> Registered By</td>
																	<td><?= $school->created_by; ?></td>
																</tr>
																<tr>
																	<td> Registered At</td>
																	<td><?= $school->created_at; ?></td>
																</tr>
																<tr>
																	<td>Last Updated By</td>
																	<td><?= $school->last_updated_by; ?></td>
																</tr>														
																<tr>
																	<td>Last Updated At</td>
																	<td><?= $school->last_updated_at; ?></td>
																</tr>																													
															  </tbody>
															</table>
														</div>
													</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="widget-box">
													<div class="widget-header">
														<h4 class="widget-title">Registered School Information</h4>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<?= $school->school_info; ?>
														</div>
													</div>
										</div>
									</div>																	
									<?php endforeach; ?>
									
								<?php } ?>
							</div>
								<script
								  src="https://code.jquery.com/jquery-3.2.1.js">
								</script>
								<!-- inline scripts related to this page -->
		
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>	
	
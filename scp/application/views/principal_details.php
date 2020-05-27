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
							<li class="active">Principal Details</li>
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
								Principal Details
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/store_principal_details')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Add Principal Details</h4>

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
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Principal Name </label>

												<div class="col-sm-9">
													<input type="text" id="principal_name" name="principal_name" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="principal_name_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>	
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Principal of Education Level </label>

												<div class="col-sm-9">
													<input type="text" id="principal_edu_level" name="principal_edu_level" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="principal_edu_level_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>	
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No.</label>

												<div class="col-sm-9">
													<input type="text" id="principal_contact" name="principal_contact" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="principal_contact_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											<div class="space-4"></div>
											<fieldset>	
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

												<div class="col-sm-9">
													<input type="text" id="principal_email" name="principal_email" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="principal_email_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											

											<div class="space-4"></div>

											
											<div class="clearfix">
											
												<div class="col-md-offset-3 col-md-9">
													<div class="space-4"></div>
													<input type="submit" value="Add" class="btn btn-info" />
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
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Principal List</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<?php if( $feedback = $this->session->flashdata('d_feedback')):
										  $feedback_class = $this->session->flashdata('feedback_class');?>
											<div class="alert alert-dismissible <?= $feedback_class ?>">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  <strong><?= $feedback?></strong> 
											</div>               
								<?php endif; ?>
								<div class="table-header">
									Results for "Principal Details"
								</div>

								<!-- div.table-responsive -->

								<!-- div.dataTables_borderWrap -->
								<div>
									
									<table id="dynamic-table" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</th>
												<th>Principal Name</th>
												<th>Principal Education Level</th>
												<th>Email</th>
												<th>Contact No.</th>
												<th>Actions</th>
												
											</tr>
										</thead>

										<tbody>
											<?php foreach ($principal_details_list as $principal_details){ ?>
											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>
												<td><?php echo $principal_details->principal_full_name; ?></td>
												<td><?php echo $principal_details->principal_of_edu_level; ?></td>
												<td><?php echo $principal_details->email; ?></td>
												<td><?php echo $principal_details->contact_no; ?></td>
												<td>
													<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/delete_principal_details')?>">
														  <input type="hidden" name="principal_id" value="<?php echo isset($principal_details->principal_id) ? $principal_details->principal_id : '' ?>">
														  <button  type="submit" class="btn btn-minier btn-danger">Delete</button>
													</form>
												</td>
											</tr>
											<?php  } ?>														
										</tbody>
									</table>
										
								</div>
							</div>
						</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
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
									$('#principal_email').keyup(function(e){
										if(!$('#principal_email').val()){
											e.preventDefault();
											$('#principal_email_error').html("Email Required");
										}else if(!isEmail($('#principal_email').val())){
											e.preventDefault();
											$('#principal_email_error').html("Invalid Email");
										}else{
											$('#principal_email_error').html("");
										}
									});							
									
									$('#principal_email').blur(function(e){
										if(!$('#principal_email').val()){
											e.preventDefault();
											$('#principal_email_error').html("Required");
										}else if(!isEmail($('#principal_email').val())){
											e.preventDefault();
											$('#principal_email_error').html("Invalid Email");
										}else{
											$('#principal_email_error').html("");
										}
									});
													
									//username
									$('#principal_name').keyup(function(e){
										if(!$('#principal_name').val()){
											e.preventDefault();
											$('#principal_name_error').html("Name Required");
										}else if($('#principal_name').val().length < 4 ){
											e.preventDefault();
											$('#principal_name_error').html("Should contain valid entry");
										}else{
											$('#principal_name_error').html("");
										}
									});
									//mobile no
									function isMobile(mobile) {
									  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
									  return phoneNumberPattern.test(mobile);
									}									
									$('#principal_contact').keyup(function(e){
										if(!$('#principal_contact').val()){
											e.preventDefault();
											$('#principal_contact_error').html("Mobile No. Required");
										}else if(!isMobile($('#principal_contact').val())){
											e.preventDefault();
											$('#principal_contact_error').html("Invalid Mobile No.");
										}else{
											$('#principal_contact_error').html("");
										}
									});
									
									$('#principal_edu_level').keyup(function(e){
										if(!$('#principal_edu_level').val()){
											e.preventDefault();
											$('#principal_edu_level_error').html("Required");
										}else if($('#principal_edu_level').val().length < 4 ){
											e.preventDefault();
											$('#principal_edu_level_error').html("Should contain valid entry");
										}else{
											$('#principal_edu_level_error').html("");
										}
									});

												
									
										
									//username
									$('#principal_name').blur(function(e){
										if(!$('#principal_name').val()){
											e.preventDefault();
											$('#principal_name_error').html("Name Required");
										}else if($('#principal_name').val().length < 4 ){
											e.preventDefault();
											$('#principal_name_error').html("Should contain valid entry");
										}else{
											$('#principal_name_error').html("");
										}
									});
									//mobile no
									function isMobile(mobile) {
									  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
									  return phoneNumberPattern.test(mobile);
									}									
									$('#principal_contact').blur(function(e){
										if(!$('#principal_contact').val()){
											e.preventDefault();
											$('#principal_contact_error').html("Mobile No. Required");
										}else if(!isMobile($('#principal_contact').val())){
											e.preventDefault();
											$('#principal_contact_error').html("Invalid Mobile No.");
										}else{
											$('#principal_contact_error').html("");
										}
									});
									
									$('#principal_edu_level').blur(function(e){
										if(!$('#principal_edu_level').val()){
											e.preventDefault();
											$('#principal_edu_level_error').html("Required");
										}else if($('#principal_edu_level').val().length < 4 ){
											e.preventDefault();
											$('#principal_edu_level_error').html("Should contain valid entry");
										}else{
											$('#principal_edu_level_error').html("");
										}
									});
									
									
									//use click to check validation in autosaved too.
									$('input[type="submit"]').click(function(e){
										
										//email
										if(!$('#principal_email').val()){
											e.preventDefault();
											$('#principal_email_error').html("Email Required");
										}else if(!isEmail($('#principal_email').val())){
											e.preventDefault();
											$('#principal_email_error').html("Invalid Email");
										}
										else if(!$('#principal_name').val()){
											e.preventDefault();
											$('#principal_name_error').html("Name Required");
										}else if($('#principal_name').val().length < 4 ){
											e.preventDefault();
											$('#principal_name_error').html("Should contain at least 4 characters");
										}
										else if(!$('#principal_edu_level').val()){
											e.preventDefault();
											$('#principal_edu_level_error').html("Name Required");
										}else if($('#principal_edu_level').val().length < 4 ){
											e.preventDefault();
											$('#principal_edu_level_error').html("Should contain at least 4 characters");
										}
										else if(!$('#principal_contact').val()){
											e.preventDefault();
											$('#principal_contact_error').html("Mobile Required");
										}else if($('#principal_contact').val().length < 10){
											e.preventDefault();
											$('#principal_contact_error').html("Invalid Mobile No.");
										}													
										else{
											$('#email_error','#name_error','#mobile_error').html("");
										}														
									});
								});
						</script>
<?php include 'footer.php';?>		
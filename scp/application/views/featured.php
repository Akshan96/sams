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
							<li class="active">Edit School Admission Form</li>
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
								Featured Content
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->
						<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/store_features')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Add Features</h4>

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
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Feature Name </label>

												<div class="col-sm-9">
													<input type="text" id="feature_name" name="feature_name" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="feature_name_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											

											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Feature Details </label>

												<div class="col-sm-9">													
													<textarea id="feature_details" name="feature_details" placeholder="Enter Feature Details" class="col-xs-10 col-sm-5" required></textarea>
													<script>
													CKEDITOR.replace( 'feature_details' );
													</script>
													<span class="middle" id="feature_details_error" style="color:red"></span>
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
								<h3 class="header smaller lighter blue">Feature List</h3>

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
									Results for "Feature"
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
												<th>Feature Name</th>
												<th>Feature Details</th>
												<th>Actions</th>
												
											</tr>
										</thead>

										<tbody>
											<?php foreach ($feature_list as $feature){ ?>
											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>
												<td><?php echo $feature->feature_name; ?></td>
												<td><?php echo $feature->feature_description; ?></td>
												<td>
													<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/delete_features')?>">
														  <input type="hidden" name="feature_id" value="<?php echo isset($feature->feature_id) ? $feature->feature_id : '' ?>">
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
							
							$('#feature_name').keyup(function(e){
								if(!$('#feature_name').val()){
									e.preventDefault();
									$('#feature_name_error').html("Education Level Required");
								}else if($('#feature_name').val().length < 4 ){
									e.preventDefault();
									$('#feature_name_error').html("Should contain valid entry");
								}else{
									$('#feature_name_error').html("");
								}
							});

							$('#feature_details').keyup(function(e){
								if(!$('#feature_details').val()){
									e.preventDefault();
									$('#feature_details_error').html("Annual Fee Required");
								}else if($('#feature_details').val().length < 4 ){
									e.preventDefault();
									$('#feature_details_error').html("Should contain valid entry");
								}else{
									$('#feature_details_error').html("");
								}
							});
							
							$('#feature_name').blur(function(e){
								if(!$('#feature_name').val()){
									e.preventDefault();
									$('#feature_name_error').html("Education Level Required");
								}else if($('#feature_name').val().length < 4 ){
									e.preventDefault();
									$('#feature_name_error').html("Should contain valid entry");
								}else{
									$('#feature_name_error').html("");
								}
							});
							/*
							$('#feature_details').blur(function(e){
								if(!$('#feature_details').val()){
									e.preventDefault();
									$('#feature_details_error').html("Annual Fee Required");
								}else if($('#feature_details').val().length < 4 ){
									e.preventDefault();
									$('#feature_details_error').html("Should contain valid entry");
								}else{
									$('#feature_details_error').html("");
								}
							});
							*/
							//use click to check validation in autosaved too.
							$('input[type="submit"]').click(function(e){
								
								if(!$('#feature_name').val()){
									e.preventDefault();
									$('#feature_name_error').html("Education Level");
								}else if($('#feature_name').val().length < 4 ){
									e.preventDefault();
									$('#feature_name_error').html("Should contain valid entry");
								}/*
								else if(!$('#feature_details').val()){
									e.preventDefault();
									$('#feature_details_error').html("Annual Fee Required");
								}else if($('#feature_details').val().length < 4 ){
									e.preventDefault();
									$('#feature_details_error').html("Should contain valid entry");
								}	*/												
								else{
									$('#feature_name_error','#feature_details_error').html("");
								}														
							});
						});
						</script>
<?php include 'footer.php';?>		
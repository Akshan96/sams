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
							<li class="active">School News / Articles</li>
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
								School News / Articles
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/store_school_news')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Add News / Articles</h4>

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
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> News/Article Title </label>

												<div class="col-sm-9">
													<input type="text" id="s_news_title" name="s_news_title" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="s_news_title_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
											

											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> News/Article Description </label>

												<div class="col-sm-9">													
													<textarea id="s_news_details" name="s_news_description" placeholder="Enter News Description" class="col-xs-10 col-sm-5" required></textarea>
													<script>
													CKEDITOR.replace( 's_news_details' );
													</script>
													<span class="middle" id="s_news_details_error" style="color:red"></span>
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
								<h3 class="header smaller lighter blue">News/Articles List</h3>

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
									Results for "News/Articles"
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
												<th>News/Article Title</th>
												<th>News/Article Details</th>
												<th>Actions</th>
												
											</tr>
										</thead>
										
										<tbody>
											<?php foreach ($school_news_list as $school_news){ ?>
											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>
												<td><?php echo $school_news->s_news_title; ?></td>
												<td><?php echo $school_news->s_news_description; ?></td>
												<td>
													<a href="<?php echo base_url("s_admin/update_school_news?s_news=".$school_news->school_news_id);?>" target="_blank" type="button" class="btn btn-minier btn-primary ">
														
														Update
													</a>
													<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/delete_school_news')?>">
														  <input type="hidden" name="school_news_id" value="<?php echo isset($school_news->school_news_id) ? $school_news->school_news_id : '' ?>">
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
			
			$('#s_news_title').keyup(function(e){
				if(!$('#s_news_title').val()){
					e.preventDefault();
					$('#s_news_title_error').html("Title Required");
				}else if($('#s_news_title').val().length < 8 ){
					e.preventDefault();
					$('#s_news_title_error').html("Should contain valid entry");
				}else{
					$('#s_news_title_error').html("");
				}
			});

			$('#s_news_details').keyup(function(e){
				if(!$('#s_news_details').val()){
					e.preventDefault();
					$('#s_news_details_error').html("Description Required");
				}else if($('#s_news_details').val().length < 20 ){
					e.preventDefault();
					$('#s_news_details_error').html("Should contain valid entry");
				}else{
					$('#s_news_details_error').html("");
				}
			});
			
			$('#s_news_title').blur(function(e){
				if(!$('#s_news_title').val()){
					e.preventDefault();
					$('#s_news_title_error').html("Title Required");
				}else if($('#s_news_title').val().length < 4 ){
					e.preventDefault();
					$('#s_news_title_error').html("Should contain valid entry");
				}else{
					$('#s_news_title_error').html("");
				}
			});
			/*
			$('#s_news_details').blur(function(e){
				if(!$('#s_news_details').val()){
					e.preventDefault();
					$('#s_news_details_error').html("Annual Fee Required");
				}else if($('#s_news_details').val().length < 20 ){
					e.preventDefault();
					$('#s_news_details_error').html("Should contain valid entry");
				}else{
					$('#s_news_details_error').html("");
				}
			});
			*/
			//use click to check validation in autosaved too.
			$('input[type="submit"]').click(function(e){
				
				if(!$('#s_news_title').val()){
					e.preventDefault();
					$('#s_news_title_error').html("Title Required");
				}else if($('#s_news_title').val().length < 4 ){
					e.preventDefault();
					$('#s_news_title_error').html("Should contain valid entry");
				}/*
				else if(!$('#s_news_details').val()){
					e.preventDefault();
					$('#s_news_details_error').html("Description Required");
				}else if($('#s_news_details').val().length < 20 ){
					e.preventDefault()
					$('#s_news_details_error').html("Should contain valid entry");
				}	*/												
				else{
					$('#feature_name_error','#s_news_details_error').html("");
				}														
			});
		});
</script>
<?php include 'footer.php';?>		
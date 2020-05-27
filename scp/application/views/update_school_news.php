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
							<li class="active">Update School News / Articles</li>
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
								Update School News / Articles
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
								<!-- PAGE CONTENT BEGINS -->
								
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/restore_school_news')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Update News / Articles</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
											<div class="space-4"></div>
											<input type="hidden" name="school_news_id" value="<?php echo $school_news[0]->school_news_id; ?>">
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> News/Article Title </label>

												<div class="col-sm-9">
													<input type="text" id="s_news_title" name="s_news_title" value="<?php echo $school_news[0]->s_news_title; ?>" class="col-xs-10 col-sm-5" required/>
												
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
													<textarea id="s_news_details" name="s_news_description" placeholder="Enter News Description" class="col-xs-10 col-sm-5" required><?php echo $school_news[0]->s_news_description; ?></textarea>
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
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
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
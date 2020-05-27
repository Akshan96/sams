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
							<li class="active">Gallery</li>
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
					
					<?php foreach ($school_details as $school){ ?>
					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Manage School Gallery
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Upload Logo for School [<?php echo $school->school_name; ?>]</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
											<div class="space-4"></div>
											<div class="row">
												<div class="col-md-8">
													<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('s_admin/update_logo')?>">
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
														
															<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Update Logo </label>

															<div class="col-sm-9">
																<div class="input-group">
																	<span class="input-group-btn">
																		<span class="nbtn btn-primary btn-file">
																			Browse… <input type="file" id="imgInp" name="school_logo" accept="image/*">
																		</span>
																	</span>
																<input class="col-xs-10 col-sm-4" type="text" placeholder="<?php echo $school->school_logo; ?>"  class="form-control" readonly>
																</div>
																<img style="padding:10px"; id='img-upload'/>
																
															</div>
														
														</fieldset>
														<div class="clearfix">
													
															<div class="col-md-offset-3 col-md-9">
																<div class="space-4"></div>
																<input type="submit" value="Update" class="btn btn-info" />
																&nbsp; &nbsp; &nbsp;													
																<input type="reset" value="Reset" class="btn" />
															</div>
														</div>
														<div class="space-4"></div>
														
														<div class="space-4"></div>
													</form>
												</div>
												<div class="col-md-4">
													<img style="width: 40%;" src="<?php if($school_details[0]->school_logo > 0){echo base_url("../assets/s_img/".$school_details[0]->school_logo);}else{echo "Not yet uploaded logo.";}?>" alt="School Logo" />
												</div>
												
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
											</div>
											
											
										</div>
									</div>
									<div class="space-4"></div>
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
									
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Upload Images for School Gallery</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
											<div class="space-4"></div>
											
											<form  class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
												<fieldset style="margin:10px">
													<div class="form-group">
															<div class="col-xs-12">
																<input multiple="" type="file" id="id-input-file-3"  accept="image/*"/>
															</div>
													</div>
												</fieldset>
												<div class="clearfix">
													
															<div class="col-lg-12 pull-right ">
																<div class="space-4"></div>
																<input type="submit" value="Upload" class="btn btn-info" />																
															</div>
														</div>
											</form>
											<script src="<?php echo base_url("assets/js/ace-elements.min.js"); ?>"></script>
											
											
											<!-- script defined on top-header(assets/js/ace.min.js,) , dropdown error -->
											<script src="<?php echo base_url("assets/js/ace.min.js"); ?>"></script>
											<script src="<?php echo base_url("assets/js/ace-elements.min.js"); ?>"></script>
											<script>
											
											$('#id-input-file-3').ace_file_input({
												style: 'well',
												btn_choose: 'Drop files here or click to choose',
												btn_change: null,
												no_icon: 'ace-icon fa fa-cloud-upload',
												droppable: true,
												thumbnail: 'small'//large | fit
												//,icon_remove:null//set null, to hide remove/reset button
												/**,before_change:function(files, dropped) {
													//Check an example below
													//or examples/file-upload.html
													return true;
												}*/
												/**,before_remove : function() {
													return true;
												}*/
												,
												preview_error : function(filename, error_code) {
													//name of the file that failed
													//error_code values
													//1 = 'FILE_LOAD_FAILED',
													//2 = 'IMAGE_LOAD_FAILED',
													//3 = 'THUMBNAIL_FAILED'
													//alert(error_code);
												}

											}).on('change', function(){
												//console.log($(this).data('ace_input_files'));
												//console.log($(this).data('ace_input_method'));
											});



											//dynamically change allowed formats by changing allowExt && allowMime function
											$('#id-file-format').removeAttr('checked').on('change', function() {
												var whitelist_ext, whitelist_mime;
												var btn_choose
												var no_icon
												if(this.checked) {
													btn_choose = "Drop images here or click to choose";
													no_icon = "ace-icon fa fa-picture-o";
										
													whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
													whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
												}
												else {
													btn_choose = "Drop files here or click to choose";
													no_icon = "ace-icon fa fa-cloud-upload";
													
													whitelist_ext = null;//all extensions are acceptable
													whitelist_mime = null;//all mimes are acceptable
												}
												var file_input = $('#id-input-file-3');
												file_input
												.ace_file_input('update_settings',
												{
													'btn_choose': btn_choose,
													'no_icon': no_icon,
													'allowExt': whitelist_ext,
													'allowMime': whitelist_mime
												})
												file_input.ace_file_input('reset_input');
												
												file_input
												.off('file.error.ace')
												.on('file.error.ace', function(e, info) {
													//console.log(info.file_count);//number of selected files
													//console.log(info.invalid_count);//number of invalid files
													//console.log(info.error_list);//a list of errors in the following format
													
													//info.error_count['ext']
													//info.error_count['mime']
													//info.error_count['size']
													
													//info.error_list['ext']  = [list of file names with invalid extension]
													//info.error_list['mime'] = [list of file names with invalid mimetype]
													//info.error_list['size'] = [list of file names with invalid size]
													
													
													/**
													if( !info.dropped ) {
														//perhapse reset file field if files have been selected, and there are invalid files among them
														//when files are dropped, only valid files will be added to our file array
														e.preventDefault();//it will rest input
													}
													*/
													
													
													//if files have been selected (not dropped), you can choose to reset input
													//because browser keeps all selected files anyway and this cannot be changed
													//we can only reset file field to become empty again
													//on any case you still should check files with your server side script
													//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
												});
												
												
												/**
												file_input
												.off('file.preview.ace')
												.on('file.preview.ace', function(e, info) {
													console.log(info.file.width);
													console.log(info.file.height);
													e.preventDefault();//to prevent preview
												});
												*/
											
											});

											</script>
											<div class="space-4"></div>
										</div>
									</div>

								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
					<?php } ?>
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>		
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
							<li class="active">Create Sub Admin</li>
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
								Create Sub Admin
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- Fetching All Details of user From Database And Showing In a Form -->
								
								<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('s_admin/store_school_sub_admin')?>">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Create School Sub Admin</h4>

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
													<input type="text" id="sa_name" name="sa_name" value="" class="col-xs-10 col-sm-5" required/>
												
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
													<input type="text" id="sa_email" name="sa_email" value="" class="col-xs-10 col-sm-5" required/>
												
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
													<input type="text" id="sa_mobile" name="sa_mobile" value="" class="col-xs-10 col-sm-5" required/>
												
												<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="mobile_error" style="color:red"></span>
												</span>
												</div>
											</div>
											</fieldset>
	
											<div class="space-4"></div>
											<fieldset>
											<div class="">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password  </label>

												<div class="col-sm-9">
													<input type="password" id="sa_password" name="sa_password"  class="col-xs-10 col-sm-5" />
													<span class="help-inline col-xs-12 col-sm-7">
														<span class="middle" id="password_error" style="color:red"></span>
													</span>
												</div>
											</div>
											</fieldset>

											<div class="space-4"></div>

											
											<div class="clearfix">
											
												<div class="col-md-offset-3 col-md-9">
													<div class="space-4"></div>
													<input type="submit" value="Create" class="btn btn-info" />
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
										else if(!$('#sa_mobile').val()){
											e.preventDefault();
											$('#mobile_error').html("Mobile Required");
										}else if($('#sa_mobile').val().length < 4 ){
											e.preventDefault();
											$('#mobile_error').html("Should contain at least 4 characters");
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
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- Fetching All Details of user From Database And Showing In a Form -->
								<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">School Admin List</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>												
											</div>
										</div>
										<div class="widget-body">
											<?php if( $feedback = $this->session->flashdata('d_feedback')):
										  $feedback_class = $this->session->flashdata('feedback_class');?>
											<br><div class="alert alert-dismissible <?= $feedback_class ?>">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  <strong><?= $feedback?></strong> 
											</div>               
											<?php endif; ?>
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
														<th>Name</th>
														<th>Email</th>
														<th>
															<i class="ace-icon fa fa-mobile"></i>
															Mobile
														</th>
														<th class="">Level</th>
														<th class=""><i class="ace-icon fa fa-clock-o"></i>Last Active</th>

														<!--<th></th> -->
													</tr>
												</thead>
												<?php foreach ($s_admin_list as $s_admin){ ?>
												<tbody>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?php echo $s_admin->sa_name; ?>
														</td>
														<td>
															<?php echo $s_admin->sa_email; ?>
														</td>
														<td class=""> <?php echo $s_admin->sa_mobile; ?></td>
													
															
															<?php if( $s_admin->major == "1"){?>
													        	 <td><span class="label label-sm label-primary">Major</span></td>
													        <?php }else
													        {?>
													        	 <td><span class="label label-sm label-warning">Sub Admin</span></td>
													        <?php } ?>
													        
														

														<td class="">
															<?php echo $s_admin->last_active; ?>
														</td>
														<td>
															<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/delete_sadmin')?>">
																  <input type="hidden" name="sa_id" value="<?php echo isset($s_admin->sa_id) ? $s_admin->sa_id : '' ?>">
																  <button  type="submit" class="btn btn-minier btn-danger">Delete</button>
															</form>
														</td>
														<!--
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
														-->
													</tr>
													<?php  } ?>
				
												</tbody>

											</table>
										</div>
										</div>
									
								</div>

							</div>
						</div>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<!-- page specific plugin scripts -->
						<script src="<?php echo base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/jquery.dataTables.bootstrap.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/dataTables.buttons.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/buttons.flash.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/buttons.html5.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/buttons.print.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/buttons.colVis.min.js"); ?>"></script>
						<script src="<?php echo base_url("assets/js/dataTables.select.min.js"); ?>"></script>
						
						<!-- ace scripts -->						
						<!-- declared in header-->
						
						
						<!-- inline scripts related to this page -->
							<script type="text/javascript">
								jQuery(function($) {
									//initiate dataTables plugin
									var myTable = 
									$('#dynamic-table')
									//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
									.DataTable( {
										bAutoWidth: false,
										"aoColumns": [
										  { "bSortable": false },
										  null, null,null, null, null,
										  { "bSortable": false }
										],
										"aaSorting": [],
										
										
										//"bProcessing": true,
										//"bServerSide": true,
										//"sAjaxSource": "http://127.0.0.1/table.php"	,
								
										//,
										//"sScrollY": "200px",
										//"bPaginate": false,
								
										//"sScrollX": "100%",
										//"sScrollXInner": "120%",
										//"bScrollCollapse": true,
										//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
										//you may want to wrap the table inside a "div.dataTables_borderWrap" element
								
										//"iDisplayLength": 50
								
								
										select: {
											style: 'multi'
										}
									} );
								
									
									
									$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
									
									new $.fn.dataTable.Buttons( myTable, {
										buttons: [
										  {
											"extend": "colvis",
											"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
											"className": "btn btn-white btn-primary btn-bold",
											columns: ':not(:first):not(:last)'
										  },
										  {
											"extend": "copy",
											"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
											"className": "btn btn-white btn-primary btn-bold"
										  },
										  {
											"extend": "csv",
											"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
											"className": "btn btn-white btn-primary btn-bold"
										  },
										  {
											"extend": "excel",
											"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
											"className": "btn btn-white btn-primary btn-bold"
										  },
										  {
											"extend": "pdf",
											"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
											"className": "btn btn-white btn-primary btn-bold"
										  },
										  {
											"extend": "print",
											"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
											"className": "btn btn-white btn-primary btn-bold",
											autoPrint: false,
											message: 'This print was produced using the Print button for DataTables'
										  }		  
										]
									} );
									myTable.buttons().container().appendTo( $('.tableTools-container') );
									
									//style the message box
									var defaultCopyAction = myTable.button(1).action();
									myTable.button(1).action(function (e, dt, button, config) {
										defaultCopyAction(e, dt, button, config);
										$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
									});
									
									
									var defaultColvisAction = myTable.button(0).action();
									myTable.button(0).action(function (e, dt, button, config) {
										
										defaultColvisAction(e, dt, button, config);
										
										
										if($('.dt-button-collection > .dropdown-menu').length == 0) {
											$('.dt-button-collection')
											.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
											.find('a').attr('href', '#').wrap("<li />")
										}
										$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
									});
								
									////
								
									setTimeout(function() {
										$($('.tableTools-container')).find('a.dt-button').each(function() {
											var div = $(this).find(' > div').first();
											if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
											else $(this).tooltip({container: 'body', title: $(this).text()});
										});
									}, 500);
									
									
									
									
									
									myTable.on( 'select', function ( e, dt, type, index ) {
										if ( type === 'row' ) {
											$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
										}
									} );
									myTable.on( 'deselect', function ( e, dt, type, index ) {
										if ( type === 'row' ) {
											$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
										}
									} );
								
								
								
								
									/////////////////////////////////
									//table checkboxes
									$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
									
									//select/deselect all rows according to table header checkbox
									$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
										var th_checked = this.checked;//checkbox inside "TH" table header
										
										$('#dynamic-table').find('tbody > tr').each(function(){
											var row = this;
											if(th_checked) myTable.row(row).select();
											else  myTable.row(row).deselect();
										});
									});
									
									//select/deselect a row when the checkbox is checked/unchecked
									$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
										var row = $(this).closest('tr').get(0);
										if(this.checked) myTable.row(row).deselect();
										else myTable.row(row).select();
									});
								
								
								
									$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
										e.stopImmediatePropagation();
										e.stopPropagation();
										e.preventDefault();
									});
									
									
									
									//And for the first simple table, which doesn't have TableTools or dataTables
									//select/deselect all rows according to table header checkbox
									var active_class = 'active';
									$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
										var th_checked = this.checked;//checkbox inside "TH" table header
										
										$(this).closest('table').find('tbody > tr').each(function(){
											var row = this;
											if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
											else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
										});
									});
									
									//select/deselect a row when the checkbox is checked/unchecked
									$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
										var $row = $(this).closest('tr');
										if($row.is('.detail-row ')) return;
										if(this.checked) $row.addClass(active_class);
										else $row.removeClass(active_class);
									});
								
									
								
									/********************************/
									//add tooltip for small view action buttons in dropdown menu
									$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
									
									//tooltip placement on right or left
									function tooltip_placement(context, source) {
										var $source = $(source);
										var $parent = $source.closest('table')
										var off1 = $parent.offset();
										var w1 = $parent.width();
								
										var off2 = $source.offset();
										//var w2 = $source.width();
								
										if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
										return 'left';
									}
									
									
									
									
									/***************/
									$('.show-details-btn').on('click', function(e) {
										e.preventDefault();
										$(this).closest('tr').next().toggleClass('open');
										$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
									});
									/***************/
									
									
									
									
									
									/**
									//add horizontal scrollbars to a simple table
									$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
									  {
										horizontal: true,
										styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
										size: 2000,
										mouseWheelLock: true
									  }
									).css('padding-top', '12px');
									*/
								
								
								})
							</script>
<?php include 'footer.php';?>		
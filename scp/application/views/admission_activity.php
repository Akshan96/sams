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
							<li class="active">Admission Activity</li>
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
								School Admission Activity
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<h3 class="header smaller lighter blue">Admission List</h3>

								<div class="clearfix">
									<div class="pull-right tableTools-container"></div>
								</div>
								<div class="table-header">
									Results for "Admission Form submitted by users"
								</div>

								<!-- div.table-responsive -->

								<!-- div.dataTables_borderWrap -->
								<div>
									<?php if( $feedback = $this->session->flashdata('r_feedback')):
										  $feedback_class = $this->session->flashdata('feedback_class');?>
											<div class="alert alert-dismissible <?= $feedback_class ?>">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  <strong><?= $feedback?></strong> 
											</div>               
									<?php endif; ?>
									 <?php if( $feedback = $this->session->flashdata('a_feedback')):
										  $feedback_class = $this->session->flashdata('feedback_class');?>
											<div class="alert alert-dismissible <?= $feedback_class ?>">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  <strong><?= $feedback?></strong> 
											</div>               
									 <?php endif; ?>
									 <?php if( $feedback = $this->session->flashdata('p_feedback')):
										  $feedback_class = $this->session->flashdata('feedback_class');?>
											<div class="alert alert-dismissible <?= $feedback_class ?>">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  <strong><?= $feedback?></strong> 
											</div>               
									 <?php endif; ?>
									<table id="dynamic-table" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</th>
												<th>User Email</th>
												<th>Student Name</th>
												<th>Father Name</th>

												<th>													
													Submitted at
												</th>
												<th class="hidden-480">Status</th>

												<th>Manage</th>
											</tr>
										</thead>

										<tbody>
											<?php 								
											foreach ($admission_list as $admission): ?>
											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace" />
														<span class="lbl"></span>
													</label>
												</td>

												<td>
													<a href="#"><?php echo $admission->usr_email; ?></a>
												</td>
												<td><?php echo $admission->fname; ?> <?php echo $admission->mname; ?> <?php echo $admission->lname; ?></td>
												<td><?php echo $admission->father_name; ?></td>
												<td><?php echo $admission->submitted_at; ?></td>

												<td>
													<?php if(($admission->form_status) == "pending"){ ?>
														<span class="label label-sm label-warning"><?php echo $admission->form_status; ?></span>
													<?php } ?>
													<?php if(($admission->form_status) == "approved"){ ?>
														<span class="label label-sm label-success"><?php echo $admission->form_status; ?></span>
													<?php } ?>
													<?php if(($admission->form_status) == "rejected"){ ?>
														<span class="label label-sm label-inverse"><?php echo $admission->form_status; ?></span>
													<?php } ?>
												</td>

												<td>		
													
													<a href="<?php echo base_url("s_admin/std_admission_form?admission=".$admission->admission_form_id);?>" target="_blank" type="button" class="btn btn-minier btn-light ">
														<i class="ace-icon fa fa-print"></i>
														Print
													</a>
													<button type="button" class="btn btn-minier btn-default" data-toggle="modal" data-target="#myModal<?php echo $admission->admission_form_id; ?>">View</button>
													<?php if(($admission->form_status)!= "rejected"){ ?>
															<button type="button" class="btn btn-minier btn-danger" data-toggle="modal" data-target="#rejectModal<?php echo $admission->admission_form_id;?>">Reject</button>
													<?php } ?>	
													<?php if(($admission->form_status)!= "approved"){ ?>																										
															<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/approve')?>">
															  <input type="hidden" name="admission_form_id" value="<?php echo isset($admission->admission_form_id) ? $admission->admission_form_id : '' ?>">
															  <button  type="submit" class="btn btn-minier btn-success">Approve</button>
															</form>
													<?php } ?>
													<?php if(($admission->form_status)!= "pending"){ ?>																		
															<form style="display:inline-block;" method="post" action="<?php echo base_url('s_admin/pending')?>">
															  <input type="hidden" name="admission_form_id" value="<?php echo isset($admission->admission_form_id) ? $admission->admission_form_id : '' ?>">
															  <button  type="submit" class="btn btn-minier btn-warning">Pending</button>
															</form>
													<?php } ?>
												</td>
											</tr>
										<?php endforeach; ?>															
										</tbody>
									</table>
									<?php  	
									foreach ($admission_list as $admission): ?>
									
										<div class="modal fade" id="myModal<?php echo $admission->admission_form_id;?>" role="dialog">
										
											<div class="modal-dialog modal-lg ">
											
											  <!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
												  <button type="button" class="close" data-dismiss="modal">&times;</button>
												  <h3 class="modal-title">Student Admission Form Details</h3>
												</div>
												<div class="modal-body">
													
													
															
															
													<h4></h4>

													<table class="table table-hover">
													  <thead>
														<tr>
														  <th colspan="2" style="text-align:center;"><?php echo $admission->fname; ?> <?php echo $admission->mname; ?> <?php echo $admission->lname; ?></th>														  
														</tr>
													  </thead>
													  <tbody>
														<tr>
															<td>Student First Name</td>
															<td><?php echo $admission->fname; ?></td>
														</tr>
														
														<tr>
															<td>Student Middle Name</td>
															<td><?php echo $admission->mname; ?></td>
														</tr>
														
														<tr>
															<td>Student Last Name</td>
															<td><?php echo $admission->lname; ?></td>
														</tr>
														
														<tr>
															<td>Date of Birth</td>
															<td><?php echo $admission->dob; ?></td>
														</tr>
														
														<tr>
															<td>Native Place</td>
															<td><?php echo $admission->native_place; ?></td>
														</tr>
														
														<tr>
															<td>Religion</td>
															<td><?php echo $admission->religion; ?></td>
														<tr>
														
														<tr>
															<td>Gender</td>
															<td><?php echo $admission->gender; ?></td>
														<tr>
														
														<tr>
															<td>Father Name</td>
															<td><?php echo $admission->father_name; ?></td>
														<tr>
														
														<tr>
															<td>Mother Name</td>
															<td><?php echo $admission->mother_name; ?></td>
														<tr>
														
														<tr>
															<td>Telephone</td>
															<td><?php echo $admission->telephone; ?></td>
														<tr>
														
														<tr>
															<td>Mobile</td>
															<td><?php echo $admission->mobile; ?></td>
														<tr>
														
														<tr>
															<td>Address</td>
															<td><?php echo $admission->address; ?></td>
														<tr>
														
														<tr>
															<td>Permanent Address</td>
															<td><?php echo $admission->permanent_address; ?></td>
														<tr>
														
														<tr>
															<td>City</td>
															<td><?php echo $admission->city; ?></td>
														<tr>
														
														<tr>
															<td>State</td>
															<td><?php echo $admission->state; ?></td>
														<tr>
														
														<tr>
															<td>Nationality</td>
															<td><?php echo $admission->nationality; ?></td>
														<tr>
														
														
														<tr>
															<td>Standard Applied for</td>
															<td><span class="label label-lg label-success "><?php echo $admission->applied_standard; ?></span></td>
														<tr>
														
														
														<tr>
															<td>Previous School</td>
															<td><?php echo $admission->previous_school; ?></td>
														<tr>
														
														
														<tr>
															<td>Previous Standard</td>
															<td><?php echo $admission->previous_standard; ?></td>
														<tr>
														
														<tr>
															<td>Previous Percentage</td>
															<td><?php echo $admission->previous_percentage; ?></td>
														<tr>
														
														
														<tr>
															<td>By User</td>
															<td><?php echo $admission->usr_email; ?></td>
														<tr>
														
														<tr>
															<td>Submitted at</td>
															<td><?php echo $admission->submitted_at; ?></td>
														<tr>
														
														<tr>
															<td colspan="2" align=center>Applied for school <span class="label label-xlg label-primary arrowed arrowed-right"><?php echo $admission->school_name; ?></span> in standard <span class="label label-xlg label-success arrowed-in-right arrowed-in"><?php echo $admission->applied_standard; ?></span></td>
														<tr>
																																										
													  </tbody>
													</table>
																					
												  
												</div>
												<div class="modal-footer">
													
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
											  
											</div>
										</div>
										
										<!-- Modal -->
										<div id="rejectModal<?php echo $admission->admission_form_id;?>" class="modal fade" role="dialog">
										  <div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h3 class="modal-title">Rejection Reason</h3>
											  </div>
											  <div class="modal-body">
												<h4 class="text-center">Why you want to reject - <b><?php echo $admission->fname; ?> <?php echo $admission->mname; ?> <?php echo $admission->lname; ?></b></h4>
												</br>
												<form method="post" action="<?php echo base_url('s_admin/reject')?>">
												  <input type="hidden" name="admission_form_id" value="<?php echo isset($admission->admission_form_id) ? $admission->admission_form_id : '' ?>">
												  <div class="form-group">
													<label for="email">Valid Reason:</label>
													<textarea class="form-control" rows="5" id="form_reject_reason" name="form_reject_reason" required></textarea>
												  </div>							  
												  <button type="submit" class="btn btn-danger">Reject</button>
												</form>
																			
											  </div>
											  <div class="modal-footer">							
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											  </div>
											</div>

										  </div>
										</div>
									
									
									<?php endforeach; ?>
									
									
									
								</div>
							</div>
						</div>
						

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
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>		
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
							<li class="active">Dashboard</li>
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
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Overview &amp; Stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">

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

								<?php }else{?>
									<div class="alert alert-warning">
											
											<strong>Attention!</strong>
											Your School is yet to be Registered.
											<br>
									</div>
								<?php } ?>	
									

										<div class="space-6"></div>

										

										<!--
										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent">21</span>
												</div>
											</div>
												
											<div class="infobox-data">
												<div class="infobox-content">Total</div>
												<div class="infobox-content">Admin</div>
											</div>
										</div>
										-->	
										
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										
									</div><!-- /.col -->
								</div><!-- /.row -->
								<div class="row">
									<div class="col-md-1">
									</div>
									<div class="col-md-11">
										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_admission[0]->cadmit; ?></span>
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Total</div>
												<div class="infobox-content">Admission</div>
											</div>
										</div>
										<div class="infobox infobox-orange infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_padmission[0]->cpadmit; ?></span>
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Pending</div>
												<div class="infobox-content">Admission</div>
											</div>
										</div>
										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_aadmission[0]->caadmit; ?></span>
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Approved</div>
												<div class="infobox-content">Admission</div>
											</div>
										</div>
										<div class="infobox infobox-red infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_radmission[0]->cradmit; ?></span>
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Rejected</div>
												<div class="infobox-content">Admission</div>
											</div>
										</div>
										<?php if($school_details!=null){ ?>
										<div class="infobox infobox-orange infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_admin[0]->cadmin; ?></span>
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Total</div>
												<div class="infobox-content">Admin</div>
											</div>
										</div>
										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_madmin[0]->cmadmin; ?></span>
												</div>
											</div>
												
											<div class="infobox-data">
												<div class="infobox-content">Major</div>
												<div class="infobox-content">Admin</div>
											</div>
										</div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="100" data-size="39">
													<span class="percent"><?php echo $count_sadmin[0]->csadmin; ?></span>
												</div>
											</div>
												
											<div class="infobox-data">
												<div class="infobox-content">Sub</div>
												<div class="infobox-content">Admin</div>
											</div>
										</div>
										<?php } ?>
									</div>
									
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php include 'footer.php';?>		
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Dashboard - Admin Panel</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url("admin_assets/css/bootstrap.css"); ?>" rel='stylesheet' type='text/css' /><!--You can use link tag too , refer documentation -->
        <script src="<?php echo base_url("admin_assets/js/jquery-3.1.1.js");?>"></script>
        <script src="<?php echo base_url("admin_assets/js/bootstrap.min.js");?>"></script>
		

<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<style>
	.list{
		margin-top:30px;
	}
</style>

</head>
<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('../assets/loading.gif') center no-repeat #fff;
}
</style>
<body>

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <b><a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">Admin Panel</a></b>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!--
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Add Activites <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Edit Activites</a></li>
        </ul> -->
        <!-- Getting username -->

        <ul class="nav navbar-nav navbar-right">
            <li><a href=""><span class="text text-default"><em><b>Welcome, <font color="#25ff00"><?php echo $admin_details[0]->a_name;?></font></b></em></span></a></li>
            <li><a href="<?= base_url('admin/logout') ?>">Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>
        
    <div class="container">
       <div class="row col-md-12">
            <ul class="nav nav-pills">
                <li class="active" ><a href="<?= base_url('admin/dashboard') ?>">Schools</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">School Admins<span class="caret"></span></a>                
                    <ul class="dropdown-menu">
                    <li><a href="<?= base_url('admin/add_school_admin') ?>">Add School Admin</a></li>
                    <li><a href="<?= base_url('admin/view_school_admin') ?>">View School Admin</a></li>
                    <li><a href="<?= base_url('admin/view_school_admin_full_list') ?>">School Admin Full List</a></li>
                    <li class="divider"></li>
                    <li><a href="#">More</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
		
	</div>
	
	<div class="container list">	
	<div class="se-pre-con"></div>
		<div class="row">
		
            <div class="col-md-12">
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
				<table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>School Id</th>
							<th>School Name</th>
							<th>City</th>
							<th>School Code</th>
							<th>Status</th>
							<th>Manage</th>
						</tr>
					</thead>
					<tbody>
							<?php 
								
							foreach ($schoollist as $school): ?>
							<tr class="gradeX">
							
								<td><?php echo $school->school_id; ?></td>
								<td><?php echo $school->school_name; ?></td>
								<td><?php echo $school->school_city; ?></td>
								<td ><?php echo $school->school_code; ?></td>
								<td title="<?php echo $school->register_reject_reason; ?>"><?php echo $school->register_status; ?></td>
								<td>
								
									<button type="button" class="btn label label-info" data-toggle="modal" data-target="#myModal<?php echo $school->school_id; ?>">View</button>
									<?php if(($school->register_status)!= "rejected"){ ?>
											<button type="button" class="btn label label-danger" data-toggle="modal" data-target="#rejectModal<?php echo $school->school_id;?>">Reject</button>
									<?php } ?>	
									<?php if(($school->register_status)!= "approved"){ ?>
									
											<button  type="button" class="btn label label-success" onclick="document.getElementById('approve').submit();" >Approve</button>
											<form style="display:inline-block;" id="approve" method="post" action="<?php echo base_url('admin/approve')?>">
											  <input type="hidden" name="school_id" value="<?php echo isset($school->school_id) ? $school->school_id : '' ?>">											  											  
											</form>
									<?php } ?>
									<?php if(($school->register_status)!= "pending"){ ?>																		
											<form style="display:inline-block;" method="post" action="<?php echo base_url('admin/pending')?>">
											  <input type="hidden" name="school_id" value="<?php echo isset($school->school_id) ? $school->school_id : '' ?>">
											  <button  type="submit" class="btn label label-warn">Pending</button>
											</form>
									<?php } ?>
								</td>
							</tr>
								
							<?php endforeach; ?>
					</tbody>
				</table>
				<?php  
			
				foreach ($schoollist as $school): ?>
				
				<div class="modal fade" id="myModal<?php echo $school->school_id;?>" role="dialog">
				
					<div class="modal-dialog modal-lg ">
					
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h3 class="modal-title">Registered School Details</h3>
						</div>
						<div class="modal-body">
							
							
									
									
										<h4></h4>

												<table class="table table-hover">
												  <thead>
													<tr>
													  <th colspan="2" style="text-align:center;"><?= $school->school_name; ?></th>														  
													</tr>
												  </thead>
												  <tbody>
													<tr>
														<td>School Code</td>
														<td><span class="label label-lg label-success "><?= $school->school_code; ?></span></td>
													</tr>
													<tr>
														<td>School Type</td>
														<td><span class="label label-lg label-default "><?= $school->school_type; ?></span></td>
													</tr>
													<tr>
														<td>School Medium</td>
														<td><span class="label label-lg label-warning "><?= $school->school_medium; ?></span></td>
													</tr>
													<tr>
														<td>School Branch No.</td>
														<td><span class="badge"><?= $school->school_branchno; ?></span></td>
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
									
							
						
											<legend>Registered School Information</legend>
									

										
												<?= $school->school_info; ?>
														
																										
									
						  
						</div>
						<div class="modal-footer">
							
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				</div>
				
				<!-- Modal -->
					<div id="rejectModal<?php echo $school->school_id;?>" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title">Rejection Reason</h3>
						  </div>
						  <div class="modal-body">
							<h4 class="text-center">Why you want to reject - <b><?= $school->school_name; ?></b></h4>
							</br>
							<form method="post" action="<?php echo base_url('admin/reject')?>">
							  <input type="hidden" name="school_id" value="<?php echo isset($school->school_id) ? $school->school_id : '' ?>">
							  <div class="form-group">
								<label for="email">Valid Reason:</label>
								<textarea class="form-control" rows="5" id="register_reject_reason" name="register_reject_reason" required></textarea>
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
</body>

</html>
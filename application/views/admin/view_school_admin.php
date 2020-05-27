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
                <li  ><a href="<?= base_url('admin/dashboard') ?>">Schools</a></li>
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">School Admins<span class="caret"></span></a>                
                    <ul class="dropdown-menu">
                    <li><a href="<?= base_url('admin/add_school_admin') ?>">Add School Admin</a></li>
                    <li class="active"><a href="<?= base_url('admin/view_school_admin') ?>">View School Admin</a></li>
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
               <legend>Admins with Registered School</legend>
				<table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>School Admin Id</th>
							<th>School Admin Name</th>
							<th>School Admin Email</th>
							<th>School Name</th>
							<th>School Admin Status</th>							
						</tr>
					</thead>
					<tbody>
							<?php 
								
							foreach ($school_admin_list as $admin): ?>
							<tr class="gradeX">
							
								<td><?php echo $admin->sa_id; ?></td>
								<td><?php echo $admin->sa_name; ?></td>
								<td ><?php echo $admin->sa_email; ?></td>
								<td ><?php echo $admin->school_name; ?></td>	
								<td>
									<?php if(($admin->major) >0)
											{ 
												echo "Major";
											}else
											{
												echo "Sub Admin";
											}?>

								</td>							
							</tr>
								
							<?php endforeach; ?>
					</tbody>
				</table>
				
            </div> 
        </div>

		

    </div>
</body>

</html>
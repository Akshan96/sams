<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>Profile – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>



<div id="content">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-9 col-md-offset-2 page-content">
<div class="inner-box">
<div class="usearadmin">
<h3><a href="#"><img style= "height: 75px; width: 75px" class="userimg" src="<?php echo base_url("assets/img/user2.png"); ?>" alt=""> <?php echo $usr_details[0]->usr_fname;?> <?php echo $usr_details[0]->usr_lname;?></a></h3>
</div>
</div>

<!-- Flash Data profile Error-->
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
<div class="inner-box">
<div class="welcome-msg">
<h3 class="page-sub-header2 no-padding">Hello, <?php echo $usr_details[0]->usr_fname;?> </h3>
<!-- <span class="page-sub-header-sub small">You last logged in at: 03-01-2017 10:30 AM [US time (GMT + 6:00hrs)]</span> -->
</div>
<div id="accordion" class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> Admission Activity </a> </h4>
</div>
<div class="panel-collapse collapse in" id="collapseB1">
<div class="panel-body">
<!-- Applied for which school and Admission activity -->
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Application ID</th>
        <th>Student Name</th>
        <th>School Name</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <?php foreach ($u_admission_list as $u_admission){ ?>
    <tbody>
      <tr>
        <td><?php echo $u_admission->admission_form_id; ?></td>
        <td><?php echo $u_admission->fname." ".$u_admission->lname ; ?></td>
        <td><?php echo $u_admission->school_name; ?></td>
        <?php if( $u_admission->form_status == "approved"){?>
        	 <td><b><?php echo $u_admission->form_status; ?></b></td>
        <?php } ?>
        <?php if( $u_admission->form_status == "pending"){?>
        	 <td><i><?php echo $u_admission->form_status; ?></i></td>
        <?php } ?>
        <?php if( $u_admission->form_status == "rejected"){?>
        	 <td><strike><?php echo $u_admission->form_status; ?></strike></td>
        <?php } ?>
       
        <td><a href="<?php echo base_url("user/std_admission_form?admission=".$u_admission->admission_form_id);?>" target="_blank"><i class="icon-printer"></i></a></td>
      </tr>
    </tbody>
    <?php  } ?>
</table>	

</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB3" data-toggle="collapse"> My Details </a> </h4>
</div>
<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB3">
<div class="panel-body">
<div class="form-group">
<div class="col-sm-12">
<?php foreach ($usr_details as $user){ ?>	
<form data-toggle="validator" role="form" method="post" action="<?php echo base_url('user/restore_profile')?>">
	<div class="form-group">
		<label class="control-label">First Name</label>
		<input class="form-control" name="usr_fname" id="usr_fname" value="<?php echo $user->usr_fname; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>
	<div class="form-group">
		<label class="control-label">Last name</label>
		<input class="form-control" name="usr_lname" id="usr_lname" value="<?php echo $user->usr_lname; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>
	<div class="form-group">
		<label class="control-label">Email</label>
		<input class="form-control" name="usr_email" id="usr_email" value="<?php echo $user->usr_email; ?>" type="email" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>

	<div class="form-group">
		<label for="Phone" class="control-label">Mobile</label>
		<input class="form-control" name="usr_mobile" id="usr_mobile" value="<?php echo $user->usr_mobile; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>

	<div class="form-group">
		<label class="control-label">Address</label>
		<input class="form-control" name="usr_address" id="usr_address" value="<?php echo $user->usr_address; ?>" type="textarea" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>

	<div class="form-group">
		<label class="control-label">City</label>
		<input class="form-control" name="usr_city" id="usr_city" value="<?php echo $user->usr_city; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>

	<div class="form-group">
		<label class="control-label">State</label>
		<input class="form-control" name="usr_state" id="usr_state" value="<?php echo $user->usr_state; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
	</div>

	<div class="form-group">
		<label class="control-label">Pin Code</label>
		<input class="form-control" name="usr_pincode" id="usr_pincode" value="<?php echo $user->usr_pincode; ?>" type="text" required data-error="Required">
		<div class="help-block with-errors"></div>
		</div>
	<div class="form-group hide">
		<label class="control-label">Facebook account map</label>
		<div class="form-control"> <a class="link" href="fb.html">Jhone.doe</a>
		<a class=""> <i class="fa fa-minus-circle"></i></a>
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-common">Update</button>
	</div>
</form>
<?php  } ?>

</div>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB2" data-toggle="collapse"> Settings </a> </h4>
</div>
<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB2">
<div class="panel-body">
<form role="form">

<div class="form-group">
<label class="control-label">New Password</label>
<input class="form-control" placeholder="" type="password">
</div>
<div class="form-group">
<label class="control-label">Confirm Password</label>
<input class="form-control" placeholder="" type="password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-common">Update</button>
</div>
</form>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB4" data-toggle="collapse"> Preferences </a> </h4>
</div>
<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB4">
<div class="panel-body">
<div class="form-group">
<div class="col-sm-12">
<div class="checkbox">
<label><input type="checkbox">I want to receive newsletter. </label>
</div>
<div class="checkbox">
<label><input type="checkbox">Receive notification about Admission Updates. </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'footer.php';?>
</body>
<?php include 'footer_files.php';?>		
</html>
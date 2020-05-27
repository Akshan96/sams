<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>Login – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>


<section id="content">
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
	<!-- Flash Data Login Error-->
<?php if( $feedback = $this->session->flashdata('msg')):
		$feedback_class = $this->session->flashdata('feedback_class');?>
<div class="row">
	<div class="">
		<div class="alert alert-dismissible <?= $feedback_class ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong><?= $feedback?></strong> 
		</div>
	</div>
</div>
<?php endif; ?>	
<div class="page-login-form box">

<h3>
Login
</h3>

<!-- <form role="form" class="login-form"> -->
<?php $attributes = array("class" => "login-form"); echo form_open("user/login_auth", $attributes);?>
	<div class="form-group">
		<div class="input-icon">
		<i class="icon-user"></i>
		<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email / Mobile">
		</div>
	</div>
	<div class="form-group">
		<div class="input-icon">
		<i class="icon-lock-open"></i>
		<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<input type="checkbox" name="rememberme" value="forever"> Remember me
	</div>
	<button class="btn btn-common log-btn">Submit</button>
<?php echo form_close(); ?>
<!--</form>-->

<ul class="form-links">
<li class="text-center"><a href="<?php echo base_url("user/register"); ?>">Don't have an account?</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer.php';?>
</body>
<?php include 'footer_files.php';?>		
</html>
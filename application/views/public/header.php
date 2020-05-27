<div class="header">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-6">

<ul class="contact-details">
<li>
<a href="#">
<i class="icon-location-pin">
</i>

<?php if ($this->session->userdata('uid')){ ?>
<?php
$id = $this->session->userdata('uid');
$user_data = $this->Usermodel->show_usr_details($id);
echo $user_data[0]->usr_city. ', ' .$user_data[0]->usr_state;
?>
<?php	} ?>
 India
</a>
</li>
</ul>

</div>
<div class="col-md-5 col-sm-6">

<ul class="social-list">
<li>
<a href="#"><i class="fa fa-facebook"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-google-plus"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-linkedin"></i></a>
</li>
</ul>


<div class="account-setting">
<?php if ($this->session->userdata('login')){ ?>
<a href="<?php echo base_url("user/profile");?>">
<i class="icon-user"></i>
<span>Profile</span>
</a>/
<a href="<?php echo base_url("user/logout");?>">
<i class="icon-lock"></i>
<span>Logout</span>
</a>

<?php } else { ?>
<a href="<?php echo base_url("user/register");?>">
<i class="icon-pencil"></i>
<span>Register</span>
</a>/
<a href="<?php echo base_url("user/login");?>">
<i class="icon-lock"></i>
<span>Login</span>
</a>
<?php	} ?>
</div>

</div>
</div>
</div>
</div>


<div class="top-bar-bottom">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-6">
<div class="header-logo">
<a href="<?php echo base_url("user"); ?>"><img style="height:75px;" src="<?php echo base_url("assets/img/logo.png"); ?>" alt=""></a>
</div>
<!-- <div class="name-title">
Simplifying <br> Admissions
</div> -->
</div>
<div class="col-md-7 col-sm-6">
<div class="contact pull-right">

<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-default">
<div class="container">
<div class="row">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<i class="fa fa-bars"></i>
</button>
</div>
<div class="navbar-collapse collapse">


<ul class="nav navbar-nav">
<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="home"){echo 'class="active"';}}else{echo 'class="active"';}?> 
	href="<?php echo base_url('user')."?tab=home" ?>">
Home
</a>

</li>
<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="s_listing"){echo 'class="active"';}}?> 
	href="<?php echo base_url('user/school_listing')."?tab=s_listing" ?>">
School Listing
</a>

</li>

<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="news"){echo 'class="active"';}}?> 
	href="<?php echo base_url('user/newsfeed')."?tab=news" ?>">
News
</a>
</li>

<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="about"){echo 'class="active"';}}?> 
	href="<?php echo base_url('user/aboutus')."?tab=about" ?>">
About Us
</a>
</li>

</ul>

</div>
</div>
</div>


<ul class="wpb-mobile-menu">
<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="home"){echo 'class="active"';}}else{echo 'class="active"';}?> 
	href="<?php echo base_url('user')."?tab=home" ?>">
Home
</a>

</li>
<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="s_listing"){echo 'class="active"';}}?> 
	href="<?php echo base_url('user/school_listing')."?tab=s_listing" ?>">
Listing
</a>

</li>

<li>
<a <?php if(isset($_GET["tab"])){if($_GET["tab"]=="news"){echo 'class="active"';}}?> 
	href="<?php echo base_url('user/newsfeed')."?tab=news" ?>">
News
</a>
</li>


<!--
<li>
<a href="contact.html">
Contact Us
</a>
</li>
-->
</ul>

</nav>
</div>
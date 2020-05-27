
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>Search - School Admission System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="school admission system , school, admission, online admission, search school" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel='stylesheet' type='text/css' />
<!-- login model files-->
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> -->

<link rel="stylesheet" href="<?php echo base_url("assets/css/loginreset.css"); ?>"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/loginstyle.css"); ?>"> <!-- Gem style -->
<script src="<?php echo base_url("assets/js/modernizr.js"); ?>"></script> <!-- Modernizr -->
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url("assets/css/style.css"); ?>" rel='stylesheet' type='text/css' />	
<link href="<?php echo base_url("assets/css/mystyle.css"); ?>" rel='stylesheet' type='text/css' />	
<script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<style>
		#loginout{
			border: 0px;
		}
		#loginout:hover{
			background-color: #3599ae;
			border: 0px;
		}
		#searchbox {
			   width: 100%;
			color: #333333 ! important;
			outline: none;
			font-size: 16px;
			padding: .5em;
			border: 2px solid #333333;
			-webkit-appearance: none;
		}

		#searchbox:focus {
			width: 100%;
		}
		#result{
			 box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.55);
		}
		select{
			height: 40px;
			border: 2px solid #333333;
		}
	</style>
</head>
<body>
	<!--start-main-->
			<div class="header">
		        <div class="header-top row">
			        <div class="container">
					
						<div class="logo hidden-xs">
							<!-- <a href="index.html"><h1>School Admission System</h1></a> -->
							<a href="index"><img class="img-responsive" src="<?php echo base_url("images/logo1.jpg"); ?>" alt=""></a>
						</div>
						<div class="logo visible-xs-block">
							<!-- <a href="index.html"><h1>School Admission System</h1></a> -->
							<a href="index"><img class="img-responsive" src="<?php echo base_url("images/logo.png"); ?>" alt=""></a>
						</div>
						
						
						<!-- <div class="search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</form>
						</div> -->
						<?php if ($this->session->userdata('login')){ ?>
						
							<div class="main-nav login btn-group">
							<a href="<?php echo base_url(); ?>user/logout"><ul type="button" id="loginout" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-out"></i> Logout </ul></a>
							</div>
						
						<?php } else { ?>

							<div class="main-nav login btn-group">
							<ul type="button" id="loginout" class="btn btn-success pull-right cd-signin"><i class="glyphicon glyphicon-log-in"></i>  Sign In / Sign Up</ul>
							
							</div>

						<?php	} ?>
						 
						<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
							<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
								<ul class="cd-switcher">
									<li><a href="#0">Sign In</a></li>
									<li><a href="#0">Sign Up</a></li>
								</ul>
								
								<div id="cd-login"> <!-- log in form -->
									<?php $attributes = array("name" => "loginform");
                					echo form_open("user/login", $attributes);?>
									<div class="cd-form" >
										<div class="form-group">
											<label class="image-replace cd-email" for="signin-email">E-Mail or Moblie No.</label>
											<input class="full-width has-padding has-border " id="signin-email" name="email" type="text" placeholder="E-mail or Mobile No.">
											<span class="cd-error-message">Enter Valid Mobile No. or E-mail!</span>
										</div>

										<div class="form-group">
											<label class="image-replace cd-password" for="signin-password">Password</label>
											<input class="full-width has-padding has-border" id="signin-password" type="password" name="password"  placeholder="Password">	
											<span class="cd-error-message">Enter Valid Password!</span>
										</div>

										<div class="form-group">
											<input type="checkbox" id="remember-me" checked>
											<label for="remember-me">Remember me</label>
										</div>

										<div class="form-group">
											<input class="full-width" type="submit" name="submit" value="Login">
										</div>
									</div>
									<?php echo form_close(); ?>
               						
									
									<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
									<!-- <a href="#0" class="cd-close-form">Close</a> -->
								</div> <!-- cd-login -->


								<div id="cd-signup"> <!-- sign up form -->
									<?php $attributes = array("name" => "signup");
                					echo form_open("user/signup", $attributes); ?>
									<div class="cd-form" >

									<div class="form-group">
											<label class="image-replace cd-email">E-mail</label>
											<input class="full-width has-padding has-border" name="email" id="signup-email" type="email" placeholder="E-mail">
											<span class="cd-error-message">Enter Valid E-Mail!</span>
										</div>
										
										<div class="form-group">
											<label class="image-replace cd-username" >Mobile Number</label>
											
											<input class="full-width has-padding has-border" name="mnumber"  id="signup-mobile" type="text" placeholder="Mobile Number">
											<span class="cd-error-message">Enter Valid Mobile No.!</span>
										</div>
		
										<div class="form-group">
											<label class="image-replace cd-password" for="signup-password">Password</label>
											<input class="full-width has-padding has-border" name="password" id="signup-password" type="password"  placeholder="Password">
											<span class="cd-error-message">Enter Valid Password</span>
										</div>
										
										<div class="form-group">
											<label class="image-replace cd-password" for="signup-repassword">Re-Type Password</label>
											<input class="full-width has-padding has-border" name="cpassword" id="signup-repassword" type="password"  placeholder="Re-Type Password">
											<span class="cd-error-message">Enter Valid Password</span>
										</div>

										<div class="form-group">
											<input type="checkbox" id="accept-terms">
											<label for="accept-terms">I agree to the <a href="#0">Terms & Conditions</a></label>
										</div>

										<p class="fieldset">
											<input class="full-width has-padding" type="submit" value="Create account">
										</div>
									</div>

									<?php echo form_close(); ?>
				
			
									<!-- <a href="#0" class="cd-close-form">Close</a> -->
								</div> <!-- cd-signup -->

								<div id="cd-reset-password"> <!-- reset password form -->
									<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

									<form class="cd-form">
										<p class="fieldset">
											<label class="image-replace cd-email" for="reset-email">E-mail</label>
											<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
											<span class="cd-error-message">Error message here!</span>
										</p>

										<p class="fieldset">
											<input class="full-width has-padding" type="submit" value="Reset password">
										</p>
									</form>

									<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
								</div> <!-- cd-reset-password -->
								<a href="#0" class="cd-close-form">Close</a>
							</div> <!-- cd-user-modal-container -->
						</div> <!-- cd-user-modal -->
						
						<div class="clearfix"></div>
					</div>
				</div>
			
<!--head-bottom-->
<!-- <div class="head-bottom">
      <div class="container">
        <!-- <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">e5ye5y</span>
            <span class="icon-bar">e5yaey</span>
            <span class="icon-bar">ey</span>
          </button>
        </div> -->
       <!-- <div id="navbar" class="navbar-collapse collapse navbar-center">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <!-- <li><a href="videos.html">Videos</a></li> -->
            
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tech.html">Action</a></li>
				 <li><a href="tech.html">Action</a></li>
				  <li><a href="tech.html">Action</a></li>
              </ul>
            </li -->
			<!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
             <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
				 <li><a href="#">Action</a></li>
				  <li><a href="#">Action</a></li>
              </ul>
            </li> -->
			 <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Science <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
				 <li><a href="#">Action</a></li>
				  <li><a href="#">Action</a></li>
              </ul>
            </li> -->
			  <!--  <li><a href="design.html">Design</a></li>
			    <li><a href="business.html">Business</a></li>
				 <li><a href="world.html">World</a></li> -->
				<!--  <li><a href="forum.html">Forum</a></li>-->
			<!-- 	   <li><a href="contact.html">Contact</a></li> -->
     <!--     </ul>
        </div><!--/.nav-collapse --><!--
      </div>
    </nav>
</div> -->
<!--head-bottom-->

<!-- banner -->
	<div class="row" style="margin:10px 0px;">
		<div class="container" style="background-color:#ffffff; box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.55);">
		
				<div class="row" style="padding:30px;">
						<form method="get" action="<?php echo base_url("user/search");?>">
						
						<div class="col-lg-2 " align="center" style="margin:5px 0px;">
									<label for="city" >City : </label>
									<select class="" id="city" name="city">
										<option value="">Select a city</option>
										<option value="Ahmedabad">Ahmedabad</option>
										<option value="Surat">Surat</option>
										<option value="Vadodara">Vadodara</option>
									</select>
							</div>
							<div class="col-lg-2" align="center" style="margin:5px 0px;">
									<label for="board" >Board : </label>
									<select class="" id="board" name="board">
										<option value="">Select Board</option>
										<option value="GSEB">GSEB</option>
										<option value="CBSE">CBSE</option>
										<option value="ICSE">ICSE</option>
									</select>
							</div>
						
						<div class="col-lg-6" align="center" style="margin:5px 0px;">
							<center><input id="searchbox" name="search" type="text" placeholder="Search for..." ></center><br/><br/>
						</div>
						<div class="col-lg-2" align="center" style="margin:5px 0px;">
							<center><input id="sb" class="btn btn-info" type="submit" name="submit" value="search" style="width:80%"/></center>
						</div>
						</form>
				</div>
		</div><!-- /input-group -->
	</div>

<!-- technology -->
	<div class="row">
	<div class="container" >
	
			<div class="col-md-1"></div>
			<div class="col-md-10" style="background-color:#fff; padding:30px 10px;" >
				<center><div class="row" align="center" style="font-size:30px;">School Profile</div>
				<div class="row" style="width:80%;"><hr/></div></center>
				
				<center>
				<?php if(!empty($results)){ ?>
					<!-- technology-top -->
					
					<div class="row" id="result" style="background-color:#fff; padding:30px; width:90%;">				
						<div class="row">
							<div class="col-lg-4"><img src="<?php echo base_url("assets/img/".$results[0]->school_id."scl.png"); ?>" style="width:250px;"/></div>
							
							<div class="col-lg-7" style="magin:10px">
								<div class="row" style="font-size:25px;"> <?php echo $results[0]->school_name; ?> </div><br/>
								<div class="row"><small><?php echo $results[0]->school_area; ?>,<?php echo $results[0]->school_city; ?></small></div><br/>
								<div class="row" style="font-size:15px;">
									<div class="table-responsive">
										<table class="table">
											<tr><td style="width:30%; font-size:18px;">Education Board :</td><td><?php echo $results[0]->school_type; ?></td></tr>
											<tr><td style="width:20%; font-size:18px;">Email :</td><td><?php echo $results[0]->school_email; ?></td></tr>
											<tr><td style="width:20%; font-size:18px;">Contact no. :</td><td><?php echo $results[0]->school_mobile; ?></td></tr>
											<tr><td style="width:20%; font-size:18px;">Address :</td><td><?php echo $results[0]->school_address; ?></td></tr>
											
										</table><hr/>
									</div>
								</div>
								
							</div>
						</div><br/><br/>
						
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10"><?php echo $results[0]->school_info; ?></div>
							<div class="col-md-1"></div>
						</div><hr/><br/>
						<div class="row" style="width:80%;">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									<div class="item active">
									  <img src="<?php echo base_url("assets/img/".$results[0]->school_id."/".$results[0]->school_id."1.jpg"); ?>" alt="Chania">
									</div>

									<div class="item">
									  <img src="<?php echo base_url("assets/img/".$results[0]->school_id."/".$results[0]->school_id."2.jpg"); ?>" alt="Chania">
									</div>

									<div class="item">
									  <img src="<?php echo base_url("assets/img/".$results[0]->school_id."/".$results[0]->school_id."3.jpg"); ?>" alt="Flower">
									</div>

									<div class="item">
									  <img src="<?php echo base_url("assets/img/".$results[0]->school_id."/".$results[0]->school_id."4.jpg"); ?>" alt="Flower">
									</div>
								  </div>

								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
							</div>
						
						</div>
					<br/><hr/><br/><a href="<?php echo base_url("user/admission?school=".$results[0]->school_id);?>"><div class="row" align="center"><input type="button" class="btn btn-info" value="Apply For Admission" onclick="" /></div></a>
					</div>
					<div class="clearfix"></div>
					<?php }?>
				</center>
					<!-- technology-top -->
			</div>
			<div class="col-md-1"></div>
		<!-- technology-right -->
		
			
		</div>
		<!-- technology-right -->
	</div>
	
<!-- technology -->
<!-- footer -->

	

<!-- login model -->	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script> <!-- Gem jQuery -->
</body>
</html>
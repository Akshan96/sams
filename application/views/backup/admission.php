
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
	
<!-- technology -->
	<br/><div class="row">
	<div class="container" >
	
			<div class="col-md-1"></div>
			<div class="col-md-10" style="background-color:#fff; padding:30px 10px;" >
				<center><div class="row" align="center" style="font-size:30px;">Admission</div>
				<div class="row" style="width:80%;"><hr/></div></center>
				
				<center>
				<?php if(!$submitadmission){ ?>
				<?php if($this->session->userdata('login')){ ?>
					<!-- technology-top -->
					
					<div class="row" id="result" style="background-color:#fff; padding:30px; width:90%;">
						<div class="row">	
							<div class="col-lg-4"><img src="<?php echo base_url("assets/img/".$results[0]->school_id."scl.png"); ?>" style="width:250px;"/></div>
							
							<div class="col-lg-7" style="magin:10px">
								<div class="row" style="font-size:25px;"> <?php echo $results[0]->school_name; ?> </div><br/>
								<div class="row"><small><?php echo $results[0]->school_area; ?>,<?php echo $results[0]->school_city; ?></small></div><br/>
							</div>
						</div><br/>
							<form method="post" action="<?php echo base_url("user/admission"); ?>">
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Student First Name:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="First Name"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Student Middle Name:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Middle Name"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Student Last Name:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Last Name"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Upload Passport Photo:</label></div>
										<div class="col-md-6" ><input type="file" class="form-control" id="name" placeholder="Upload your Photo"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Date Of Birth:</label></div>
										<div class="col-md-6" ><input type="date" class="form-control" id="name" placeholder=""/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Native Place:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Native Place"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Father's Name:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Father's Name"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Mother's Name:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Mother's Name"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Telephone:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Telephone"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Mobile No.:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="Mobile No."/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">Address:</label></div>
										<div class="col-md-6" ><textarea class = "form-control" rows = "3" placeholder="Address"></textarea></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">City:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="City"/></div>
										<div class="col-md-2"></div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3" align="center"><label for="name">State:</label></div>
										<div class="col-md-6" ><input type="text" class="form-control" id="name" placeholder="State"/></div>
										<div class="col-md-2"></div>
									</div>
								</div><br/>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3"></div>
										<div class="col-md-6" ><input type="submit" class="btn btn-info" id="submit" name="submit" value="submit" style="width:60%;"/></div>
										<div class="col-md-3"></div>
									</div>
								</div>
								
							</form>
					</div>
					<div class="clearfix"></div>
					<?php }else{?>
					<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8"><div class="alert alert-danger text-center">Oops! You will have to login to complete the admission process!</div></div>
					<div class="col-lg-2"></div>
					</div>
				<?php } }else{ ?>
					<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8"><div class="alert alert-success text-center">Your admission process has completed successfully.</div></div>
					<div class="col-lg-2"></div>
					</div>
				<?php } ?>
					
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
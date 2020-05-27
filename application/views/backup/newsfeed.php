<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>News Feed - School Admission System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- login model files-->
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> -->

<link rel="stylesheet" href="css/loginreset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/loginstyle.css"> <!-- Gem style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						
						<div class="logo hidden-xs">
							<!-- <a href="index.html"><h1>School Admission System</h1></a> -->
							<a href="index.html"><img class="img-responsive" src="images/logo1.jpg" alt=""></a>
						</div>
						<div class="logo visible-xs-block">
							<!-- <a href="index.html"><h1>School Admission System</h1></a> -->
							<a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
						</div>
						
						 <div class="main-nav login btn-group">
							<ul type="button" class="btn btn-success pull-right cd-signin"><i class="glyphicon glyphicon-log-in"></i>  Sign In / Sign Up</ul>
							
							<!--<button type="button" class="btn btn-success pull-right">Sign Up</button>-->
						 </div>
						<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
							<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
								<ul class="cd-switcher">
									<li><a href="#0">Sign In</a></li>
									<li><a href="#0">Sign Up</a></li>
								</ul>

								<div id="cd-login"> <!-- log in form -->
									<form class="cd-form">
										<p class="fieldset">
											<label class="image-replace cd-email" for="signin-email">E-Mail or Moblie No.</label>
											<input class="full-width has-padding has-border " id="signin-email" type="email" placeholder="E-Mail or Moblie No.">
											<span class="cd-error-message">E-Mail or Moblie No.!</span>
										</p>

										<p class="fieldset">
											<label class="image-replace cd-password" for="signin-password">Password</label>
											<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
											<a href="#0" class="hide-password">Hide</a>
											<span class="cd-error-message">Enter Valid Password!</span>
										</p>

										<p class="fieldset">
											<input type="checkbox" id="remember-me" checked>
											<label for="remember-me">Remember me</label>
										</p>

										<p class="fieldset">
											<input class="full-width" type="submit" value="Login">
										</p>
									</form>
									
									<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
									<!-- <a href="#0" class="cd-close-form">Close</a> -->
								</div> <!-- cd-login -->

								<div id="cd-signup"> <!-- sign up form -->
									<form class="cd-form">
										
										<p class="fieldset">
											<label class="image-replace cd-email" for="signup-email">E-mail</label>
											<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
											<span class="cd-error-message">Enter Valid E-Mail!</span>
										</p>
										
										<p class="fieldset">
											<label class="image-replace cd-username" for="signup-Mobile">Mobile Number</label>
											<input class="full-width has-padding has-border" id="signup-Mobile" type="text" placeholder="Mobile Number">
											<span class="cd-error-message">Enter Valid Mobile Number!</span>
										</p>

										

										<p class="fieldset">
											<label class="image-replace cd-password" for="signup-password">Password</label>
											<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
											<a href="#0" class="hide-password">Hide</a>
											<span class="cd-error-message">Enter Valid Password</span>
										</p>
										
										<p class="fieldset">
											<label class="image-replace cd-password" for="signup-repassword">Re-Type Password</label>
											<input class="full-width has-padding has-border" id="signup-repassword" type="text"  placeholder="Re-Type Password">
											<a href="#0" class="hide-password">Hide</a>
											<span class="cd-error-message">Enter Valid Password</span>
										</p>

										<p class="fieldset">
											<input type="checkbox" id="accept-terms">
											<label for="accept-terms">I agree to the <a href="#0">Terms & Conditions</a></label>
										</p>

										<p class="fieldset">
											<input class="full-width has-padding" type="submit" value="Create account">
										</p>
									</form>

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
<!--head-bottom-->
</div>	
<!-- banner -->
<!-- <div class="banner1">
	
</div> -->
<!-- technology -->
<!-- News FEED Types-->

<div class="technology-1">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 news-center">
			
				<div>
						<div class="btn-group btn-group-justified" role="group" aria-label="...">
							<div class="btn-group active" role="group">
								<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-globe"></i>  Top</button>
							</div>	
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-fire"></i>  Trending</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-flash"></i>  Fresh</button>
							</div>
						</div>
						<br>
				</div>	
				<div class="vide-1">
					<div class="rev">
						<div class="rev-img">
							<a href="singlepage.html"><img src="images/4.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="rev-info">
							<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
							<div class="blog-poast-info">
								<ul>
									<li><i class="glyphicon glyphicon-education"> </i><a class="admin" href="#"> School </a></li>
									<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
									<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="rev">
						<div class="rev-img">
							<a href="singlepage.html"><img src="images/3.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="rev-info">
							<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
							<div class="blog-poast-info">
								<ul>
									<li><i class="glyphicon glyphicon-education"> </i><a class="admin" href="#"> School </a></li>
									<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
									<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="rev">
						<div class="rev-img">
							<a href="singlepage.html"><img src="images/2.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="rev-info">
							<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
							<div class="blog-poast-info">
								<ul>
									<li><i class="glyphicon glyphicon-education"> </i><a class="admin" href="#"> School </a></li>
									<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
									<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="rev">
						<div class="rev-img">
							<a href="singlepage.html"><img src="images/5.jpg" class="img-responsive" alt=""></a>
						</div>
						<div class="rev-info">
							<h3><a href="singlepage.html">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.isicing </p>
							<div class="blog-poast-info">
								<ul>
									<li><i class="glyphicon glyphicon-education"> </i><a class="admin" href="#"> School </a></li>
									<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
									<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
							<div class="clearfix"></div> 
					
					<!-- <iframe src="https://player.vimeo.com/video/18624866?title=0&byline=0&portrait=0" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
						<iframe src="https://www.youtube.com/embed/1-xGerv5FOk" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<h3><a href="single.html"> Tempor incididunt ut labore et dolore magna aliqua</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="blog-poast-info">
								<ul>
									<li><i class="glyphicon glyphicon-education"> </i><a class="admin" href="#"> School </a></li>
									<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
									<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								</ul>
							</div>
				</div>
			</div>
		</div>		
	</div>
		
	
</div>
<!-- technology -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 footer-right">
				<h4>Quick Links</h4>
				<li><a href="#">Admission</a></li>
				<li><a href="#">News Feeds</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Search</a></li>
				<li><a href="#">Forum</a></li>
				<li><a href="#">FAQ's</a></li>
				
			</div>
			<div class="col-md-6 footer-right">
				<h4>Keep Connected</h4>
				<li><a href="#">About us</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Contact us</a></li>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								
							</ul>
						</div>
				

			</div>
			<div class="clearfix"></div>
			<hr class="style13">
			<center><em><p>Copyright © 2017. School Admission System Community. All rights reserved</p></em><center>
		</div>
	</div>
<!-- footer -->
<!-- footer-bottom -->
	<!-- <div class="foot-nav">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="videos.html">Videos</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="tech.html">Tech</a></li>
			<li><a href="singlepage.html">Culture</a></li>
			<li><a href="singlepage.html">Science</a></li>
			<li><a href="design.html">Design</a></li>
			<li><a href="business.html">Business</a></li>
			<li><a href="world.html">World</a></li>
			<li><a href="forum.html">Forum</a></li>
			<li><a href="contact.html">Contact</a></li>
			<div class="clearfix"></div>
		</ul>
		</div>
				</div> -->
<!-- footer-bottom -->
			<!-- <div class="copyright">
				<div class="container">
					<p>© 2017 School Admission System Community. All rights reserved</p>
				</div>
			</div> -->
	
<!-- login model -->	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>
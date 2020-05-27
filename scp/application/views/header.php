<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php if(isset($_GET["tab"])){ if($_GET["tab"]==""){ echo "Dashboard"; }else{ echo $_GET["tab"];}}else{ echo "Dashboard";}?> - SAS</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<!---->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/4.5.0/css/font-awesome.min.css"); ?>" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/fonts.googleapis.com.css"); ?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/ace.min.css"); ?>" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/chosen.min.css"); ?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url("assets/css/ace-part2.min.css"); ?>" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url("assets/css/ace-skins.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/css/ace-rtl.min.css"); ?>" />
				
		<script
		  src="https://code.jquery.com/jquery-3.2.1.js">
		</script>
		
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url("assets/css/ace-ie.min.css"); ?>" />
		<![endif]-->
		
		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url("assets/js/ace-extra.min.js"); ?>"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url("assets/js/html5shiv.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/respond.min.js"); ?>"></script>
		<![endif]-->
		<!-- ace scripts brought from footer-->
		
	</head>
	
	<?php 			
			function humanTiming ($time)
			{
				$time = time() - $time; // to get the time since that moment
				$time = ($time<1)? 1 : $time;
				$tokens = array (
					31536000 => 'year',
					2592000 => 'month',
					604800 => 'week',
					86400 => 'day',
					3600 => 'hour',
					60 => 'minute',
					1 => 'second'
				);
				foreach ($tokens as $unit => $text) {
					if ($time < $unit) continue;
					$numberOfUnits = floor($time / $unit);
					return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
				}
			}
	?>
	
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-book"></i>
							 School Adminission System
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-- Task commented -->
						<!--
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>
								

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>  -->
						
						
						
						<!-- Notifications allow -->
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									4 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										
										<?php foreach ($admission_list as $admission){ ?>
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-user"></i>
														A new Adminission Form Received - <?php echo $admission->fname ." ". $admission->lname; ?>
													</span>
													<span class="pull-right badge badge-success"><?php echo $admission->submitted_at; ?></span>
												</div>
											</a>
										</li>
										<?php  } ?>
										
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="<?php echo base_url('s_admin/admission_activity')."?tab=Admission Activity" ?>">
									
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<!-- Messages commented -->
						
						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												
												<span class="msg-body">
													<span class="msg-title">
														<span class="green">SAS[Sales]:</span>
														Your Page is currently under progress.
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												
												<span class="msg-body">
													<span class="msg-title">
														<span class="green">SAS[Sales]:</span>
														Thank You for agreeing to use your FIRST Free Page.
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												
												<span class="msg-body">
													<span class="msg-title">
														<span class="red">SAS[IMP]:</span>
														You can now change your Password. Security Reasons.
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">SAS[Support]:</span>
														Your Control Panel information has been already mailed.
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">SAS[Support]:</span>
														Welcome to SAS Control Panel
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li> 

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<img class="nav-user-photo" src="<?php if($s_admin_details[0]->sa_avatar > 0){echo base_url("uploads/avatars/".$s_admin_details[0]->sa_avatar);}else{echo base_url("assets/images/avatars/user.jpg");}?>" alt="Profile Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $s_admin_details[0]->sa_name;?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="<?= base_url('s_admin/profile')."?tab=Profile" ?>">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url("s_admin/logout"); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
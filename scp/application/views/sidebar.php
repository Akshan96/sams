<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
						<span class="user-info text-center label label-inverse" style="color:#fff; max-width: 300px !important">									
									<?php 
										$time = strtotime($s_admin_details[0]->last_active);
										echo 'Last Active '.humanTiming($time).' ago ';
									?>&nbsp;&nbsp;
						</span>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Dashboard"){echo 'class="active"';}}else{echo 'class="active"';}?>>
						<a href="<?php echo base_url('s_admin')."?tab=Dashboard" ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<!-- add Submenu here to make it open-->
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="School Details"){echo 'class="active"';}}?>
						
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Update School Details"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Register School"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Fee Structure"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Amenities"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Features"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Principal Details"){echo 'class="open"';}}?>
					>
						<a href="href="<?= "?tab=School Details" ?>"" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								School Details
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="School Details"){echo 'class="active"';}}?>
								
								<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Fee Structure"){echo 'class="open"';}}?>
								<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Amenities"){echo 'class="open"';}}?>
								<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Features"){echo 'class="open"';}}?>
								<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Principal Details"){echo 'class="open"';}}?>
							>
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-list"></i>
									<span class="menu-text"> More School Details </span>

									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Fee Structure"){echo 'class="active"';}}?>>
										<a href="<?= base_url('s_admin/fee_structure')."?tab=Fee Structure" ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Fee Structure
										</a>

										<b class="arrow"></b>
									</li>

									<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Amenities"){echo 'class="active"';}}?>>
										<a href="<?= base_url('s_admin/amenities')."?tab=Amenities" ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Amenities
										</a>

										<b class="arrow"></b>
									</li>
									<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Features"){echo 'class="active"';}}?>>
										<a href="<?= base_url('s_admin/featured')."?tab=Features" ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Features
										</a>

										<b class="arrow"></b>
									</li>

									<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Principal Details"){echo 'class="active"';}}?>>
										<a href="<?= base_url('s_admin/principal_details')."?tab=Principal Details" ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Principal Details
										</a>

										<b class="arrow"></b>
									</li>

								</ul>
							</li>
							
							<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Register School"){echo 'class="active"';}}?>>
								<a href="<?= base_url('s_admin/register_school')."?tab=Register School" ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Register School
								</a>

								<b class="arrow"></b>
							</li>
							<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Update School Details"){echo 'class="active"';}}?>>
								<a href="<?= base_url('s_admin/update_school_details')."?tab=Update School Details" ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Update School Details 
								</a>

								<b class="arrow"></b>
							</li>							
						</ul>
					</li>

					
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Admission Activity"){echo 'class="active"';}}?>>
						<a href="<?php echo base_url('s_admin/admission_activity')."?tab=Admission Activity" ?>">
							<i class="menu-icon fa fa-lightbulb-o"></i>
							<span class="menu-text"> Admission Activity </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php if($s_admin_details[0]->major >0 ){ ?>
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Sub Admin"){echo 'class="active"';}}?>>
						<a href="<?php echo base_url('s_admin/create_sub_admin')."?tab=Sub Admin" ?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Sub Admin </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php }?>
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="School Details"){echo 'class="active"';}}?>
						
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="School News"){echo 'class="open"';}}?>
						<?php if(isset($_GET["tab"])){if($_GET["tab"]=="Update School News"){echo 'class="open"';}}?>
					>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> School News </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="School News"){echo 'class="active"';}}?>>
								<a href="<?= base_url('s_admin/school_news')."?tab=School News" ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									School News/Articles
								</a>

								<b class="arrow"></b>
							</li>
							<!--
							<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Update School News"){echo 'class="active"';}}?>>
								<a href="<?= base_url('s_admin/update_school_news')."?tab=Update School News" ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Update School News/Articles
								</a>

								<b class="arrow"></b>
							</li>
						-->
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-tags"></i>
							<span class="menu-text"> Categories </span>
							<span class="badge badge-primary">5</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Page 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Page 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Page 3
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Page 4
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="">
									<i class="menu-icon fa fa-caret-right"></i>
									Page 5
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>

					
					<li <?php if(isset($_GET["tab"])){if($_GET["tab"]=="Gallery"){echo 'class="active"';}}?>>
						<a href="<?php echo base_url('s_admin/gallery')."?tab=Gallery" ?>">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Manage Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
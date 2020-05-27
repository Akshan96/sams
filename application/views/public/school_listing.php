<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>School Listing – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>




<div class="main-container section">
<div class="container">
<div class="row">


<div class="col-md-3 col-xs-12 widget-area-sidebar">
<div class="sidebar-inner">
<div class="widget-container">
<h3 class="title-sidebar">Advanced Search</h3>
<form method="get" action="<?php echo base_url("user/adv_search");?>">
<select class="selectpicker" id="board" name="board">
<option value="" style="display:none;">Education Board</option>
<option value="GSEB">GSEB</option>
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
</select>
<select class="selectpicker" id="medium" name="medium">
<option value="" style="display:none;">Medium</option>
<option value="English">English</option>
<option value="Gujarati">Gujarati</option>
<option value="Hindi">Hindi</option>
</select>

<select id="edu_level" name="edu_level" class="selectpicker">
<option value="" style="display:none;">Education Level</option>
<option value="Play Group">Play Group</option>
<option value="Pre-Primary">Pre-Primary</option>
<option value="Primary">Primary</option>
<option value="Secondary">Secondary</option>
<option value="Higher Secondary">Higher Secondary</option>
</select>
<select id="type" name="type" class="selectpicker">
<option value="" style="display:none;">Type of School</option>
<option value="Government">Government</option>
<option value="Granted">Granted</option>
<option value="Non-Granted">Non-Granted</option>
<option value="Private">Private</option>

</select>
<select id="fee_level" name="fee_level" class="selectpicker">
<option value="" style="display:none;">Fee Level</option>
<option value="Low">Low</option>
<option value="Medium">Medium</option>
<option value="High">High</option>
<option value="Expensive">Expensive</option>

</select>

<select id="state" name="state" class="selectpicker">
<option value="" style="display:none;">State</option>
<option value="Gujarat">Gujarat</option>
</select>
<select id="district" name="district" class="selectpicker">
<option value="" style="display:none;">District</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Surat">Surat</option>
<option value="Vadodara">Vadodara</option></select>

<select id="city" name="city" class="selectpicker">
<option value="" style="display:none;">City</option>	
<option value="Ahmedabad">Ahmedabad</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Surat">Surat</option>
<option value="Vadodara">Vadodara</option></select>
</select>
<select id="area" name="area" class="selectpicker">
<option value="" style="display:none;">Area</option>	
<option value="Naranpura">Naranpura</option>
<option value="Thaltej">Thaltej</option>
<option value="Drive">Drive-In</option>
<option value="Raisan">Raisan</option>
<option value="Jagatpur">Jagatpur</option>
<option value="Sama">Sama</option>
<option value="Usmanpura">Usmanpura</option>
</select>

<input style="border: 8px solid rgba(0,0,0,0.08);" class="form-control" id="searchbox" name="search" type="text" placeholder="Search for..." >
<br>
<input type="submit" name="submit" value="search" class="btn btn-common"/>
</form>
<!-- <button type="submit" class="btn btn-common btn-sh">Search Now</button> -->
</div>


<div class="widget widget-popular-posts">
<h3 class="widget-title">Featured News</h3>
<ul class="posts-list">
<?php  foreach ($feature_news_list as $school_news){  ?>
<li>
<div class="widget-thumb">
<a href="#"><img style= "height: 75px; width: 75px" src="<?php echo base_url("assets/img/logo-final-1.png"); ?>" alt="" /></a>
</div>
<div class="widget-content">


<a href="<?php echo base_url("user/school_detailed_news?s_news=".$school_news->school_news_id);?>" target="_blank"><?php echo $school_news->s_news_title; ?></a>
<span><?php echo $school_news->created_at; ?> <br><?php echo rand(0, 10); ?> Comments</span>
</div>
<div class="clearfix"></div>
</li>
<?php  } ?>
<li>

<div class="clearfix"></div>
</li>
</ul>
</div>

</div>
</div>
<div class="col-md-9 col-xs-12 page-content">

<div class="product-filter">
<div class="title-listing">
<h2>School Listing</h2>
</div>
<div class="Show-item">
<div class="grid-list-count">
<a class="grid switchToList" href="#"><i class="icon-grid"></i></a>
<a class="list switchToGrid active" href="#"><i class="icon-list"></i></a>
</div>
<span>Sort By:</span>
<form class="woocommerce-ordering" method="post">
<label>
<select class="selectpicker">
<option selected="selected" value="menu-order">Newest First</option>
<option>Lowest price first</option>
<option>Highest price first</option>
<option>Date added</option>
</select>
</label>
</form>
</div>
</div>


<div class="adds-wrapper">
<?php echo $this->session->flashdata('smsg'); ?>
<?php if(!empty($results)){ ?>

	<?php for($i=0;$i<count($results);$i++){?>	
		<div class="item-list">
		<div class="property-item table-list">
		<div class="table-cell">
		<figure style="text-align: center;" class="item-thumb">
		<a class="hover-effect" href="<?php echo base_url("user/school_details?school=".$results[$i]->school_id);?>">
		<img style="height:180px" src="<?php if($results[$i]->school_logo > 0){echo base_url("/assets/s_img/".$results[$i]->school_logo);}else{echo "Not yet uploaded logo.";}?>" alt="School Logo">
		</a>
		<div class="label-inner">
		<span class="label-status label">Addmision Open</span>
		</div>
		<!--
		<div class="price">
		<span class="item-price" style="color:red";>-</span>
		<span class="item-sub-price">Fees</span>
		</div>
		-->
		</figure>
		</div>
		 <div class="item-body table-cell">
		<h3 class="property-title"><a href="<?php echo base_url("user/school_details?school=".$results[$i]->school_id);?>"><?php echo $results[$i]->school_name; ?></a></h3>
		<div class="adderess"><i class="icon-location-pin"></i> <?php echo $results[$i]->school_area; ?>, <?php echo $results[$i]->school_city; ?></div>
		<div class="info">
		<p><b><span><?php echo $results[$i]->school_type; ?> </span></b></p>
		<p><b><span><?php echo $results[$i]->school_medium; ?></span></b></p>
		<p><span></span></p>
		<p><span><?php echo $results[$i]->school_mobile; ?> </span></p>
		</div>
		<!--
		<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">ais_admin</a></span>
		<span class="prop-date"><i class="icon-calendar"></i>1 months ago</span>
		-->
		</div>
		<div class="body-right table-cell hidden-gird-cell">
		<div class="info-row">
		<span class="item-price">₹<?php echo rand(5000, 20000); ?> to ₹<?php echo rand(15000, 40000); ?></span>
		</div>
		<div class="info-row button text-right">
		<a href="<?php echo base_url("user/school_details?school=".$results[$i]->school_id);?>" class="btn btn-common">Details</a>
		</div>
		</div>
		</div>
		</div>
	<?php }?>
	<?php }else{ ?>
			<?php echo $this->session->flashdata('msg'); ?>
	<?php } ?>

</div>


<div class="pagination-bar">
<ul class="pagination">
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a class="pagination-btn" href="#">Next »</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>

<?php include 'footer.php';?>
</body>
<?php include 'footer_files.php';?>		
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>School Details – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>



<div id="content">
<div class="container">

<div class="row">
<div class="property-head">
<div class="col-md-9 col-sm-9">
<h2 class="title-property">
<?php echo $school_details[0]->school_name; ?>
</h2>
<div class="adderess" style="padding-top:10px;"><i class="icon-location-pin"></i> 
	<?php echo $school_details[0]->school_area; ?>, <?php echo $school_details[0]->school_city; ?>, <?php echo $school_details[0]->school_district; ?>, <?php echo $school_details[0]->school_state; ?>
	<p><?php echo $school_details[0]->school_address; ?></p>
</div>
</div>


<div class="col-md-3 col-sm-4">
<div class="icon">
<a href="#"><i class="icon-printer"></i> Brouchure</a>
<a href="#"><i class="icon-star"></i> Favourite</a>
<a href="#"><i class="icon-share"></i> Share</a>
</div>
</div>
</div>

<div class="product-info">
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."1.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."2.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."3.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."4.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."2.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."1.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."4.jpg"); ?>" alt="School image">
</div>
<div class="item">
<img src="<?php echo base_url("assets/s_img/".$school_details[0]->school_id."/".$school_details[0]->school_id."3.jpg"); ?>" alt="School image">
</div>
</div>
</div>

<div class="alert alert-success">
  <strong>Admission Opened!</strong> Join our edu culture.
  <a href="<?php echo base_url("user/school_admission?school=".$school_details[0]->school_id);?>" class="btn btn-primary btn-block">Apply For Admission</a>
</div>


<div class="inner-box details">
<div class="property-dsc">
<h2 class="title-2">The <?php echo $school_details[0]->school_name; ?> Mission</h2>
<?php echo $school_details[0]->school_info; ?>

</div>
</div>
<div class="inner-box short-info">
<h2 class="title-2">Quick Description</h2>
<ul class="additional-details">
<li>
<strong>Education Board:</strong>
<span><?php echo $school_details[0]->school_type; ?></span>
</li>
<li>
<strong>Medium:</strong>
<span><?php echo $school_details[0]->school_medium; ?></span>
</li>
<li>
<strong>Timings</strong>
<span>7:15 to 11:45(Pre-Primary) & 7:00 to 1:00(Others)</span>
</li>
<li>
<strong>Education Level:</strong>
<span><?php  foreach ($school_fee_details as $school_fee){  ?> <?php echo $school_fee->education_level.","; ?>  <?php  } ?></span>
</li>
<?php  foreach ($school_fee_details as $school_fee){  ?>
<li>
<strong> <?php echo $school_fee->education_level; ?> Fee Structure:</strong>
<span>₹<?php echo $school_fee->fee_annum; ?> Approx</span>
</li>
<?php  } ?>

<li>
<strong>Website:</strong>
<span><a target = "_blank" href="http://<?php echo $school_details[0]->school_website; ?>"><?php echo $school_details[0]->school_website; ?></a></span>
</li>
<li>
<strong>Email ID:</strong>
<span><?php echo $school_details[0]->school_email; ?></span>
</li>
<li>
<strong>Contact No. :</strong>
<span><?php echo $school_details[0]->school_phone; ?></span>
</li>
<li>
<strong>Contact No. :</strong>
<span>2639-017-020</span>
</li>

</ul>
</div>
<div class="inner-box amenities">
<h2 class="title-2">General Amenities</h2>
<ul class="amenities-list">
	

<?php  foreach ($school_amenities_details as $amenities){  ?>
<li><i class="icon-check"></i> <?php echo $amenities->amenity_name; ?></li>
<?php  } ?>

<li><i class="icon-check"></i> Class Notes</li></span>
<!--
<li><i class="icon-check"></i> Sports Complex</li>
<li><i class="icon-check"></i> Swimming Pool</li>
<li><i class="icon-check"></i> Tennis Court</li>
<li><i class="icon-check"></i> Close to Station</li>
<li><i class="icon-check"></i> Eco Friendly</li>
<li><i class="icon-check"></i> Bus Service</li>
<li><i class="icon-check"></i> Pick Up and Drop</li>
<li><i class="icon-check"></i> Hostel Facility</li>
<li><i class="icon-check"></i> Lunch Facility</li>
<li><i class="icon-check"></i> Bus Service</li>
-->
</ul>
</div>
<div class="inner-box featured">
<div class="tabs-section">
<h2 class="title-2">Featured</h2>

<ul class="nav nav-tabs">

<?php  foreach ($school_features_details as $features){  ?>
<li><a href="#tab<?php echo $features->feature_id; ?>" data-toggle="tab"><?php echo $features->feature_name; ?></a></li>	
<?php  } ?>	
<!--
<li class="active"><a href="#tab-1" data-toggle="tab"> House Boards</a></li>
<li><a href="#tab-2" data-toggle="tab">Physical Sports</a></li>
<li><a href="#tab-3" data-toggle="tab">Day Boarding</a></li> -->
</ul>

<div class="tab-content">

<?php  foreach ($school_features_details as $features){ ?>
<div class="tab-pane" id="tab<?php echo $features->feature_id; ?>">
<p>
	<?php echo $features->feature_description; ?>
</p>
</div>
<?php  } ?>
</div>

<!--	
<div class="tab-pane in active" id="tab-1">
<p>There are four boards present which are Red, Blue, Green, Yellow. Each student will be assigned in any of this group. Different events and activities are held as inter-house board competitions.</p>
</div>
<div class="tab-pane" id="tab-2">
<p>Different sports are played, sports complex and facilities are available.
Games like Badminton
Taekwondo
Ten-Pin Bowling
Track & Field
Wushu are played.</p>
</div>

<div class="tab-pane" id="tab-3">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
-->


</div>
</div>
<div class="inner-box location-map">
<h2 class="title-2">Location On Map</h2>
<div id="google-map"></div>
</div>
<div class="inner-box contact-info">
<h2 class="title-2">Contact info</h2>
<div class="agent-media">
<div class="img-left">
<a href="#"><img src="<?php echo base_url("assets/img/productinfo/agent.jpg"); ?>" alt=""></a>
</div>
<div class="media-body">
<h4>Contact Person</h4>
<p><i class="icon-user"></i> <?php echo $school_details[0]->school_name; ?> Admin</p>
<p><i class="icon-phone"></i><?php echo $school_details[0]->school_mobile; ?></p>
<p>
<ul class="social-agent">
<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
<li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
<li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
<li><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
</ul>
</p>
</div>
</div>
<div class="detail-title-inner">
<h4 class="title-inner">Inquire about this school</h4>
</div>

<form id="contactForm" class="contact-form" data-toggle="validator">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<input type="text" class="form-control" id="msg_phone" name="phone" placeholder="Phone" required data-error="Please enter your Phone Number">
<div class="help-block with-errors"></div>
</div>
</div>
 <div class="col-md-4">
<div class="form-group">
<input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" placeholder="Massage" rows="10" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<button type="submit" id="submit" class="btn btn-common">Send Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>

<aside id="sidebar" class="col-md-3 col-sm-12 col-xs-12 right-sidebar">
<div class="widget property-agent">
<h3 class="widget-title">School Logo</h3>
<div class="agent-info">
<a href="#"><img style="height:180px" src="<?php if($school_details[0]->school_logo > 0){echo base_url("/assets/s_img/".$school_details[0]->school_logo);}else{echo "Not yet uploaded logo.";}?>" alt="School Logo"></a>
</div>
</div>
<?php $countp=0 ?>
<?php  foreach ($school_principal_details as $principal_detail){  $countp++ ?>
<div class="widget property-agent">
<h3 class="widget-title">Principal Details (<?php echo $countp ?>)</h3>
<div class="agent-info">
<!-- <a href="#"><img src="<?php echo base_url("assets/img/productinfo/agent.jpg"); ?>" alt=""></a>-->
<h4 class="agent-name"><?php echo $principal_detail->principal_full_name; ?></h4>
<ul class="contacts-list">
<!--<li class="office"><i class="icon-screen-smartphone"></i> </li>-->
<li class="mobile"><i class="icon-phone"></i><?php echo $principal_detail->contact_no; ?></li>
<li class="office"><i class="icon-envelope"></i> <a href="" class="__cf_email__" data-cfemail="9ffaf2fef6f3dfefedf0effaedebe6b1fcf0f2"><?php echo $principal_detail->email; ?></a></li>
</ul>
<p><?php echo $principal_detail->principal_of_edu_level; ?></p>
</div>
</div>
<?php  } ?>


<div class="widget widget-categories">
<h3 class="widget-title">Categories</h3>
<ul class="cat-list">
<li>
<a href="#">School Curriculum</a>
<!-- <span class="num-posts">15</span> -->
</li>
<li>
<a href="#">School Outcomes</a>

</li>
<li>
<a href="#">Special Programs</a>

</li>
<li>
<a href="#">School Events</a>

</li>

<li>
<a href="#">Subjects Offered</a>

</li>
<li>
<a href="#">Extra Activities</a>

</li>
<li>
<a href="#">History</a>

</li>
</ul>
</div>

<div class="widget widget-popular-posts">
<h3 class="widget-title">School News</h3>
<ul class="posts-list">
<?php if (empty($school_news_list)) { ?>
     <li>No News Found</li>
<?php } ?>	
<?php  foreach ($school_news_list as $school_news){  ?>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url("assets/img/logo-final-1.png"); ?>" alt="" /></a>
</div>
<div class="widget-content">


<a href="<?php echo base_url("user/school_detailed_news?s_news=".$school_news->school_news_id);?>" target="_blank"><?php echo $school_news->s_news_title; ?></a>
<span><?php echo $school_news->created_at; ?> <br><?php echo rand(0, 10); ?> Comments</span>
</div>
<div class="clearfix"></div>
</li>
<?php  } ?>
<?php if (empty($school_news_list)) { }else{?>
<li>
<div class="text-center">
<a href="<?php echo base_url("user/school_news?school=".$school_details[0]->school_id);?>" target="_blank" class="btn btn-common">Load More</a>
</div>
<div class="clearfix"></div>
</li>
<?php } ?>
</ul>
</div>



<div class="widget widget-social">
<h3 class="widget-title">Social Media</h3>
<div class="social-link">
<a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
<a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
<a class="google" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
<a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</aside>

</div>

</div>
</div>


</div>


<section class="latest-property">
<div class="container">
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
<h3 class="section-title">Similar Schools</h3>
<div id="latest-property" class="owl-carousel">

<?php if(!empty($school_near)){ ?>

	<?php for($i=0;$i<count($school_near);$i++){?>	
		<div class="item">
		<div class="property-main">
		<div class="property-wrap">
		<div class="property-item">
		<figure style="height:180px; text-align: center;" class="item-thumb">
		<a  class="hover-effect" href="<?php echo base_url("user/school_details?school=".$school_near[$i]->school_id);?>">
		<img style="height:180px" src="<?php if($school_near[$i]->school_logo > 0){echo base_url("/assets/s_img/".$school_near[$i]->school_logo);}else{echo "Not yet uploaded logo.";}?>" alt="School Logo">
		</a>
		<div class="label-inner">
		<span class="label-status label">Addmision Open</span>
		</div>
		<!--
		<div class="price">
		<span class="item-price">$556.885</span>
		<span class="item-sub-price">$3.500/sq ft</span>
		</div>
		-->
		<ul class="actions">
		<li>
		<span class="add-fav"><i class="icon-heart"></i></span>
		</li>
		</ul>
		</figure>
		<div class="item-body">
		<h3 class="property-title"><a href="<?php echo base_url("user/school_details?school=".$school_near[$i]->school_id);?>"><?php echo $school_near[$i]->school_name; ?></a></h3>
		<div class="adderess"><i class="icon-location-pin"></i> <?php echo $school_near[$i]->school_area; ?>, <?php echo $school_near[$i]->school_city; ?></div>
		<div class="info">
		<p><span><?php echo $school_near[$i]->school_type; ?></span></p>
		<p><b><span><?php echo $school_near[$i]->school_medium; ?></span></b></p>
		<p><span></span></p>
		<p><span><?php echo $school_near[$i]->school_mobile; ?> </span></p>
		</div>
		</div>
		</div>
		</div>
		<div class="item-foot date hide-on-list">
		<div class="pull-left">
		<p class="prop-user-agent"><i class="icon-user"></i> <a href="#">School Admin</a></p>
		</div>
		<div class="pull-right">
		<p class="prop-date"><i class="icon-calendar"></i>1 months ago</p>
		</div>
		</div>
		</div>
		</div>
	<?php }?>
<?php }else{ ?>
			<h4 class="text-danger">Complete your profile to see Schools near you.</h4>
<?php } ?>

</div>
</div>
</div>
</div>
</section>
<?php include 'footer.php';?>

<?php include 'footer_files.php';?>		
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>

<script type="text/javascript">
      var map;
      var defult = new google.maps.LatLng(23.034481, 72.513130,17.29);
      var mapCoordinates = new google.maps.LatLng(23.034481, 72.513130,17.29);
      var markers = [];
      var image = new google.maps.MarkerImage(
        '<?php echo base_url("assets/img/map-marker.png"); ?>',
        new google.maps.Size(84, 70),
        new google.maps.Point(0, 0),
        new google.maps.Point(60, 60)
      );
      function addMarker() {
        markers.push(new google.maps.Marker({
          position: defult,
          raiseOnDrag: false,
          icon: image,
          map: map,
          draggable: false
        }));
      }
      function initialize() {
        var mapOptions = {
          backgroundColor: "#ffffff",
          zoom: 15,
          disableDefaultUI: true,
          center: mapCoordinates,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [{
            "featureType": "landscape.natural",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }
                       ]
          }
                   , {
                     "featureType": "landscape.man_made",
                     "stylers": [{
                       "color": "#ffffff"
                     }
                                 , {
                                   "visibility": "off"
                                 }
                                ]
                   }
                   , {
                     "featureType": "water",
                     "stylers": [{
                       "color": "#80C8E5"
                     }
                                 , {
                                   "saturation": 0
                                 }
                                ]
                   }
                   , {
                     "featureType": "road.arterial",
                     "elementType": "geometry",
                     "stylers": [{
                       "color": "#999999"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text.stroke",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#333333"
                     }
                                ]
                   }

                   , {
                     "featureType": "road.local",
                     "stylers": [{
                       "color": "#dedede"
                     }
                                ]
                   }
                   , {
                     "featureType": "road.local",
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#666666"
                     }
                                ]
                   }
                   , {
                     "featureType": "transit.station.bus",
                     "stylers": [{
                       "saturation": -57
                     }
                                ]
                   }
                   , {
                     "featureType": "road.highway",
                     "elementType": "labels.icon",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "featureType": "poi",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }

                  ]

        }
            ;
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>    
</html>
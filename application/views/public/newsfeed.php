<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>News Feed – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>



<div id="content">
<div class="container">
<div class="row">

<div class="col-md-9">
<?php 	
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . ' ... ';
    echo $y;
  }
}
?>


<?php  foreach ($newsfeed as $school_news){  ?>
<div class="blog-post">

<div class="feature-inner">
<!-- <a class="lightbox" href="<?php echo base_url("assets/img/blog/blog1-large.jpg"); ?>"><img src="<?php echo base_url("assets/img/blog/blog1-large.jpg"); ?>" alt=""></a> -->
</div>


<div class="post-content">
<h3 class="post-title"><a href="<?php echo base_url("user/school_detailed_news?s_news=".$school_news->school_news_id);?>" target="_blank""><?php echo $school_news->s_news_title; ?></a></h3>
<div class="meta">
<span class="meta-part"><a href="#"><i class="icon-user"></i> <?php echo $school_news->sa_name ?></a></span>
<span class="meta-part"><a href="#"><i class="icon-bubbles  "></i> <?php echo rand(0, 10); ?></a></span>
<span class="meta-part"><a href="#"><i class="icon-calendar"></i> <?php echo $school_news->created_at; ?></a></span>
</div>
<?php 
	custom_echo($school_news->s_news_description, 500);
?>
</div>


<div class="share">
<div class="pull-left">
<a class="btn btn-common" href="<?php echo base_url("user/school_detailed_news?s_news=".$school_news->school_news_id);?>" target="_blank">Read More <i class="fa fa-angle-right"></i></a>
</div>
<div class="social-link pull-right">
<span>Share</span>
<a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
<a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
<a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus"></i></a>
<a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>

<?php  } ?>






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


<aside id="sidebar" class="col-md-3 right-sidebar">

<div class="widget widget-search">
<h5 class="widget-title">Search</h5>
<form action="#">
<input class="form-control" type="search" placeholder="Start Searching..." />
<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<div class="widget tag">
<h5 class="widget-title">Tags</h5>
<a href="#">technology</a>
<a href="#">admissions</a>
<a href="#">school features</a>
<a href="#">events</a>
<a href="#">competetion</a>
<a href="#">development</a>
<a href="#">admission</a>
</div>

<div class="widget widget-categories">
<h5 class="widget-title">News Categories</h5>
<ul class="cat-list">
<li>
<a href="#">Sport News</a>
<span class="num-posts">15</span>
</li>
<li>
<a href="#">Special Programs</a>
<span class="num-posts">25</span>
</li>
<li>
<a href="#">School Events</a>
<span class="num-posts">44</span>
</li>
<li>
<a href="#">Competition</a>
<span class="num-posts">12</span>
</li>
</ul>
</div>






</aside>

</div>
</div>
</div>

<?php include 'footer.php';?>
</body>
<?php include 'footer_files.php';?>		
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>School News – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>

<div id="content">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="blog-post single-post">

<div class="post-thumb">
<!-- <a href="#"><img src="assets/img/blog/img-1.jpg" alt=""></a> -->
<div class="hover-wrap">
</div>
</div>


<div class="post-content">
<h4 class="post-title"><a href="#"> <?php echo $s_news[0]->s_news_title; ?></a></h4>
<div class="meta">
<span class="meta-part"><a href="#"><i class="fa fa-user"></i> <?php echo $s_news[0]->sa_name; ?></a></span>
<span class="meta-part"><a href="#"><i class="fa fa-clock-o"></i> <?php echo $s_news[0]->created_at; ?></a></span>
<span class="meta-part"><a href="#"><i class="fa fa-comment"></i> Comments <?php echo rand(0, 10); ?></a></span>
</div>
<?php echo $s_news[0]->s_news_description; ?>


</div>

</div>


<div class="author">
<div class="author-img">
<!--<img src="assets/img/blog/author.jpg" alt="">-->
</div>
<div class="author-text">
<div class="author-title">
<h5>Posted by school :- <?php echo $s_news[0]->school_name; ?></h5>
<span></span>
</div>

</div>
</div>


<div id="comments">
<h3>Comments (3)</h3>
<ol class="comments-list">
<li>
<div class="media">
<div class="thumb-left">
<a href="#">
<!-- <img alt="" src="assets/img/blog/user1.jpg" /> -->
</a>
</div>
 <div class="info-body">
<div class="media-heading">
<h4 class="name">Larsen Mortin</h4>
<span class="comment-date">on 02-12-2017 /<a href="#">Replay</a></span>
</div>
<p>This is a comment 1 !!!</p>
</div>
</div>
<ul>
<li>
<div class="media">
<div class="thumb-left">
<a href="#">
<!-- <img alt="" src="assets/img/blog/user2.jpg" />  -->
</a>
</div>
<div class="info-body">
<div class="media-heading">
<h4 class="name">Hansom Rob</h4>
<span class="comment-date">on 20-3-2018 /<a href="#">Replay</a></span>
</div>
<p>This is a test comment 2 !!!</p>
</div>
</div>
</li>
</ul>
</li>
<li>
<div class="media">
<div class="thumb-left">
<a href="#">
<!-- <img alt="" src="assets/img/blog/user3.jpg" /> -->
</a>
</div>
<div class="info-body">
<div class="media-heading">
<h4 class="name">Sticky Fingerz</h4>
<span class="comment-date">on 20.12.2016 /<a href="#">Replay</a></span>
</div>
<p>This is a test comment 3 !!!</p>
</div>
</div>
</li>
</ol>

<div id="respond">
<h2 class="respond-title">Leave A Comment</h2>
<form action="#">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input id="author" class="form-control" name="author" type="text" value="" size="30" placeholder="Your Name here">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input id="email" class="form-control" name="author" type="text" value="" size="30" placeholder="Your Email">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" placeholder="Massage..."></textarea>
</div>
<button type="submit" id="submit" class="btn btn-common">Post Comment</button>
</div>
</div>
</form>
</div>

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

<div class="widget widget-popular-posts">
<h3 class="widget-title">Featured News</h3>
<ul class="posts-list">
<?php  foreach ($feature_news_list as $school_news){  ?>
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
<li>

<div class="clearfix"></div>
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
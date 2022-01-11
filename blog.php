<?php
require_once('config.php');
require_once('./functions.php');

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="format-detection" content="telephone=no">
      <title>Karawan Laboratory</title>
      <!-- Stylesheets -->
      <?php
		include('headerScript.php');
	  ?>
   </head>
   <body class="shop-page layout-medlab">
     <!-- header -->
	 <?php
	 include('header.php');
	 ?>
      <!--//header-->
      <div class="page-content">
      <!--section slider-->

      <?php
	include('quickLinksWrapper.php');
	  ?>
<!--//quick links-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.php">الرئيسية</a>
					<span>مقالات</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
<!--section-->
<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<h1>مقالات المدونة</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="blog-isotope">
				<?php
				 $per_page_record = 4;  // Number of entries to show in a page.   
				 // Look for a GET variable page if not found default is 1.        
				 if (isset($_GET["page"])) {    
					 $page  = $_GET["page"];    
				 }    
				 else {    
				   $page=1;    
				 }    
			 
				 $start_from = ($page-1) * $per_page_record;     
			$q=mysqli_query($connection,"SELECT *,
										MONTHNAME(create_date) AS month_name,
										DAY(create_date) AS day_number
										FROM blog_posts
										WHERE is_active =1
										ORDER BY create_date
										LIMIT $start_from, $per_page_record");

				while($post = mysqli_fetch_assoc($q)){
					echo '
					<div class="blog-post">
					<div class="post-image">
					
						<a href="blog/'.$post['slug'].'/'.$post['post_id'].'"><img src="'.$post['featured_photo'].'" alt=""></a>
					</div>
					<div class="blog-post-info">
						<div class="post-date">'.$post['day_number'].'<span>'.$post['month_name'].'</span></div>
						<div>
							<h2 class="post-title"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'">'.$post['title'].'</a></h2>
							<div class="post-meta">
								<div class="post-meta-social">
									<a href="#"><i class="icon-facebook-logo"></i></a>
									<a href="#"><i class="icon-twitter-logo"></i></a>
									<a href="#"><i class="icon-google-logo"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="post-teaser">'.substr($post['description'],0,350).' […]</div>
					<div class="mt-2"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'" class="btn btn-sm btn-hover-fill"><i class="icon-left-arrow"></i><span>اقرأ المزيد</span><i class="icon-left-arrow"></i></a></div>
				</div>
					';
				}

				?>
				
			</div>
			<div class="clearfix"></div>
			<ul class="pagination justify-content-center">

			<?php
$countQuery =mysqli_query($connection,"SELECT COUNT(*) from blog_posts WHERE is_active =1");
$result = mysqli_fetch_row($countQuery);     
$total_pages = ceil($result[0] / $per_page_record);     


for ($i=1; $i<=$total_pages; $i++) {   
	if ($i == $page) {   
		echo '
		<li class="page-item active"><a class="page-link" href="blog.php?page='.$i.'">'.$i.'</a></li>

		';
 
	}               
	else  {   
		
		echo '
		<li class="page-item"><a class="page-link" href="blog.php?page='.$i.'">'.$i.'</a></li>

		';
	}   
  };  

?>
				<!-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><span class="page-link">...</span></li>
				<li class="page-item"><a class="page-link" href="#">15</a></li> -->
			</ul>
		</div>
	</div>
</div>
<!--//section-->
<!--footer-->
<?php
include('footer.php');

?>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<!-- Vendors -->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
<script src="vendor/cookie/jquery.cookie.js"></script>
<script src="vendor/bootstrap-datetimepicker/moment.js"></script>
<script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/waypoints/sticky.min.js"></script>
<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendor/slick/slick.min.js"></script>
<script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
<script src="vendor/countTo/jquery.countTo.js"></script>
<script src="vendor/form-validation/jquery.form.js"></script>
<script src="vendor/form-validation/jquery.validate.min.js"></script>
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!-- Custom Scripts -->
<script src="js/app.js"></script><script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>

</html>
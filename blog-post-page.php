
<?php
require_once('config.php');
require_once('./functions.php');
if(isset($_GET['post'])){
	$post_id = $_GET['post'];
	$q=mysqli_query($connection,"SELECT `description`,
	MONTHNAME(create_date) AS month_name,
	DAY(create_date) AS day_number,
	YEAR(create_date) AS year_number,
	title,
	featured_photo
	FROM blog_posts
	WHERE post_id = $post_id");
			if(mysqli_num_rows($q)>0){
			$PostData = mysqli_fetch_row($q);	
			}else{
			echo 'Post Not Found';
			}
}else{
	echo "Post Not Found!";
	header( "refresh:1;url=index.php" );
}
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
					<span>مقال</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 aside">
					<div class="blog-post blog-post-single">
						<div class="blog-post-info">
							<div class="post-date"><?php echo $PostData[2];?><span><?php echo $PostData[1];?></span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html"><?php echo $PostData[4];?></a></h2>
								<div class="post-meta">
									<div class="post-meta-author"> <a href="#"><i></i></a></div>
									<div class="post-meta-social">
										<a href="<?php getLang(10);?>"><i class="icon-facebook-logo"></i></a>
										<a href="<?php getLang(19);?>"><i class="icon-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="post-image">
							<img src="<?php echo $PostData[5];?>" alt="">
						</div>
						<div class="post-text">

							<?php

	echo $PostData[0];
										?>
						</div>

					</div>

					<div class="clearfix mt-3 mt-lg-4"></div>

				</div>
				<div class="col-lg-3 aside-left mt-5 mt-lg-0">
					

					<div class="side-block" >
						<h3 class="side-block-title">اخر المنشورات</h3>
						
						<?php
					$q=mysqli_query($connection,"SELECT *,
					MONTHNAME(create_date) AS month_name,
					DAY(create_date) AS day_number,
					YEAR(create_date) AS year_number,
					MONTH(create_date) AS month_number
					FROM blog_posts
					WHERE is_active = 1
					ORDER BY create_date
						LIMIT 3");

					while($post = mysqli_fetch_assoc($q)){

switch ($post['month_number']) {
	case '1':
		$ar_month_name = 'يناير';
		break;
		case '2':
			$ar_month_name = 'فبرابر';
			break;
			case '3':
				$ar_month_name = 'مارس';
				break;
				case '4':
					$ar_month_name = 'ابريل';
					break;
					case '5':
						$ar_month_name = 'مايو';
						break;				
						case '6':
						$ar_month_name = 'يونيو';
						break;
					case '7':
					$ar_month_name = 'بوليو';
					break;
				case '8':
				$ar_month_name = 'اغسطس';
				break;
			case '9':
			$ar_month_name = 'سبتمبر';
			break;
		case '10':
		$ar_month_name = 'اكتوبر';
		break;
	case '11':
	$ar_month_name = 'نوفمر';
	break;
case '12':
$ar_month_name = 'ديسمبر';
break;
}
						echo '
						<div class="blog-post post-preview">
							<div class="post-image">
								<a href="blog/'.$post['slug'].'/'.$post['post_id'].'"><img src="'.$post['featured_photo'].'" alt=""></a>
							</div>
							<div>
								<h4 class="post-title"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'">'.substr($post['title'],0,100).'</a></h4>
								<div class="post-meta">
									<div class="post-meta-author text-nowrap"> <a href="blog/'.$post['slug'].'/'.$post['post_id'].'"></a></div>
									<div class="post-meta-date text-nowrap">'.$ar_month_name.' '.$post['day_number'].', '.$post['year_number'].' <i class="icon icon-clock3"></i></div>
								</div>
							</div>
						</div>
						';
					}
					?>
						
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<!--footer-->
<?php include('footer.php');
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
<!-- Custom Scripts -->
<script src="js/app.js"></script><script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>

</html>
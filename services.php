<?php
require_once('config.php');
require_once('./functions.php');
?>
<!DOCTYPE html>
<html lang="en">
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
					<span>الخدمات</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">What We Offer</div>
				<h1>Our Services</h1>
				<div class="h-decor"></div>
				<div class="text-center max-670 mt-4 mx-md-auto">
					<p>
						<?php 
						getLang(14);
						?>
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row col-equalH">
				<?php
					
			if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
				$q = mysqli_query($connection,"SELECT 
											ar_name,
											icon,
											photo,
											ar_description
											FROM services
											WHERE is_active =1
											ORDER BY display_order
												");
			}else{
				$q = mysqli_query($connection,"SELECT 
											en_name,
											icon,
											photo,
											en_description
											FROM services
											WHERE is_active =1
											ORDER BY display_order
												");

			}

			while($service = mysqli_fetch_array($q)){

				echo '
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href=""><img src="'.$service[2].'" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="">'.$service[0].'</a></h5>
						<div class="h-decor"></div>
						'.$service[3].'
					</div>
				</div>
				
				';
			}
				?>
				

			</div>
		</div>
	</div>
	<!--//section-->
</div>
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
<!-- Custom Scripts -->
<script src="js/app.js"></script><script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>

</html>
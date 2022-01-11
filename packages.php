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
     <!-- HEADER -->
	 <?php 
	 include('header.php');
	 ?>
      <!--//header-->
      <div class="page-content">
      <!--section slider-->
			<?php  include('quickLinksWrapper.php');
			?>
		<!--//quick links-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.php">الرئيسية</a>
					
					<span>باقات</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	
	<!--section special offers-->
	<div class="section" id="specialOffer">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">باقات مميزة</div>
				<h2 class="h1">لعملائنا</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row">

			<?php
				$q=mysqli_query($connection,"SELECT * 
											FROM packages
											WHERE is_active =1
												");
				while($package = mysqli_fetch_assoc($q)){
					echo'
				<div class="col-sm-6">
					<div class="special-card">
						<div class="special-card-photo">
							<img src="'.$package['photo'].'" alt="">
						</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">'.$package['ar_title'].'</div>
								<div class="special-card-txt2">'.$package['ar_sub_title'].'</div>
								<div class="special-card-txt3">'.$package['ar_body'].'
								</div>
							<div><a href="'.$package['button_link'].'" class="btn"><i class="icon-left-arrow"></i><span>'.$package['ar_button_value'].'</span><i class="icon-left-arrow"></i></a></div>
						</div>
					</div>
				</div>
					';

				}
			?>

				
			</div>
		</div>
	</div>
	<!--//section special offers-->
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
<script src="vendor/schedule/schedule.js"></script>
<!-- Custom Scripts -->
<script src="js/app.js"></script><script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>


</html>
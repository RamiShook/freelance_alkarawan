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
		<div class="contact-map">
			<iframe src="<?php getLang(20); ?>" allowfullscreen=""></iframe>		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-0 bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<div class="title-wrap">
						<h5>الموقع الجغرافي</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-placeholder2"></i> شارع الكندي,
							<br>بغداد,
							<br>العراق
						</li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>معلومات الاتصال</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-telephone"></i>الهاتف: <span class="theme-color" dir="ltr"><span class="text-nowrap"><a href="tel:07735576545">+964 773 557 6545</a>
								</span>
						
						</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@karawanlab.com</a></li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0" dir="rtl">
					<?php 
						getLang(17);
					?>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md col-lg-5">
					<div class="pr-0 pr-lg-8">
						<div class="title-wrap">
							<h2>ابق على تواصل معنا</h2>
							<div class="h-decor"></div>
						</div>
						<div class="mt-2 mt-lg-4">
							<p><?php getLang(16);?></p>
						</div>
						<div class="mt-2 mt-md-5"></div>
						<h5>ابق على اتصال</h5>
						<div class="content-social mt-15">
							<a href="<?php getLang(10);?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="<?php getLang(19);?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							<a href="https://wa.me/96179103686?text=Hello%20world" style="text-decoration: none;" target="_blank">
	 <img src="images/239px-Whats-App-svg.png" width="42px" height="42px"/>
</a>     
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--//section-->
</div>
<!--footer-->
<<?php include('footer.php'); ?>
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
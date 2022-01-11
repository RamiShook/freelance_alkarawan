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
   <body class="shop-page layout-medlab" >
    <!-- Header -->
	<?php include('header.php'); ?>
	<!-- End of Header -->
      <div class="page-content">
      <!--section slider-->
    <?php
	include('quickLinksWrapper.php');
	?>
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="loader-dna">
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
					<column>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
					</column>
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
				</div>
			</div>


			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}' >
			<?php
			if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
				// get the arabic banner data
				$q=mysqli_query($connection,"SELECT 
				banner_id,
				photo,
				ar_cta_link,
				ar_heading,
				ar_description,
				ar_button_lable
				FROM banner
				WHERE is_active =1
				ORDER BY display_order DESC");
			}else{
				$q=mysqli_query($connection,"SELECT 
				banner_id,
				photo,
				cta_link,
				heading,
				description,
				button_lable
				FROM banner
				WHERE is_active =1
				ORDER BY display_order");
			}
			while($banner = mysqli_fetch_array($q)){
				//1 photo link
				//2 ctalink
				//3 heading
				//4 description
				//5 button lable
				echo '
				<div class="slide">
				<!-- Banner Photo -->
				<div class="img--holder" data-bg="'.$banner[1].'"></div>
				<div class="slide-content center">
					<div class="vert-wrap container">
						<div class="vert">
							<div class="container">
								<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">
									<!-- banner heading -->
									'.$banner[3].'
								</div>
								<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">
									<!-- banner description -->
									'.$banner[4].'
								</div>
								<!-- cta_link -->
								<div class="slide-btn">
									<a href="'.$banner[2].'" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s">
										<i class="icon-left-arrow"></i>
										<span>
											<!-- button label -->
											'.$banner[5].'
										</span>
										<i class="icon-left-arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				';
			}
			?>
			
			
			
			</div>
		</div>
	</div>

	<!--//section slider-->
	<!--section departments-->
	<div class="section bg-bottom bg-right bg-norepeat bg-md-none bg-fixed section-bottom-padding section-top-padding" style="background-image: url(images/bg-bottom-right.png)">
		<div class="container" >
			<div class="row mt-lg-4">
				<div class="col-md-6 col-xl-6 pr-xl-7" > 
					<div class="department-tabs2">
						<div class="department-tab2">
							<div class="department-tab2-number">٢</div>
															<!-- Getting Lang -->
							<div class="department-tab2-text"><?php getLang(1) ?></div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">١</div>
							<div class="department-tab2-text"><?php getLang(2) ?></div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">٤</div>
							<div class="department-tab2-text"><?php getLang(3) ?></div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">٣</div>
							<div class="department-tab2-text"><?php getLang(4) ?></div>
							<div class="department-tab2-decor"></div>
						</div>
					</div>
					<div class="department-tabs2-bg"><img src="images/bg-department.png" alt=""></div>
				</div>
				<div class="col-md-6 col-xl-6">
				<div class="department-carousel2">
						<div class="department-item">
							<div class="h-sub theme-color"><?php getLang(5);?></div>
							<?php getLang(6);?>
							<?php getLang(7);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  departments-->
	<!--section-->
	<div class="section bg-grey mt-md-0" >
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="ابرز الخدمات"><span>ابرز <span class="clearfix d-sm-none"></span> الخدمات</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="nav nav-pills-icons js-nav-pills-carousel" role="tablist">
			<?php
			$q=mysqli_query($connection,"SELECT * FROM services
											ORDER BY display_order");
											$first=true;
				while($service = mysqli_fetch_assoc($q)){
					if ($first == true){
						echo '
						<a class="nav-link active" data-toggle="pill" href="#tab-'.$service['service_id'].'" role="tab"><i class="'.$service['icon'].'"></i><span>'.$service['ar_name'].'</span></a>
						';
						$first = false;
					}else {
						echo'
						<a class="nav-link" data-toggle="pill" href="#tab-'.$service['service_id'].'" role="tab"><i class="'.$service['icon'].'"></i><span>'.$service['ar_name'].'</span></a>
						';
				}
			}
			?>
			
			</div>
			<div id="tab-content" class="tab-content mt-2 mt-sm-4">

			<?php
			$q=mysqli_query($connection,"SELECT * FROM services
											ORDER BY display_order");
											$first=true;
				while($service = mysqli_fetch_assoc($q)){
					if ($first == true){
						echo '
						<div id="tab-'.$service['service_id'].'" class="tab-pane fade show active" role="tabpanel">
						<div class="tab-bg"><img src="images/content/bg-map.png" alt=""></div>
						<div class="row">
							<div class="col-md-6 h-100 mb-2 mb-md-0">
								<img src="'.$service['photo'].'" alt="" class="img-fluid">
							</div>
							<div class="col-md-6">
								<div class="pt-xl-1">
									<h3>'.$service['ar_name'].'</h3>
									'.$service['ar_description'].'
									<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-left-arrow"></i><span>اطلب الان</span><i class="icon-left-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
						';
						$first = false;
					}else {
						echo'
						<div id="tab-'.$service['service_id'].'" class="tab-pane fade" role="tabpanel">
						<div class="tab-bg"><img src="images/content/bg-map.png" alt=""></div>
						<div class="row">
							<div class="col-md-6 h-100 mb-2 mb-md-0">
								<img src="'.$service['photo'].'" alt="" class="img-fluid">
							</div>
							<div class="col-md-6">
								<div class="pt-xl-1">
									<h3>'.$service['ar_name'].'</h3>
									'.$service['ar_description'].'
									<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-left-arrow"></i><span>اطلب الان</span><i class="icon-left-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>


						';
				}
			}
			$first=true;
			?>

			<!-- service body and photo -->
			
			<!-- // service body and photo -->

			</div>
		</div>
	</div>
	<!--//section-->
	
	<!--section faq-->
	<div class="section mt-lg-large">
		<div class="row">
			<div class="col-lg-6">
				 <div class="container-shift-left mb-3 mb-md-4">
					<div class="title-wrap text-center text-lg-left">
						<h2 class="h1 double-title double-title--vcenter" data-title="FAQ"><span>Patient <span class="theme-color">Information</span></span></h2>
					</div>
				</div> 
				 <div class="image-shift-right">
					<img src="images/content/banner-left.jpg" alt="" class="w-md-100">
					<div class="over-image-card pos-right">
						<div class="over-image-card-icon"><i class="icon-card"></i></div>
						<div class="over-image-card-text">
							<h4>Pay Online</h4>
							<p>Online Payment for Patients. For your convenience MedLab now offers the ability to make a secure payment online.</p>
							<a href="form-payonline.html" class="btn btn-white btn-white--all"><i class="icon-left-arrow"></i><span>pay online</span><i class="icon-left-arrow"></i></a>
						</div>
					</div>
				</div> 
			</div>
			<div class="col-lg-6">
				<div class="faq-wrap-bg">
					<div class="faq-wrap faq-wrap--pad-md">
						<h2 class="h1 bg-title">Questions</h2>
						<div class="nav nav-pills nav-pills--noborder" role="tablist">
							<a class="nav-link active" data-toggle="pill" href="#tab-A1" role="tab"><i class="icon-labinstrument"></i>General</a>
							<a class="nav-link" data-toggle="pill" href="#tab-B1" role="tab"><i class="icon-billing"></i>Billing Questions</a>
							<a class="nav-link" href="#" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-question"></i>Ask Question</a>
						</div>
						<div id="tab-content-2" class="tab-content mt-2">
							<div id="tab-A1" class="tab-pane fade show active" role="tabpanel">
								<div id="faqAccordion1" class="faq-accordion faq-accordion--style2" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>How long does my eye exam take?</span></a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
												<p>A typical eye exam take 1-1.5 hours because we do a comprehensive, dilated eye exam. This includes: dilation, tonometry (a measurement of eye pressure), visual field test (a measurement of peripheral vision) and visual acuity test (a measurement of distance vision).</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>How affordable are your services?</span></a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Where can I find out more about specific conditions?</span></a>
										<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>Which consultants work in the general ophthalmology service?</span></a>
										<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="tab-B1" class="tab-pane fade" role="tabpanel">
								<div id="faqAccordion2" class="faq-accordion faq-accordion--style2" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem21" aria-expanded="true"><span>1.</span><span>How can I improve my oral hygiene?</span></a>
										<div id="faqItem21" class="collapse show faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem22" aria-expanded="false" class="collapsed"><span>2.</span><span>How do I know if my teeth are healthy?</span></a>
										<div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem23" aria-expanded="false" class="collapsed"><span>3.</span>Why are regular dental assessments so important?</a>
										<div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem24" aria-expanded="false" class="collapsed"><span>4.</span><span>How often 1 should I visit my dentist?</span></a>
										<div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>
													Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section faq-->

	
	<!--section prices-->
	<div class="section bg-norepeat bg-md-none section-top-padding" style="background-image: url(images/bg-top-left2.png)">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--center double-title--vcenter" data-title="باقات مخصصة"><span>باقات مخصصة</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="row justify-content-center prices-carousel js-prices-carousel mt-2">
				<div class="col-sm-6 col-md-4">
					<div class="prices-box prices-box--style2">
							<?php
							getLang(11);
							?>
							
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="prices-box prices-box--style2 prices-box--special">
					<?php
						getLang(12);
					?>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="prices-box prices-box--style2">
					<?php
						getLang(13);
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section prices-->
	<!--section news & achieved-->
	<div class="section">
		<div class="row no-gutters row-shift">
			<div class="col-lg-6 col-shift-right">
				<div class="container-shift-left">
					<div class="title-wrap">
						<h2 class="double-title double-title--white double-title--vcenter" data-title="مقالات"><span>مقالات</span></h2>
					</div>
					<div class="blog-post-sm-vertical">

								<?php
								$q=mysqli_query($connection,"SELECT *,
								MONTHNAME(create_date) AS month_name,
								DAY(create_date) AS day_number,
								YEAR(create_date) AS year_number,
								MONTH(create_date) AS month_number

								FROM blog_posts
								WHERE is_active = 1
								ORDER BY create_date
									LIMIT 4");

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
									<div class="blog-post-sm">
							<div class="blog-post-sm-photo"><img src="'.$post['featured_photo'].'" alt="" class="img-fluid"></div>
							<div class="blog-post-sm-text">
								<div class="blog-post-sm-date">'.$ar_month_name.' '.$post['day_number'].', '.$post['year_number'].'</div>
								<div class="blog-post-sm-title"><a href="blog-post-page.php?post='.$post['post_id'].'">'.substr($post['title'],0,100).'</a></div>
								<a href="blog-post-page.php?post='.$post['post_id'].'" class="blog-post-sm-readmore">...</a>
							</div>
						</div>
									';
								}
						?>
						

					</div>
				</div>
			</div>
			<div class="col-lg-6 col-shift-left mt-4 mt-md-5 mt-lg-2">
				<div class="container-shift-left">
					<div class="title-wrap text-center text-md-left">
						<h2 class="h1"><span class="theme-color">انجازاتنا</span></h2>
					</div>
				</div>
				<div class="mt-2 mt-md-3 mt-lg-4">
<?php
getLang(21);
?>
				</div>
			</div>
		</div>
	</div>
	<!--//section news & achieved-->

</div>
<!--footer-->
<?php include('footer.php'); ?>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Ask a Question</h3>
					<form class="mt-15" id="questionForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
							<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
						</div>
						<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Book an Appointment</h3>
					<form class="mt-15" id="bookingForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
									<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age"/>
								</div>
							</div>
						</div>
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
							<select name="bookingservice" class="form-control">
								<option selected="selected" disabled="disabled">Select Service</option>
								<option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
								<option value="Histology">Histology</option>
								<option value="General Diagnostic Tests">General Diagnostic Tests</option>
								<option value="Naturopathic">Naturopathic</option>
								<option value="Genetics Tests">Genetics Tests</option>
								<option value="Cytology">Cytology</option>
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
						<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
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
<script src="js/app.js"></script>
<script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>

</html>
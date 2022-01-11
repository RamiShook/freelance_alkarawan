<div class="footer mt-0" >
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1 pt-lg-3">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<div class="footer-logo">
							<img src="images/AlKarawanSpecialistLabColored.png" alt="" class="img-fluid" style="max-width:130px;max-height:120px;">
						</div>
						<div class="mt-2 mt-lg-0"></div>
						<div class="footer-social d-none d-md-block d-lg-none">
							<a href="<?php getLang(10);?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="<?php getLang(19);?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
					<div class="col-md">

						<div class="footer-social d-md-none d-lg-block">
						<a href="https://wa.me/96179103686?text=Hello%20world" style="text-decoration: none;" target="_blank">
	 <img src="images/239px-Whats-App-svg.png" width="37px" height="37px"/>
</a>     
							<a href="<?php getLang(10);?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="<?php getLang(19);?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>

						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>مقالات</h3>
				<div class="h-decor"></div>

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
			<div class="footer-post d-flex">
			<div class="footer-post-photo"><img src="'.$post['featured_photo'].'" alt="" class="img-fluid"></div>
			<div class="footer-post-text">
				<div class="footer-post-title"><a href="blog/'.$post['slug'].'/'.$post['post_id'].'">'.substr($post['title'],0,100).'</a></div>
				<p>'.$ar_month_name.' '.$post['day_number'].', '.$post['year_number'].'</p>
			</div>
		</div>
			';
		}
?>

			</div>
			<div class="col-sm-6 col-lg-4">
				<?php
				getLang(15);
				?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Copyright © 2021 <a href="#">AlKarawan</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="#">Privacy Policy</a></div>
				<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b><a href="tel:07735576545">+964 773 557 6545</a></b></div>
			</div>
		</div>
	</div>
</div>
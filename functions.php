<?php
function getLang($langId){
	global $connection;
	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
		$q=mysqli_query($connection,"SELECT ar_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}else{
		$q=mysqli_query($connection,"SELECT en_value
									 FROM lang
									 WHERE lang_id = '$langId'
									 AND is_active= 1 ");
	}

	if(mysqli_num_rows($q)>0){
		$langData = mysqli_fetch_row($q);		 
		echo $langData[0];
	}else{
		echo" ";
	}

	

}

function getArMonthName($monthNumber){
							
switch ($monthNumber) {
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
echo $ar_month_name;
}

// function getPageById($pageId,$Field){
// 	global $connection;
// 	if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){
// 		$q=mysqli_query($connection,"SELECT
// 									ar_name,
// 									ar_title,
// 									ar_description
// 									FROM pages
// 									WHERE page_id = '$pageId'
// 									AND is_active=1
// 						");
// 	}else{
// 		$q=mysqli_query($connection,"SELECT
// 									en_name,
// 									en_title,
// 									en_description
// 									FROM pages
// 									WHERE page_id = '$pageId'
// 									AND is_active=1
// 						");
// 	}
// 	if(mysqli_num_rows($q)>0){
// 		$pageData = mysqli_fetch_row($q);		 

// 		switch($Field){
// 			case "name":
// 				echo $pageData[0];
// 				break;
// 			case "title":
// 				echo $pageData[1];
// 				break;
// 			case "description":
// 				echo $pageData[2];
// 				break;
// 			}
// 		}else{ // if page is unactive or not found in database 
// 		echo" ";
// 	}
// }

?>
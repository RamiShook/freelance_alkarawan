<base href="/Karawan-Task/" />
<?php
//  base href added for case when htaccess redirect to /blog/.... or any subfolders
//       that make the stylesheet and scripts is always getting from the base 
//        NEED TO BE CHANGED AFTER UPLOAD ON THE SERVER
      ?>
<link href="vendor/slick/slick.css" rel="stylesheet">
      <link href="vendor/animate/animate.min.css" rel="stylesheet">
      <link href="icons/style.css" rel="stylesheet">
	  <?php
				if(isset($_SESSION['language']) && $_SESSION['language'] == "ar"){
					echo '	<link href="css/style-ar.css" rel="stylesheet">';
				}else{
					echo '	<link href="css/style.css" rel="stylesheet">';
				}
			?>
      <link href="color/color.css" rel="stylesheet">
      <!--Favicon-->
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
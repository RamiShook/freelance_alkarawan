<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

<header class="header" >
         <div class="header-quickLinks js-header-quickLinks d-lg-none">
            <div class="quickLinks-top js-quickLinks-top"></div>
            <div class="js-quickLinks-wrap-m">
            </div>
         </div>
         <div class="header-topline d-none d-lg-flex">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-auto d-flex align-items-center">
                     <!-- Header Contact info -->
                        <?php getLang(9); ?>
                     <!-- // Header contact info -->
                  </div>
                  <div class="col-auto ml-auto d-flex align-items-center">
                   <!-- Header social media links -->
                   <span class="header-social">
                     <a href="<?php getLang(10);?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="<?php getLang(19);?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </span>
              
                   
                   <!-- // header social media links -->
                  </div>
               </div>
            </div>
         </div>
         <div class="header-content">
            <div class="container">
               <div class="row align-items-lg-center">
                  <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                  <span class="icon-menu"></span>
                  </button>
                  <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                     <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Karawan-Task/'?>" class="header-logo"><img src="images/AlKarawanSpecialistLabColored.png" alt="" class="img-fluid"></a>
                  </div>
                  <div class="col-lg ml-auto header-nav-wrap">
                     <div class="header-nav js-header-nav">
                        <nav class="navbar navbar-expand-lg btco-hover-menu">
                           <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                              <ul class="navbar-nav">

                              <?php
    if(isset($_SESSION['language']) && $_SESSION['language']=="ar"){

                                 $q=mysqli_query($connection,"SELECT
                                                            ar_name,
                                                            ar_slug,
                                                            ar_title
                                                            FROM pages
                                                            WHERE is_active = 1
                                                            ORDER BY display_order
                                                            ");
    }else{
                                 $q=mysqli_query($connection,"SELECT
                                                            en_name,
                                                            en_slug,
                                                            en_title
                                                            FROM pages
                                                            WHERE is_active = 1
                                                            ORDER BY display_order
                                                            ");
    }
         while($page = mysqli_fetch_array($q)){
            echo'
            <li class="nav-item">
            <a class="nav-link" href="'.$page[1].'">'.$page[2].'</a>
         </li>
            ';
         }
                                 
                              ?>
                                 
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="header-search">
                     <a href="https://wa.me/96179103686?text=Hello%20world"  target="_blank">
	 <img src="images/239px-Whats-App-svg.png" width="42px" height="42px"/>
</a>                     </div>



</a>

                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--//header-->
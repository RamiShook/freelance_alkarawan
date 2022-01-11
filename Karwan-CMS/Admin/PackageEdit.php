<?php
require_once('./config.php');
require('./AdminAuthCheck.php');

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Package Edit</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <style>
       td textarea {
   resize:vertical;
   columns: 80;
}
   </style>
   <!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php
        require('header.php');
   ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
         <?php
         include('menu.php');
            ?>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Package Edit
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">CMS </a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Package Edit
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php
            $package_id =mysqli_real_escape_string($connection,  $_GET['package_id']);
            
            $q=mysqli_query($connection,"SELECT * FROM packages WHERE package_id = '$package_id'");
            if(mysqli_num_rows($q)>0){
                $package = mysqli_fetch_row($q);		 
                
            }else{
                echo'<div style="color:red;" align="center"> <h1>package Not Found</h1></div>';
                exit;
            }
        
            ?>


<form class="form-vertical" method="get" action="#" id="package_form">
<div align="center" id ="result"></div>
    <table style="width:100%; height=100%" border="1">
<tr>
    <td colspan=2>
    <div class="control-group">
                                    <label class="control-label">Display Order</label>
                                    <div class="controls">
                                        <input type="number" placeholder=".input-mini" class="input-mini"
                                                value="<?php echo $package[12];?>"
                                                name="display_order"
                                                id="display_order">
                                        <span class="help-inline">(Display Order Must Be Unique, if you put an order that already exist than system will automatically set after the last one)</span>
                                    </div>
                                </div>

    </td>
</tr>
<tr >
    <td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label" >Package Title</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-xlarge" rows="3"   style="width:100%"
                                                        placeholder="En Package Title" 
                                                        name="en_package_title"
                                                        id="en_package_title"><?php echo $package[2];?></textarea>
                                            </div>
                                       </div>
                                    </div>
    </td>
    <td>
                                    <div class="span6">
                                        <div class="control-group">
                                                <label class="control-label" > Ar Package Title</label>
                                            <div class="controls controls-row" >
                                                        <textarea  class="input-xlarge" rows="3" style="width:100%"
                                                         placeholder="En Package Title"
                                                         name="ar_package_title"
                                                         id="ar_package_title"><?php echo $package[7];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        </div>

                                       
            </div>
    </td>
</tr>
<tr>
        <td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">En Sub Title</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-block-level" rows="3" 
                                                        placeholder="En Sub Title"
                                                        name="en_sub_title"
                                                        id="en_sub_title"><?php echo $package[3];?></textarea>
                                            </div>
                                       </div>
                                    </div>
        </td>
        <td>
                                    <div class="span6">
                                        <div class="control-group" >
                                                <label class="control-label" > Ar Sub Title</label>
                                            <div class="controls controls-row" >
                                                        <textarea class="input-block-level" rows="3"
                                                         placeholder="Ar Sub Title"
                                                         name="ar_sub_title"
                                                         id="ar_sub_title"><?php echo $package[8];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        </div>


             </div>
        </td>
</tr>
<tr>
        <td>
            <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">En Body</label>
                                            <div class="controls controls-row">
                                                        <textarea class="input-block-level" rows="3" 
                                                        placeholder="En Body"
                                                        name="en_body"
                                                        id="en_body"><?php echo $package[4];?></textarea>
                                            </div>
                                       </div>
                                    </div>
        </td>
        <td>
                                    <div class="span6">
                                        <div class="control-group" >
                                                <label class="control-label" > Ar Body</label>
                                            <div class="controls controls-row" >
                                                        <textarea class="input-block-level" rows="3"
                                                         placeholder="Ar Body"
                                                         name="ar_body"
                                                         id="ar_body"><?php echo $package[9];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        </div>


             </div>
        </td>
</tr>





<tr>
        <td>
        <div class="control-group">
                                    <label class="control-label">Button Value</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-large" class="input-large"
                                                value="<?php echo $package[5];?>"
                                                name="button_value"
                                                id="button_value">
                                        
                                    </div>
                                </div>
        </td>
        <td>
        <div class="control-group">
                                    <label class="control-label">AR Button Value</label>
                                    <div class="controls">
                                        <input type="text" placeholder=".input-large" class="input-large"
                                                value="<?php echo $package[10];?>"
                                                name="ar_button_value"
                                                id="ar_button_value">
                                        
                                    </div>
                                </div>
        </td>

</tr>

<tr>
<td colspan=2>
<div class="control-group">
                                    <label class="control-label">Button Link</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xxlarge"
                                         value="<?php echo $package[6]?>" 
                                         name="button_link"
                                          id="button_link">
                                    </div>
</div>
</td>
</tr>


<tr>
<td colspan=2>

<div class="control-group">
                                    <label class="control-label">Package Status</label>
                                    <div class="controls">
                                        <select class="input-medium m-wrap" tabindex="1"
                                                name="package_status"
                                                id="package_status">
                                            <?php
                                            if($package[11]==1){
                                                echo '
                                                <option value="active" name="active" selected>Active</option>
                                                <option value="Unactive" name="Unactive">Unactive</option>
                                                ';
                                            }else{
                                                echo '
                                                <option value="active" name="active">Active</option>
                                                <option value="unactive" name="unactive" selected>Unactive</option>
                                                ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


</div>
</td>
</tr>

<tr>
<td colspan ="2" align="center">

<img src="../../<?php echo $package[1];?>" alt="Image Cannot Viewed Or No Image For This Package"></img>
<br>
<div class="control-group">
                                    <label class="control-label">Upload Image</label> Perfect Image : Width: 570px; Height: 323px;
                                    <div class="controls">
                                        <input type="file" class="default"
                                                name="package_image"
                                                id="package_image">
                                    </div>
                                </div>

</td>
</tr>
<tr>
<td colspan=2>
 <input type="button" value="Update Data" class="btn btn-success" onclick="updateData()"></input>  &nbsp; &nbsp; 
 <input type="reset" value="reset" class="btn"></input>
</td>

</tr>

    </table>
    <input type="hidden"
           value="<?php echo $package[0];?>"
           id="package_id"
           name="package_id"> </input>

    <input type="hidden"
           value="<?php echo $package[12];?>"
           id="inital_display_order"
           name ="inital_display_order"> </input>
        </form>


            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
<?php
        include('footer.php');
?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <!-- <script src="js/jquery.nicescroll.js" type="text/javascript"></script> -->
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!-- <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script> -->
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <!-- <script src="assets/chart-master/Chart.js"></script> -->
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
<!--  -->
   <!-- <script src="js/easy-pie-chart.js"></script> -->
   <!-- <script src="js/sparkline-chart.js"></script> -->
   <!-- <script src="js/home-page-calender.js"></script> -->
   <!-- <script src="js/home-chartjs.js"></script> -->
<!--  -->
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
<script>
      // update section body&title
function updateData() {
    const form = document.getElementById('package_form');
    var input = document.querySelector('input[type="file"]');

    let data = new FormData(form)
    data.append('updatePackage',document.getElementById("package_id").value);
    // if user select file to upload
    if(input.files[0] != null) {
    data.append('file',input.files[0]);
    data.append('updateImage','true');
    }else{
        data.append('updateImage','false');

    }

    fetch('./editPackageFunctions.php', {
        mode: 'same-origin', 
        credentials: 'include',
        
        method: 'POST',
    
        body: data
    }).then(response => {
        if (!response.ok) {
        throw new Error('Network error!');
        }else{
        return response.text();
        }
    }).then(responseText =>
    document.getElementById("result").innerHTML= responseText)
    .catch(console.error)
}
</script>
</html>
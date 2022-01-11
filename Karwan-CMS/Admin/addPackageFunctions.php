<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
$imageLink ="";
if(isset($_POST['addPackage']) && $_POST['addPackage'] == 'true'){


    
          // FIRST Add Banner Photo if there's a banner Photo
          if(isset($_POST['addImage']) && $_POST['addImage']== "true"){
            $targetDir = "../../images/";
            $fileName = basename($_FILES["file"]["name"]);
            
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
          
    
            if(!empty($_FILES["file"]["name"])){
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType, $allowTypes)){
                
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                
                $imageLink = "images/".$fileName;
    
                    }else{ $response_status.="<span style='color:red'>1 Something Went Wrong With The Image !<br></span>";}
                }else{$response_status.="<span style='color:red'>2 Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>3 Something Went Wrong With The Image !</span><br>";}
            }

            $display_order             = mysqli_real_escape_string($connection, $_POST['display_order']);
            $en_package_title          = mysqli_real_escape_string($connection, $_POST['en_package_title']);
            $ar_package_title          = mysqli_real_escape_string($connection, $_POST['ar_package_title']);
            $en_sub_title              = mysqli_real_escape_string($connection, $_POST['en_sub_title']);
            $ar_sub_title              = mysqli_real_escape_string($connection, $_POST['ar_sub_title']);
            $en_body                   = mysqli_real_escape_string($connection, $_POST['en_body']);
            $ar_body                   = mysqli_real_escape_string($connection, $_POST['ar_body']);
            $button_link               = mysqli_real_escape_string($connection, $_POST['button_link']);
            $button_value              = mysqli_real_escape_string($connection, $_POST['button_value']);
            $ar_button_value           = mysqli_real_escape_string($connection, $_POST['ar_button_value']);

            // cehcking if display order already exist
        if($display_order != ''){
        $q=mysqli_query($connection,"SELECT * FROM packages
                                     WHERE 
                                     packages.display_order = '$display_order'");
    if(mysqli_num_rows($q)>0){
        $q=mysqli_query($connection,"SELECT MAX(display_order)+1 FROM packages");
        $last_display_order = mysqli_fetch_row($q);
        $display_order = $last_display_order[0];
        $response_status.="<span style='color:red'>Display Order Already Exist, Service Pushed To Last</span><br>";
    }
        }else{$response_status.="<span style='color:red'>Display Order Pushed To The Last !</span><br>";}


        if($_POST['package_status'] == 'active'){
            $package_status = 1;
        }else{
            $package_status = 0;
        }


        $insertQuery = "INSERT INTO packages
                 VALUES(null,
               '$imageLink',
               '$en_package_title',
               '$en_sub_title',
               '$en_body',
               '$button_value',
               '$button_link',
               '$ar_package_title',
               '$ar_sub_title',

               '$ar_body',
               '$ar_button_value',
               '$package_status',
               '$display_order'
               )";
               $q=mysqli_query($connection,$insertQuery)or die(mysqli_error($connection));
               if($q){
                   $response_status .="<span style='color:green;'>Data Updated </span><br>";
               }else{$response_status .="<span style='color:red;'>Something Went Wrong,Data Not Inserted </span>";}
            echo $response_status;
          

}


?>
<?php
include('config.php');
require('./AdminAuthCheck.php');

$response_status="";
// Updating the package
if(isset($_POST['updatePackage']) && $_POST['updatePackage'] != ""){
    $package_id =mysqli_real_escape_string($connection, $_POST['package_id']);

        // FIRST UPDATE package Photo if there's a package Photo
        if(isset($_POST['updateImage']) && $_POST['updateImage']== "true"){
        $targetDir = "../../images/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


        if(isset($_POST["file"]) && !empty($_FILES["file"]["name"])){
            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType, $allowTypes)){
            
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            $fullLink = "images/".$fileName;
                    $q= mysqli_query($connection,"
                                        UPDATE packages
                                        SET photo = '$fullLink'
                                        WHERE package_id = '$package_id'");

                }else{ $response_status.="<span style='color:red'>Something Went Wrong With The Image !<br></span>";}
            }else{$response_status.="<span style='color:red'>Something Went Wrong With The Image !<br></span>";}
        }else{$response_status.="<span style='color:red'>Something Went Wrong With The Image !</span><br>";}
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
        
if($_POST['package_status'] == 'active'){
    $package_status = 1;
}else{
    $package_status = 0;
}
// check if thee display order changed 
        // if change than  change the display order to MAX(display_order +1 )
if($display_order != $_POST['inital_display_order']){
    $q=mysqli_query($connection,"SELECT MAX(display_order)+1 from packages");
        $lastDisplayOrder  = mysqli_fetch_row($q);
        $display_order = $lastDisplayOrder[0];
        $response_status.="<span style='color:red'>Display Order Changed By System To : ".$display_order."<br></span>";
}

    $q=mysqli_query($connection,"UPDATE packages SET 
                                `display_order` = '$display_order',
                                `title` = '$en_package_title',
                                `ar_title` = '$ar_package_title',
                                `sub_title` = '$en_sub_title',   
                                `ar_sub_title` = '$ar_sub_title',
                                `body` = '$en_body',
                                `ar_body` = '$ar_body',
                                `button_link`=  '$button_link',
                                `button_value` = '$button_value',
                                `ar_button_value` = '$ar_button_value'
                                WHERE 
                                package_id = '$package_id'
                                    ")or die(mysqli_error($connection));
        if($q){
            $response_status.="<span style='color:green;'> Data Updated </span>";
        }else{$response_status.="<span style='color:red'>Something Went Wrong ,Data NOT UPDATED</span>";}

echo $response_status;
    }
    
?>
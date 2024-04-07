<!-- ------------------------------------------------delete item into database---------------------- -->
<?php
include("config.php");

$id=$_GET['userid'];

    $insert = "DELETE FROM `info_item` WHERE `info_item`.`id` = '$id' ";
   $res_quary= mysqli_query($conn,$insert);                  
   if($res_quary){
    header("Location: admin.php"); 
   }
  
 else {  //massage using class from bootstrap
    echo '<script> alert(" Please Enter some valid Information")  </script>'; //print massage if data dont add into database

}


?>
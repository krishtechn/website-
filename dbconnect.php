<?php 

 $con = mysqli_connect('localhost','root','','forms');

 if($con){
       echo "connection success";
 }else{
       die();
 }

?>
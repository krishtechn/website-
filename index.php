<?php 

 include 'dbconnect.php';
 include 'index.html';
 

 if(isset($_POST['signup'])){
       
 $username = $_POST['username'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];
 
 $sql = "INSERT INTO `table` (`id`, `name`, `email`, `phone`, `message`) VALUES (NULL, '$username', '$email', '$phone', '$message')";
 $result = mysqli_query($con,$sql);


 if($result){
       echo '<script>alert("your data has been send now login")</script>';
       header('location : login.php');
 }else{
      echo '<script>alert("your data has not been send")</script>';
 }

}else{
      echo '<script>alert("Please Signup to our website")</script>';
}
?>
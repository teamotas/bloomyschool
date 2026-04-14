<?php
session_start();
include_once('../config.php');
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $username=$_SESSION['username'];
  $current_password=md5($_POST['current_password']);
  $fetch = mysqli_query($conn,"SELECT * FROM makoonspreschool_users WHERE username='$username' and password='$current_password'");
  $show = mysqli_fetch_assoc($fetch);

   if(!empty($show)){
   	  $password=$_POST['new_password'];
      $confirm_password=$_POST['confirm_password'];

      if($confirm_password==$password){
         $password=md5($password);
        $update = mysqli_query($conn,"UPDATE makoonspreschool_users  SET password='$password' WHERE  username='$username' ");

        if($update){
            ?>
            <script>
            alert("Password updated successfully");
            window.location="change_password.php";
            </script>
            <?php
        }else{
           ?>
            <script>
            alert("Unable to change password,please try again!");
            window.location="change_password.php";
            </script>
            <?php
        }


      }else{
         ?>
        <script>
        alert("New Password and confirm password does not match!");
        window.location="change_password.php";
        </script>
        <?php
      }
         
   }else{
       ?>
        <script>
    		alert("Incorrect current password,Please Try Again!");
    		window.location="change_password.php";
    		</script>
        <?php


   }



}


?>
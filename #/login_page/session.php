<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $login_session = $user_check;
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>
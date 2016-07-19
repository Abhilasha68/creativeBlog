<?php

#This is  currently useless
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION["username"];
   
   $ses_sql = mysql_query("select `username` from 'information' where `username` = '$user_check' ");
   
   $row = mysql_fetch_assoc($ses_sql);
   
   $login_session = $row["username"];
   
   if(!isset($login_session)){
      header("location:login.php");
   }
?>
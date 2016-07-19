<?php
include('login.php');
include('connect.php');

if(isset($_SESSION["username"])){
header("location: home.php");
}
?>
<?php
session_start();
$_SESSION["loginuser"]="";
$_SESSION['querydone']="";
$_SESSION['ret']="";
$_SESSION['nocity']="";
$_SESSION['new_cost']="";
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
	$_SESSION['imagesrc']="";
	$_SESSION['noroom']="";
	unset($_SESSION['access_token']);
header("location:home.php");
?>
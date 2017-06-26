<?php
session_start();
?>
 <?php 
 if(strcmp($_SESSION['categorynames'],"city")==0)
 {
$file_name=$_FILES['image']['name'];
$file_temp=$_FILES['image']['tmp_name'];
	$target_dir="uploads/";

	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);
	$_SESSION['cityhotelimage']=$target_file;
	
	$file_name=$_FILES['image2']['name'];
$file_temp=$_FILES['image2']['tmp_name'];
	$target_dir="uploads/";

	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);
	$_SESSION['citypackageimage']=$target_file;

$file_name=$_FILES['image3']['name'];
$file_temp=$_FILES['image3']['tmp_name'];
	$target_dir="uploads/";

	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);
	$_SESSION['cityadvenimage']=$target_file;

	$file_name=$_FILES['image4']['name'];
$file_temp=$_FILES['image4']['tmp_name'];
	$target_dir="uploads/";

	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);
	$_SESSION['cityplaceimage']=$target_file;

	}
	else if(strcmp($_SESSION['categorynames'],"hotel")==0)
 	{
 		$file_name=$_FILES['image']['name'];
		$file_temp=$_FILES['image']['tmp_name'];
		$target_dir="uploads/";

		$target_file = $target_dir . basename($file_name);
		move_uploaded_file($file_temp, $target_file);
		$_SESSION['hotelimage']=$target_file;
	
 	}

 	else if(strcmp($_SESSION['categorynames'],"package")==0)
 	{
 		$file_name=$_FILES['image']['name'];
		$file_temp=$_FILES['image']['tmp_name'];
		$target_dir="uploads/";

		$target_file = $target_dir . basename($file_name);
		move_uploaded_file($file_temp, $target_file);
		$_SESSION['packimage']=$target_file;
	
 	}

 	else if(strcmp($_SESSION['categorynames'],"adventure")==0)
 	{
 		$file_name=$_FILES['image']['name'];
		$file_temp=$_FILES['image']['tmp_name'];
		$target_dir="uploads/";

		$target_file = $target_dir . basename($file_name);
		move_uploaded_file($file_temp, $target_file);
		$_SESSION['advimage']=$target_file;
	
 	}

 	else if(strcmp($_SESSION['categorynames'],"place")==0)
 	{
 		$file_name=$_FILES['image']['name'];
		$file_temp=$_FILES['image']['tmp_name'];
		$target_dir="uploads/";

		$target_file = $target_dir . basename($file_name);
		move_uploaded_file($file_temp, $target_file);
		$_SESSION['placeimage']=$target_file;
	
 	}
 	else{}
?>
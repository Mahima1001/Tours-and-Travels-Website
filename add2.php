<?php // Include confi.php
session_start();
include_once('config.php');
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$string=$_GET["q"];
	echo $string;
	$query="INSERT into hotels (hoteldesc) VALUES ('$string')";
	mysqli_query($con,$query);
	$search_exploded = explode ( " ", $string ); 
	$x = 0; foreach( $search_exploded as $search_each ) 
	{
		if($x==0)
			$hname=$search_each;
		if($x==6)
			$himg=$search_each;
		$x++; 
	}
	$file_temp=$himg;
	$target_file="uploads/".$himg;
	move_uploaded_file($file_temp, $target_file);
	$query="INSERT into hotels (hoteldesc) VALUES ('$target_file')";
	mysqli_query($con,$query);
}
?>
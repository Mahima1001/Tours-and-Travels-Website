<?php
session_start();

$_SESSION['image_cat']= $_GET['Category'];
$_SESSION['image_city']=$_GET['city'];
$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
if(strcmp($_SESSION['loginuser'],"admin@gmail.com")==0)
{
	if(strcmp($_SESSION['image_cat'],"package ")==0 || strcmp($_SESSION['image_cat'],"Ad ")==0 || strcmp($_SESSION['image_cat'],"placetovisit ")==0)
	{
		header("location:team.php");
	}
	else
	header("location:shop.php");
}
else {
	if(strcmp($_SESSION['image_cat'],"package ")==0)
	header("location:packshop.php");
	elseif (strcmp($_SESSION['image_cat'],"Ad ")==0 || strcmp($_SESSION['image_cat'],"placetovisit ")==0) {
		header("location:team.php");
	}
	else
		header("location:shop.php");
}
mysqli_close($con);

?>


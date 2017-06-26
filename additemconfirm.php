<?php
session_start();
/*$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }*/
$cat=$_POST['hotelname'];
echo $cat;
/*if(strcmp($cat, "city")==0)
{

$file_name=$_FILES['hotelimage']['name'];
$file_temp=$_FILES['hotelimage']['tmp_name'];
	$target_dir="uploads/";
	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);

$file_name2=$_FILES['packageimage']['name'];
$file_temp2=$_FILES['packageimage']['tmp_name'];
	$target_dir="uploads/";
	$target_file2 = $target_dir . basename($file_name2);
	move_uploaded_file($file_temp2, $target_file2);

	$file_name3=$_FILES['adimage']['name'];
$file_temp3=$_FILES['adimage']['tmp_name'];
	$target_dir="uploads/";
	$target_file3 = $target_dir . basename($file_name3);
	move_uploaded_file($file_temp3, $target_file3);

	$file_name4=$_FILES['placeimage']['name'];
$file_temp4=$_FILES['placeimage']['tmp_name'];
	$target_dir="uploads/";
	$target_file4 = $target_dir . basename($file_name4);
	move_uploaded_file($file_temp4, $target_file4);


$city=	$_POST['cityname'];
$desc=	$_POST['citydesc'];


  $query= "INSERT INTO city(cityname,hotelimage,packageimage,adimage,placeimage,description) VALUES ('$city','$target_file','$target_file2','$target_file3','$target_file4','$desc')";
  if(!mysqli_query($con,$query)){
		$_SESSION['checksave']="false";
	 
	}else
	{	
		$_SESSION['checksave']="true";
	}
}
elseif(strcmp($cat,"hotel")==0)
{
	$hotelname=$_POST['hotelname'];
	$cityname=$_POST['search'];
	$hoteltype=$_POST['hoteltype'];
	$hotellocation=$_POST['hotellocation'];
	$hotelnorooms=$_POST['hotelnorooms'];
	$hoteldesc=$_POST['hoteldesc'];
	$file_name5=$_FILES['htlimg']['name'];
$file_temp5=$_FILES['htlimg']['tmp_name'];
	$target_dir="uploads/";
	$target_file5= $target_dir . basename($file_name5);
	move_uploaded_file($file_temp5, $target_file5);
	
	 $query= "INSERT INTO hotels(hotelname,cityname,hotellocation,hoteltype,hotelnorooms,hoteldesc,htlimgurl) VALUES ('$hotelname','$cityname','$hotellocation','$hoteltype','$hotelnorooms','$hoteldesc','$target_file5')";
	 if(!mysqli_query($con,$query)){
		$_SESSION['checksave']="false";
	 
	}else
	{	
		$_SESSION['checksave']="true";
	}
}*/
?>
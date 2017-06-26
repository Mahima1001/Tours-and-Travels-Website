<?php
$file_name=$_FILES['hotelimage']['name'];
$file_temp=$_FILES['hotelimage']['tmp_name'];
echo $file_temp;
	$target_dir="uploads/";
	$target_file = $target_dir . basename($file_name);
	move_uploaded_file($file_temp, $target_file);

$city=	$_POST['cityname'];
$desc=	$_POST['citydesc'];

$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  $query= "INSERT INTO city(cityname,description) VALUES ('$city','$target_file')";
  if(!mysqli_query($con,$query)){
		$_SESSION['checksave']="false";
	 
	}else
	{	
		$_SESSION['checksave']="true";
	}
	//header("Location:addcity.php");
?>
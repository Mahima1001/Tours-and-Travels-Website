<?php
	session_start();
include_once('config.php');
	$city =$_GET["q"];
$query="SELECT hotelname FROM hotels WHERE cityname='$city'";
$result = mysqli_query($con,$query);
//echo'<select id="search" name="search" onchange="fetch2_select()">';
					while($row = mysqli_fetch_assoc($result)){ 
					echo'<input type="checkbox" name="hotel[]" value ='.$row["hotelname"] .'>'.$row["hotelname"].'&nbsp;';
					}echo
					'</select></br></br>';
?>
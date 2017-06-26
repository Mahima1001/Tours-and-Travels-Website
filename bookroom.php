<?php
session_start();
$checkin=$_POST['dp1'];
$checkout=$_POST['dp2'];
$hotel=$_POST['hotelsel'];
$places="";
$adv="";
foreach ($_POST['placesel'] as $selected) {
	$places=$places.$selected." ";
}

foreach ($_POST['advsel'] as $selected) {
	$adv=$adv.$selected." ";
}

include_once('config.php');
$username=$_SESSION['loginuser'];
$query_check="SELECT * FROM room";
$result_check= mysqli_query($con,$query_check);
$i=0;
while($row_check = mysqli_fetch_assoc($result_check)){ 
	if($checkin>$row_check['checkin'] && $checkin<$row_check['checkout'])
	{
		$i++;
	}
	else if($checkout>$row_check['checkin'] && $checkout<$row_check['checkout'])
	{
		$i++;
	}
	else if($checkin<=$row_check['checkin'] && $checkout>=$row_check['checkout'])
	{
		$i++;
	}
	else{
	}		
}
	if($i>=5)
	{
		$_SESSION['noroom']="NoRoom";
		header("location:packsingle.php");
	}
	else
	{
		$query="SELECT username FROM room WHERE username='$username'";
									$result= mysqli_query($con,$query);
									$rowcount=mysqli_num_rows($result);
									if($rowcount>0){
										$query_rating="SELECT feedback FROM rooms WHERE username='$username'";
										$result_rating= mysqli_query($con,$query_rating);
										while($row_rating = mysqli_fetch_assoc($result_rating)){
											$previous_rating=$row_rating['feedback'];
										}	$diff = abs(strtotime($checkout) - strtotime($checkin));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											if($previous_rating==0)
											{
										$new_cost=$days*1000;
											}
											else
											{
												$new_cost=($days*1000)-($days*1000*previous_rating*.05);
											}
											$new_rating=$_POST['rating'];
		$queryins="INSERT INTO room (hotelname,username,checkin,checkout,feedback,cost,places,adven) VALUES ('$hotel','$username', '$checkin' , '$checkout', '$new_rating', '$new_cost' , '$places' , '$adv')";
		$result= mysqli_query($con,$queryins);
		$_SESSION['new_cost']="Sucessfully Booked. Toatl cost is Rs.".$new_cost;
		header("location:packsingle.php");
									}
									else{
										$diff = abs(strtotime($checkout) - strtotime($checkin));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
											$new_cost=$days*1000;
										$queryins="INSERT INTO room (hotelname,username,checkin,checkout,feedback,cost,places,adven) VALUES ('$hotel','$username', '$checkin' , '$checkout', 0, '$new_cost','$places','$adv')";
										$result= mysqli_query($con,$queryins);
										$_SESSION['new_cost']="Sucessfully Booked. Toatl cost is Rs.";
									}
									
	}
?>
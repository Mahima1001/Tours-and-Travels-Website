<?php
session_start();
if(strcmp($_SESSION['categorynames'],"city")==0){
$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $category=$_GET["category"];
  
  $cityname=$_GET["cityname"];
  $citydesc=$_GET["citydesc"];
  $hotelimage=$_SESSION['cityhotelimage'];
  $adimage=$_SESSION['cityadvenimage'];
  $packageimage=$_SESSION['citypackageimage'];
  $placeimage=$_SESSION['cityplaceimage'];
  $query="INSERT INTO city(cityname,hotelimage,packageimage,adimage,placeimage,description) VALUES ('$cityname','$hotelimage','$packageimage','$adimage','$placeimage','$citydesc')";
  $result= mysqli_query($con,$query);
}

else if(strcmp($_SESSION['categorynames'],"hotel")==0){
	$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $category=$_GET["category"];
  $hotelname=$_GET["hotelname"];
  $hoteldesc=$_GET["hoteldesc"];
  $searchcity=$_GET["searchcity"];
  $hotellocation=$_GET["hotellocation"];
  $hotelnorooms=$_GET["hotelnorooms"];
  $hoteltype=$_GET["hoteltype"];
  $hotelimage=$_SESSION['hotelimage'];

  $query="INSERT INTO hotels(hotelname,cityname,hotellocation,hoteltype,contact,hoteldesc,htlimgurl) VALUES ('$hotelname','$searchcity','$hotellocation','$hoteltype','$hotelnorooms','$hoteldesc','$hotelimage')";
  $result= mysqli_query($con,$query);

}

else if(strcmp($_SESSION['categorynames'],"package")==0){
  $con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $category=$_GET["category"];
  $hotelname=$_GET["hotelname"];
  $city=$_GET["city"];
  $packdays=$_GET["packdays"];
  $packnights=$_GET["packnights"];
  $packdesc=$_GET["packdesc"];
  $packcost=$_GET["packcost"];
  $packimage=$_SESSION['packimage'];

  $query="INSERT INTO package(hotelname,cityname,days,nights,pack_cost,pack_desc,pack_image) VALUES ('$hotelname','$city','$packdays','$packnights','$packcost','$packdesc','$packimage')";
  $result= mysqli_query($con,$query);

}

else if(strcmp($_SESSION['categorynames'],"adventure")==0){
  $con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $category=$_GET["category"];
  $advname=$_GET["advname"];
  $advdesc=$_GET["advdesc"];
  $city=$_GET["searchcity"];
  $cost=$_GET["advcost"];
  $advimage=$_SESSION['advimage'];

  $query="INSERT INTO adventure(advname,city,cost,advdesc,advimg) VALUES ('$advname','$city','$cost','$advdesc','$advimage')";
  $result= mysqli_query($con,$query);

}

else if(strcmp($_SESSION['categorynames'],"place")==0){
  $con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $category=$_GET["category"];
  $placename=$_GET["placename"];
  $placedesc=$_GET["placedesc"];
  $city=$_GET["searchcity"];
  $placeimage=$_SESSION['placeimage'];

  $query="INSERT INTO place(placename,city,placedesc,placeimg) VALUES ('$placename','$city','$placedesc','$placeimage')";
  $result= mysqli_query($con,$query);

}


?>
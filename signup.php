<?php
session_start();

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$pin=$_POST['pin'];
$mob=$_POST['mobile'];

		$host='localhost';
		$user='root';
		$pass='';
		$db='toursntravellism';

		// Create connection
		$con = new mysqli($host,$user,$pass,$db);
		// Check connection
		if ($con->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 


	$query= "SELECT email FROM user WHERE email='$email'";
	$result = mysqli_query($con,$query);
   $num= mysqli_num_rows($result);
   if($num!=0)
   {
   	$_SESSION['email']="Already";
   	header("location:register.php");
   }
   else{
   

   	$queryinsert= "INSERT INTO user(firstname,lastname,email,password,mobile,pin) VALUES ('$firstname' , '$lastname','$email','$password','$mob' , '$pin')";
   	$resulti = mysqli_query($con,$queryinsert);

   	$_SESSION['registered']="true";
   	header("location:login.php");
   
}
?>
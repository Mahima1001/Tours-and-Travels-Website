<?php
session_start();
include_once("config.php");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $msg= $_POST['msg'];
 $sub=$_POST['sub'];
 $query="INSERT INTO query (name, email, msg, sub) VALUES ('$name','$email', '$msg', '$sub')";
 $result = mysqli_query($con,$query);
 $_SESSION['querydone']="true";
 if(strcmp($_SESSION['ret'],"")==0)
 header("location:contact.php");
else
	header("location:home.php");
?>
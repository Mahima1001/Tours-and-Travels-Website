<?php
session_start();
?>

<?php
$con = mysqli_connect("localhost","root","","toursntravellism");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("blog", $con);
 
  $email=$_POST['email'];
  $pwd=$_POST['password'];

  if(strcmp($email, "admin@gmail.com")==0 && strcmp($pwd,"admin")==0)
  {
    $_SESSION['loginuser']="admin@gmail.com";
  	header("location:admin.php");
  }
  
  else{
  	$pwd=md5($pwd);
  $query="SELECT email, password FROM user where email='$email' and password='$pwd'";
  $result=mysqli_query($con,$query);
  $num=mysqli_num_rows($result);

  
  if($num > 0)
  {
	 $_SESSION['loginuser']=$email;
	 header("location:admin.php");
  }
  else
  {
			 $_SESSION['login']="login failed";
	  	  header("Location:login.php");
} 
}
  
mysqli_close($con);
?>

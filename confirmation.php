<?php // Include confi.php
session_start();

 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$type=$_GET["q"];
	$search_exploded = explode ( " ", $type );
	$x = 0; foreach( $search_exploded as $search_each )
	{
		if($x==0)$pass=$search_each;
		if($x==1)$confirm_pass=$search_each;
		$x++;
	}
	if(strcmp($pass, $confirm_pass)==0)
	$output='<input type="text" name="confirmpass" id="confirmpass" value='+$confirm_pass+'/>';
	else
		$output='<input type="text" name="confirmpass" id="confirmpass" placeholder="Password not matched"/>';
	echo $output;
	}

 

 ?>
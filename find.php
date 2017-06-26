<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db='toursntravellism';

	// Create connection
	$con = new mysqli($host,$user,$pass,$db);
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 
	
	$data = json_decode(file_get_contents("php://input"));
	$a=mysql_real_escape_string($data->a);
	
	$search_exploded = explode ( " ", $a );
	$x = 0; 
	$construct = "";
	foreach( $search_exploded as $search_each ){ 
			
		$x++; 
		if( $x == 1 ) 
			$construct .="firstname LIKE '%$search_each%'"; 
		else 
			$construct .="AND firstname LIKE '%$search_each%'"; 
	} 
	
	$query = " SELECT * FROM user WHERE $construct "; 
	$result = mysqli_query($con,$query);
	$num= mysqli_num_rows($result);
	
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output[] = $row;
		}
		echo json_encode($output);
	}
	else{
		echo "";
	}
	
?>
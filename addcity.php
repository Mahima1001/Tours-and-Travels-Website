<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main1.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script src="jquery/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>

.error{
			color:red;
		}
		body{
			background-repeat:no-repeat;
			background-size:100%;
			background-attachment:fixed;
		}
		.sub2{
			background-color:white;
			color:white;
			padding:20px;
			padding-right:50px;
			padding-left:50px;
			width:25%;
			border-width:5px;
			border-color:white;
			float:left;
			border-width:5px;
			height:80%;
		}
		#sub1{
			margin-left:49px;
			width:388px;
			background-color:#f5f5f0;
			padding:10px;
			position:absolute;
			color:#663500;
			margin-top:70px;
			
		}
		table{
			background-color:#f5f5f0;
			padding:20px;
			position:absolute;
			color:#663500;
			margin-top:90px;
		}
		.inputclass{
			width:180px;
			margin:auto;
			height:34px;
			border-radius:5px;
		}
		
		.sub3{
			margin-top:70px;
			float:right;
			width:50%;
			margin-right:10%;
			height:100%;
		}
		.sub4{
			width:100%;
			height:90%;
		}
		.blogcategory{
			width:40%;
			height:5%;
			opacity: 0.5;
			filter: alpha(opacity=50);
			float:left;
			padding:5px;
			margin-top:3%;
			position:absolute;
			z-index: 1000;
		}
		
		.blogtitle{
			height:7%;
			padding:5px;
			font-weight:bold;
			font-size:20px;
			background-color:#8B4513;
			color:red;
		}
		
		.blogdesc{
			height:30%;
			padding:5px;
			background-color:#CD853F;
			color:white;
		}
		
		.blogauthor{
			width:100%;
			height:30%;
			float:right;
			
			
		}
		
		.blogdate{
			width:100%;
			height:30%;
			float:right;
			margin-top:5%;
			
			
		}
		.image{
			height:58%;
			width:100%;
			position:relative;
			
			}
		
		.authoranddate{
			width:26%;
			height:8%;
			float:right;
			margin-top:45%;
			
		}
		
		.descclass{
			width:240px;
			height:120px;
			border-radius:5px;
		}
		
	.verifyblog{
		position:absolute;
		background-color:grey;
		color:white;
		height:30px;
		color:white;
		border-radius:5px;
		font-weight:bold;
		margin-left:400px;
		margin-top:500px;
	}
	
	.imagesize{
		max-width:100%;
		max-height:100%;
	}	
	
	
.backbutton{
	float:right;
	background-color:#663500;
	width:100px;
	height:40px;
}
	
	#main{
		padding:20px;
		background-color:#f5f5f0;
		position:absolute;
		width:30%;
		min-height : 450px;
		margin-left:50%;
		margin-top: 5%;
	}
	
	#submain{
		width: 60%;
		height:360px;
		margin: 0px;
		margin-right:2%
		margin-left: 50%;
	}
	
	submain2{
		margin-left:10px;
		float:right;
		padding:2px;
	}
	
	
	
	#image{
		
		width:100%;
		height: 70%;
		
		position:relative;
	}
	
	#desc{
		width: 100%;
		height : 30%;
		margin-top:0px;
	}
	
	#name{
		width:100%;
		height: 33%;
		
	}
	
	#button{
		margin-left:10px;
		background-color:grey;
		border-radius:5px;
		color:white;
		height: 30px;
		}
	
</style>


</style>
</head>
<script>
function fetch_select(){
	var type=document.getElementById("category2").value;
				 var xhttp=null;
			 xhttp = new XMLHttpRequest();
			 if(xhttp){      

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("inp").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "add1.php?q="+type, true);
  xhttp.send();   

}}

</script>

<script>
function fetch2_select(){
	var type=document.getElementById("search").value;
				 var xhttp=null;
			 xhttp = new XMLHttpRequest();
			 if(xhttp){      

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("inp2").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "add3.php?q="+type, true);
  xhttp.send();   

}}

</script>


<script>
	function uploadFile(){
		alert("hoooooooooo");
		var input = document.getElementById("hotelimage");
  		var input2 = document.getElementById("packageimage");
  		var input3 = document.getElementById("advenimage");
  		var input4 = document.getElementById("placeimage");
  //var te = document.getElementById("txt");
  file = input.files[0];
  file2 = input2.files[0];
  file3 = input3.files[0];
  file4 = input4.files[0];
 	//file2 = input2.files[0];
  if(file != undefined && file2 != undefined && file3 != undefined && file4 != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/) && !!file2.type.match(/image.*/) && !!file3.type.match(/image.*/) && !!file4.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      formData.append("image2", file2);
      formData.append("image3", file3);
      formData.append("image4", file4);
      //formData.append("image2", file2);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,

        success: function(data){
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
	}


</script>
<script>
function next()
{

	var cat=document.getElementById("category2").value;
	
	if(cat.localeCompare("city")==0)
	{
		var cityname= document.getElementById("cityname").value;
		var citydesc= document.getElementById("citydesc").value;
		var xhttp=null;
		xhttp = new XMLHttpRequest();
		if(xhttp){      

			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert("Uploaded successfully");
 		   		}
 		 };
 		 xhttp.open("GET", "removeme.php?cityname="+cityname + "&citydesc="+citydesc + "&category="+cat, true);
 		 xhttp.send();   

		}
	}

	else if(cat.localeCompare("hotel")==0)
	{
		var search= document.getElementById("search").value;
		var hotelname= document.getElementById("hotelname").value;
		var hotellocation= document.getElementById("hotellocation").value;
		var hotelnorooms= document.getElementById("hotelnorooms").value;
		var hoteltype= document.getElementById("hoteltype").value;
		var hoteldesc= document.getElementById("hoteldesc").value;
		var xhttp=null;
		xhttp = new XMLHttpRequest();
		if(xhttp){      

			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert("Uploaded successfully");
 		   		}
 		 };
 		 xhttp.open("GET", "removeme.php?hotelname="+hotelname + "&hoteldesc="+hoteldesc + "&category="+cat + "&searchcity="+search + "&hotellocation="+hotellocation + "&hotelnorooms="+hotelnorooms + "&hoteltype="+hoteltype , true);
 		 xhttp.send();   

		}
	}


	else if(cat.localeCompare("package")==0)
	{
		var city= document.getElementById("search").value;
		var hotelname= document.getElementsByName("hotel[]");
		
	var vals = "";
	for (var i=0; i<hotelname.length;i++) 
	{
	    if (hotelname[i].checked) 
	    {
	        vals += ","+hotelname[i].value;
	    }
	}
	if (vals) vals = vals.substring(1);

		var packdays= document.getElementById("packdays").value;
		var packnights= document.getElementById("packnights").value;
		var packdesc= document.getElementById("itemdesc").value;
		var packcost= document.getElementById("cost").value;
		var xhttp=null;
		xhttp = new XMLHttpRequest();
		if(xhttp){      

			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert("Uploaded successfully");
 		   		}
 		 };
 		 xhttp.open("GET", "removeme.php?hotelname="+vals + "&city="+city + "&packdays="+packdays + "&packnights="+packnights + "&category="+cat + "&packdesc="+packdesc + "&packcost="+packcost , true);
 		 xhttp.send();   

		}
	}

	else if(cat.localeCompare("adventure")==0)
	{
		var search= document.getElementById("search").value;
		var advname= document.getElementById("adventure").value;
		var adv_cost= document.getElementById("adv_cost").value;
		var itemdesc= document.getElementById("itemdesc").value;
		
		var xhttp=null;
		xhttp = new XMLHttpRequest();
		if(xhttp){      

			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert("Uploaded successfully");
 		   		}
 		 };
 		 xhttp.open("GET", "removeme.php?advname="+advname + "&advdesc="+itemdesc + "&category="+cat + "&searchcity="+search + "&advcost="+adv_cost, true);
 		 xhttp.send();   

		}
	}

	else if(cat.localeCompare("place")==0)
	{
		var search= document.getElementById("search").value;
		var placename= document.getElementById("place").value;
		var placedesc= document.getElementById("placedesc").value;
				
		var xhttp=null;
		xhttp = new XMLHttpRequest();
		if(xhttp){      

			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert("Uploaded successfully");
 		   		}
 		 };
 		 xhttp.open("GET", "removeme.php?placename="+placename + "&placedesc="+placedesc + "&category="+cat + "&searchcity="+search , true);
 		 xhttp.send();   

		}
	}

	
}
</script>
<script>
	function UploadHotelFile()
	{
		var input = document.getElementById("htlimg");
  file = input.files[0];
	//file2 = input2.files[0];
  if(file != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,

        success: function(data){
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
	}

</script>

<script>
	function UploadPackageFile()
	{

		var input = document.getElementById("packimg");
  file = input.files[0];
	//file2 = input2.files[0];
  if(file != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,

        success: function(data){
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
	}

</script>

<script>
	function UploadAdventureFile()
	{

		var input = document.getElementById("advimg");
  file = input.files[0];
	//file2 = input2.files[0];
  if(file != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,

        success: function(data){
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
	}

</script>

<script>
	function UploadPlaceFile()
	{

		var input = document.getElementById("placeimg");
  file = input.files[0];
	//file2 = input2.files[0];
  if(file != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,

        success: function(data){
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
	}

</script>



<body>

<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a class="navbar-brand" href="home.php"> <b>MPS TOURS</b></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li style="margin-left: 100px;"><a href="queries.php">Queries</a></li>
                  <li><a href="ship.php">Shipping Details</a></li> 
                  <li><a href="addcity.php">Add</a></li>							
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            
	      	</div>
		 </div>
	</div>
</div>
		<form name="myForm" enctype="multipart/form-data" onsubmit="" method="post" action="" enctype="multipart/form-data">
		<p style="margin-left:45px;text-align:left; color:black">Search Type:</p>
		<select id="category2" name="category2" style="width:300px;" onchange="fetch_select()">
			<option value="city" selected>City</option>
			<option value="hotel">Hotel</option>
			<option value="package">Package</option>
			<option value="adventure">Adventure</option>
			<option value="place" >Place</option>
			</select></br></br>

			<div id="inp"><input type="hidden" name="submitted" value="true" />
			<p id="sub1" style="width:423px;"><b>The field with ' <span style = "z-index:20;color:#ff0000">*</span> ' mark is required</b></p>
			</form>
			<div class= "sub4">
			<div class="sub2">
			
				<table>
					<tr>
						<td>City<span class="error">*</span></td>
						<td><input type="text" class="inputclass" name="cityname" id="cityname" value="" required/></td>
					</tr>
					<tr>	

						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  style="margin-top: 15px;" name="citydesc" rows=7 cols=50  id="citydesc" required/></textarea></td>
					
					</tr>
					
					<tr><td><div style="margin-top: 15px;">Hotel<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="hotelimage" id="hotelimage" required/>
					</td>
					</tr>
					<tr><td><div style="margin-top: 15px;">Package<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="packageimage" id="packageimage" required/>
					
					</tr>
					<tr><td><div style="margin-top: 15px;">Adventures<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="advenimage" id="advenimage" required/>
					</tr>

					<tr><td><div style="margin-top: 15px;">Places to visit<span class="error">*</span></div></td>
					<td>
					<input style="margin-top: 15px;" type= "file" name="placeimage" id="placeimage" required/>
					
					</tr>
					<tr>
						<td><button id="Additem"value="Add Item" name="Additem" onclick="uploadFile()">ADD</button></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
					</table>
					</div></div>
					</div>


				
</body>


</html>
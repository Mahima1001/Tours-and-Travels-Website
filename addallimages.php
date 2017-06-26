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
		float:left;
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
		margin:10px;
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

<body>

<?php

if(strcmp($_SESSION['checksave'],"false")==0)
{
	?><script>alert("Error in saving item :(");</script><?php
	
}
if(strcmp($_SESSION['checksave'],"true")==0)
{
	?><script>alert("Saved successfully :)");</script><?php
	
}
$_SESSION['checksave']="";
?>
<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.html">Shop</a></li>
						    	<li><a href="team.html">Team</a></li>
						    	<li><a href="experiance.html">Events</a></li>
						    	<li><a href="experiance.html">Experiance</a></li>
						  
								<li><a href="contact.html">Contact</a></li>		
											
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>

<p id="sub1"><b>The field with ' <span style = "z-index:20;color:#ff0000">*</span> ' mark is required</b></p>

		<form name="myForm" enctype="multipart/form-data" onsubmit="" action="inserthotelimage.php" method="post">
		<input type="hidden" name="submitted" value="true" />
			<div class= "sub4">
			<div class="sub2" >
			
				<table>
					<tr>
						<td>Name<?php ?><span class="error">*</span></td>
						<td><input type="text" class="inputclass" name="hotelname" id="B" value='' onFocus="this.value=''" required/></td>
					</tr>
					<tr>
						<td>Location<span class="error">*</span> </td>
						<td> <input type="text" name="hotellocation" class="inputclass" required/></td>
					</tr>
					<tr>
						<td>Total rooms<span class="error">*</span> </td>
						<td><input type="number" name="hotelnorooms" class="inputclass" required/> </td>
					</tr>
					<tr>
						<td>Type</td>
						<td> <input type="radio" name="hoteltype" value="3*">3* &nbsp;
						 <input type="radio" name="hoteltype" value="5*" />5* &nbsp;
						<input type="radio" name="hoteltype" value="7*" />7*</td>
					</tr>
					
					<tr>	
						<td>Description<span class="error">*</span> </td>
						<td> <textarea class="descclass"  name="itemdesc" rows=7 cols=50  id="itemdesc" required/></textarea></td>
					
					</tr>
					<tr><td></td>
					<td>
					<input type= "file" name="image" required/>
					
					</tr>
					<tr>
						<td><input id="button" type="submit"value="Add Item" name="Additem"/></td>
						<td><input id="button" type="reset" value="Reset" /></td>
					</tr>
				
				</table>
					</form>
				</div>	  
</body>
</html>
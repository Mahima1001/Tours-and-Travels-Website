<?php
session_start();
$category = $_SESSION['image_cat'];


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
<?php

if(strcmp($_SESSION['checkupdate'],"false")==0)
{
	?><script>alert("Error in updating :(");</script><?php
	
}
if(strcmp($_SESSION['checkupdate'],"true")==0)
{
	?><script>alert("Updated successfully :)");</script><?php
	
}
$_SESSION['checkupdate']="";
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="main1.css">
<link rel="stylesheet" type="text/css" href="items.css">
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
</head>
<body>
<?php
if(strcmp($_SESSION['checkdelete'],"false")==0)
{
	?><script>alert("Error in deleting :(");</script><?php
	
}
if(strcmp($_SESSION['checkdelete'],"true")==0)
{
	?><script>alert("Deleted successfully :)");</script><?php
	
}
$_SESSION['checkdelete']="";
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
								<li><a href="addallimages.php">Add</a></li>						
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
			<?php
			$con = mysqli_connect("localhost","root","","SubKuch");
			if (!$con)
			{
				die('Could not connect: ' . mysqli_error());
			}
			?>
			<?php 
				$result=mysqli_query($con,"SELECT * from image_items where category='pic_slider'");
				while($row = mysqli_fetch_assoc($result)){
			?>
			<img class="mySlides" src=<?php echo $row['image']; ?> style="width:100%; height:300px; margin-top: 0px;">
				<?php } ?>
			<br>
			<br>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>			
<br>
<br>
<br>
<br>			
<br>
<br>
<br>
<br>			
		
	
<?php

  echo '<div >';
  echo '<div style="background-color:orange; margin-top:80px; width:200px; text-align:center; color:white; margin-left:50px; padding:10px; border-radius:5px;">';
	echo $category;
	echo '</div style="padding="20px;">';
  $query_item="SELECT id, name, image ,quantity, description , price FROM image_items where category = '$category'";
  $result_item=mysqli_query($con,$query_item);
  while($row_item = mysqli_fetch_assoc($result_item))
  {
	  $image_item= $row_item['image'];
	  if($category !='pic_slider'){
	  echo '<div id = "submain">';
	  echo '<div id = "image">';
	  echo '<img style="width:100%; height:100%;" src="' . $image_item . ' " alt="Your Image"/>';
	  if($row_item['quantity']==0)
	  {
		  echo '<h2><span> STOCK OUT! </span></h2>';
	  }
	  echo '</div>';
	  echo '<div id= "desc">';
	  echo '<div id = "name">';
	  echo '<b>'.$row_item['name'].'</b>';
	  echo '</div>';
	  echo '<div id = "name">';
	  echo 'Cost - ' . $row_item['price'];
	  echo '</div>';
	  echo '<div id = "button">';
	  echo  '<div class="allowORdeny">';
				echo '<form name="myForm2" enctype="multipart/form-data" onsubmit="" action="delete.php" method="post">';
							echo '<input type="hidden" name="itemid" value='.$row_item["id"].'>';
							echo '<input class="allowblog" type="submit" value="Delete" name="deleteitem"/>';
						echo "</form>";
					echo "</div>";
					
					echo '<div class="allowORdeny">';
						echo '<form name="myForm3" enctype="multipart/form-data" onsubmit="" action="itemid.php" method="post">';
							echo '<input type="hidden" name="itemid" value='.$row_item["id"].'>';
							echo '<input class="allowblog" type="submit" value="Edit" name="edititem"/>';
						echo "</form>";
						echo '</div>';
					
	  echo '</div>';
	  echo '</div>';
	  echo '</div>';
	  
	  }
	  else{
		  echo '<div style=" margin:auto; width:80%; height:300px; margin-top:100px;" >';
		  echo '<img style="width:100%; height:100%;" src="' . $image_item . ' " alt="Your Image"/>';
	  
		  echo '<form name="myForm2" enctype="multipart/form-data" onsubmit="" action="delete.php" method="post">';
							echo '<input type="hidden" name="itemid" value='.$row_item["id"].'>';
							echo '<input class="allowblog" type="submit" value="Delete" name="deleteitem"/>';
		echo "</form>";
		echo '</div>';
	  }
  }
   echo '</div>';
  mysqli_close($con);
  ?>
  </body>
</html>
<?php
session_start();
include_once("config.php");
$city=$_SESSION['image_city'];
$cat=$_SESSION['image_cat'];
$name= $_SESSION['loginuser'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Team :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
     <!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
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
						    	<?php if(strcmp($name,"admin@gmail.com")==0){ ?>
                  <li style="margin-left: 100px;"><a href="queries.php">Queries</a></li>
                  <li><a href="ship.php">Shipping Details</a></li> 
                  <li><a href="addcity.php">Add</a></li>  <?php } else{?>
                  
                  <li><a style="margin-left: 100px;" href="contact.php">Contact</a></li>
                  <li><a href="cart.php">MyCart</a></li> 
                  <?php } ?>  	
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		   <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">MPS TOURS</a></h4><span class="actual"></span></li>
						  <div class="login_buttons">
							 <?php if(strcmp($_SESSION['loginuser'],"")!=0) {?>
               <div class="check_button"><a href="start.php">Check out</a></div><?php } else{ ?>

               <div class="login_button"><a href="login.php">Login</a></div><?php } ?>
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
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row team_box">
			<?php if(strcmp($cat,"package ")==0) { ?>
				<h3 class="m_2">Packages</h3>
				
				<?php
		$query="SELECT * FROM package WHERE cityname='$city'";  
		$result = mysqli_query($con,$query);
		$i=4;
		while($row = mysqli_fetch_assoc($result)) 
		{ 
 ?>
				<div class="col-md-3 team1">
				  <a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>">
				  <img src="<?php echo $row['pack_image']; ?>" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog<?php echo $i; ?>" class="mfp-hide" style="background-color: white;  margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center>About Package</center></h2>
					   	 <?php
					   	 $pack_desc=$row['pack_desc'];
					   	  $days=$row['days'];
					   	   $nights=$row['nights'];
					   	    $pack_cost=$row['pack_cost'];
					   	 ?>
						 <p><center><b><?php echo $city;?></b></center></p></div><br>
						  <p>We provide this package for<b> <?php echo $days;?>Days</b> and <b> <?php echo $nights;?>Nights</b></p>
						 <p><?php echo $pack_desc;?></p><br>
						 <p>Cost : <?php echo $pack_cost;?></p>
					   </div>
					
					<h4 class="m_5"><a href="#">Package<?php echo $row['id']; ?></a></h4>
				    
				</div>
				
				<?php $i++; } }
				?>

				<?php if(strcmp($cat,"Ad ")==0) {  ?>
				<h3 class="m_2">Adventures</h3>
				<?php
		$query="SELECT * FROM adventure WHERE city='$city'";  
		$result = mysqli_query($con,$query);
		$i=4;
		while($row = mysqli_fetch_assoc($result)) 
		{ 
 ?>
				<div class="col-md-3 team1">
				  <a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>">
				  <img src="<?php echo $row['advimg']; ?>" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog<?php echo $i;?>" class="mfp-hide" style="background-color: white;  margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center>About <?php echo $row['advname']; ?></center></h2>
					   	 <?php
					   	 $adv_desc=$row['advdesc'];
					   	  ?>
						 <p><center><b><?php echo $city;?></b></center></p></div><br>
						 <p><?php echo $adv_desc;?></p><br>
					   </div>
					
					<h4 class="m_5"><a href="#"><?php echo $row['advname']; ?></a></h4>
				    
				</div>
				
				<?php $i++; }  }
				?>

				<?php if(strcmp($cat,"placetovisit ")==0) {  ?>
				<h3 class="m_2">Places</h3>
				<?php
		$query="SELECT * FROM place WHERE city='$city'";  
		$result = mysqli_query($con,$query);
		$i=4;
		while($row = mysqli_fetch_assoc($result)) 
		{ 
 ?>
				<div class="col-md-3 team1">
				  <a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>">
				  <img src="<?php echo $row['placeimg']; ?>" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog<?php echo $i; ?>" class="mfp-hide" style="background-color: white;  margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center>About <?php echo $row['placename']; ?></center></h2>
					   	 <?php
					   	 $place_desc=$row['placedesc'];
					   	  ?>
						 <p><center><b><?php echo $city;?></b></center></p></div><br>
						 <p><?php echo $place_desc;?></p><br>
					   </div>
					
					<h4 class="m_5"><a href="#"><?php echo $row['placename']; ?></a></h4>
				    <p class="m_6"></p>
				</div>
				
				<?php $i++;} }
				?>


				
			</div>
			<div class="row">
				<div class="col-md-4 team_bottom">
				  <ul class="team_list">
					<h4>BENEFITS OF OUR PACKAGE!</h4>
		            <li><a href="#">Why???</a><p>Tours can sometimes be a great way to travel, or they can be a disaster. Like most decisions, trying to decide if you should book a tour involves weighing the pros and cons. Why should you consider taking a tour? Tours aren’t for everyone, but the advantages of taking a tour can enhance your trip.</p></li>
		            <li><a href="#">Planning</a><p>With a tour, the planning is handled for you. Someone else puts together the itinerary, so you don’t have to worry about what to see or how much time to spend in any one place. Having someone else make the planning decisions can make things more simple and allow you to sit back and enjoy your vacation.</p></li>
		            <li><a href="#">Transportation</a><p>Transportation is a key part of most tours. The tour company takes you from point A to point B, so you won’t have to worry about getting lost. You won’t have to deal with confusing public transportation or taxi drivers who might not speak the same language.</p></li>
		           
		          </ul>
				</div>
				<div class="col-md-8">
					<ul class="team_list">
					 <h4>Vision Statement</h4>
					 <p class="m_7">The MPS Tourism Authority promotes and develops the tourism and motion picture industries to stimulate Virginia's economy and enhance the quality of life of all people.</p>
		             <img src="images/team5.jpg" class="img-responsive" alt=""/>
		          </ul>
				</div>
			</div>
		</div>
	   </div>
	  </div>
</body>	
</html>
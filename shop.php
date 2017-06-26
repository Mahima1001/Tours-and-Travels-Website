<?php
session_start();
$_SESSION['hotelname']="";
$_SESSION['new_cost']="";
$image_cat=$_SESSION['image_cat'];
$image_city=$_SESSION['image_city'];
$user=$_SESSION['loginuser'];
include_once('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Shop :: w3layouts</title>
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
						    	<?php if(strcmp($user,"admin@gmail.com")==0){ ?>
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
	    		  <!-- start search-->
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
		<?php
		if(strcmp($image_cat,"hotels ")==0) 
		{               
                           //provide else if for ad, packages,etc.
		$query="SELECT * FROM hotels WHERE cityname='$image_city'";  
		$result = mysqli_query($con,$query);
		$i=1;
		while($row = mysqli_fetch_assoc($result)){ 

			if($i==1){
		?>	
			<div class="row shop_box-top"><?php } 
			if($i==5){?>
			<div class="row"><?php } ?>
				<div class="col-md-3 shop_box"><a href="shop1.php?name=<?php echo $row['hotelname'];?>">

					<img src="<?php echo $row['htlimgurl']; ?>" class="img-responsive" alt=""/>
					<span class="sale-box">
						<span class="sale-label"><?php echo $row['hoteltype'];?><span style="color:gold;">*</span></span>
					</span>
					
					<div class="shop_desc">
						<h3><a href="#"><?php echo $row['hotelname']; ?></a></h3>
						<p>Provides you great comfort!</p>
						
				    </div>
				</a></div><?php if($i==8){?></div><?php } if($i==4){?></div><?php }$i++;}}?>
				
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
	  
</body>	
</html>
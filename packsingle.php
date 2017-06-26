<?php
session_start();
$name=$_SESSION['loginuser'];
if(strcmp($_SESSION['packid'],"")==0)
{
$packid=$_GET['id'];
$_SESSION['packid']=$packid;
}
$packid=$_SESSION['packid'];
include_once('config.php');
$query="SELECT * FROM package WHERE id='$packid'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$_SESSION['idsel']=$row['id'];
if(strcmp($_SESSION['noroom'],"NoRoom")==0)
{
	$_SESSION['noroom']="";
	?><script>alert("no room");</script><?php
}

if(strcmp($_SESSION['new_cost'],"")!=0)
{   
$hi=$_SESSION['new_cost'];
	
	?><script>alert('<?php echo $hi; ?>');</script><?php
	$_SESSION['new_cost']="";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://kylemitofsky.com/libraries/libraries/datepicker.css">
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

<script type="text/javascript" src="http://kylemitofsky.com/libraries/libraries/bootstrap-datepicker.js"></script>
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
     <!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!--//details-product-slider-->	
</head>
<body>
	
     <div class="main" style="background-color: white;">
      <div class="shop_top">
		<div class="container">
			<div class="row">
			<div class="col-md-12" style="background-color: black; margin-top: -70px; width:100%; height:100px;position: absolute; margin-left: -110px; padding-top: 20px;">
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
            <!-- start search-->
              
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
				<div class="col-md-9 single_left" style="margin-top: 80px;">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
							<!--Add img here-->
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo $row['pack_image']; ?>" />
									<img class="etalage_source_image" src="<?php echo $row['pack_image']; ?>" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single1.jpg" />
								<img class="etalage_source_image" src="images/single1.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single3.jpg" />
								<img class="etalage_source_image" src="images/single3.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single4.jpg" />
								<img class="etalage_source_image" src="images/single4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single5.jpg" />
								<img class="etalage_source_image" src="images/single5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single6.jpg" />
								<img class="etalage_source_image" src="images/single6.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/single7.jpg" />
								<img class="etalage_source_image" src="images/single7.jpg" />
							</li>
						</ul>
					    </div>
				        <!-- end product_slider -->
				        <div class="single_right">
				        	<h3>PACKAGE<?php echo $row['id']; ?> </h3><br>
				        	<h4 class="m_12">City : <?php echo $row['cityname']; ?></h4>
				        	
				        	<ul class="options">
								<h4 class="m_12">Duration</h4>
								<li><a href="#">Days:<?php echo $row['days']; ?> and Nights: <?php echo $row['nights']; ?> </a></li>
								
							</ul>

							<h4 class="m_12">Package Cost</h4>
							<h3><?php echo $row['pack_cost']; ?>/-</h3><br/>

							<h4 class="m_12">Hotels U may Like to Visit</h4>
							<ul>
								<?php $hotelsinc= $row['hotelname'];
								$search_exploded = explode ( ",", $hotelsinc ); 
								$i=4;
								$x = 0; foreach( $search_exploded as $search_each ) 
								{$x++;
									if($x>1){
								 $queryhtl = "SELECT * FROM hotels WHERE hotelname='$search_each'";
								$resulthtl= mysqli_query($con,$queryhtl);
								$runrows = mysqli_fetch_assoc( $resulthtl );
								$imagesrc=$runrows['htlimgurl'];?>
								<a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>"><img src='<?php echo $imagesrc; ?>' style="width:70px; height:70px; margin-left: 20px; "></a>
								<div id="small-dialog<?php echo $i; ?>" class="mfp-hide" style="background-color: white; width: 100%;height: 100% margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center><b>About <?php echo $runrows['hotelname'] ?></b></center></h2>
					   	 
					   	 	
					   	 	<img style="width:300px; height:300px; background-color: red;" src="<?php echo $runrows['htlimgurl']; ?>" >
					   	 	
					   	 	<p style="margin-left: 400px; margin-top: -300px; font-size: 15px; 
					   	 	width: 900px;height: auto;">
					   	 	<?php echo $runrows['hoteltype']; ?><span style="color:gold">*</span>&nbsp;
					   	 	Hotel<br>
					   	 	Location : &nbsp;<?php echo $runrows['hotellocation']; ?><br>
					   	 	Contact : &nbsp;<?php echo $runrows['contact']; ?><br>
					   	 	<br>
					   	 	<?php echo $runrows['hoteldesc']; ?>

					   	 	</p>
					   	 
					   	 
					   </div>
					   </div>


								<?php $i++;}}

								  ?>
							</ul>
							<br>
							<br>

							<h4 class="m_12">Adventures that you can also add</h4>
							<ul>
								<?php
								$city= $_SESSION['image_city']; 
								$queryadv="SELECT * FROM adventure WHERE city='$city'";
								$resultadv= mysqli_query($con,$queryadv);
								
								while($rows=mysqli_fetch_assoc($resultadv))
								{
									$imageadv = $rows['advimg'];?>

								
								
								<a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>"><img src='<?php echo $imageadv; ?>' style="width:70px; height:70px; margin-left: 20px; "></a>
								<div id="small-dialog<?php echo $i; ?>" class="mfp-hide" style="background-color: white;  margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center><b>About <?php echo $rows['advname'] ?></b></center></h2>
					   	 <img style="width:300px; height:300px; background-color: red;" src="<?php echo $rows['advimg']; ?>" >
					   	 	
					   	 	<p style="margin-left: 400px; margin-top: -300px; font-size: 15px; 
					   	 	width: 900px;height: auto;">
					   	 	
					   	 	Cost : &nbsp;<?php echo $rows['cost']; ?><br><br>
					   	 	<?php echo $rows['advdesc']; ?>
					   	 	</p>
					   </div>
					   </div>


								<?php $i++;}

								  ?>
							</ul>
							<br>
							<br>

							<h4 class="m_12">Places U may like to visit</h4>
							<ul>
								<?php
								$city= $_SESSION['image_city']; 
								$queryplace="SELECT * FROM place WHERE city='$city'";
								$resultplace= mysqli_query($con,$queryplace);
								
								while($rows=mysqli_fetch_assoc($resultplace))
								{
									$imageplace = $rows['placeimg'];?>
								<a class="popup-with-zoom-anim" href="#small-dialog<?php echo $i; ?>"><img src='<?php echo $imageplace; ?>' style="width:70px; height:70px; margin-left: 20px; "></a>
								<div id="small-dialog<?php echo $i; ?>" class="mfp-hide" style="background-color: white;  margin-left: auto; margin-right: auto; ">
					   <div class="pop_up2">
					   	 <h2><center><b>About <?php echo $rows['placename'] ?></b></center></h2>
					   	 <img style="width:300px; height:300px; background-color: red;" src="<?php echo $rows['placeimg']; ?>" >
					   	 	
					   	 	<p style="margin-left: 400px; margin-top: -300px; font-size: 15px; 
					   	 	width: 900px;height: auto;">
					   	
					   	 	<?php echo $rows['placedesc']; ?>
					   	 	</p>
					   </div>
					   </div>


								<?php $i++;}

								  ?>
							</ul>
							

							
				        	
				        </div>
				        <div class="clear"> </div>
				</div>
				<div class="col-md-3" style="margin-top: 80px;">
				  <div class="box-info-product" style="background-color:lightgray; width:450px; margin-left:-150px;">
					<center><p class="price2">Stay With Us!</p></center>
					<center><p style="margin-top:-10px; font-weight:bold;">with best deals &amp; discounts</p></center>
					 <?php if($_SESSION['loginuser']){?>
					<form method="post" action="bookroom.php">
					<table>
							<tr><td>
							<label style="margin-top:10px;">Choose Hotel</label>&nbsp;&nbsp;</td>
							<td>
							<?php $query="SELECT hotelname FROM package WHERE id='$packid'";
								$result= mysqli_query($con,$query);
								$rows = mysqli_fetch_assoc($result);
								$htlname=$rows['hotelname'];
								$search_exploded = explode ( ",", $htlname ); 
								$x = 0; foreach( $search_exploded as $search_each ) 
								{?>
								<input type="radio" name="hotelsel" id="hotelsel" value="<?php echo $search_each; ?>" checked><?php echo $search_each; ?>&nbsp;
								<?php }
							 ?> </td></tr>

							 <tr><td>
							<label style="margin-top:10px;">Places to visit</label>&nbsp;&nbsp;</td>
							<td>
							<?php 
							$city=$_SESSION['image_city'];
							$query="SELECT placename FROM place WHERE city='$city'";
								$result= mysqli_query($con,$query);
								while($rows = mysqli_fetch_assoc($result))
								{
									$place=$rows['placename'];?>
									<input type="checkbox" name="placesel[]" value="<?php echo $place; ?>"><?php echo $place; ?> &nbsp;
								<?php }
							 ?> </td></tr>

							 <tr><td>
							<label style="margin-top:10px;">Adventures</label>&nbsp;&nbsp;</td>
							<td>
							<?php 
							$city=$_SESSION['image_city'];
							$query="SELECT advname FROM adventure WHERE city='$city'";
								$result= mysqli_query($con,$query);
								while($rows = mysqli_fetch_assoc($result))
								{
									$adv=$rows['advname'];?>
									<input type="checkbox" name="advsel[]" value="<?php echo $adv; ?>"><?php echo $adv; ?> &nbsp;
								<?php }
							 ?> </td></tr>

							<tr><td><label style="margin-top:10px;">Check In</label></td>
							<td><input id="dp1" name="dp1"  placeholder="Datum"  type="date" min="" style="width:215px;"></td></tr>
							
					       <tr style="margin-top: 20px;"><td><label style="margin-top:10px;">Check Out</label></td>
						   <td style="margin-top: 20px;"><input id="dp2" name="dp2" placeholder="Datum"  type="date" min="" style="width:215px;"></td></tr></table>
						  
							<button style="margin-top:10px;" type="submit" name="Submit" class="exclusive">
							   <span>Book Now!</span>
							</button>
									</form>
							<?php } else { ?>
							<form method="post" action="login.php">
							<table>
							<tr><td>
							<label style="margin-top:10px;">Choose Hotel</label>&nbsp;&nbsp;</td>
							<td>
							<?php $query="SELECT hotelname FROM package WHERE id='$packid'";
								$result= mysqli_query($con,$query);
								$rows = mysqli_fetch_assoc($result);
								$htlname=$rows['hotelname'];
								$search_exploded = explode ( ",", $htlname ); 
								$x = 0; foreach( $search_exploded as $search_each ) 
								{?>
								<input type="radio" name="hotelsel" id="hotelsel" value="<?php echo $search_each; ?>" checked><?php echo $search_each; ?>&nbsp;
								<?php }
							 ?> </td></tr>

							 <tr><td>
							<label style="margin-top:10px;">Places to visit</label>&nbsp;&nbsp;</td>
							<td>
							<?php 
							$city=$_SESSION['image_city'];
							$query="SELECT placename FROM place WHERE city='$city'";
								$result= mysqli_query($con,$query);
								while($rows = mysqli_fetch_assoc($result))
								{
									$place=$rows['placename'];?>
									<input type="checkbox" name="placesel" value="<?php echo $place; ?>"><?php echo $place; ?> &nbsp;
								<?php }
							 ?> </td></tr>

							 <tr><td>
							<label style="margin-top:10px;">Adventures</label>&nbsp;&nbsp;</td>
							<td>
							<?php 
							$city=$_SESSION['image_city'];
							$query="SELECT advname FROM adventure WHERE city='$city'";
								$result= mysqli_query($con,$query);
								while($rows = mysqli_fetch_assoc($result))
								{
									$adv=$rows['advname'];?>
									<input type="checkbox" name="advsel" value="<?php echo $adv; ?>"><?php echo $adv; ?> &nbsp;
								<?php }
							 ?> </td></tr>

							<tr><td><label style="margin-top:10px;">Check In</label></td>
							<td><input id="dp1" name="dp1"  placeholder="Datum"  type="date" min="" style="width:215px;"></td></tr>
							
					       <tr style="margin-top: 20px;"><td><label style="margin-top:10px;">Check Out</label></td>
						   <td style="margin-top: 20px;"><input id="dp2" name="dp2" placeholder="Datum"  type="date" min="" style="width:215px;"></td></tr></table>
						  
							<button style="margin-top:10px;" type="submit" name="Submit" class="exclusive">
							   <span>Book Now!</span>
							</button>
							 
							</form>
							<?php }?>
							<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("dp1").setAttribute("min", today);
</script>
<script>

document.getElementById("dp1").onchange = function () {
    var input = document.getElementById("dp2");
    input.setAttribute("min", this.value);
	
}
</script>
				   </div>
			   </div>
			</div>		
			<div class="desc">
			   	<h4>Description</h4>
			   	<p><?php echo $row['pack_desc'] ; ?></p>
			</div>
	     </div>
	   </div>
	  </div>
	  <script>
	  var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
var checkin = $('#dpd1').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  checkin.hide();
  $('#dpd2')[0].focus();
}).data('datepicker');
var checkout = $('#dpd2').datepicker({
  onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  checkout.hide();
}
</script>
	 </body>	
</html>
<?php
session_start();
$name=$_SESSION['loginuser'];
if(strcmp($_SESSION['hotelname'],"")==0)
{
$hotelname=$_GET['name'];
$_SESSION['hotelname']=$hotelname;
}
$hotelname=$_SESSION['hotelname'];
include_once('config.php');
$query="SELECT * FROM hotels WHERE hotelname='$hotelname'";
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
	$_SESSION['new_cost']="";
	?><script>alert('<?php echo $_SESSION['new_cost']; ?>');</script><?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://kylemitofsky.com/libraries/libraries/datepicker.css">
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
			<div class="row">
				<div class="col-md-9 single_left">
				   <div class="single_image">
					     <ul id="etalage">
							<li>
							<!--Add img here-->
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo $row['htlimgurl']; ?>" />
									<img class="etalage_source_image" src="<?php echo $row['htlimgurl']; ?>" />
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
				        	<h3><?php echo $row['hotelname']; ?> </h3>
				        	<p class="m_10"><?php echo $row['hotellocation']; ?></p>
				        	<ul class="options">
								<h4 class="m_12">Contact</h4>
								<li><a href="#"><?php echo $row['contact']; ?></a></li>
								
							</ul>
							<h3><?php echo $row['hoteltype']; ?> <span style="color:gold;">*</span>&nbsp; Hotel </h3><br/>
				        	</div>
				        <div class="clear"> </div>
				</div>
			</div>		
			<div class="desc">
			   	<h4>Description</h4>
			   	<p><?php echo $row['hoteldesc'] ; ?></p>
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
<?php
session_start();
$city=$_SESSION['image_city'];
$cat=$_SESSION['image_cat'];
$_SESSION['packid']="";
include_once('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="main1.css">
		<link rel="stylesheet" href="shopcss2.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link src="shopcss1.css" rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

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
	 
		<style>
.mySlides {display:none;}
</style>
</head>

<body>
	
			<img class="mySlides" src="images/ss1.jpg" style="width:100%; height:300px;">
			<img class="mySlides" src="images/ss2.jpg" style="width:100%; height:300px;">
			<img class="mySlides" src="images/ss3.jpg" style="width:100%; height:300px;">
			<img class="mySlides" src="images/ss4.jpg" style="width:100%; height:300px;">
			<img class="mySlides" src="images/ss5.jpg" style="width:100%; height:300px;">
			
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


     <div class="main">
      <div class="shop_top">
		<div class="container">
		<?php
		
		$query="SELECT * FROM package WHERE cityname='$city'";  
		$result = mysqli_query($con,$query);
		$i=1;
		while($row = mysqli_fetch_assoc($result)){ 

			if($i==1){
		?>	
			<div class="row shop_box-top"><?php } 
			if($i==5){?>
			<div class="row"><?php } ?>
				<div class="col-md-3 shop_box"><a href="packsingle.php?id=<?php echo $row['id'];?>">

					<img src="<?php echo $row['pack_image']; ?>" class="img-responsive" alt=""/>
					
					<span class="sale-box">
						<span class="sale-label"><?php echo $row['days'];?>D-<?php echo $row['nights'];?>N<span style="color:gold;">*</span></span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><?php echo $row['days']; ?>Days and <?php echo $row['nights']; ?>Nights</a></h3>
						
						<span class="actual">Cost: <?php echo $row['pack_cost']; ?>/-</span><br>
				    </div>
				</a></div><?php if($i==8){?></div><?php } if($i==4){?></div><?php }$i++;}
				
				?>
				
		 </div>
	   </div>
	  </div>
	
</body>	
</html>
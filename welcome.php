<?php
  session_start();
?>
<html>
  <head>
      <meta charset="utf-8">
     <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="wellcome.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <title>Admin Page</title>
  </head>
  <body>
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
  <?php
  $con = mysqli_connect("localhost","root","","toursntravellism");
      if (!$con)
      {
        die('Could not connect: ' . mysqli_error());
      }
      $query_item="SELECT * FROM city";
      $result_item=mysqli_query($con,$query_item);
      $i=1;
  while($row_item = mysqli_fetch_assoc($result_item))
  {
    $cityname= $row_item['cityname'];
    $hotelimage=$row_item['hotelimage'];
    $adimage=$row_item['adimage'];
    $packageimage=$row_item['packageimage'];
    $placeimage=$row_item['placeimage'];
  ?>
<h1 id="a" style="margin-top: 80px;"><?php echo $cityname;?></H1>
<div class="container" style="background-color: white;">
  <br>
  <div id="myCarousel<?php if($i!=1)echo $i;?>" class="carousel slide" data-ride="carousel<?php if($i!=1)echo $i;?>">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel<?php if($i!=1)echo $i;?>" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel<?php if($i!=1)echo $i;?>" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div id="abc"><a href="imagecategory.php?Category=About & city=<?php echo$cityname;?>"><img id="abc"src="" alt="Chania"></a><h2 class="c1" style="width: 100%;"><span>About &nbsp; <?php echo $cityname;  ?></span></h2></div>
        <div id="abc"><a href="imagecategory.php?Category=hotels & city=<?php echo$cityname;?>"><img id="abc"src="<?php echo $hotelimage;?>" alt="Chania"></a><h2 class="c2"><span>Hotels</span></h2></div>
        <div id="abc"><a href="imagecategory.php?Category=Ad & city=<?php echo$cityname;?>"><img id="abc"src="<?php echo $adimage;?>" alt="Chania"></a><h2 class="c3"><span>Adventures</span></h2></div>
     </div>

      <div class="item">
    <div id="abc"><a href="imagecategory.php?Category=package & city=<?php echo$cityname;?>"><img id="abc"src="<?php echo $packageimage;?>" alt="Chania"></a><h2 class="c1" ><span>Packages</span></h2></div>
        <div id="abc"><a href="imagecategory.php?Category=placetovisit & city=<?php echo$cityname;?>"><img id="abc"src="<?php echo $placeimage;?>" alt="Chania"></a><h2 class="c2"><span>Places to visit</span></h2></div>
        <div id="abc"><a href="imagecategory.php?Category=knowmore&city=<?php echo$cityname;?>"><img id="abc"src="images/router.jpg" alt="Chania"></a><h2 class="c3"><span>Know More..</span></h2></div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel<?php if($i!=1)echo $i;?>" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel<?php if($i!=1)echo $i;?>" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<?php
$i++;
}?>
    
  </body>
</html>

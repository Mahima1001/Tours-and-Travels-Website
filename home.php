<?php
session_start();
$_SESSION["search"]="false";
$_SESSION['registered']="";
$_SESSION['login']="";
$_SESSION['ret']="here";
if(strcmp($_SESSION['querydone'],"true")==0)
{
  $_SESSION['querydone']="";
  ?><script>alert("Message successfully send");</script>><?php
}


if(strcmp($_SESSION['nocity'],"no")==0)
{
  $_SESSION['nocity']="";
  ?><script>alert("City not Found");</script>><?php
}
?>
<!DOCTYPE html >
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
<!--<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.js"></script>  
<script src="jquery/jquery2.0.3.min.js"></script>
<script src="jquery/angular.min.js"></script>

<script>
    var app = angular.module('myApp',[]);
    app.controller('cntrl',function($scope,$http){
        $scope.search = function(){
            
            $http.post("find.php",{'a':$scope.keywords})
            .success(function(data){
                if(data!='')
                    {
                        $scope.data1 = data;
                        alert($scope.data1);
                       
                    }
                else alert("Not Found!");
            

            });
        }
        
        });
</script>


<html lang="en" ng-app = "myApp">
<script src="jquey/angular.min.js"></script>
<head>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assetss/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assetss/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assetss/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



    </head>
<body ng-controller="cntrl">
     <!-- NAV SECTION -->


     
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container1">
       
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> MPS TOURS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                	
                    <li><div>
            <div  ng-repeat ="doc in data1" >
                <div >{{ doc.email }}</div>
                
            </div>
            </div></li>
                    <li><a href="#projects">PROJECTS</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                	<li>
                    <div class="container" style="width: 540px; margin-right: 50px;"  >
            <div class="row" >
              <div class="col-md-12" >
              <div class="header_right"  >
                  <!-- start search-->
                   
                      <div class="search-box" ng-app="myapp" ng-controller="usercontroller" >
                            <div id="sb-search" class="sb-search" style="margin-top: 0px; position: absolute;"  >  <!-- for search button-->
                                
                                <form method="POST" action="welcome2.php">
                                    <input class="sb-search-input" name="country" id="country" ng-model="country"  ng-keyup="complete(country)" placeholder=" Search here ..." value="">
                                    <script>
    $(document).ready(function(){
        function displayLocation(latitude,longitude){
        var request = new XMLHttpRequest();

       var method = 'GET';
       var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true';
       var async = true;

       request.open(method, url, async);
       request.onreadystatechange = function(){
       if(request.readyState == 4 && request.status == 200){
         var data = JSON.parse(request.responseText);
         //alert(request.responseText); // check under which type your city is stored, later comment this line
         var addressComponents = data.results[0].address_components;
         for(i=0;i<addressComponents.length;i++){
            var types = addressComponents[i].types
            //alert(types);
            if(types=="locality,political"){
              // alert(addressComponents[i].long_name);
               $("#country").val(addressComponents[i].long_name);
              // $('#country').html(location.results[0].addressComponents[i].long_name);
                // this should be your city, depending on where you are
             }
           }
        //alert(address.city.short_name);
       }
    };
   request.send();
 };

 var successCallback = function(position){
 var x = position.coords.latitude;
 var y = position.coords.longitude;
 displayLocation(x,y);
  };


 navigator.geolocation.getCurrentPosition(successCallback);

  });
 </script>
                                    <input class="sb-search-submit" ng-click="search()" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                    <ul class="list-group" ng-model="hidethis" ng-hide="hidethis">  
                          <li class="list-group-item" ng-repeat="countrydata in filterCountry" ng-click="fillTextbox(countrydata)">{{countrydata}}</li>  
                     </ul>  
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
                     <li><a class="active-icon c1" style="background-color: black; margin-top: 0px; margin-left: -50px; position:relative;" href="#"> </a>     <!--for login button-->
                        <ul class="sub-icon1 list" style="margin-top: -24px;" >
                          <div class="product_control_buttons">
                            <a href="#"><img src="images/edit.png" alt=""/></a>
                                <a href="#"><img src="images/close_edit.png" alt=""/></a>
                          </div>
                           <div class="clear"></div>
                          <li class="list_img"><img src="images/1.jpg" alt=""/></li>
                          <li class="list_desc"><h4><a href="#">MPS Tours</a></h4><span class="actual"></span></li>
                          <div class="login_buttons">
                              <?php if(strcmp($_SESSION['loginuser'],"")!=0){ ?>
                             <div class="check_button"><a href="start.php">Check out</a></div>
                             <?php } else{ ?>
                             
                             <div class="login_button"><a href="login.php">Login</a></div><?php
                            }?>

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
              </li>
                	
                		 
                </ul>
            </div>
           
        </div>
         
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
     
    <div id="home-sec">   
    <div class="container1"  >
        <div class="row text-center">
            <div  class="col-md-121" >
         <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/1.jpg" alt="" />
                            
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt="" />
                            
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                            
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                </div>
                 
            </div>
        </div>
    </div>
         </div>
    
    
    <section  >
        <div class="container1">
            

         <div class="row text-center">
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-fax fa-4x"></i>
                  <h1>Awesome Service </h1>
                      <p>
                                MPS TOURS provides you with the best services and comfort
                                and get all the benefits and discounts from our package. You will enjoy it!
                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-tree fa-4x"></i>
                 <h1>24x7 Support </h1>
                      <p>
                                We are always here to support you. You can contact us anytime.
                                We provide you with best services and comfort 24*7.
                                Your safety is our concern!

                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa fa-lock fa-4x"></i>
                 <h1>Awesome Packages </h1>
                      <p>
                                MPS TOURS provide you the best package and cheap cost.
                                We provide various discounts and offers related to your package and previous experience. 
                            </p>
             </div>
         </div>
          

        </div>
    </section>

     <!--END HOME SECTION-->


    <div class="container1">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
   
 <!--PROJECTS SECTION-->

      <section  id="projects">
           <div class="container1">
<div class="row text-center">
                <div class="text-center">
                    <div class="col-md-4 col-sm-4 alert-info">
                            <h4>Our Projects</h4>
                       <p>
                                <b><u>Vision</u></b><br>Leading sustainable tourism development for inclusive economic growth in South Africa.<br>
                                
                                <b><u>Mission</u></b><br>
                             To grow an inclusive and sustainable tourism economy through: 

                                ->Good corporate and cooperative governance<br>
                                ->Strategic partnerships and collaboration<br>
                                ->Innovation and knowledge management<br>
                                ->Effective stakeholder communications    
                            </p>
                            
                        
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                     <h4>The Grand Hotel</h4>
                       <p>
                                It is indeed an honour to accommodate you at The Grand Hotel. We don't claim to be the best, but we believe in growth – a growth sustained by the valuable feedback.
                            </p>  
                                &nbsp;&nbsp;  <img class="img-responsive" src="assets/img/4.jpg" alt="">
                           
                    </div>
                   
                   <div class="col-md-4 col-sm-4 text-center">
                     <h4>The Royal Palace</h4>
                       <p>
                                Royal Palace is a flagship venture in the heart of Malakpet, Hyderabad. The property is drawing potential owners from all over Hyderabad due to a number of tourist.
                            </p>  
                                &nbsp;&nbsp;  <img class="img-responsive" src="assets/img/4.jpg" alt="">
                           
                    </div>
                </div>
                  </div>
               </div>
      </section>

    <!--END PROJECTS SECTION-->
    <div class="container1">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--ABOUT SECTION-->
    <section  id="about">
           <div class="container1">
<div class="row text-center">
                <div class="text-center">
                   
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" style="width: 200px;" src="uploads/Mahima.png" alt="">
                           <h3><strong>Mahima Bhootra</strong> </h3>
                    </div>
                   
                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" style="width:200px; height:200px;" src="uploads/div b.jpg" alt="">
                           <h3><strong>Shreya Pandya</strong> </h3>
                           
                    </div>

                    <div class="col-md-4 col-sm-4 ">
                        <img class="img-circle" style="width:200px; height:200px;" src="uploads/div b.jpg" alt="">
                           <h3><strong>Pavan Meragu</strong> </h3>
                           
                    </div>

                     <div class="col-md-4 col-sm-4 alert-success" style="width:600px; margin-left:-100px;">
                            <h4>Who We Are ?</h4>
                       <p>
                                MPS TourS Company was founded in 2007 by Mahima Bhootra, Shreya Pandya and Pavan Meragu. Mahima and Shreya are the current directors of the company while Pavan remains as an Associate. We are a small, specialist consultancy, offering an experienced team of tourism consultants with a strong track record in tourism planning, development and marketing. We have offices in India.

Although we have been established for many years and thrive on regular repeat business, we gain new clients virtually every month and would be delighted to consider how we can help you.
                            </p>
                            
                            
                    </div>
                </div>
                  </div>
               </div>
      </section>
    <!--END ABOUT SECTION-->
    <div class="container1">
        <div class="row text-center">
             <span class="line-sep ">
        ----------X------------X----------X-------------
    </span>
        </div>
    </div>
    <!--CONTACT SECTION-->
    <section  id="contact">
           <div class="container1">
<div class="row text-center">
                <div class="text-center">
                    <div class="col-md-6 col-sm-6">
                   <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999841.293321206!2d-75.80920404999999!3d42.75594204999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew+York!5e0!3m2!1sen!2s!4v1395313088825" s=""></iframe>

                </div>
                   <div class="col-md-6 col-sm-6 alert-danger">
                            <h4>OUR LOCATION</h4>
                 
                    <p>
                         <strong> Address: </strong> &nbsp;SVNIT, SURAT,GUJARAT, Pin-395007 .  
                        <br>
                        Sardar Vallabhbhai NATIONAL Institute of Technology.
                                      
                    </p>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <form method="post" action="sendquery.php">
                                    <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-121 ">
                                <div class="form-group">
                                    <textarea name="msg" id="msg" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Submit Request</button>
                                </div>
                            </div>
                        </div>
                            
                            
                    </div>
                    
                     
                </div>
                  </div>
               </div>
      </section>
    <!--END CONTACT SECTION-->
  
    

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
<script>  

 var app = angular.module("myapp",[]);  
 var str="";
 var cities=[];
 app.controller("usercontroller", ['$scope', '$http', function ($scope, $http) {
$http.get("ajax.php")
                .success(function(data){
                    $scope.data = data;
                    //alert("hiiiiii");
                    
                    for (var key in data) {
     cities.push(data[key].cityname);
    
  }             
                    
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });  
      $scope.countryList =  
                    cities;
          
                
      $scope.complete = function(string){  
           $scope.hidethis = false;  
           var output = [];  
           angular.forEach($scope.countryList, function(country){  
                if(country.toLowerCase().indexOf(string.toLowerCase()) >= 0)  
                {  
                     output.push(country);  
                }  
           });  
           $scope.filterCountry = output;  
      }  
      $scope.fillTextbox = function(string){  
           $scope.country = string;
           $scope.hidethis = true;  
      }  
 }]);
 alert("hiiii"+output);  
 </script>  
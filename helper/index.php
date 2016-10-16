<?php
include 'pass.php';
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!doctype html>
<html lang="en" class="no-js">
<head>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
   
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
	<!-- End WOWSlider.com HEAD section -->
	<title>Smoothie Ship</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/form-elements.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="assets/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/apple-touch-icon-57-precomposed.png">

        
<style type="text/css">
	
	a:hover
	{
		text-decoration: none;
	}
	a:active
	{
		text-decoration: none;
	}
</style>

<script>
function testSubmit()
{
  var x = document.forms["myform"]["phone"];
  var y = document.forms["myform"]["pin"];
  var a = document.forms["myform"]["name"];
  var b = document.forms["myform"]["email"];
  var atpos = b.value.indexOf("@");
  var dotpos = b.value.lastIndexOf(".");

  if(x.value =="" || y.value=="" || a.value=="" || b.value=="")
  {
    alert('Enter all the fields!!');
    return false;
  }
  if(x.value.length<10 || isNaN(x.value))
  {
  	alert('Enter valid phone no!');
  	return false;
  }
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.value.length) 
    {
        alert("Not a valid e-mail address!!");
        return false;
    }
  return true;
}
function submitForm()
{
  if(testSubmit())
   { document.forms["myform"].submit(); //first submit
    document.forms["myform"].reset(); //and then reset the form values
  }
}	
function testSubmit1()
{
  
  var y = document.forms["myform1"]["pin1"];
  if(y.value=="")
  {
    alert('Enter all the fields!!');
    return false;
  }
  return true;
}
function submitForm1()
{
   if(testSubmit1()) 
   { document.forms["myform1"].submit(); //first submit
    document.forms["myform1"].reset(); //and then reset the form values
  }
}
</script>

</head>
<body>
 			<!--	<select name="country" class="countries" id="countryId">
				    <option value="">Select Country</option>
				</select>
				<select name="state" class="states" id="stateId">
				     <option value="">Select State</option>
				</select>
				<select name="city" class="cities" id="cityId">
				   <option value="">Select City</option>
				</select>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
				<script src="http://lab.iamrohit.in/js/location.js"></script>   
-->
	
	<div class="modal fade" id="modal-register1" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label1">Login</h3>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="login.php" name="myform1"
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="email1">Email</label>
	                        	<input type="text" name="email1" placeholder="Email..." class="email1 form-control" id="email1">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="pin1">Password</label>
	                        	<input type="password" name="pin1" placeholder="Password..." class="pin1 form-control" id="pin1">
	                        </div>
	                     
	                        <button type="button" class="btn" onclick="submitForm1()">Login</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
	 <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">Sign up</h3>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="signup.php" method="post" class="registration-form" 
	                    name="myform">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Name..." class="name form-control" id="name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="phone">Phone No</label>
	                        	<input type="text" name="phone" placeholder="PhoneNo..." class="phone1 form-control" id="phone" maxlength="10">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="email">Email</label>
	                        	<input type="email" name="email" placeholder="Email..." class="email form-control" id="email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="pin">Password</label>
	                        	<input type="password" name="pin" placeholder="Password..." class="pin form-control" id="pin">
	                        </div>
	                        
               
	                

	                     
	                        <button type="button" class="btn" onclick="submitForm()">Sign me up!</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
	<div class="header" >
	<div class="top-header" >		
		<div class="container">
		
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="index.html"><span>H</span>elp<span>F</span>or<span>W</span>omen</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="index.html"  >Home</a></li>
						<li><a class="color2" href="games.html"  >Games</a></li>
						<li><a class="color3" href="reviews.html" >Reviews</a></li>
						<li><a class="color4" href="404.html" >News</a></li>
						<li><a class="color5" href="blog.html"  >Blog</a></li>
						<li><a class="color6" href="contact.html" >Contact</a></li>
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
				
				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->

 <div class="banner" style="background:url('images/dark.png');">
<div class="container" style="background:url('images/dark.png');">	
		  <div class="wmuSlider example1" style="background:url('images/dark.png');">
			   <div class="wmuSliderWrapper" style="background:url('images/dark.png');">
			 <article style="position: absolute; width: 100%; opacity: 0;background:url('images/dark.png');"> 
				   	<div class="banner-wrap" style="background:url('images/dark.png');">
						<div class="banner-top" style="height:200px;background:url('images/dark.png');">
							<a class="cd-signin launch-modal"  href="#" data-modal-id="modal-register1" style="color:; margin-left:150px;font-size:50px;font-family:monotype corsiva">Login</a>
				
						</div>
						  <div class="" style="background:url('images/dark.png');">
						  <a class="cd-signup  launch-modal" href="#" data-modal-id="modal-register" style="color: ; margin-left:150px;font-size:50px;font-family:monotype corsiva;">Signup</a>
							
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
				   
			</article>
			 
			</div>
			 
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	
	</div>


  
                   
		<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<p class="footer-class">  Design by  <a href="http://w3layouts.com/" target="_blank">Team</a> </p>
			
		</div>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js"></script>
        
</body>
</html>
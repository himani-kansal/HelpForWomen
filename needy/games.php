<?php
include 'pass.php';
$conn=new mysqli($servername,$username,$password,$dbname);
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_SESSION['email']))
  {
  
  }
  else
  {
  header('Location:index.php');
  }





?>

<!DOCTYPE html>
<html>
<head>
<title>Women Helper</title>
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
</head>
<body> 
<!--header-->	
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >	
			<ul class="header-in">
				<li ><a href="#" >  Help</a></li>
				<li><a href="contact.html">   Contact Us</a></li>
				<li ><a href="#" >   How To Use</a></li>
			</ul>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<span style='font-weight:bold;color:blue;font-size:20px;margin-left:700px;'>".$_SESSION['name']."</span>"; ?>
    		
			<ul class="dropdown-menu">
    
   
    <hr />
    <li id="stt"><a   href="myaccount.php"  style="color:gray;">My Account</a></li>
    <li><a  href="logout.php"  style="color:gray;">Logout</a></li>
  </ul>
			
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<h1><a href="index.html"><span>H</span>elp <span>F</span>or<span>W</span>omen</a></h1>
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="index.html"  >Home</a></li>
						<li><a class="color3" href="reviews.html"  >Reviews</a></li>
						<li><a class="color6" href="map.php" >MAP</a></li>
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>

<!--content-->
	<div class="container">
			<div class="games">
				<h2> Categories</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="#" data-largesrc="images/fees.jpg" data-title="FEES" data-description='
						<form role="form" action="fees/submit.php" name="myform1" style="height:270px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">College Name</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	             
	                         <div class="form-group">
    
                <textarea class="textarea" name="descfees" id="descfees" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
           <div class="form-group">
                                <input type="file" name="image" class="image form-control" id="image" style="height:50px; border:none;">
                            </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
							<img class="img-responsive" src="images/fees.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/clothes.jpg" data-title="CLOTHES" data-description='
						<form role="form" action="clothes/submit.php" name="myform1" style="height:280px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	            
	             
	                         <div class="form-group">
    
                <textarea class="textarea" name="descclothes" id="descclothes" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
           <div class="form-group">
                                <input type="file" name="image" class="image form-control" id="image" style="height:50px; border:none;">
                            </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
							<img class="img-responsive" src="images/clothes.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/books.jpg" data-title="BOOKS"  data-description='
							
							<form role="form" action="login.php" name="myform1"  style="height:270px;overflow:scroll;"
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	               
	                       
	                         <div class="form-group">
    
                <textarea class="textarea" name="descbooks" id="descbooks" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
							<img class="img-responsive" src="images/books.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/shelter.jpg" data-title="Shelter"  data-description='
							
							<form role="form" action="login.php" name="myform1" style="height:280px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">Preferred Location</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">ID</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                         <div class="form-group">
    
                <textarea class="textarea" name="descshelters" id="descshelter" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
						<img class="img-responsive" src="images/shelter.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/caretaker.jpg" data-title="Caretaker"  data-description='
							

                             <form role="form" action="login.php" name="myform1" style="height:280px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	                  
	                    
	                        <div class="form-group">
    
                <textarea class="textarea" name="desccaretaker" id="desccaretaker" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
							<img class="img-responsive" src="images/caretaker.jpg" alt="img02"/>

						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/medical help.jpg" data-title="Medical Help"  data-description='	
						
                            <form role="form" action="login.php" name="myform1" style="height:280px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">Disease</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">ID</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                          <div class="form-group">
    
                <textarea class="textarea" name="desccaretaker" id="desccaretaker" placeholder="Write Description here..." style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        
           
          </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
						<img class="img-responsive" src="images/medical help.jpg" alt="img02"/>


						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/jobs.jpg" data-title="JOBS"  data-description='
							<form role="form" action="login.php" name="myform1" style="height:280px;overflow:scroll;" 
	                    method="post"  class="registration-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="name">Name</label>
	                        	<input type="text" name="name" placeholder="Your Name..." class="name form-control" id="name">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="age">AGE</label>
	                        	<input type="text" name="age" placeholder="Your Age..." class="name form-control" id="age">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">Resume</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="cname">ID</label>
	                        	<input type="text" name="cname" placeholder="College Name..." class="name form-control" id="cname">
	                        </div>
	                         <div class="form-group">
	                        	<label class="sr-only" for="cname">Descryption</label>
	                        	<textarea rows="20"></textarea>
	                        </div>
	                  
	                     
	                        <input type="submit" value="submit">
	                    </form>

						'>
						<img class="img-responsive" src="images/jobs.jpg" alt="img03"/>

						</a>
					</li>


					
					
					
					
					 <div class="clearfix"> </div>
					</ul>
				</div>
			</div>
		</div>
<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
	<!---->
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
			<p class="footer-class">  Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>

</body>
</html>
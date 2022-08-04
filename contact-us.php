<?php

session_start();
include "connextion.php";

if(isset($_POST["submit"])){

 $lname=$_POST["lname"];
 $email=$_POST["email"];
 $company=$_POST["company"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];

 $query="INSERT INTO customer(clname,cemail,ccompany,csubject,cmessage) VALUES('$lname','$email','$company','$subject','$message')";
    $result=mysqli_query($con,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happi supermarket</title>
  <link href="css/display.css" rel="stylesheet">
	<link rel="stylesheet" href="css/footer.css">
   <link href="css/header.css" rel="stylesheet">
   <link href="css/top.css" rel="stylesheet"> 
	<link href="css/theme.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
     <link href="css/home.css" rel="stylesheet"> 
     <link href="css/contact.css" rel="stylesheet">
     <link href="css/portfolio.css" rel="stylesheet"> 
     <link href="css/service.css" rel="stylesheet">
     <link href="css/front.css" rel="stylesheet"> 
    

</head>
<body style="background-color:lightgrey">
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">HAPPI </a><br>
                    <a class="navbar-brand" href="index.html">ONLINE SUPERMARKET</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <!-- <li><a href="about-us.html">About Us</a></li>-->
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Shopping</a></li>
                            <!--<li><a href="blog.html">News</a></li> -->
                            <li class="active"><a href="contact-us.php">Contact</a></li>     
                            <li><a href="login.php">Login</a></li>                    
                    </ul>
                </div>
            </div>
        </nav>
		
    </header>
    <div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
            </div> 

            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
               
                    <div class="col-sm-5 col-sm-offset-1">
                    <form  action="contact-us.php" id="main-contact-form" class="contact-form"  method="post" >
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="lname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                    
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" name="submit" value="submit message" class="btn btn-primary btn-lg" required="required">
                        </div>
                    </div>
                
            </div>
        </div>
        </form> 
    </section>
	<section id="bottom">            
	<div class="top-bar">
		<div class="container">
			    <div class="col-lg-12 col-sm-6">
				   <div class="social">
						<div class="social-share">
                            <p><h2>Follow us</h2></p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-skype"></i></a>
                   </div>
				   </div>
                </div>
			</div>
		</div>
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/all-in.js"></script>
	<script src="js/main.js"></script>
   
</body>
  </body>
</html>
﻿<!DOCTYPE html>
<html lang="el">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap core CSS -->
    	<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	
        <link rel="stylesheet" href="./css/app.css">
        
    </head>
    <body>
    
    	<!-- The navigation bar -->
    	<nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#intro">Brand Name</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#intro">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product">Products <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#location">Location <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        
        <!-- The intro section -->
    	<header id="intro" class="container-fluid">
    		<div class="content">
            	<h1 class="display-4">Welcome</h1>
            	<p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </p>
            </div>
        </header>
        
        <!-- The product section -->
        <div id="product" class="container-fluid">
        	<h2>We Offer</h2>
    		<div class="row">
    			<div class="col-lg-3 col-md-4 col-sm-6">
    				<a href="./tables/bread/bread.php"><img src="./img/bread.png" class="img-fluid" id="bread-link" alt="bread"></a>
    			</div>
            	<div class="col-lg-3 col-md-4 col-sm-6">
            		<a href="./tables/pie/pie.php"><img src="./img/pie.png" class="img-fluid" id="pie-link" alt="pie"></a>
    			</div>
    			<div class="col-lg-3 col-md-4 col-sm-6">
    				<a href="./tables/sweet/sweet.php"><img src="./img/sweet.png" class="img-fluid" id="sweet-link" alt="sweet"></a>
    			</div>
    			<div class="col-lg-3 col-md-4 col-sm-6">
    				<a href="./tables/milk/milk.php"><img src="./img/milk.png" class="img-fluid" id="milk-link" alt="milk"></a>
    			</div>
    			<div class="col-lg-3 col-md-4 col-sm-6">
    				<a href="./tables/drink/drink.php"><img src="./img/drink.png" class="img-fluid" id="drink-link" alt="drink"></a>
    			</div>
            </div>
        </div>
        
        <!-- The Google map section -->
        <div id="location" class="container-fluid">
        	<h2>Location</h2>
        	<div class="row">
    			<div class="col-lg-8 col-md-8 col-sm-12">
    				<div id="map" class="location-div"></div>
    			</div>
            	<div class="col-lg-4 col-md-4 col-sm-12">
            		<div class="location-div">
        				<p><img class="svg" src="./svg/si-glyph-call.svg"/> <a href="tel:2341022517">23410-22517</a> </p>
        				<p><img class="svg" src="./svg/si-glyph-pin-location-2.svg"/> Somewhere Nice</p>
    				</div>
    			</div>
            </div>
        </div>
        
        <!-- The contact section -->
        <div id="contact" class="container-fluid">
        	<h2>Contact</h2>
        	<form method="post" action="sendmail.php">
        		<div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="true">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSubject">Subject</label>
                    <textarea name="subject" class="form-control" id="exampleFormControlSubject" rows="1" placeholder="write a subject" required="true"></textarea>
                </div>
                
        		<div class="form-group">
                    <label for="exampleFormControlText">Text</label>
                    <textarea name="message" class="form-control" id="exampleFormControlText" rows="3" placeholder="write your message" required="true"></textarea>
                </div>
                
                <button type="submit" name="submit" value="Submit" class="btn btn-dark">Submit</button>
                
        	</form>
        	
        </div>
        
        <footer id="footer" class="container-fluid bg-dark text-white text-muted">
        	<p>Your Brand &copy; 2017</p>
        </footer>
    
    	<!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/popper/popper.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    
    	<!-- Custom JS for jQuery -->
        <script src="./js/script.js"></script>
        
        <!-- Google map script -->
        <script src="./js/map.js"></script>
        
    </body>
</html>
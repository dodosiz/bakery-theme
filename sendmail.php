<!DOCTYPE html>
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
        </nav>
        
        
        <!-- The product section -->
        <div id="alert" class="container-fluid">
        	<div class="alert alert-success" role="alert">
              <?php 
                if(isset($_POST['submit'])){
                    $to = "t.v.asvestopoulos@gmail.com"; // this is your Email address
                    $from = $_POST['email']; // this is the sender's Email address
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];        
                    $headers = "From:" . $from;
                    mail($to,$subject,$message,$headers);
                    echo "message sent succesfully";
                    header("Refresh: 5; index.php");
                }
            ?>
            </div>
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
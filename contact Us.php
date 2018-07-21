<?php
//$id=$_GET['id'];

$id=2;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>La Casa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
        <!--Start of nav bar------------->
	 <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
<!--End of nav bar-->

	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Contact</span> Us</h1>
				</div>
			</div>
		</div>
	</div>
	

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>the faculty of computer and information,Helwan university</li>
						<li><i class="icon-phone"></i>+20 01123121021</li>
						<li><i class="icon-envelope"></i><a href="#">info@lacasa.com</a></li>
						<li><i class="icon-globe"></i><a href="index.html">www.lacasa.com</a></li>
					</ul>
				</div>
                            <form action="" method="POST">
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
                                                            <input class="form-control" placeholder="Name" name="name" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
                                                            <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" ></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
                                                            <input type="submit" value="Send Message" class="btn btn-primary" name="send" >
							</div>
						</div>
					</div>
				</div>
                            </form>
			</div>
		</div>	
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>About Us</h3>
				<p class="foot"> La casa team from faculty of computer and information,Helwan university </p>
				
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Our Services</h3>
				<ul class="float">
					<li><a href="buy.php?id=<?php echo $id; ?>">Buy</a></li>
					<li><a href="rent.php?id=<?php echo $id; ?>">Rent</a></li>
                                        <li><a href="sell.php?id=<?php echo $id; ?>">Sell</a></li>
					<li><a href="#">Discover</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">See properity news</a></li>
					<li><a href="#">See properity news</a></li>
					<li><a href="#">See properity news</a></li>
					<li><a href="#">See properity news</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p class="foot">&copy; 2018 La casa team. All Rights Reserved.</p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

        <?php
        $con=mysqli_connect("localhost","root","","lacasa");
        if($con)
        {
         if (isset($_POST['send']))
         {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $message=$_POST['message'];
                $status=0;
                $sql="INSERT INTO `admin` (`complains`,`name`,`email`,`comment_status`)VALUES('$message','$name ','$email','0')";  
                mysqli_query($con, $sql);
                mysqli_close($ocn);
         }
        }
 else {
     echo "Dis connect";
 }
        ?>
        
        
	</body>
</html>


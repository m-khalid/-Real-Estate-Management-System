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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	
        <!--Start of nav bar------------->
        <?php
        
        class header {
            
        function display()
        {   
            echo"
	<div id='fh5co-page'>
	<header id='fh5co-header' role='banner'>
		<div class='container'>
			<div class='row'>
				<div class='header-inner'>
                                    <h1><a href='index.php'>La casa</a></h1> <!--The title of site-->
                    
					<nav>
                        <ul> 
                     ";
                 $con= mysqli_connect("localhost", "root", "", "lacasa");
              $select_pages="SELECT `admin` FROM `pages`";
              $result_pages= mysqli_query($con, $select_pages);
                 while($page= mysqli_fetch_row($result_pages))

            {
                     if ($page[0]=='Login')
            {
               echo" <li><a href='../$page[0].php'>Log Out</a></li> ";

            }
            else if($page[0]=='Notification')
            {echo"
                <li class='dropdown'>
                            <a class='dropdown-toggle' data-toggle='dropdown'><span class='label label-pill label-danger count' style='border-radius:10px;'></span> <span class='glyphicon glyphicon-envelope' style='font-size:px;'></span></a>
                       
                        </li>
            ";}
           else{
                  echo" <li><a href='$page[0].php'>$page[0]</a></li> ";
           }   
            }

              echo"
						</ul>
                        
                        
					</nav>
				</div>
			</div>
		</div>
	</header>
        </div>
        ";
        }
        }
?>   
        
<?php        
class footer{
    
function  display ()
{
    echo"
	
<div id='fh5co-page'>
        <footer id='fh5co-footer' role='contentinfo'>

            <div class='container'>
                <div class='col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0'>
                    <h3>About Us</h3>
                    <p class='foot'> La casa team from faculty of computer and information,Helwan university </p>

                </div>
                <div class='col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0'>
                    <h3>Our Services</h3>
                    <ul class='float'>
                        <li><a href='buy.html'>Buy</a></li>
                        <li><a href='rent.html'>Rent</a></li>
                        <li><a href='#'>Sell</a></li>
                        <li><a href='#'>Discover</a></li>
                    </ul>
                    <ul class='float'>
                        <li><a href='#'>See properity news</a></li>
                        <li><a href='#'>See properity news</a></li>
                        <li><a href='#'>See properity news</a></li>
                        <li><a href='#'>See properity news</a></li>
                    </ul>

                </div>

                <div class='col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0'>
                    <h3>Follow Us</h3>
                    <ul class='fh5co-social'>
                        <li><a href='#'><i class='icon-twitter'></i></a></li>
                        <li><a href='#'><i class='icon-facebook'></i></a></li>
                        <li><a href='#'><i class='icon-google-plus'></i></a></li>
                        <li><a href='#'><i class='icon-instagram'></i></a></li>
                    </ul>
                </div>


                <div class='col-md-12 fh5co-copyright text-center'>
                    <p class='foot'>&copy; 2018 La casa team. All Rights Reserved.</p>	
                </div>

            </div>
        </footer>
</div>

	";
}}
?>

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

	</body>
</html>

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
     window.location='complains.php';
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>


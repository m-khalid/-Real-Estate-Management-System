<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>complains</title>
         <meta charset="utf-8">    <!-- to provide arabic and english--->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>La Casa</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="La casa for finding house " />
	<meta name="keywords" content="home,house,rent,sale,villa" />
	<meta name="author" content="La casa team" />

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
     <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
<!---------------------------------------The Title of see complains----------------------->
            
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">See</span> Complains</h1>
				</div>
			</div>
		</div>
	</div>
<div class="complains">
    
    
</div>
   	
<!---------------------------------------------------------------------------------------->
            
    
            
            
            
            
            
            
            
            
            
            
            
   <!---------------------------------------------------------------------------------------->         
	
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

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

        <?php
     $con= mysqli_connect('localhost', 'root', '', 'lacasa');
     if($con){
       $sql="SELECT * FROM `admin` ORDER BY `id` DESC";
      $result= mysqli_query($con, $sql);
      echo "<br>";
     while( $row= mysqli_fetch_row($result))
     { if ($row[0]&&$row[1]&&$row[2])
     { echo "<p align='center'><textarea rows='3' cols='55' disabled='disabled'>
User-Name : $row[1]
HIS-Message : $row[0]
HIS-Emai : $row[2]  </textarea></p><br>";
     }
     }
       }
      
     else{
         
         die("failed to connect:".mysqli_connect_error());
     }
        ?>
    </body>
</html>

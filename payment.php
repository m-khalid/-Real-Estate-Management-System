
<!DOCTYPE html>

<html>
    <head>
       
        <title>Payment way</title>
         <meta charset="utf-8">    <!-- to provide arabic and english--->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 
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
    <style>
        .visa
        {
            font-size: 50px;
            padding-left: 30px;
            display: inline-block;
           
            
        }
        .payin
        {
           font-size: 30px;
           margin-left: 300px;
           height: 250px;
           width: 500px;
           padding-top: 30px;
           border: 2px solid #900c3f;
           margin: 150px;
           
        }
        .cash
        {
              font-size: 50px;
                display: inline-block;
        }
        .submity
        {
            background: #900C3F;
            color: #fff;
            display: block;
            margin-top:  20px 
            
            
        }
        
    </style>
    <body>
       <!--------------------Start of nav bar------------->
	
	  <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
        
	<!-------------------End of nav bar------------------->
        
        
        
<!---------------------------------------The Title of see complains----------------------->
            
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Choose</span> Payment way</h1>
				</div>
			</div>
		</div>
	</div>

   	
<!---------------------------------------------------------------------------------------->
            

<form class="pay" action="" method="post">
  
    <center> <div class="payin">
	 <div class="cash" >	
     <input type="radio" name="payment" value="cash" > cash</div>
                   <div class="visa">
       <input  type="radio" name="payment" value="visa"> visa<br></div>
            <input class="submity" type="submit" name="submit" value="submit">  </div></center>
</form>

        <!--staet footer-->
<?php
$footer=new footer();
$footer->dispaly();     
?>
        <!-- end footer -->
	<?php   
   
        $id=$_GET['id'];
          $id_user=$_GET['user'];
       
		   $con=mysqli_connect("localhost","root","","lacasa");
		   if($con)
		   {
			   if (isset($_POST['submit']))
			{
		    $payment=$_POST['payment'];
			$sql="UPDATE`selling` SET `payment`='$payment',`date`=NOW() ,`sale status`='1' WHERE (`id`='$id')";
				   mysqli_query($con,$sql);
                                 
                                   $select="SELECT `numberofbooked` FROM `register` WHERE (`id`='$id_user')";
                                   $result= mysqli_query($con, $select);
                                   $number= mysqli_fetch_row($result);
                                   $number[0]++;
                                   $update="UPDATE `register` SET `numberofbooked`='$number[0]' WHERE (`id`='$id_user')";
                                   mysqli_query($con, $update);
				   mysqli_close($con);
	        	                 

                                   
                        }//isset block
                }
		   else
		   {
			   die("connection error:".mysqli_connect_error());
		   }//connection block 
	    ?>
    
            
            
            
            
            
            
            
            
            
            
            
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

      
      
        
    </body>
</html>

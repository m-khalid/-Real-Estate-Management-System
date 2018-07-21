
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
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
<!---------------------------------------The Title of Buy Properites----------------------->
            
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Make</span> Ads</h1>
				</div>
			</div>
		</div>
	</div>
   	
<!---------------------------------------------------------------------------------------->
            
            
            <div class="ads">
           <center> <h1 class="tsell">Upload ads photo </h1></center>
            <div class="upload-ads">
                <form action="" method="POST" enctype="multipart/form-data">
     <label>Image: <input type="file" name="fileupload" />
               
                 </div>
       
            
              <center> <input name="submit" type="submit" class="bsell"  ></center> 
            
            
             </form>
           
            
            
            
            
 
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
        $con= mysqli_connect("localhost", "root", "", "lacasa");
        if($con){
        if (isset($_POST['submit'])){
            
       $filename=$_FILES['fileupload']['name'];
        $filetmp=$_FILES['fileupload']['tmp_name']; 
        $file_basename= basename($_FILES['fileupload']['name']);
        $dir="upload/";
        $final_dir=$dir.$file_basename;
        // to determine type of img
        $allowed =  array('gif','png' ,'jpg','jpeg');
$filenam = $_FILES['fileupload']['name'];
$ext = pathinfo($filenam, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    echo 'Type of Image Invalid';
}
       else { 
        move_uploaded_file($filetmp, $final_dir);
        $img="INSERT INTO `ads` (`img_name`,`img_path`)VALUES('$file_basename','Admin/$final_dir')";
        mysqli_query($con,$img);
        mysqli_close($con);
        echo"Done";
        }
        }
        }
 else {
     echo "dis connection"; 
 }
        ?>
	</body>
</html>

        
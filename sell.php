
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
	
	<!-------------------------------------nav bar-------------------------->	
	  <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
	<!-------------------End of nav bar------------------->

<!---------------------------------------The Title of Buy Properites----------------------->
            
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Sell</span> Properties</h1>
				</div>
			</div>
		</div>
	</div>
   	
<!--------------------------------------- End of The Title of Buy Properites----------------------->                          
<!-------------------------------------Start of Sell Process-------------------------------------->
          
            <div class="sell">
        <center>  <h3 class="tsell">Sell Your House</h3> </center>
        <form class="fsell" method="POST" action="" enctype="multipart/form-data">
             Area <br>
            <input  type="text" placeholder="Enter Area in k/m" class="input-sell1" name="area">  <br>
            Location <br>
            <input   type="text" placeholder="Enter Location" class="input-sell1" name="location"> <br>
            Floor <br>
            <input   type="text" placeholder="Enter Floor" class="input-sell1" name="floor"> <br>

            Number of rooms <br>
            <input  
                type="text" placeholder="Enter number of rooms" class="input-sell1" name="rooms"> <br>
            Number of baths <br>
            <input   type="text" placeholder="Enter number of baths" class="input-sell1" name="baths"> <br>
             Price <br>
            <input   type="text" placeholder="Enter price by $" class="input-sell1" name="price"> <br>
            Choose type of sell <br>
                    <select name="type">
                <option>Rent</option>
                    <option>Buy</option>
                    </select><br>
     <label>File: <input type="file" name="fileupload" />

                    Description<br>
                    <textarea  name="description" type="text"  placeholder="Enter description" class="input-sell"> </textarea><br>
            
                       <center> <input name="submit" type="submit" class="bsell"  ></center> 
            </div>
            </form>
         
            <?php
            $main = new sell();
            $main->display();
            ?>
            

				

	  <!--*******************************End of Page****************************-->
<br><br><br><br><br><br><br>
	        <!--staet footer-->
<?php
$footer=new footer();
$footer->dispaly();     
?>
        <!-- end footer --> 
	
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
        
        
        <!-- code -->
        <?php
        class sell {
            
        function  display ()
        {
        
           $id= $_GET['id'];
         
         
                $con= mysqli_connect("localhost","root","","lacasa");
        if ($con)
        {   
            if (isset($_POST['submit']))
            {
                    $area=$_POST['area'];
                    $location=$_POST['location'];
                    $rooms=$_POST['rooms'];
                    $baths=$_POST['baths'];
                    $price=$_POST['price'];
                    $floor=$_POST['floor'];
                    $type=$_POST['type'];
                    $description=$_POST['description'];
                    //add image
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
      
        if($area&&$baths&&$rooms&&$description&&$location&&$price&&$floor&&$file_basename&&$final_dir){
 $sql="INSERT INTO `selling` (`area`,`location`,`price`,`Description`,`Floor`,`type`,`rooms`,`baths` ,`img_name`,`img_path`,`sale status`)VALUES('$area','$location','$price','$description','$floor','$type','$rooms','$baths','$file_basename','$final_dir','0')";
 mysqli_query($con, $sql);
$counter="SELECT `numberofselling` FROM `register` WHERE (`id`='$id')";
$number= mysqli_query($con, $counter);
$row= mysqli_fetch_row($number);
$row[0]++;
$insert="UPDATE  `register`  SET `numberofselling`='$row[0]'  WHERE (`id`='$id')";
mysqli_query($con, $insert);
        mysqli_close($con);

echo "<h2 align='center'>Done...</h>";
        }
        else 
        {
                echo"<h2 align='center'>plases enter all details </h2>" ;           
        }
        }
      
            }
        }
            
 else {
                 die("Connection Error:".mysqli_connect_error());

 }
        
        }
        }
        ?>

	</body>
</html>    
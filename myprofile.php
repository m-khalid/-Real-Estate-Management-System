<?php
$id=$_GET['id'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8'> <![endif]-->
<!--[if IE 8]>         <html class='no-js lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js'> <!--<![endif]-->
	<head>
		<meta charset='utf-8'>    <!-- to provide arabic and english--->
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>La Casa</title> 
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='description' content='La casa for finding house ' />
	<meta name='keywords' content='home,house,rent,sale,villa' />
	<meta name='author' content='La casa team' />


  	<!-- Facebook and Twitter integration -->
	<meta property='og:title' content=''/>
	<meta property='og:image' content=''/>
	<meta property='og:url' content=''/>
	<meta property='og:site_name' content=''/>
	<meta property='og:description' content=''/>
	<meta name='twitter:title' content='' />
	<meta name='twitter:image' content='' />
	<meta name='twitter:url' content='' />
	<meta name='twit-ter:card' content='' />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel='shortcut icon' href='favicon.ico'>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel='stylesheet' href='css/animate.css'>
	<!-- Icomoon Icon Fonts-->
	<link rel='stylesheet' href='css/icomoon.css'>
	<!-- Bootstrap  -->
	<link rel='stylesheet' href='css/bootstrap.css'>
	<!-- Flexslider  -->
	<link rel='stylesheet' href='css/flexslider.css'>
	<!-- Theme style  -->
	<link rel='stylesheet' href='css/style.css'>

	<!-- Modernizr JS -->
	<script src='js/modernizr-2.6.2.min.js'></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src='js/respond.min.js'></script>
	<![endif]-->

	</head>
        <style>
            .profileupdate
            {
                background-color: #900C3F;
                color: #fff;
                margin-left: 40px;
                width: 180px;
            }
            
            </style>
	<body>
            

	
 <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
<!---------------------------------------The Title of Buy Properites----------------------->
            
	<div class='fh5co-page-title' style='background-image: url(images/slide_6.jpg);'>
		<div class='overlay'></div>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12 animate-box'>
					<h1><span class='colored'>My</span> Profile</h1>
				</div>
			</div>
		</div>
	</div>
   	
<!--------------------------------------- End of The Title of Buy Properites----------------------->                          
<!-------------------------------------Start of Sell Process-------------------------------------->
                      <?php 
            class myprofile{
function dispqly(){
$con= mysqli_connect("localhost", "root", "", "lacasa");
if($con)
{
 $id=$_GET['id'];   
 
$sql="SELECT * FROM `register` WHERE (`id`='$id')";
    $result= mysqli_query($con,$sql); 
   
$row=mysqli_fetch_row($result);

echo "
            <div class='sell'>
        <center>  <h3 class='tsell'>My info</h3> </center>
        <form class='fsell' method='POST' action=''>
             username <br>
            <input name='username' type='text' placeholder='$row[0]'  class='input-sell1'>  <br>
             Mail<br> 
            <input  name='email' type='text' placeholder='$row[2]'  class='input-sell1'> <br>
                   Phone <br>
            <input  name='phone' type='text'  placeholder='$row[4]' class='input-sell1'> <br> 
                National ID <br>
            <input  name='national id' type='text' disabled='disabled' placeholder='$row[3]' class='input-sell1'> <br> 
            
        Number of selling <br>
            <input  name='numberofselling' type='text' disabled='disabled' placeholder='$row[5]'  class='input-sell1'> <br>
                Number of booked <br>
            <input  name='numberofbooked' type='text' disabled='disabled' placeholder='$row[6]'class='input-sell1'> <br>
            
             <br>
                        

            <input class='profileupdate' type='submit' value='Update' name='update'><br> <br>
            
            </div>
            </form>
            ";
}
 else {
                    die("Connection Error:".mysqli_connect_error());

}
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
	<script src='js/jquery.min.js'></script>
	<!-- jQuery Easing -->
	<script src='js/jquery.easing.1.3.js'></script>
	<!-- Bootstrap -->
	<script src='js/bootstrap.min.js'></script>
	<!-- Waypoints -->
	<script src='js/jquery.waypoints.min.js'></script>
	<!-- Flexslider -->
	<script src='js/jquery.flexslider-min.js'></script>

	<!-- MAIN JS -->
	<script src='js/main.js'></script>
      
<?php
mysqli_close($con);
}
            }
            
$con= mysqli_connect("localhost", "root", "", "lacasa");

if (isset($_POST['update']))
{
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    if ($username!=Null){
       $sql="UPDATE `register` SET `username`='$username' WHERE (`id`='$id')";
       mysqli_query($con,$sql);
    }
    if($phone!=NULL)
    {
                    $sql="UPDATE `register` SET `phone`='$phone' WHERE (`id`='$id')";
                    mysqli_query($con,$sql);

    }
    if ($email!=NULL)
    {
                    $sql="UPDATE `register` SET `email`='$email ' WHERE (`id`='$id')";
                    mysqli_query($con,$sql);

    }
    

mysqli_close($con);


}   
/////main///
$obj=new myprofile() ;
$obj->dispqly();
    



    ?>
            
	</body>
        
</html>
       


        
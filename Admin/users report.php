
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
        <style>
            .input
            {
                                 
                width:100%;
                margin-top: 80px;
                padding-left: 600px;
                padding-right: 40px;
                padding-top: 1px;
                padding-bottom: 1px
            }
              </style>
    
    <!--***************************************** Body Start ************************************-->
	<body>

        
        <!--------------------Start of nav bar------------->
	
	  <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
        
	<!-------------------End of nav bar------------------->
        
        <br><br><br><br><br>
        <?php
$con= mysqli_connect("localhost", "root","", "lacasa");
if ($con)
{
    $select="SELECT * FROM `register`";
    $result= mysqli_query($con, $select);
    
        echo"
            
            <table border=15px  align='center' width='80%'  style='border:blue;border-spacing=140px'>
            <tr class='tr'>
            <th>username</th>
            <th>email</th>
             <th>National_Id</th>
            <th>phone</th>
            <th>number of selling</th>
            <th>number of booked</th>
            </tr>
            ";
        while($row= mysqli_fetch_row($result)) {
        echo"
            <tr>
            <td class='tr'>$row[0]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            </tr>
            " ;  
        }
echo "</table> <br>";
        
echo "<div class='input'> 
    <h2>Delete User</h2>
<form method='POST'>
    National_id : <br> <input type='text' name='id'> 
    <br> <br>
    <input type='submit' name='delete' value='Delete'>
    </form>
    </div>
";
if(isset($_POST['delete']))
{ $national_id=$_POST['id'];
    $del="DELETE FROM `register` WHERE(`National_Id`='$national_id')";
    mysqli_query($con, $del);
}
}
       
    

else
{
    echo "Dis connection";
}



?>
       
<!-- -----------------------slider  ****************-->

        <!--***End of slider--------------------------->
        
        
        
        
      <!--***************************** Start of  choose buy or rent or sell *************************-->
     
          <!--*****************************End of choose buy or rent or sell *************************-->
        
        
        
        
        
        
        
        <!--**************************** best seller*****************************************-->
       
	
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


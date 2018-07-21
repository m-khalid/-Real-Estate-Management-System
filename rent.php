 <?php $id =$_GET['id'];
        ?>
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
         .buys
            {
                margin-top: 40px;
                margin-left: 90px;
                margin-bottom: 20px;
             border-color: #900C3F;
             border: 1px solid #ddd;
             margin-right: 85px;
             padding-left: 150px;
             padding-top: 20px;
             background-color: #900C5F;
             color: #fff;
             height: 400px;
             font-size: 30px;
             
             

            }
            .imgh
            {
                float: right;
                margin-top: -315px;
                padding-left: 20px;
                margin-left: 50px;
                height: 250px;
                width: 550px;
                
            }
            .buyb
            {
                background-color: #fff;
                color:#900c3f;
                float: right;
                margin-right: 160px;
                margin-top: -80px;
                padding-left: 55px;
                padding-right: 55px;
                padding-top: 1px;
                padding-bottom: 1px;
            }
            .buyb :hover
            {
                color: white;
                background: #900C3F;
            }
            </style>
	<body>

	<!-----------------------------nav bar----------------------->
  <?php
  include_once './headerandfooter.php';
  $header=new header();
  echo   $header->display();
    
?>
        <!---------------------------End of nav bar----------------->
        
         
 <!-----------------------------------------Start  of title----------------------->   
        
	<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Rent</span> Properties</h1>
				</div>
			</div>
		</div>
	</div>
        
        
        
        
        
 <!-----------------------------------------End of title----------------------->
        
 <!-----------------------------------------Search----------------------------->
        
           
                
      <div class="search">
        <div class="searchall">
            <!--title of search-->
         <center> <h2 class="Stitle">Find your home</h2></center>
            
         
            <form id="form-1" class="formc" action="" method="POST">
             <div class="mprice">
              <label class="lab">Min Price </label>
              <select class="op" name="minprice" >
                  <option>No Min.</option>
                  <option>500</option>
                  <option>600</option>
                  <option>700</option>
                  <option>800</option>
                  <option>900</option>
                  <option>1000</option>
                  <option>1100</option>
                  <option>1200</option>
                  <option>13000</option>
                  <option>1400</option>
                  <option>15000</option>
                  <option>1600</option>
                  <option>1700</option>
                  <option>1800</option>
                  <option>1900</option>
                  <option>2000</option>
                  <option>2500</option>
                  <option>3000</option>
                  <option>3500</option>
                  <option>4000</option>
                  <option>4500</option>
                  <option>5000</option>
                  <option>6000</option>
                  <option>7000</option>
                  <option>8000</option>
                  <option>9000</option>
                 
                 
               
                
               
              </select>
            </div>   
                
        <div class="mprice">
              <label class="lab">Max Price </label>
              <select class="op" name="maxprice" >
                  <option>No Max.</option>
                <option>500</option>
                  <option>600</option>
                  <option>700</option>
                  <option>800</option>
                  <option>900</option>
                  <option>1000</option>
                  <option>1100</option>
                  <option>1200</option>
                  <option>13000</option>
                  <option>1400</option>
                  <option>15000</option>
                  <option>1600</option>
                  <option>1700</option>
                  <option>1800</option>
                  <option>1900</option>
                  <option>2000</option>
                  <option>2500</option>
                  <option>3000</option>
                  <option>3500</option>
                  <option>4000</option>
                  <option>4500</option>
                  <option>5000</option>
                  <option>6000</option>
                  <option>7000</option>
                  <option>8000</option>
                  <option>9000</option>
              
   
                
               
              </select>
          
            </div>
                 <form id="form-1" class="formc" action="#">
             <div class="mprice">
              <label class="lab">Min Area </label>
              <select class="op" name="minarea" >
                  <option>No Min.</option>
                  <option>50</option>
                  <option>60</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                  <option>110</option>
                  <option>120</option>
                  <option>130</option>
                  <option>140</option>
                  <option>150</option>
                  <option>200</option>
                  <option>250</option>
                  <option>300</option>
                  <option>350</option>
                  <option>400</option>
                  <option>450</option>
                  <option>500</option>
                  <option>550</option>
                  <option>600</option>
                  <option>650</option>
                  <option>700</option>
                  <option>750</option>
                  <option>800</option>
                  <option>950</option>
                  <option>1000</option>
               
                  
                
               
              </select>
            </div>   
                
        <div class="mprice">
              <label class="lab">Max Area </label>
              <select class="op" name="maxarea" >
                 
                  <option>No Max.</option>
                  <option>50</option>
                  <option>60</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                  <option>110</option>
                  <option>120</option>
                  <option>130</option>
                  <option>140</option>
                  <option>150</option>
                  <option>200</option>
                  <option>250</option>
                  <option>300</option>
                  <option>350</option>
                  <option>400</option>
                  <option>450</option>
                  <option>500</option>
                  <option>550</option>
                  <option>600</option>
                  <option>650</option>
                  <option>700</option>
                  <option>750</option>
                  <option>800</option>
                  <option>950</option>
                  <option>1000</option>
               
                  
                
               
              </select>
          
            </div>
                            
                
            <div class="nrooms">
              <label class="lab">rooms</label>
              <select class="op" name="rooms"  >
                <option>any No.</option>
                <option>1+</option>
                <option>2+</option>
                <option>3+</option>
                <option>4+</option>
                <option>5+</option>
                <option>6+</option>
                <option>7+</option>
                <option>8+</option>
                <option>9+</option>
                <option>10+</option>
                <option>11+</option>                
                <option>12+</option>
                <option>13+</option>
                <option>14+</option>
                <option>15+</option>
              </select>
            </div>
            
                     <div class="nbaths">
              <label>Baths</label>
              <select class="op" name="baths" >
                <option>any No.</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
              </select>
            </div>
                
                <input data-role="none" type="text" placeholder="Enter location" class="input-search" name="location">
			<input data-role="none" type="submit" value="Search" class="sbutton" name="search">

            </form>
          </div>
            </div>
            
 <?php
 ////main///

$object= new lacasa_rent();
$object->search();

 ?>
                  
        
       
			<!---------------------------------------------Happy Client----------------------------->
                        <br><br><br><br><br><br>

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>Happy Clients</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				
				<?php
                                            $con= mysqli_connect("localhost", "root", "", "lacasa");
                                            $SQL="SELECT *  FROM `register` ";
                                            $result= mysqli_query($con, $SQL);
                                            while ($row= mysqli_fetch_row($result)){
                                                if ($row[7]&&$row[0]){
                                                echo"    <div class='col-md-4 text-center item-block animate-box' data-animate-effect='fadeIn'>
				<blockquote>
<p name='clients-comment'>&ldquo;$row[7] &rdquo;</p>   
<p><span class='fh5co-author'><cite>$row[0]</cite></span> <!--name of comment writer-->
                            <i class='icon googleplus-color icon-google-plus pull-right'></i></p>			
					</blockquote>
				</div>
                                
                                            ";}  }?>
				
			</div>
		</div>
	</div>


	<div id="fh5co-agents">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading white animate-box" data-animate-effect="fadeIn">
					<h2>Our Trusted Agents</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
								
<?php
$connect=mysqli_connect("localhost", "root", "", "lacasa");
$sql="SELECT `agentname`, `agentbio` FROM `trustagent` ";
$result= mysqli_query($connect , $sql);
while($ro= mysqli_fetch_row($result))
{ if($ro[0]&&$ro[1]){
echo"<div class='col-md-4 text-center item-block animate-box' data-animate-effect='fadeIn'>

					<div class='fh5co-agent'>
						<figure>
							<img src='images/testimonial_person2.jpg' alt='La casa '>
						</figure>
                                                
			<h3 name='agent-name'>$ro[0]</h3> <!-----From db---->
			<p name='agent-bio'> $ro[1]</p>
			<p><a href='#' class='btn btn-primary btn-outline'>Contact Me</a></p>

                                                        </div>
					
				</div>
                                ";			

}
}
?>
				
				
			</div>
		</div>
	</div>
	

	

	
        <!--*******************************End of Page****************************-->

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

        
<!-- php code -->
<?php
class lacasa_rent{
public function  search ()
{ $id=$_GET['id'];
$con=mysqli_connect("localhost","root","","lacasa");
if ($con)
{    
if (isset($_POST['search']))
{    
   $minprice=$_POST['minprice'];   
$maxprice=$_POST['maxprice'];
 $minarea=$_POST['minarea'];
 $maxarea=$_POST['maxarea']; 
    $rooms=$_POST['rooms'];
    $baths=$_POST['baths'];
    $location=$_POST['location'];
    $type="Rent";
 if($minprice==0)
{
    $minprice=500;
}
if($maxprice==0)
{
    $maxprice=9000;
}
if($maxarea==0)
{
    $maxarea=1000;
}
if ($minarea==0)
{
    $minarea=50;
}
if($rooms==0)
{
    $rooms=1;
}
if($baths=00)
{
    $baths=1;   
}
    $select="SELECT * FROM `selling` WHERE ((`sale status`='0')AND(`price`BETWEEN '$minprice' AND '$maxprice') AND (`area`BETWEEN '$minarea' AND '$maxarea')AND(`rooms`>='$rooms') AND (`baths`>='$baths')AND(`location`='$location') AND (`type`='$type'))";
//edit select  'id'  "output search"
$result= mysqli_query($con,$select);
    $num=0;
   $result= mysqli_query($con,$select);
    $num=0;
    
    if(mysqli_num_rows($result)!=NULL){
    while($row= mysqli_fetch_row($result))
    {       $id_sell=$row[12];
        $num++; 
          echo" 
            <div class='buys' >
         Area : $row[0]<br> Location : $row[1]<br> Price : $row[2]<br> Floor : $row[4]<br>
         rooms : $row[6] <br>baths : $row[7]<br> Description : $row[3]<br> 
         <img class='imgh' src='$row[9]' > <br>
            
   <a class='buyb' href='payment.php?id=$id_sell&&user=$id'>Rent</a> <br>
  
        </div>
                ";
    }
            mysqli_free_result($result);
           mysqli_close($con);
    }         
    
       
if ($num==0)
{
    echo "<br> <br> <p  align='center'>Not found your search</p>";
}

        
}
        

}

  



else 
{
     die("Connection Error:".mysqli_connect_error());
}
}
    
}//end class
?>        
	</body>
</html>


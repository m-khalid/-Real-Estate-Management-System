<?php
include_once './headerandfooter.php';
$id_user=id_user::getInstance();
$id=$id_user->id();
                      $con= mysqli_connect("localhost", "root", "", "lacasa");

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
	<meta name='twitter:card' content='' />

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
            
            
            
            
            
.choosea
{
    
    float: left;
    display: inline-block;
}
.chooseb
{
   float: none; 
 color :red;
     display: inline-block;
     
}
.choosec
{
    
    float: right;
     display: inline-block;
}


.social
{
    background-color: #900C3F;
    height: 250px;
    padding-top: 20px;
    height: 300px;
}
.social .follow
{
    text-align: center;
    font-family: com;
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    margin-top: 10px;
}
.social .follow .sfollow
{
    color: #FFF;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.3);

}
.sdiv
{
    width: 120px;
    height: 120px;
    background-color: #FFF;
    display: inline-block;
    margin: 0px 100px;
    border-radius: 50%;
    border: solid 2px #FFF;
    box-shadow: 3px 3px 6px rgba(0,0,0,0.4);
    transform: rotate(0deg);
    transition: 1s;
}
.sdiv:hover
{
    background: none;
}
.g
{
    font-size: 30px;
    padding-top: 30px;
    color: #900C3F;
    
}
.g:hover
{
    color: #FFF;
    
}
.comment
{
    margin-top: 30px;
    margin-bottom: 30px;
}

.commentarea
{
 
    height: 200px;
    width: 700px;
    
}
.commentsubmit
{
    color: #fff;
    background-color: #900C3F;
    width: 200px;
    height: 70px;
    font-size:30px;
    
}
.ads
{
    height: 700px;
    background: #fff;
    
}
.t
{
  
    margin: 30px;
    padding: 30px;
    
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
        
        
        
       
<!-- -----------------------slider  ****************-->
              
	<aside id='fh5co-hero' clsas='js-fullheight'> <!---class used in js ,id in css-->
		<div class='flexslider js-fullheight'> <!---class used in js-->
			
            <ul class='slides'>
		   		
                <li style='background-image: url(images/w1.png);'>	</li> 
		     	<li style='background-image: url(images/s1.png);'></li>
				<li style='background-image: url(images/s2.png);'>	</li> 
                                <li style='background-image: url(images/s3.png);'>	</li> 
                                <li style='background-image: url(images/s4.png);'>	</li> 
                                <li style='background-image: url(images/s5.png);'>	</li> 
                          
              
                
	
		  	</ul>
	  	</div>
	</aside>
        </div>
      
        <!--***End of slider--------------------------->
        
        
        
        
      <!--***************************** Start of  choose buy or rent or sell *************************-->
       <!--*****************************Start of choose buy or rent or sell *************************-->
         <div class="social">
			<p class="follow">Make <span class="sfollow">Your</span> Choice</p>
			<center>
                               <a href='buy.php?id=<?php echo $id; ?>'><div class="sdiv"><p class="g">Buy</p></div></a>
				<a href='sell.php ?id=<?php echo $id; ?>'><div class="sdiv"><p class="g">Sell</p></div></a>
				<a href='rent.php ?id=<?php echo $id; ?>'><div class="sdiv"><p class="g">Rent</p></div></a>
			</center>
		</div>

  <!--*****************************End of choose buy or rent or sell *************************-->

          <!--*****************************End of choose buy or rent or sell *************************-->
        
        
        
        
        
        
        
        <!--**************************** best seller*****************************************-->
        
	<div id='best-deal'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-8 col-md-offset-2 text-center fh5co-heading animate-box' data-animate-effect='fadeIn'>
					<h2>We are Offering the Best Real Estate Deals</h2>
					<p >From All Countries,Find your future home. </p>
				</div>
                
                
                <!--First house info -->
                <?php
                $selects ="SELECT * FROM `selling` WHERE (`type`='buy') AND (`sale status`='0') ";
                $results= mysqli_query($con, $selects);
                while($offer= mysqli_fetch_row($results))
                { $id_sell=$offer[12];
                echo"
                
				<div class='col-md-4 item-block animate-box' data-animate-effect='fadeIn'>


					<div class='fh5co-property'>
						<figure>
							<img src='$offer[9]'  class='img-responsive'> 
							<a href='payment.php?id=$id_sell&&user=$id' class='tag'>Buy</a>
						</figure>
                        
						<div class='fh5co-property-innter'>
							<h3><a href='#'>$offer[1]</a></h3> <!--put title from database-->
							<div class='price-status'>
		                 	<span name='house-price' class='price'>$offer[2] </span>
		               </div>
                            
		               <p name='house-description'>$offer[3].</p>
	            	</div> <!--put descriotion from database-->
	            	<p class='fh5co-property-specification'>
	            		<span><strong>$offer[0]</strong> Sq Ft</span>  <span><strong>$offer[6]</strong> rooms</span>  <span><strong>$offer[7]</strong> Baths</span>  
                        <!--put area and no. of rooms from database-->
	            	</p>
					</div>
				</div>
              ";  }?>
                <!------------------->
                
<!--**************************************End of best seller************************************************-->     
    
                



        </div>
        <!--***End of slider--------------------------->
        
        
        
           



        
        
        
 <!--*******************************Start of about Happy Client********************************************-->
	
    <div id='fh5co-testimonial'>
		<div class='container'>
			<div class='row'>
				
                <!--title-->
                <div class='col-md-6 col-md-offset-3 text-center fh5co-heading animate-box' data-animate-effect='fadeIn'>
					<h2>Happy Clients</h2>
					<p>There are la casa's clients Experiments </p>
				</div>
                <!-------->

				<?php
                                            
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

 <!--**********************************************End of about Happy Client*******************************-->

        
        
                
                
                
        
 <!--*************************************Start of about Trusted Agent ************************************-->
        <div id='fh5co-agents'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 col-md-offset-3 text-center fh5co-heading white animate-box' data-animate-effect='fadeIn'>
                    <!--title-->
					<h2>Our Trusted Agents</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
                <!--------->
                
				
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
	
                
 <!--********************************End of about Trusted Agent *****************************************-->
	
        
        
        
            </div>
        </div>
        
        
 <!--*******************************Start ads**********************************************-->
 <div class="ads">
     <center> <h1 style="padding-top:20px ; color: #900C3F ; font-size: 50px;">ADS Area</h1> </center>
     
                      <?php
                             $select="SELECT `img_path` FROM `ads`";
                                $img = mysqli_query($con, $select);
                                while ($row= mysqli_fetch_row($img))
                                {
                                    echo "
                       
                                    <image class='t' style='height :450px; width: 480px'src='$row[0]'>

";
                                }
                                ?>
 
     
 </div>
       
                  <!----------comment -------------->
                  <form method="POST" action="" class="comment">
                  <center>  <h1 >Your<span style="color :#900C3F"> Comment</span> Help Us </h1></center>
                  <center> <textarea name="comment" rows="4" cols="50" class="commentarea"> </textarea> </center><br>
                  <center>  <input type="submit" name="submit" value="Comment" class="commentsubmit">  </center>    
              </form>
              <?php
              if(isset($_POST['submit']))
              { $comment=$_POST['comment'];
             
               $sql="UPDATE `register` SET `comment`='$comment' WHERE (`id`=$id)"; 
               mysqli_query($con,$sql);
              
              }
              ?>


 <!--************************************************End of Latest from blog   ****************************-->
        
        <!--*******************************End of Page****************************-->
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
        

</body>
        </html>
	
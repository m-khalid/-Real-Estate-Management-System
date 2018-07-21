<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Confirmation</title>
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome -->
        <link href="CSS/offline.css" rel="stylesheet"> <!-- any icon -->
<link rel="stylesheet" href="CSS/offline.css">
    </head>
    <body style="background-image: url(images/s4.jpg) ">
        
        
        <center>
         
            <p class="headlogin">Answer <span style="color:#C70039  ">Question</span></p>
            <form class="login" action="" method="POST">
                <p style="font-size: 20px">What is your favorite movie ?</p>
                <input type="password" name="question1" class="nplogin"  placeholder="The answer" required> <!-- id="name" refer to human picture 
                    Before placeholder Username -->
                <p  style="font-size: 20px">What is your favorite Animation charachter ?</p>
                <input type="password" name="question2" class="nplogin"  placeholder="The answer"  required><!-- id="password" refer to lock picture Before placeholder password-->
                
                <input type="submit" name="submit" value="Submit" class="submit">
                
                
                    
            </form>
      
            
        </center>
    <!-- code php -->
    <?php
    class lacasa_login 
    {
        function login($question1,$question2)
        {
                   
      $con=mysqli_connect("localhost","root","","lacasa");	
          
      if ($con)
            {   
$check = "SELECT `id` FROM `admin question` WHERE ((`question1`='$question1')AND (`question2`='$question2'))";
            $result= mysqli_query($con,$check);
            while($qestion=mysqli_fetch_row($result))
            {
                if ($qestion[0]==1)
                {
                    header("Location:index.php");
                }
 else {
                echo "<h1 style='color:white' align='center'>Your Answer invalid</h1>";

 }
            }
                   
              
      
           
       	mysqli_free_result($result);
        mysqli_close($con);
            
            }
            else 
            {
                die("Connection Error:".mysqli_connect_error());
}//connection block	

        }//end function login 
    
    }//end class
    
    ////------main------////
    
   if (isset($_POST['submit']))
   {
    $question1=$_POST['question1'];
    $question2=$_POST['question2'];
    $object=new lacasa_login();
   $object->login($question1,$question2);
 
    
   }
  
    ?>
           
    </body>
</html>




<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>La casa Login</title>
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome -->
        <link href="CSS/offline.css" rel="stylesheet"> <!-- any icon -->
<link rel="stylesheet" href="CSS/offline.css">
    </head>
    <body style="background-image: url(images/s4.jpg) ">
        
        
        <center>
         
            <p class="headlogin">Log<span style="color:#C70039  ">In</span></p>
            <form class="login" action="" method="POST">
                <input type="text" name="name" class="nplogin" id="name" placeholder="Username OR Email" required> <!-- id="name" refer to human picture 
                    Before placeholder Username -->
                <input type="password" name="password" class="nplogin" id="password" placeholder="Password" minlength="8" maxlength="12" required><!-- id="password" refer to lock picture Before placeholder password-->
                <input type="checkbox" class="check"> <p class="plogin1">Remmember me</p>
                <input type="submit" name="login" value="Log in" class="submit">
                <a class="plogin2" href="forgetPassword.php">Forget password ?</a>
                <hr class="hlogin"> <!-- line between Forget password ? and icons-->
                
                    <div class="iconlogin">
                        <center>  <a class="alogin" href="register.php"> Creat new account <i class="fa fa-arrow-circle-right" style="font-size:14px"></i></a></center>
                    </div>
            </form>
      
            
        </center>
    <!-- code php -->
    <?php
    class lacasa_login 
    {
        function login($user,$password)
        {
                   
      $con=mysqli_connect("localhost","root","","lacasa");	
          
      if ($con)
            {   
$check = "SELECT `id` FROM `register` WHERE ((`username`='$user'OR`email`='$user')AND (`password`='$password'))";
            $result= mysqli_query($con, $check);
            $num=0;
           while($row=mysqli_fetch_row($result))
           {   
               if (strpos($user,'@admin'))
           {
                   header("Location:./Admin/adminquestion.php");
                       $num++;
           }
 else {
               $_SESSION['id']=$row[0];    
               header("Location:index.php");
                              $num++;
           }
           }
	       if($num==0)
       {
           echo "<h1 style='color:white' align='center'>Username OR Password is not correct</h1>";
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
    
   if (isset($_POST['login']))
   {
    $user=$_POST['name'];
    $password=$_POST['password'];
    $object=new lacasa_login();
   $object->login($user, $password);
 
    
   }
  
    ?>
           
    </body>
</html>

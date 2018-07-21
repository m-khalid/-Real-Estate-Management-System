<?php
session_start();
?>   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>La casa</title>
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome -->
        <link rel="stylesheet" href="CSS/offline.css"> <!-- any icon -->

    </head>
    <body style="background-image: url(images/s4.jpg) ">
        <center>
            
            <p class="ResetPassword"> Reset <span style="color:#900c3f  "> Password</span> </p>
            <form class="forget" method="POST" action="">
                <p class="pemail">Please Enter Your E-mail </p>
                <input type="email" name="email" class="email" id="email" placeholder="Your email" required> <!-- id="email" refer to human picture 
                    Before placeholder email -->
                <input type="submit" name="Send" class="send" value="Send" >
                <a class="aforget" href="login.php"><i class="fa fa-arrow-circle-left"></i>Back</a>
            </form>
        </center>
    <?php 
    class forgetpassword
    {
        function forget()
        {
           
            $con= mysqli_connect("localhost","root","","lacasa");
            if ($con)
            {                
                if (isset($_POST['Send']))
                {
                    $email=$_POST['email'];
                    $sql="SELECT  `email`,`id` FROM `register` WHERE(`email`='$email')";
                    $result= mysqli_query($con, $sql);
                    $row= mysqli_fetch_row($result);
                    if ($row[0]==$email)
                    {   $_SESSION['id']=$row[1];
                        header("Location:resetpassword.php"); 
                    }
 else {     echo "<h1 style='color:white' align='center'>email is not valid</h1>";}
 
                }
            }
            else
            {
die("Connection Error:".mysqli_connect_error());         
        }//not connect data base
    }
    }
    
    ///main///
    $object=new forgetpassword();
    $object->forget();
    ?>
    </body>
</html>

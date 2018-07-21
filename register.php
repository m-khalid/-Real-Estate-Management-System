<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>la casa</title>
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome -->
        <link rel="stylesheet" href="CSS/offline.css"> <!-- any icon -->

    </head>
        <body style="background-image: url(images/s4.jpg) ">
        <center>
           
           <p class="headsignin">Create <span style="color:#C70039  ">New</span> Account</p>
           <form class="signin" method="POST" action="">
               <label class="firstnamelabel">UserName</label>
               <label class="lastnamelabel">National ID</label>
               <input type="text" name="username" class="firstnamebox" required>
               <input type="text" name="nationalid" class="lastnamebox" minlength=14 maxlength="14">
               <label class="signinemail">Email</label>
               <input type="email" name="email" class="signinemailbox" required>
               <label class="signinusername">Phone Number</label>
               <input type="text" name="phonenumber" class="usernamebox" required>
              
               <div class="signinpassword">
                   <label>Password</label>
                   <label class="label2">Confirm Password</label>  
               </div>
               <div class="signinpasswordbox">
                    <input type="password" name="password" class="passbox1" required minlength=8 maxlength="12">
                    <input type="password" name="confirmpassword" class="passbox2" required required minlength=8 maxlength="12">
               </div>
               <input type="checkbox" class="signincheckbox" required>
                    <p class="signinp">I agree to the <a class="myBtn" id="myBtn" >Terms of Service</a> and Privacy Policy.</p>
               <input type="submit" value="Create account" class="Createaccountbutton" name="create"> 
               <a class="aforget" href="login.php"><i class="fa fa-arrow-circle-left"></i>Back</a><!-- this line take the same class of back button in forget password page -->
               
            </form>        
        </center>
        <!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Terms of Services</h2>
        
    </div>
    <div class="modal-body">
      <p>&emsp;&ensp;This website is operated by la casa team, faculty of computer and information, Helwan university. By using our Websites, you agree to comply with and be bound by the following terms and conditions "This policy (together with our terms of use and any other documents referred to in it) sets out the basis on which any personal information we collect from you, or that you provide to us, will be processed by us. Please read the following carefully to understand our views and practices regarding your personal information and how we will treat it. By visiting this website you are accepting and consenting to the practices described in this policy.." If you do not agree to these Terms of Use, you must not use our sites. . </p>
    
    </div>
    <div class="modal-footer">
      
    </div>
  </div>

</div>
    
        <script type="text/javascript" src="js/log.js"></script>

<!-- Trigger/Open The Modal -->
       <?php
     $con=mysqli_connect("localhost","root","","lacasa");	
if($con){
	if (isset($_POST['create']))
        {
            $username=$_POST['username'];
		$password=$_POST['password'];
                $confirm_password=$_POST['confirmpassword'];
		$email=$_POST['email'];
                $phone_number=$_POST['phonenumber'];
                $national_id=$_POST['nationalid'];
                if ($password!=$confirm_password)
                {
                    echo "<h3 style='color:white' align='center'>This password is not match</h3>";
                }
                
          $check = "SELECT `id` FROM `register` WHERE (`National_Id`='$national_id' OR `username`='$username')";     
           $result= mysqli_query($con, $check);
             $num=0;
             while ($row=mysqli_fetch_row($result)){
		$num++;
	}//end while
        if ($num!=0)
        {
            echo "<h2 style='color:white'align='center'>National ID Or User Name is used</h2>";
        }
        else{
	mysqli_free_result($result);         
$sql="INSERT INTO `register` (`username`,`password`,`email`,`phone`,`National_Id`)VALUES('$username','$password','$email','$phone_number','$national_id')";
             
mysqli_query($con,$sql);
                      mysqli_close($con);
                      include_once './mail.php/index.php';
                       $object = new mail();
                       $object->mails($email);
                      header("Location:login.php");
        }
        }
                       }
                

                       
      ?>


    </body>
</html>




  
 






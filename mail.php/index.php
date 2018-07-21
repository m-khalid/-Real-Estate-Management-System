        <?php
                     

        class mail {
            public  $email ;
                 public   function mails ($email)
        {


   require './mail.php/PHPMailer-master/PHPMailerAutoload.php'; 
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   //$mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "lacasa.fcih@gmail.com";
   $mail ->Password = "lacasafcih";
   $mail ->SetFrom("lacasa.fcih@gmail.com ","Admin");
   $mail ->Subject = "signing in lacasa";
   $mail ->Body = "Dear  user,
Hope my mail find you well, First I’d like to congratulate you for singinng up and became a part of our website.
We are all excited to work with you.
";
   $mail ->AddAddress($email);

   if(!$mail->Send())
   {
       echo "Mail Not Sent".$mail->ErrorInfo;
   }
   else
   {
       echo "Mail Sent";
   }
        }
        }
        
        
      
       
       ?>
    </body>
</html>

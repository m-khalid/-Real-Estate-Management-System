<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>La casa login</title>
        <link rel="stylesheet" href="css/loginstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- font awesome -->
        <link rel="stylesheet" href="CSS/offline.css"> <!-- any icon -->

    </head>
        <body style="background-image: url(images/s4.jpg) ">
<center>
    <br> <br>><br>
    <br><br><br>
            <form class='forget' action='' method='POST'>
                <p class='pforget'> Enter your <span class="pspan">new </span> password</p>
                <input type='password' name='password' class='email' id='email' placeholder='New Password' required>  
                <input type='password' name='confirmpassword' class='email' id='email' placeholder='New Password' required>
                <input type='submit' name='submit' class='send' value='Submit' >
            </form>
        </center>

<?php 
$con=mysqli_connect("localhost","root","","lacasa");
if ($con)
{
$id= $_SESSION['id'];

if (isset($_POST['submit']))
{
    $pass=$_POST['password'];
    $confirm=$_POST['confirmpassword'];
    if ($pass==$confirm)
    {
        $sql="UPDATE `register` SET `password`='$pass' WHERE (`id`='$id')";
        echo "<h2 align='center'>Successfully updated</h2>";
        
        mysqli_query($con, $sql);
header("Location:login.php");

    }
    else{
        echo "<h1 style='color:white' align='center'>These passwords don't match</h1>";
    }
}
mysqli_close($con);
}
?>
</body>
</html>
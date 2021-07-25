<?php

//db connection
require 'connect.php';
session_start();
$msg="";

//get value from form
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


//query 


$emailcheck="select * from user_login where email='$email'";
$res=mysqli_query($con,$emailcheck);
$emailcount=mysqli_num_rows($res);
if($emailcount){
    $email_pass=mysqli_fetch_assoc($res);
    $dbpass=$email_pass['password'];
    $pass_decode=password_verify($password,$dbpass);

    if($pass_decode){
        //echo"login success";
        header("location:hp.php");
    }else{
        echo "password incorrect";
    }
}else{
   echo "invalid email";
}









  



















}



















?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body >
    <center>
        <fieldset>
        <h1>LOGIN HERE...</h1>
        <div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <p class="email">
        <label for="email">Email</label>
    <input type="email"name="email"placeholder="enter your email"required><br>
    </p>
    <p class="password">
    <label for="password">Password</label>
    <input type="password"name="password"placeholder="enter your password"required>
    </p>
    <p>
        <input type="submit"name="submit"value="LOGIN"class="submit">
    </p>
    <div>
        <?php echo $msg?>
    </div>
    
       </form>
       
    </fieldset>
    </center>
</div>    

</body>
</html>
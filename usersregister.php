<?php
//db calling
require'connect.php';
$msg="";
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


 //get value from form
 

 


 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $captcha=$_POST['captcha'];

   


 

 $pass= password_hash($password, PASSWORD_BCRYPT);
 $cpass= password_hash($cpassword, PASSWORD_BCRYPT);

 $tokens= bin2hex(random_bytes(15));

 //email validation
 $emailquery="SELECT * FROM user_login WHERE email='$email'";
 $query=mysqli_query($con,$emailquery);

 $emailcount= mysqli_num_rows($query);

 if($emailcount>0){
    echo "<script> alert('email already exist')</script>";
 }else{
     if($password=== $cpassword){
          // captcha validation
                if($_SESSION['code']==$captcha){
                    $insert="INSERT INTO user_login(name,email,mobileno,password,tokens)VALUES('$name','$email','$mobile','$pass','$tokens')";
           $iquery= mysqli_query($con,$insert);
           $msg="hello $name ,we've just sent a verification link to your $email please check your email to verify your account";
                    if($iquery){
                        
                        
                        
                        //Instantiation and passing `true` enables exceptions
                        $mail = new PHPMailer(true);
                        
                        
                                    try {
                                        //Server settings
                                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                        $mail->isSMTP();                                            //Send using SMTP
                                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                        $mail->Username   = 'niikec14@gmail.com';                     //SMTP username
                                        $mail->Password   = 'Niikec2107';                               //SMTP password
                                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                                    
                                        //Recipients
                                        $mail->setFrom($_POST['email'],$_POST['name']);
                                        $mail->addAddress($_POST['email'],$_POST['name']);     //Add a recipient
                                        //$mail->addAddress('ellen@example.com');               //Name is optional
                                        $mail->addReplyTo('niikec14@gmail.com', 'Information');
                                        //$mail->addCC('cc@example.com');
                                        //$mail->addBCC('bcc@example.com');
                                    
                                        //Attachments
                                        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                                        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                                    
                                        //Content
                                        $mail->isHTML(true);                                  //Set email format to HTML
                                        $mail->Subject ="email verification link"; 
                                        $mail->Body    = "hello $name. click here to verify your account http://localhost/ecomm/activate.php?token=$tokens";
                                    
                                        $mail->send();
                                        echo 'Message has been sent';
                                    } catch (Exception $e) {
                                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                                    } 
                                                  
                                            }
                                        }else{
                                            echo "<script> alert('captcha error try again')</script>";
                                        }
                                    
                               }else{
                                echo "<script> alert('password not matching')</script>";
                               }
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
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    
    <center>
        <fieldset class="reg1" >
            
            <h2 class="heading">NEW USER...REGISTER HERE</h2>
       
        <form method="post">
            <div class="form">
                <p>
            <label for="fname"> Name</label>
            <input type="text"class="big" name="name" placeholder="enter your name"required><br>
                </p>
                <p>
                <label for="email">Email</label>
            <input type="email"class="big" name="email" placeholder="enter your email"required><br>
                </p>
                <p>
                    <label for="mobile">Mobile no</label>
            <input type="text"class="big" name="mobile" placeholder="enter your mobile no"required><br>
               </p>
               <p>
                <label for="Password">Password</label>
            <input type="password"class="big" name="password" placeholder="enter your password"required><br>
              </p>
              <p>
                <label for="cfnp">Confirm Password</label>
                <input type="password"class="big" name="cpassword" placeholder="enter confirm password"required><br>
                    </p>
                   
              <p>
                <label for="cfnp">CAPTCHA</label>
                <input type="text"class="big" name="captcha" placeholder="enter captcha"required>
                <img src="captcha.php" alt="" class="captcha">
                    </p>
                    
                
                   
              <p>
            <input type="submit"class="rbtn" name="submit" value="REGISTER">
            <div class="message">
             <?php
                echo $msg;
             
             ?>
            
            </div>
           
            
            
            <h3 class="h3">Already a member
                <a href="userlogin.php" class="lbtn">login</a>
            </h3>

            
             </p>
            </div>
        </form>
    </fieldset>
    </center>
</body>
</html>
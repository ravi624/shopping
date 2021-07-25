<?php
require 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>niike.com</title>
    <link rel="stylesheet" href="hpstyle.css">
    <script src="https://kit.fontawesome.com/917092dced.js" crossorigin="anonymous"></script>
    <style>
    .a1{
        font-size:35px;
        
        
        margin-left:40px;
        padding: 7px;
        color:black;
        
         
         
         

        

         
     }
     
    
    
    </style>
    
</head>
<body>
    <header>
        <h2>Niike.com</h2>
    </header>
    
       <nav>
           <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="checkout.php">CART</a></li>
               <li><a href="contactus.php">CONTACT US</a></li>
               <li><a href="usersregister.php">MY ACCOUNT</a></li>
           </ul>
       
       
       </nav>
       
          <?php
          $sql="select * from categories where status='1'";
          $res=mysqli_query($con,$sql);
          $row=mysqli_num_rows($res);
           if($row>0){
          while($data=mysqli_fetch_array($res)){
           ?>
           
                
                     <a class="a1" href="tshirt.php?id=<?php echo $data['name'];?>"><?php echo $data['name'];?></a>
                
            
        
           <?php 
           
           
           
          }
        }
       ?>
       
       
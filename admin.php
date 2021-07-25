<?php
require 'connect.php';
session_start();
if($_SESSION['user']==""){ 
    header("location:adminlogin.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
    <h1>Admin panel</h1>
     <ul>
         <!-- <li><a href="categories.php">CATEGORIES</a></li> -->
         <li><a href="managecategories.php">CATEGORIES MANAGER</a></li>
          <!-- <li><a href="product.php">PRODUCT</a></li> -->
         <li><a href="manageproduct.php">PRODUCT MANAGER</a></li>
         <li><a href="userlogindata.php">CUSTOMERS</a></li>
         <li><a href="adminlogout.php">LOGOUT</a></li>
     </ul>
    </header>
    <div>
        <p>welcome to admin panel</p>
    </div>
    <img src="images/welcomeadmin.jpg" class="adminimg" alt="">
</body>
</html>
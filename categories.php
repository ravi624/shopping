<?php
require'connect.php';
session_start();
if($_SESSION['user']==""){ 
    header("location:adminlogin.php");
}




if(isset($_POST['submit'])){
    $name=$_POST['pname'];
    
    
    $status=$_POST['status'];
    
   //query
   $sql="insert into categories (name,status)values('$name','$status')";
   $run=mysqli_query($con,$sql);
   if($run){
    echo"<script>alert('categories added successfully')</script>";
    echo"<br>";
    }else{
    echo"<script>alert('categories addition failed')</script>";
    
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
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <h1>CATEGORY</h1>
    <form action=""method="post">
    <div class="parent">
        <div class="child">
            <label for=""> CATEGORY NAME:</label><br>
            <input type="text"name="pname"placeholder="enter category name"required>
      
            
            <label for="">Status:</label><br>
            <input type="text"name="status"value="1"required>
            
            <label for="">Add category:</label><br>
            <input type="submit" class="submit" name="submit">



        </div>
    </div>
    </form>
    
    


     
</body>
</html>
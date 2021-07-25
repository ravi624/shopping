<?php
require'connect.php';
session_start();
if($_SESSION['user']==""){ 
    header("location:adminlogin.php");
}




if(isset($_POST['submit'])){
    $name=$_POST['pname'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    $pdesc=$_POST['pdesc'];
    $cat=$_POST['cat'];
    $img_name=$_FILES['image']['name'];
    $img_type=$_FILES['image']['type'];
    $tempname=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'];
    $folder="images/";
    

   
 //string to array conversion
    $arr_img= explode(".",$img_name);
     $ext=end($arr_img);
   //generate unique name
    $unique_name= crc32(time()).".".$ext;
    echo $unique_name;
   //uploading...
   $folder="images/".$unique_name;
   //query
   $sql="insert into product(name,qty,price,img,status,pdesc,cat)values('$name','$qty','$price','$folder','$status','$pdesc','$cat')";
   $run=mysqli_query($con,$sql);
   if($run){
    move_uploaded_file($tempname,$folder);
    echo"<script>alert('product upload successfully')</script>";
    echo"<br>";
    }else{
    echo"<script>alert('product upload failed')</script>";
    
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
    <h1>Add Product</h1>
    <form action=""method=post enctype="multipart/form-data">
    <div class="parent">
        <div class="child">
            <label for="">NAME:</label><br>
            <input type="text"name="pname"placeholder="enter product name"required>
            <label for="">CATEGORY:</label><br>
            <input type="text"name="cat"placeholder="enter category name"required>
            <label for="">Quantity:</label><br>
            <input type="number"name="qty"placeholder="enter quantity"required>
            <label for="">Price:</label><br>
            <input type="text"name="price"placeholder="enter price"required>
            <label for="">Status:</label><br>
            <input type="text"name="status"value="1"required>
            <label for="">Pdesc:</label><br>
            <input type="text"name="pdesc"placeholder="enter product desc"required>
            <label for="">Image:</label><br>
            <input type="file"name="image"placeholder="enter product image"required>
            <label for="">upload:</label><br>
            <input type="submit" class="submit" name="submit">



        </div>
    </div>
    </form>
    
    


     
</body>
</html>
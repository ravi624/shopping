<?php
require 'connect.php';
$id=$_GET['id']??"";
$sql="select * from product where product_id=$id";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_array($run);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style5.css">
</head>
<body>
    <h1>Update Product</h1>
    <form action=""method=post enctype="multipart/form-data">
    <div class="parent">
        <div class="child">
        <input type="hidden"name="id"value="<?php echo $data['product_id']?>">
            <label for="">NAME:</label><br>
            <input type="text"name="pname"value="<?php echo $data['name']?>">
            <label for="">CATEGORY:</label><br>
            <input type="text"name="cat"value="<?php echo $data['cat']?>">
            <label for="">Quantity:</label><br>
            <input type="number"name="qty"value="<?php echo $data['qty']?>">
            <label for="">Price:</label><br>
            <input type="text"name="price"value="<?php echo $data['price']?>">
            <label for="">Status:</label><br>
            <input type="text"name="status"value="1"required>
            <label for="">Pdesc:</label><br>
            <input type="text"name="pdesc"value="<?php echo $data['pdesc']?>">
            <label for="">Image:</label><br>
            <img src="<?php echo $data['img'];?>" height='100' width='100'></td>
            <input type="file"name="image"class="imgdata">
            <input type="submit" class="submit" name="update">



        </div>
    </div>
    </form>
    
    


     
</body>
</html>
<?php 
if(isset($_POST['update'])){
    $id=$_POST['id'];
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
   if(is_uploaded_file($tempname)){
   //query
   $sql_update="update product set name='$name',price='$price',qty='$qty',pdesc='$pdesc',cat='$cat',img='$folder'where product_id=$id";
   $run=mysqli_query($con,$sql_update);
   if($run){
    move_uploaded_file($tempname,$folder);
    echo"<script>alert('data updated successfully');
    window.location.href='manageproduct.php';
    </script>";
   }else{
    echo"<script>alert('data updation failed')</script>";

   }
}else{
    $sql_update="update product set name='$name',price='$price',qty='$qty',pdesc='$pdesc',cat='$cat'where product_id=$id";
   $run=mysqli_query($con,$sql_update);
   if($run){
    move_uploaded_file($tempname,$folder);
    echo"<script>alert('data updated successfully');
    window.location.href='manageproduct.php';
    </script>";
   }else{
    echo"<script>alert('data updation failed')</script>";

   }
}
 


    

}











?>
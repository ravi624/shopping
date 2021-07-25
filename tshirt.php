<?php
require 'connect.php';
include 'top.php';
session_start();
$id=$_GET['id'];
if(isset($_POST['add-to-cart'])){
    $_SESSION['cart'][]=array(
        'pid'=>$_POST['pid'],
        'price'=>$_POST['price'],
        'name'=>$_POST['name'],
        'quan'=>$_POST['quan'],
        'img'=>$_POST['img'],
    );
}


$query="select * from product where status='1' and cat='$id' ";
$res=mysqli_query($con,$query);
$row=mysqli_num_rows($res);
if($row>0){
    while($data=mysqli_fetch_array($res)){
        $name=$data['name'];
        $price=$data['price'];
        $img=$data['img'];
        $pdesc=$data['pdesc'];
         $cat=$data['cat'];
        $pid=$data['product_id'];
    




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylep.css">
    <script src="https://kit.fontawesome.com/917092dced.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="contaianer">
        <main class="grid">
            <article>
                <img src="<?php echo $img;?>" height='300' width='300'>
                <div class="text">
                    <h3><?php echo $name;?></h3>
                    <p><?php echo $pdesc;?></p>
                    <p><?php echo $price;?></p>
                    
                </div>
            </article>
            <form action=""method="post">
            <input type="number"class="qun"name="quan"min="1"max="5" value="1"placeholder="quantity">
            <input type="hidden"name="img" value="<?php echo $img;?>"placeholder="img">
            <input type="hidden"name="name" value="<?php echo $name;?>"placeholder="name">
            <input type="hidden"name="pid" value="<?php echo $pid;?>"placeholder="productid">
            <input type="hidden"name="price" value="<?php echo $price;?>"placeholder="price">
            <button type="submit"class="text-button"name="add-to-cart">Add to cart</button>
            
            
            
            </form>

           
        </main>
    </div>
    <?php }
}?>
<style>
a{
    color:white;
    text-decoration:none;
}


</style>
<a href="checkout.php"><i class="fas fa-cart-plus"></i><span><?php if(isset($_SESSION['cart'])){ echo              count($_SESSION['cart']);}else{echo '0';}?></span></a>
</body>
</html>
<?php 


?>
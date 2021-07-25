<?php
require 'connect.php';
$id=$_GET['id'];
$query="select * from product where product_id='$id'";
$res=mysqli_query($con,$query);
$output=mysqli_num_rows($res);
if($output>0){
    $data=mysqli_fetch_array($res);
        $name=$data['name'];
        $price=$data['price'];
        $img=$data['img'];
        $qty=$data['qty'];
        $pid=$data['product_id'];
        
        
        
}
if(isset($_POST['add-to-cart'])){
    $_SESSION['cart'][]=array(
        'pid'=>$_POST['pid'],
        'name'=>$_POST['name'],
        'price'=>$_POST['price'],
        'qty'=>$_POST['qty'],
        'img'=>$_POST['img']
    );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart page</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<h1>YOUR CART </h1>
<table border=2>
<tr>
  <th >IMAGE</th>
  <th >NAME</th>
  <th >QUANTITY</th>
  <th >PRICE</th>
  <th >TOTAL</th>



</tr>
 


<td><img src="<?php echo $img;?>" height='100' width='100'></td>
<td><?php echo $name;?></td>
<td><input type="number"name="qty"min="1"max="5"value="1"placeholder="quantity"><td>

</table>
<form action=""method="post">


    <input type="number"name="qty"min="1"max="5"value="1"placeholder="quantity">
    <input type="hidden"name="pid"value="<?php echo $pid;?>"placeholder="product-id">
    <input type="hidden"name="img"value="<?php echo $img;?>"placeholder="image">
    <input type="hidden"name="name"value="<?php echo $name;?>"placeholder="name">
    <input type="hidden"name="price"value="<?php echo $price;?>"placeholder="price">
    <button type="submit"name="add-to-cart">ADD TO CART</button>
    </form>


    <a href="checkout.php">
    <?php if(isset($_SESSION['cart'])){
    echo count($_SESSION['cart']);}
    else{
        echo 0;
        };?></a>




      
    
    
    
    
    
    
</body>
</html>
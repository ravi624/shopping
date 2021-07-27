<?php
session_start();
if(isset($_GET['remove'])){
  $prid=$_GET['remove'];
  foreach($_SESSION['cart'] as $k=>$part){
    if($prid==$part['pid']){
      unset($_SESSION['cart'][$k]);
    }
  }
}
if(isset($_GET['empty'])){
  unset($_SESSION['cart']);
}
$total=0;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>checkout</title>
  <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
  
</body>
</html>
<h1>your cart</h1>

<a href="checkout.php?empty=1">empty cart</a>
<table border=1>
<tr>
  <th>image</th>
  <th>name</th>
  <th>quantity</th>
  <th>price</th>
  <th>remove</th>

</tr>
<?php if(isset($_SESSION['cart'])):?>
   <?php foreach($_SESSION['cart']as $k=>$item):?> 
            <tr>
            <td><img src="<?php echo $item['img'];?>" height='100' width='100'></td>
            
            <td><?php echo $item['name'];?></td>
            <td><?php echo $item['quan'];?></td>
            <td><?php echo $item['price']*$item['quan'];
                 $pro=$item['price']*$item['quan'];
                 $total=$total+$pro;?></td>
            <td><a href="checkout.php?remove=<?php echo $item['pid'];?>">remove</a></td>
            
            





            </tr>
   <?php endforeach ?>
<?php endif ?>

<h2>total rs:<span><?php echo $total;?></span></h2>

</table>
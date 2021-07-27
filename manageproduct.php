<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <h1>MANAGE PRODUCTS</h1>
    <div class="div1">                                
    <a href="product.php" class="a1">ADD ITEM</a>
    </div>
    <table border=1>
    <thead>
    <tr>
     <th>IMAGE</th>
     <th>ID</th>
     <th>PRODUCT NAME</th>
     <th>PRICE</th>
     <th>QUANTITY</th>
     <th>PDES</th>
     <th>CATEGORY</th>
     <th>STATUS</th>
     <th colspan="2">ACTION</th>
     <th></th>
    
    
     
    </tr>
    </thead>
    <?php
    $query="select * from product";
    $res=mysqli_query($con,$query);
    $row=mysqli_num_rows($res);
    if($row>0){
        while($data=mysqli_fetch_array($res)){
            $name=$data['name'];
            $price=$data['price'];
            $img=$data['img'];
            $pdesc=$data['pdesc'];
            $qty=$data['qty'];
            $product_id=$data['product_id'];
            $status=$data['status'];
            $cat=$data['cat'];
    ?>
    <tbody>
        <tr>
            <form action=""method="post"enctype="multipart/form-data">
            <td><img src="<?php echo $img;?>" height='100' width='100'></td>
            <td><input type="text" name="product_id"value="<?php echo $product_id;?>"></td>
            <td><input type="text"name="name"value="<?php echo $name;?>"></td>
            <td><input type="text"name="price"value="<?php echo $price;?>"></td>
            <td><input type="numbers"name="qty"value="<?php echo $qty;?>"></td>
            <td><input type="text"name="pdesc"value="<?php echo $pdesc;?>"></td>
            <td><input type="text"name="cat"value="<?php echo $cat;?>"></td>
            <td>
            <?php 
            if($data['status']==1){
                
                echo "<a href='?type=status&operation=deactive&id=".$product_id."'>ACTIVE</a>&nbsp;&nbsp;&nbsp;";
                
               
            }else{
                echo "<a href='?type=status&operation=active&id=".$product_id."'>DEACTIVE</a>";

            }
            
            ?>
            </td>
            <td><?php echo  "<a href='update.php?id=".$product_id."'>EDIT</a>"?></td>

            <td><?php echo  "<a href='?type=delete&id=".$product_id."'>DELETE</a>"?></td>
            

            
             


            </form>
        </tr>
    </tbody>
    <?php 
      }
    }
    
    
    ?>
    
        
    
    
    </table>
</body>
</html>
<?php
if(isset($_GET['type'])&& $_GET['type']!=''){
    $type=$_GET['type'];
    if($type=='status'){
        $operation=$_GET['operation'];
        $id=$_GET['id'];
        if($operation=='active'){
            $status='1';
        }else{
            $status='0';
        }
        $sql="update product set status='$status'where product_id='$id'";
        mysqli_query($con,$sql);
    }
    if($type=='delete'){
        $id=$_GET['id'];
        $sql_del="delete from product where product_id='$id'";
        mysqli_query($con,$sql_del);


    }
}


?>
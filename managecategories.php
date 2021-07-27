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
    <style>
      .div1{
          float:right;
          font-size:40px;
          margin-right:40px;
          background:pink;
          border:3px dotted yellow;
      }
      table{
          width:80%;
          text-align:center;
          
      }
      th{
          background:blue;
          color:white;
      }
      h1{
          text-align:center;
      }
    </style>
</head>
<body>
    <h1>MANAGE CATEGORIES</h1>
    <div class="div1">                                
    <a href="categories.php" class="a1">Add category</a>
    </div>
    <table border=1>
    <thead>
    <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>STATUS</th>
     <th>ACTION</th>
    
    
     
    </tr>
    </thead>
    <?php
    $query="select * from categories";
    $res=mysqli_query($con,$query);
    $row=mysqli_num_rows($res);
    if($row>0){
        while($data=mysqli_fetch_array($res)){
            $sr_no=$data['sr_no'];
            $name=$data['name'];
            $status=$data['status'];
    ?>
    <tbody>
        <tr>
            <td><?php echo $sr_no;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $status;?></td>
            <td>
            <?php 
            if($data['status']==1){
                
                echo "<a href='?type=status&operation=deactive&id=".$sr_no."'>ACTIVE</a>&nbsp;&nbsp;&nbsp;";
                
               
            }else{
                echo "<a href='?type=status&operation=active&id=".$sr_no."'>DEACTIVE</a>";

            }
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo  "<a href='?type=delete&id=".$sr_no."'>DELETE</a>";

            ?>
            

            
             


        
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
        $sql="update categories set status='$status'where sr_no='$id'";
        mysqli_query($con,$sql);
    }
    if($type=='delete'){
        $id=$_GET['id'];
        $sql_del="delete from categories where sr_no='$id'";
        mysqli_query($con,$sql_del);


    }
}
    
    

   

?>
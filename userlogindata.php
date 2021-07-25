<?php
require'connect.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlogin</title>
    <style>
    table{
        width:100%;
    }
    td{
        text-align:center;
    }
    th{
        background:blue;
        color:white;
    }
    
    </style>
</head>
<body>
    <h1 style="text-align:center">users data</h1>
    <table border=1>
    <thead>
    <tr>
       <th>id</th>
       <th>NAME</th>
       <th>EMAIL</th>
       <th>MOBILE</th>
    
    </tr>
    
    </thead>
    <?php
    $query="select * from user_login";
    $res=mysqli_query($con,$query);
    $row=mysqli_num_rows($res);
    if($row>0){
        while($data=mysqli_fetch_array($res)){
            $id=$data['id'];
            $name=$data['name'];
            $email=$data['email'];
            $mobileno=$data['mobileno'];
            
    ?>
    <tbody>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name?></td>
        <td><?php echo $email?></td>
        <td><?php echo $mobileno?></td>
      
      </tr>
    
    </tbody>
    <?php
        }
    }  
    
    ?>
    
    </table>

</body>
</html>
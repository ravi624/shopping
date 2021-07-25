<?php
require'connect.php';
if(isset($_POST['submit'])){
   //print_r( $_FILES['imgupload']);
   //get value from form
   $image_name=$_FILES['imgupload']['name'];
   $image_type=$_FILES['imgupload']['type'];
   $tempname=$_FILES['imgupload']['tmp_name'];
   $image_size=$_FILES['imgupload']['size'];
   $folder="images/";

   
 //string to array conversion
    $arr_img= explode(".",$image_name);
     $ext=end($arr_img);
    
    //generate unique name
     $unique_name= crc32(time()).".".$ext;
     echo $unique_name;
    //uploading...
    
    //inserting into database
    $folder="images/".$unique_name;
    $query="insert into imgtest (image,status,product_id)values('$folder','1','chair')";
    $run=mysqli_query($con,$query);
    if($run){
       move_uploaded_file($tempname,$folder);
       echo"<script>alert('file upload successfully')</script>";
       echo"<br>";
       getdata();
       //echo"<img src='$folder' height='300'width='300'>"; 
       
   }else{
       echo"upload failed";
   }

    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image testing</title>
</head>
<body>
    <center>
    <form action=""method="post"enctype="multipart/form-data">
    <label for="">upload image please</label><br><br>
    <input type="File" name="imgupload"><br><br>
    <input type="submit" value="upload" name="submit">
    
    
    
    </form>
    </center>
</body>
</html>
<?php 
function getdata(){
    global $con;
    $query="select * from imgtest";
    $run=mysqli_query($con,$query);
    $totalrows=mysqli_num_rows($run);

    if($totalrows!=0){
        echo"<table border ='1'>
        <tr>
        <th>srno</th>
        <th>IMAGE</th>
        <th>status</th>
        <th>productid</th>
        </tr>
        ";
        
        while($data=mysqli_fetch_array($run))
        {
            echo"
            <tr>
            <td>".$data['sr_no']."</td>
            <td><img src='$data[1]'height='100'width='150'></td>
            <td>".$data['status']."</td>
            <td>".$data['product_id']."</td>
            
            
            </tr>
            ";
            
            
            
        }
        echo"</table>";
    }
}

?>
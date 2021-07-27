<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>niike.com</title>
    <link rel="stylesheet" href="css/hpstyle.css">
    <script src="https://kit.fontawesome.com/917092dced.js" crossorigin="anonymous"></script>
    
</head>
<body>
       <div class="container">
           <div class="item1">
                <a href="tshirt.php?id=shirt">
               <h1 class="th1">tshirt</h1>
               <img src="images/boy1.jpeg"class="img1" alt="">
               <div>
               <button class="button">Explore more</button>
                </div>
               </a>
        </div>
           <div class="item2">
           <a href="tshirt.php?id=fridge">
               
           <h1 class="fh1">fridge</h1>
           <img src="images/fridge.jpeg"class="img2" alt="">
                <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           
           </div>
           <div class="item3">
           <a href="tshirt.php?id=jeans">

        
           <h1 class="jh1">Jeans</h1>
           <img src="images/jeans.jpeg"class="img3" alt="">
            <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item4">
           <a href="tshirt.php?id=mobile">

        
           <h1 class="mh1">Mobile</h1>
           <img src="images/mobile.jpeg"class="img4" alt="">
            <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item5">
           <a href="tshirt.php?id=shoe">

    
           <h1 class="sh1">Shoe</h1>
           <img src="images/shoes.jpeg"class="img5" alt="">
           <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item6">
               
           <h1 class="dh1">Desktop</h1>
           <a href="tshirt.php?id=desktop">

           <img src="images/desktop.jpeg"class="img6" alt="">
           <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item7">
           <a href="tshirt.php?id=girls wear">
           
               
           <h1 class="gh1">Girls wear</h1>
           <img src="images/bd.jpeg"class="img6" alt="">
           <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item8">
           <a href="tshirt.php?id=sport">

            
           <h1 class="sph1">Sports</h1>
           <img src="images/carrom.jpeg"class="img6" alt="">
           <div>
               <button class="button">Explore more</button>
                </div>
               </a>
           </div>
           <div class="item9">
           <a href="tshirt.php?id=decoration">
               
           <h1 class="dh1">Decoration</h1>
           <img src="images/panda.jpeg"class="img6" alt="">
           <div>
               <button class="button">Explore more</button>
                </div>
           </a>
               
           
       </div>
       <?php

include 'connect.php';

?>

    <div class="footer">
    <div class="aboutus"><h4 class="fh">About us</h4>
    <p class="about">this website is for<br> 
    demo purpose only please<br>
    dont buy from this website.
    </p>
    
    </div>
    <div class="quickl"><h4 class="fh">Quick links</h4>
    <li>HOME</li>
    <li>FAQ</li>
    <li>HELP</li>
    
    <p class="fhc">&copy<?php echo date('Y')?>:niike.com </p>
    </div>
    <div class="contact"><h4 class="fh">Contact us</h4>
    <p class="add"><i class="fas fa-map-marker-alt"></i>  road4,sangam<br>
    chowk,bihar-123456<br>
    gaya,india
    
    
    </p>
    <p class="phone"><i class="fas fa-phone-volume"></i> :1234567890</p>
    
    
    
    </div>
    
    
    
    </div>
<?php?>


       
       
       
    
    
    
</body>
</html>
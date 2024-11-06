<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" href="homee.css">
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
</head>

<body>
   <div class="container">
    <nav>
        <div class="logo">
            <h1> <a href="home.php">Electro Zr</a></h1>
            
        </div>
        <form action="logout.php"  method="post">
        <ul>
            <li>
                <a id="Home">Home</a>
                <a href="shop.html">Shop</a>
                <a  href="pjj.html" target="_blank">About</a>
                <a>Contact</a>
                
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                <span class="user-name">Welcome, <?php echo $_SESSION['fullname']; ?></span>
                <input name="logout" type="submit" value="LogOut">
            </li>
            
        </ul>
        </form>
    </nav>
    <div class="main">
        <div class="maintext">
            <h2>Electro Zr</h2>
            <h1 class="top"> Là où chaque achat est une victoire.</h1>
            <button><a href="shop.html">Explore</a></button>
        </div>
        <img src="m3.png" alt="">
    </div>
    <!--refri-->
   <div class="trend">
        <div class="head">
            <h1>Electro Zr <span>Refrigerators</span></h1>
        </div>
        <div class="card">  
            <div class="crd">
                <img src="srt1.webp" alt="">
                <div class="crdText">
                <h2>Side By Side Refrigerator</h2>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i> <br>
                <button class="addtocart">Add To Cart</button>
            </div>
            </div>
            <div class="crd">
                
                <img src="str3.webp" alt="">
                <div class="crdText">
                <h2>LG French Door Refrigerator</h2>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i> <br> </div>
                <button class="addtocart">Add To Cart</button>
           
            </div>
            <div class="crd">
                <img src="str2.webp" alt="">
                <div class="crdText">
                <h2>Twin Cooling Refrigerator</h2>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i> <br>
                </div>
                <button class="addtocart">Add To Cart</button>
            
        </div>
   </div>
   <!--tv-->
   <div class="trend">
    <div class="head">
        <h1>Electro Zr <span>TVs</span></h1>
    </div>
    <div class="card">  
        <div class="crd">
            <img src="tv1.jpg" alt="">
            <div class="crdText">
            <h2>Samsung QN900A Neo QLED 8K</h2>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i> <br>
            <button class="addtocart">Add To Cart</button>
        </div>
        </div>
        <div class="crd">
            <img src="tv4.jpg" alt="">
            <div class="crdtexttvmkhrbq">
            <h2>LG 86 inch Class 4K UHD ThinQ</h2>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i> <br>
            <button class="addtocart">Add To Cart</button>
        </div>
        </div>
    
        <div class="crd">
            <img src="tv2.jpg" alt="">
            <div class="crdtexttvmkhrbq">
            <h2>Samsung AU7000 4K</h2>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i> <br>
            </div>
            <button class="addtocart">Add To Cart</button>
        
    </div>
</div>
<!--letter-->
<div class="letter">
    <div>
        <h1>Validez votre adresse e-mail</h1>
        <p>Recevez directement dans votre boîte email et en avant-première tous nos bons plans, promotions, dépliants, conseils d'experts, concours et bien plus encore!</p>
    </div>
    <div class="inp">
        <input type="text" placeholder="Enter E-mail">
        <button>validé</button>
    </div>
</div>
<!--footer-->
<div class="footer">
    <div class="footerText">
        <h2>About us</h2>
        <p>Address = fsdjnkkdfj</p>
        <p>Service</p>
        <p>Customer</p>
        <p>Satisfaction</p>
    </div>
</div>
<div class="footer">
    <div class="footerText">
        <h2>Contact</h2>
        <p>0602864497</p>
        <p>zakariazkar85@gmail.com</p>
       
    </div>
</div>

   </div>
   <script src="pj.js"></script>
</body>

</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="log">
            <div class="btn">
                <button class="btnn btn1" id="login">Log in</button>
                <button class="btnn btn2" id="register">Sign Up</button>
            </div>
            <!--login-->
            <form action="login.php" method="post"> 
                <div class="login-form">
                    <div class="form-title">
                        <span>Sign In</span>
                    </div>
                    <?php if (isset($_SESSION['emptyV'])): ?>
                          <h1 style="color: red;"> <?php echo $_SESSION['emptyV']; ?></h1>
                        <?php unset($_SESSION['emptyV']); endif; ?>
                    <div class="form-inputs">
                        <div class="input-box">
                            <input name="usernamee" type="text" class="input-field" placeholder="Username" >
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-box">
                            <input name="passName" type="password" class="input-field" placeholder="Password" >
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <?php if (isset($_SESSION['erorpassword'])): ?>
                          <p style="color: red;"> <?php echo $_SESSION['erorpassword']; ?></p>
                        <?php unset($_SESSION['erorpassword']); endif; ?>
                        <?php if (isset($_SESSION['incopass'])): ?>
                          <p style="color: red;"> <?php echo $_SESSION['incopass']; ?></p>
                        <?php unset($_SESSION['incopass']); endif; ?>
                        <div class="forgot-pass">
                            <a href="#">Forgot password?</a>
                        </div>
                        <div class="input-box">
                            <input name="login" type="submit" class="input-submit" value="Sign In">
                        </div>
                    </div>
                </div>
            </form>
            
            <form action="registre.php" method="post">
            <!--register-->
            <div class="register-form">
                <div class="form-title">
                    <span>Create account</span>
                </div>
                <?php if (isset($_SESSION['errorempty'])): ?>
                          <h1 style="color: red;"> <?php echo $_SESSION['errorempty']; ?></h1>
                        <?php unset($_SESSION['errorempty']); endif; ?>
                <div class="form-inputs">
                <div class="input-box">
                        <input name="email" type="text" class="input-field" id="email" placeholder="E-mail">
                        <i class="fa-solid fa-envelope"></i>
                        <?php if (isset($_SESSION['erroremail'])): ?>
                            <p style="color: red;"><?php echo $_SESSION['erroremail']; ?></p>
                        <?php unset($_SESSION['erroremail']); endif; ?>
                    </div>

                    <div class="input-box">
                        <input name="fullname" type="text" class="input-field" id="name" placeholder="Full Name" >
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input name="username" type="text" class="input-field" id="user" placeholder="Username" >
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input name="password" type="password" class="input-field" id="password" placeholder="Password"     >
                        <i class="fa-solid fa-lock"></i>
                        <?php if (isset($_SESSION['errorpassword'])): ?>
                          <p style="color: red;"> <?php echo $_SESSION['errorpassword']; ?></p>
                        <?php unset($_SESSION['errorpassword']); endif; ?>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">forgot password?</a>
                    </div>
                     <div class="input-box">
                            <input name="registre" type="submit" class="input-submit" value="Sign Up">
                        </div>
                </div>
                </form>
                <div class="social-media">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>

</body>
</html>

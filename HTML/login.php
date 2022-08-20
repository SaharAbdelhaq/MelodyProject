<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Melodies</title>
    <link rel="stylesheet" href="../CSS/login.css" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>



<div class="nin">
    <img src="../imgs/logo.png" alt="Melody Logo" width="160" height="60" >
</div>

<div class="containerrr red topBotomBordersOut">

    <nav1>
        <a class="navclass" href="../homee.html">Home</a>
        <a class="navclass" href="./about.html">About</a>
        <a class="navclass" href="./profile.php">Account</a>
        <a class="navclass" href="./login.php">Login</a>
        <a class="navclass" href="#hui1 ">Orchestra</a>
        <a class="navclass" href="#hui2">Instruments</a>
        <a class="navclass" href="#hui2">ContactUs</a>

    </nav1>

</div>

<div class=" ollaa">
<div class="containeer">
    <div class="singinsignup">
        <form action="signup.php" class="signinform" method="post" >
            <h2 class="title">Sign in</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="User Name" name="email" >
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" autocomplete="off" >
            </div>
            <input type="submit" value="Login" class="btn" name="login">

            <p class="social-text">Or sign in with social platform</p>
            <div class="social-media">

                <a class="socialicon" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="socialicon" href="#"><i class="fab fa-twitter"></i></a>
                <a class="socialicon" href="#"><i class="fab fa-instagram"></i></a>
                <a class="socialicon" href="#"><i class="fab fa-google"></i></a>

            </div>
            <!--<p class="account-text">Don't have an account?<a href="#" id="signupbtn2">Sign up</a></p>!-->
        </form>

        <!-- FOR SIGN UP--->

        <form action="signup.php" class="signupform" enctype="multipart/form-data" method="post" >

            <h2 class="title">Sign up</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="First Name"  name="fname" >
            </div>

             <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Last Name"  name="lname" >
            </div>

            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="number" placeholder=" Phone Number" name="phone" >
            </div>

            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" name="email">
            </div>


            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder=Password name="password" >
            </div>

            <div class="input-field">
                <i class="fas fa-check"></i>
                <input type="password" placeholder="Confirm Password" name="confpass" >
            </div>
            <input type="submit" value="submit" class="btn" name ="signup">

            <p class="social-text">Or sign in with social platform</p>
            <div class="social-media">

                <a class="socialicon" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="socialicon"  href="#"><i class="fab fa-twitter"></i></a>
                <a class="socialicon"  href="#"><i class="fab fa-instagram"></i></a>
                <a class="socialicon"  href="#"><i class="fab fa-google"></i></a>

            </div>
            <!--  <p class="account-text">Already have an account?<a href="#" id="signinbtn2" >Sign up</a></p>!-->

        </form>

    </div>
    <div class="panels-container">
        <div class="panel leftpanel">
            <div class="contentt">
                <h3>Member at the site ?</h3>
                <button class="btn" id="signinbtn">Sign in</button>
            </div>
            <img src="../imgs/lgin.png" alt="" class="images">

        </div>
        <div class="panel rightpanel">
            <div class="contentt">
                <h3>New to site ?</h3>
                <button class="btn" id="signupbtn">Sign up</button>
            </div>
            <img src="../imgs/undraw_media_player_re_rdd2.svg" alt="" class="images">

        </div>

    </div>
</div>
</div>
<script src="../JS/login.js"></script>
</body>
</html>
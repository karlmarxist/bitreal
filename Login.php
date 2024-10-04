<?php
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login​​">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <link rel="icon" href="images/favicon.svg">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/logoName.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <?php
    require 'header.php';
    ?>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-45c1" data-image-width="1440" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Login<span style="font-weight: 700;">
            <span style="font-weight: 400;"></span>
          </span>
        </h2>
        <div class="u-expanded-width-xs u-form u-login-control u-radius-17 u-white u-form-1">
          <form action="includeFiles/login.inc.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 24px;">
            <div class="u-form-group u-form-name">
              <label for="username-a30d" class="u-label">Email *</label>
              <input type="text" placeholder="Enter your Username" id="username-a30d" name="email" class="u-grey-5 u-input u-input-rectangle u-radius-10 u-input-1" required>
            </div>
            <div class="u-form-group u-form-password">
              <label for="password-a30d" class="u-label">Password *</label>
              <input type="text" placeholder="Enter your Password" id="password-a30d" name="pwd" class="u-grey-5 u-input u-input-rectangle u-radius-10 u-input-2" required>
            </div>
            <div class="u-form-checkbox u-form-group">
              <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
              <label for="checkbox-a30d" class="u-label">Remember me</label>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" value="Login" name="submit" class="u-active-palette-1-dark-1 u-border-hover-grey-75 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-12 u-btn-1">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <!--<a href="#" class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-white u-btn-2">Forgot password?</a>-->
        <a href="Sign-Up.php" class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-body-alt-color u-btn-3">Don't have an account?</a>
      </div>
      <?php 
           if (isset($_GET["error"])){
               if ($_GET["error"] == "emptyinput"){
                   echo "<script type='text/javascript'> alert(`Fill in all the Fields!`); </script>";
               }
               else if ($_GET["error"] == "emailIncorrect"){
                   echo "<script type='text/javascript'> alert(`Email not found!`); </script>";
               }
               else if ($_GET["error"] == "passwordIncorrect"){
                echo "<script type='text/javascript'> alert(`Password incorrect!`); </script>";
               }else if ($_GET["error"] == "none"){
                 echo "<script type='text/javascript'> alert(`Account created, login with your credentials.`); </script>";
               } 
           }
        ?>
    </section>
    
    
    
  
</body></html>
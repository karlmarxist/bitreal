<?php
 session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Get Started">
    <meta name="description" content="">
    <title>Sign Up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Sign-Up.css" media="screen">
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
    <meta property="og:title" content="Sign Up">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <?php
    require 'header.php';
    ?>
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_cf8b">
      <h2 class="u-align-center u-text u-text-default u-text-1"> Get Started</h2>
      <img class="u-expanded-width u-image u-image-default u-image-1" src="images/gh4.jpg" alt="" data-image-width="1440" data-image-height="1080">
      <div class="u-form u-radius-20 u-white u-form-1">
        <form action="includeFiles/signup.inc.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-15 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 23px;" redirect="true">
          <h4 class="u-align-center u-form-group u-form-text u-text u-text-2"> &nbsp;​​Sign up to get started!</h4>
          <div class="u-form-group u-form-name">
            <label for="name-4c18" class="u-label">Name</label>
            <input type="text" placeholder="Enter your Name" id="name-4c18" name="name" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-4c18" class="u-label">Email</label>
            <input type="email" placeholder="Enter a valid email address" id="email-4c18" name="email" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10" required="">
          </div>
          <div class="u-form-group u-form-group-4">
            <label for="text-846a" class="u-label">Choose Password</label>
            <input type="text" placeholder="Choose a password" id="text-846a" name="pwd" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-form-group-5">
            <label for="text-4b75" class="u-label">Repeat Password</label>
            <input type="text" placeholder="Repeat Password" id="text-4b75" name="pwdRepeat" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <div class="u-form-group u-form-group-6">
            <label for="text-fef5" class="u-label">Enter your Bitcoin Wallet Address</label>
            <input type="text" placeholder="" id="text-fef5" name="walletAddress" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-10">
          </div>
          <input type="hidden" name="amountPaid" value="0">
          <input type="hidden" name="userSub" value="None yet...">
          <input type="hidden" name="userPlan" value="----">
          <input type="hidden" name="xprofit" value="----">
          <input type="hidden" name="activation" value="----">
          <input type="hidden" name="xwithdrawal" value="----">
          <div class="u-align-right u-form-group u-form-submit">
          <input type="submit" value="Sign Up" name="submit" class=" u-active-palette-1-dark-1 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-10 u-btn-1">
          </div>
        </form>
      </div>
      <a href="Login.php" class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-body-alt-color u-btn-3" target="_blank">Already have an account? Log in</a>
    
    </section>

<?php
            if (isset($_GET["error"])){
               if ($_GET["error"] == "emptyinput"){
                   echo "<script type='text/javascript'> alert(`Fill in all Fields`); </script>";
               }
               else if ($_GET["error"] == "invalidEmail"){
                   echo "<script type='text/javascript'> alert(`Choose a valid Email`); </script>";
               }
               else if ($_GET["error"] == "passwords don't match"){
                echo "<script type='text/javascript'> alert(`The passwords do not match`); </script>";
               }
               else if ($_GET["error"] == "email already used"){
                echo "<script type='text/javascript'> alert(`Email already taken`); </script>";
               }
               else if ($_GET["error"] == "none"){
                echo "<script type='text/javascript'> alert(`You are signed up! Welcome.`); </script>";
               }
           }
        ?>
    
    
  
</body></html>
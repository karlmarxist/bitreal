<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=egde">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Font awesome-->
        <script src="https://kit.fontawesome.com/29f008667d.js" crossorigin="anonymous"></script>

        <title>Dashboard</title>
        <link rel="icon" href="images/favicon.svg">
        <link rel="stylesheet" href="css/dashboard-style.css?<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="css/payment-withdrawal.css?<?php echo time(); ?>" type="text/css">
        <style rel="stylesheet" type="text/css">
            #menu .list-of-menu li:nth-child(6){
                /* background-image:linear-gradient(90deg, white, rgb(210, 208, 208)); */
                background-color: white;
                /* border: 1.5px solid black; */
                margin:5px 0 5px 5px;
                border-radius: 40px 0 0 40px;
            }
            #menu .list-of-menu li:nth-child(6) a{
              color: black;
            }
            #menu .list-of-menu li:nth-child(6) i{
              color: black;
            }
            
            .form-section{
                margin-top: 25px;
            }
            .form{
                width: 50%;
                margin: auto;
                height: auto;
            }
            .main-div{
                margin-top: 30px;
            }
            .main-div button{
                width: 40%;
                padding: 10px 0;
                border: none;
                background: #ea6a47;
            }
            .sub-div input{
                width: 100%;
                padding: 8px 10px;
                border: 1.5px solid grey;
                border-radius: 8px;
                margin-bottom: 30px;
            }
            @media (max-width:470px){
                .form{
                    width: 80%;
                    margin: auto;
                    height: auto;
                }
            }
        </style>
        <!--jQuery CDN-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
         <!--Section 1 Begins-->

        <section id="menu">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logoHome1.png" alt="logo" class="logo"> 
                </a>
            </div>
            <div class="list-of-menu">
                <li><i class="fa-solid fa-house"></i><a href="index.php">Home</a></li>
                <li><i class="fa-solid fa-user"></i><a name="Dashboard" href="Dashboard.php">Dashboard</a></li>
                <li><i class="fa-solid fa-folder-plus"></i><a href="about.php">About</a></li>
                <li><i class="fa-solid fa-ear-listen"></i><a href="contact.php">Contact</a></li>
                <li><i class="fa-sharp fa-solid fa-money-bill"></i><a name="accountActivation" href="payment.php">Account Activation</a></li>
                <li><i class="fa-solid fa-wallet"></i><a name="withdrawal" href="withdrawal.php">Withdrawal</a></li>
                <li><i class="fa-solid fa-right-from-bracket"></i><a name="logout" href="includeFiles/logout.inc.php">Log Out</a></li>   
            </div>
        </section>
        <!--Section 1 ends-->
       <!--Section 2 Begins-->
        <section id="interface">
        <div class="navigation">
                <div class="dud">
                    <div >
                       <i id="menu-icon" class="fas fa-bars"></i>
                    </div>

                </div>
                <div class="user-profile">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
            </div>
            <div>
                     <?php if (isset($_SESSION['username'])) : ?>
                <h3 class="page-name">
                   <?php
                    echo "Withdrawal - ". $_SESSION['username'];
                   ?>
                </h3>
            </div>
            <!-- section content begin -->
        <section class="form-section">
            <div class="payment-type-main">
            <div class="payment-type-sec-header">
                <h2>Put in your account details below</h2>
            </div>
           <div class="form">
               <form method="post">
                   <div class="main-div">
                       <div class="sub-div payment-upload-main">
                           <input name= "walletAddress" value="<?php echo $_SESSION['userwallet']?>">
                           <input name= "amount" placeholder="Enter the amount you want to withdraw" required>
                           <button type="submit" name="submit" >SUBMIT</button>
                       </div>
                   </div>
               </form>
           </div>
           <?php
           if(isset($_POST["submit"])){
              $amount = $_POST["amount"];
              $eligible = $_SESSION['usersub'];
              
              if($eligible > 500){
                    if($amount<500){
                        header("location: withdrawal.php?error=lessThan");
                    }else if ($amount > 500){
                        header("location: Dashboard.php?error=withdrawalProcessing");
                    }else{
                        header("location: withdrawal.php?error=loginAgain");
                    }
                }else{
                    header("location: Dashboard.php?error=notEligible");
                }
            }
           ?>
           <?php endif ?>
        </section>
        <!--Section 2 Ends-->
        <?php 
            if(isset($_GET['error'])){
                if($_GET['error']=== 'lessThan'){
                 echo "<script type='text/javascript'> alert(`You can't withdraw less than $500`); </script>";
                }
                else if($_GET['error']=== 'loginAgain'){
                 echo "<script type='text/javascript'> alert(`Please log in again`); </script>";
                }
            }
 
        ?>
        <script>
          $('#menu-icon').click(function(){
              $('#menu').toggleClass("active");
          })  

          function processing(){
              window.location.href="Dashboard.php"
              return alert('Note: Your withdrawal is processing');
              
          }
        </script>

    </body>
</html>
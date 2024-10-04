<?php
  session_start();
  
  if (!isset($_SESSION['username'])) {
    header("location: Login.php");
    exit();  // It's good practice to add exit() after a header redirect
  }
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
            #menu .list-of-menu li:nth-child(5){
                /* background-image:linear-gradient(90deg, white, rgb(210, 208, 208)); */
                background-color: white;
                /* border: 1.5px solid black; */
                margin:5px 0 5px 5px;
                border-radius: 40px 0 0 40px;
            }
            #menu .list-of-menu li:nth-child(5) a{
              color: black;
            }
            #menu .list-of-menu li:nth-child(5) i{
              color: black;
            }
        </style>
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
                <li><i class="fa-solid fa-folder-plus"></i><a href="About.php">About</a></li>
                <li><i class="fa-solid fa-ear-listen"></i><a href="Contact.php">Contact</a></li>
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
                    echo "Account activation - ". $_SESSION['username'];
                   ?>
                </h3>
            </div>
            <div class="gold-sub">
                <div class="gold-sub-header">
                    <h2>Real Estate Subscription</h2>
                </div>
                <div class="gold-sub2">
                    <div class="gold-sub-type">
                        <p>Choose Subscription Type</p>
                        <select name="subscription" id="sub">
                            <option value="">MONTHLY ($5,000 - $25,000)</option>
                            <option value="">YEARLY ($56,000 - Infinite)</option>
                        </select>
                    </div>
                    <div class="pay-buttons-gen">
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupUsdt()"><img src="blockchain-assets-icons-top-100/SVG/USDT.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup4">
                                    <img src="blockchain-assets-icons-top-100/PNG/USDT.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="bc1q9wufqk6rejtf7gf94g49dlzkq9j32v8mugrndc">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupUsdt()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <div>
                                <p>Pay with USDT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gold-sub">
                <div class="gold-sub-header">
                    <h2>Gold Subscription</h2>
                </div>
                <div class="gold-sub2">
                    <div class="gold-sub-type">
                        <p>Choose Subscription Type</p>
                        <select name="subscription" id="sub">
                            <option value="">WEEKLY ($1,200 - $6,000)</option>
                            <option value="">MONTHLY ($12,000 - Infinite)</option>
                        </select>
                    </div>
                    <div class="pay-buttons-gen">
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupUsdt()"><img src="blockchain-assets-icons-top-100/SVG/USDT.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup4">
                                    <img src="blockchain-assets-icons-top-100/PNG/USDT.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="bc1q9wufqk6rejtf7gf94g49dlzkq9j32v8mugrndc">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupUsdt()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <div>
                                <p>Pay with USDT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypto-sub">
                <div class="crypto-sub-header">
                    <h2>Cryptocurrency Subscription</h2>
                </div>
                <div class="crypto-sub2">
                    <div class="crypto-sub-type">
                        <p>Choose Subscription Type</p>
                        <select name="subscription" id="sub">
                            <option value="silver">WEEKLY ($500 - $1,999)</option>
                            <option value="gold">MONTHLY ($2,000 - $4,999)</option>
                            <option value="platinium">SESTO (Minimium $5,000)</option>
                        </select>
                    </div>
                    <div class="pay-buttons-gen">
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopup()"><img src="blockchain-assets-icons-top-100/SVG/BTC.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup">
                                    <img src="blockchain-assets-icons-top-100/PNG/BTC.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="bc1q9wufqk6rejtf7gf94g49dlzkq9j32v8mugrndc">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopup()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <p>Pay with Bitcoin</p>
                        </div>
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupEth()"><img src="blockchain-assets-icons-top-100/SVG/ETH.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup0">
                                    <img src="blockchain-assets-icons-top-100/PNG/ETH.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="0x94c44Fcf8Dc9c42F03e6743c770273Cd09F6a020">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupEth()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <p>Pay with Ethereum</p>
                        </div>
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupLtc()"><img src="blockchain-assets-icons-top-100/SVG/LTC.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup1">
                                <img src="blockchain-assets-icons-top-100/PNG/LTC.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="ltc1qw0hplj96yduk8xga4cv4lwfqqh92czexzqn0d9">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupLtc()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <p>Pay with LiteCoin</p>
                        </div>
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupBnb()"><img src="blockchain-assets-icons-top-100/SVG/BNB.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup2">
                                <img src="blockchain-assets-icons-top-100/PNG/BNB.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="bnb16rkaewvxepepvx8ylc4mjdrs8cjym2nnyf0n2e">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupBnb()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <p>Pay with BNB</p>
                        </div>
                        <div class="pay-buttons-gen2">
                            <div class="pay-buttons">
                                <button type="submit" class="btn" onclick="openPopupDoge()"><img src="blockchain-assets-icons-top-100/SVG/DOGE.svg" alt="" width="70" height="70"></button>
                                <div class="pop-up" id="popup3">
                                <img src="blockchain-assets-icons-top-100/PNG/DOGE.png">
                                    <p>Copy the address below</p>
                                    <div class="copy-text">
                                        <!--The copy text field-->
                                        <input type="text" id="myInput" value="D7RKXpz8Be8WYrHd5HYNb7Xw7aqhqNkNzR">
                                        <!--Button to copy text-->
                                        <button onclick="myFunction()" >Copy Text</button>
                                    </div>
                                    <button class="to-upload-btn" onclick="closePopupDoge()">I have paid</button>
                                    <p><em>*If you're not redirected, goto <a href ="#file-upload">upload</a> to confirm payment</em></p>
                                </div>
                            </div>
                            <p>Pay with DogeCoin</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-upload-main">
                <form action="includeFiles/upload-image.inc.php" method="POST" enctype="multipart/form-data">
                   <div> 
                   </div>
                   <div class="choose">
                   <h2>Upload Proof of Payment</h2>
                   </div>
                    <div class="payment-upload">
                        <input id="file-upload" type="file" name="image">
                        <button name="submit" type="submit" value="Upload Image/Data">SUBMIT</button>
                    </div>
                </form>
            </div>
            <?php
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "fileTooLarge"){
                        echo "<script type='text/javascript'> alert(`Sorry, looks like the image is too large!`); </script>";
                    }
                    else if ($_GET["error"] == "wrongFileType"){
                        echo "<script type='text/javascript'> alert(`Opps! Wrong file type!`); </script>";
                    }
                    else if ($_GET["error"] == "unknownError"){
                        echo "<script type='text/javascript'> alert(`Uhhmm, we don't know what happened, please try again.`); </script>";
                    }
                    else if ($_GET["error"] == "imageNotUploaded!"){
                        echo "<script type='text/javascript'> alert(`My apologies, the image was not uploaded, try again please...`); </script>";
                    }
                    else if ($_GET["error"] == "loginAgain"){
                        echo "<script type='text/javascript'> alert(`I think the problem is in our side, try logging in again.`); </script>";
                    }
                }
            ?>
        <!-- section content end -->
        <?php endif?>
        </section>
        <!--Section 2 Ends-->
        <script>
           
           /*Popup*/
           let popup = document.getElementById("popup");
           let popupEth = document.getElementById("popup0");
           let popupLtc = document.getElementById("popup1");
           let popupBnb = document.getElementById("popup2");
           let popupDoge = document.getElementById("popup3");
           let popupUsdt = document.getElementById("popup4");
           function openPopup(){
               popup.classList.add("open-popup");

           }
           function closePopup(){
               popup.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }
           function openPopupEth(){
               popupEth.classList.add("open-popup");

           }
           function closePopupEth(){
               popupEth.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }
           function openPopupLtc(){
               popupLtc.classList.add("open-popup");

           }
           function closePopupLtc(){
               popupLtc.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }
           function openPopupBnb(){
               popupBnb.classList.add("open-popup");

           }
           function closePopupBnb(){
               popupBnb.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }
           function openPopupDoge(){
               popupDoge.classList.add("open-popup");

           }
           function closePopupDoge(){
               popupDoge.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }
           function openPopupUsdt(){
               popupUsdt.classList.add("open-popup");

           }
           function closePopupUsdt(){
               popupUsdt.classList.remove("open-popup");
               window.location.href = '#file-upload';
           }

          $('#menu-icon').click(function(){
              $('#menu').toggleClass("active");
          })  
        </script>

    </body>
</html>
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
        <style rel="stylesheet" type="text/css">
          #menu .list-of-menu li:nth-child(2){
              /* background-image:linear-gradient(90deg, white, rgb(210, 208, 208)); */
              background-color: white;
              /* border: 1.5px solid black; */
              margin:10px -1px 5px 5px;
              border-radius: 40px 0 0 40px;
          }
          #menu .list-of-menu li:nth-child(2) a{
            color: black;
          }
          #menu .list-of-menu li:nth-child(2) i{
            color: black;
          }
          .referral-div{
              display: flex;
              justify-content: center;
              align-items: center;
              gap: 5px;
              flex-wrap: wrap;
              margin: 50px auto;
              max-width: 80%;
          }
          .referral-div input{
              padding: 10px;
              border: none;
              outline: none;
              border-radius: 5px; 
              background-color: #f1c3b6;
          }
          .referral-div button{
              padding: 10px;
              background-color: #ea6a47;
              border-radius: 5px;
              border: none;
          }
          @media (max-width:400px){
            .referral-div input{
              margin-bottom: 15px;
            }
          }
        </style>
        <!--jQuery CDN-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--Function to copy text-->
        <script type="text/javascript">
            function myFunction() {
                // Get the text field
                var copyText = document.getElementById("myInput");

                // Select the text field
                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.value);

                // Alert the copied text
                alert("Copied the text: " + copyText.value);
            }
        </script>
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
                <li><i class="fa-solid fa-user"></i><a name="dashboardDashboard" href="?link=dashboardDashboard">Dashboard</a></li>
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
                    echo "Dashboard - ". $_SESSION['username'];
                   ?>
                </h3>
            </div>
            <div class="dashboard-box">
              <div class="first-box-part">
                <div class="box-part">
                  <p>Plan:</p>
                  <h3>
                  <?php
                    echo $_SESSION['userplan'];
                  ?>
                  </h3>
                </div>
                <div class="box-part">
                  <p>Subscription:</p>
                  <h3>
                  <?php
                    echo $_SESSION['usersub'];
                  ?>
                </h3>
                </div>
                <div class="box-part">
                  <p>Amount Paid:</p>
                  <h3>
                      <?php
                        echo $_SESSION['amountpaid'];
                      ?>
                  </h3>
                </div>
              </div>
              <div class="second-box-part">
                <div class="box-part">
                  <p>Total Expected Profit:</p>
                  <h3>
                      <?php
                        echo $_SESSION['xprofit'];
                      ?>
                  </h3>
                </div>
                <div class="box-part">
                  <p>Account Activation Date:</p>
                  <h3>
                      <?php
                        echo $_SESSION['activation'];
                      ?>
                  </h3>
                </div>
                <div class="box-part">
                  <p>Expected Withdrawal Date:</p>
                  <h3>
                      <?php
                        echo $_SESSION['xwithdrawal'];
                      ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="referral-div">
                <p>Referral Link: </p>
                <input type="text" id="myInput" value="https://bitreal.in/Login.php">
                <!--Button to copy text-->
                <button onclick="myFunction()">Copy Link</button>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
              {
              "symbols": [
                [
                  "OANDA:XAUUSD|1D"
                ],
                [
                  "BINANCE:BTCUSDT|1D"
                ]
              ],
              "chartOnly": false,
              "width": "100%",
              "height": "100%",
              "locale": "en",
              "colorTheme": "dark",
              "autosize": true,
              "showVolume": false,
              "showMA": false,
              "hideDateRanges": false,
              "hideMarketStatus": false,
              "hideSymbolLogo": false,
              "scalePosition": "right",
              "scaleMode": "Normal",
              "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
              "fontSize": "10",
              "noTimeScale": false,
              "valuesTracking": "1",
              "changeMode": "price-and-percent",
              "chartType": "candlesticks",
              "widgetFontColor": "rgba(255, 255, 255, 1)",
              "lineType": 0,
              "dateRanges": [
                "1d|1",
                "1m|30",
                "3m|60",
                "12m|1D",
                "60m|1W",
                "all|1M"
              ],
              "upColor": "#22ab94",
              "downColor": "#f7525f",
              "borderUpColor": "#22ab94",
              "borderDownColor": "#f7525f",
              "wickUpColor": "#22ab94",
              "wickDownColor": "#f7525f"
            }
              </script>
            </div>
            <!-- TradingView Widget END -->
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
              {
              "feedMode": "all_symbols",
              "colorTheme": "dark",
              "isTransparent": false,
              "displayMode": "adaptive",
              "width": "100%",
              "height": "100%",
              "locale": "en"
            }
              </script>
            </div>
            <!-- TradingView Widget END -->
            
            <!--<div class="referral-table">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>NUMBER</td>
                            <td>NAME</td>
                            <td>DATE JOINED</td>
                            <td>SUBSCRIPTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Referral 1</td>
                            <td>19/10/2022</td>
                            <td class="subscription">Gold</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>-->
            <?php endif ?>
        </section><?php
        if (isset($_GET["error"])){
                    if ($_GET["error"] == "nonePayment"){
                        echo "<script type='text/javascript'> alert(`Image upload successfull. Your profile will be updated within the next 24 hours.`); </script>";
                    }
                    else if ($_GET["error"] == "noneWithdrawal"){
                        echo "<script type='text/javascript'> alert(`Opps! Wrong file type!`); </script>";
                    }
                    elseif ($_GET["error"] == "withdrawalProcessing"){
                        echo "<script type='text/javascript'> alert(`Your withdrawal is being processed`); </script>";
                    }
                    elseif ($_GET["error"] == "notEligible"){
                        echo "<script type='text/javascript'> alert(`You are not eligible`); </script>";
                    }
                } ?>              
        <!--Section 2 Ends-->
        <script>
          $('#menu-icon').click(function(){
              $('#menu').toggleClass("active");
          })  
        </script>

    </body>
</html>
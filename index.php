<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('Location:dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Welcome</title>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Asset</span> Tracker</h1>
            </div>
            
            <nav>
                <ul>
                    <li class="current"> <a href="index.php">Home</a></li>
                    <li> <a href="about.php">About</a></li>
                    <li> <a href="register.php">Register</a></li>
                    <li> <a href="login.php">Login</a></li>
                    <!-- <li> <a href="reg-imei.php">Submit IMEI</a></li> -->
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="showcase">
        <div class="container">
            <h1>Why You Should Use Asset Tracker ?</h1>
            <p>Before you buy or sell a second-hand mobile device, you should check to see if the device has been reported lost or stolen. This is because if someone accidentally buys a reported lost or stolen device the rightful owner may have already requested the device be blocked from accessing wireless carrier networks. The rightful owner may have also activated a device protection feature that prevents use of the device, rendering the device inoperable.<p>
        </div>
    </section>
    
    <section id="newsletter">
        <div class="container">
            <h1>Register Your Smartphone Quickly</h1>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./img/phone.png">
                <h3>Dial *#06# to see the IMEI number on the screen</h3>
                <p>IMEI is a unique number assigned to your phone.<p>
            </div>
        

            <div class="box">
                    <img src="./img/laptop.png">
                    <h3>Enter IMEI to the field above</h3>
                    <p>And then just click the button in order to check IMEI in the international database.<p>
            </div>
            
            <div class="box">
                    <img src="./img/1.jpg">    
                    <h3>Verify that the IMEI</h3>
                        <p>Verify that the IMEI is CLEAN and the phone is not blacklisted<p>
            </div>
        </div>
    </section>

    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
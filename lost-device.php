<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register IMEI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reg-imei.css">
    <title>Your Devices</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Asset</span> Tracker</h1>
            </div>
        
        <nav>
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="about.php">About</a></li>
                <li> <a href="dashboard.php">Dashboard</a></li>
                <li> <a href="reg-imei.php">Submit IMEI</a></li>
                <li class="current"> <a href="lost-device.php">Verify Device</a></li>
                <li> <a href="yourdevices.php">Your Devices</a></li>
                <li> <a href="logout.php">Log-out</a></li>
                
            </ul>
        </nav>
    </div>
    </header>
    
   
    <section id="newsletter">
        <div class="container">
            <h1>Please specify the IMEI number of the stolen / lost phone </h1>
        </div>
        
    </section>
            <form>
                <div class="container"></div>
                    <div class="field">
                        <br>
                        <label for="imei"><b>IMEI</b></label>
                        <input type="text" id="imei-input" placeholder="Type phone's IMEI here" name="imei" required>
                        <input type="button" id="displaydata" class="vimei" value="Check IMEI Status">
                        <br>
                    </div>
                    <!-- <button id="displaydata" class="btn btn-danger">My Devices</button> -->
                        <br>
                        <h1 class="text-center bg-dark text-white">IMEI Current Status</h1>
                        <br>    
                        <table class="table table-stripped table-bordered text-center   " >
                            <thead>
                                <th>Phone Model</th>
                                <th>IMEI</th>
                                <th>Status</th>
                            </thead>
                            <tbody id="response">

                            </tbody>
                        </table>
                </div>

            </form>
    
    <section id="main">
    <script>
    $(document).ready(function() {
    $('#displaydata').click(function()
    {
        $.ajax({
            url: 'displaystatus.php',
            type: 'post',
            data: {
                vimei: $("#imei-input").val()
            },

            success:function(result){
                $('#response').html(result);
            }
        });
        });
    });
    </script>
    </section>
    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
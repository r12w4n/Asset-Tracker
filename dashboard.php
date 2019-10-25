<?php
    session_start();

    include("dbconnect.php");
    

    if(!isset($_SESSION['email'])){
        header('Location:login.php');
    }
    // $user=$_SESSION['username'];
    
    // $query="select * from user where email='$user'";
    // $run= mysqli_query($conn,$query);
    // $row=mysqli_fetch_array($run);
    // // print_r($row);
    // $uid=$row["id"];
    // echo $uid;

    // if (isset($_REQUEST["submit"])){
    //     $pmodel=$_REQUEST["pmodel"];
    //     $imei=$_REQUEST["imei"];
    //     $status=$_REQUEST["radioStatus"];
    //     $query= "INSERT INTO imei(user_id,pmodel,imei,status) VALUES ('$uid','$pmodel','$imei','$status')";
    //     mysqli_query($conn,$query);
    // }   
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Welcome</title>
</head>
<style>
 .button_1{ 
    height:38px;
    background: #e8491d;
    border: none;
    padding-left: 10px;
    padding-right: 10px;
    color: #ffffff;
    margin:10px;
 }
 .button_1:hover{
      height:38px;
    background: #f13602;
    border: none;
    font-weight: bold;
    padding-left: 20px;
    padding-right: 20px;
    color: #ffffff;
 }
</style>
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
                <!-- <li> <a href="register.php">Register</a></li> -->
                <!-- <li> <a href="reg-imei.php">Submit IMEI</a></li> -->
                <li class="current"> <a href="dashboard.php">Dashboard</a></li>
                <li> <a href="reg-imei.php">Submit IMEI</a></li>
                <li> <a href="lost-device.php">Verify Device</a></li>
                <li> <a href="yourdevices.php">Your Devices</a></li>
                <li> <a href="logout.php">Log-out</a></li>
            </ul>
        </nav>
    </div>
    </header>
    
    <div class="container">
            <?php 
              if (isset($_SESSION['message'])){
                  echo "<div id='success_msg'>" .$_SESSION['message']."</div>";
                  unset ($_SESSION['message']);
              }
            ?>  
        </div>

    <section id="newsletter">
        <div class="container">
            <div><h1> Welcome <?php echo $_SESSION['email']; ?> </h1></div>
            
            <form action="lost-device.php"> 
                <button type="submit" class="button_1">Verify Device</button>
            </form>

            <form action="reg-imei.php"> 
                <button type="submit" class="button_1">Register your Mobile Device</button>
            </form>

            <form action="yourdevices.php"> 
                <button type="submit" class="button_1">Your Registered Devices</button>
            </form>
            
        </div>
    </section>
        
        
    
    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
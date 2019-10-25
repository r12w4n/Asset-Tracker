<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:login.php');
    }
   
    include("dbconnect.php");

    $user=$_SESSION['email'];
    
    
    $query="select * from user where email='$user'";
    $run= mysqli_query($conn,$query);
    $row=mysqli_fetch_array($run);
    // print_r($row);
    $uid=$row["user_id"];

    if (isset($_REQUEST["submit"])){
        $pmodel=$_REQUEST["pmodel"];
        $imei=$_REQUEST["imei"];
        $status=$_REQUEST["radioStatus"];
        if( strlen("$imei") == 15) {
        $query= "INSERT INTO imei(user_id,pmodel,imei,status) VALUES ('$uid','$pmodel','$imei','$status')";
        mysqli_query($conn,$query);   }
               else { 
                   echo "<b>Wrong info provided</b>";
                }
        $_SESSION['message'] = "Your Device Has Been Registered With Us";
    }

// if (isset($_REQUEST["submit"])){
//     $pmodel=$_REQUEST["pmodel"];
//     $imei=$_REQUEST["imei"];
//     $status=$_REQUEST["radioStatus"];
//     $query= "INSERT INTO imei(pmodel,imei,status) VALUES ('$pmodel','$imei','$status')";
//     mysqli_query($conn,$query);
// }   

?>

<script>
    function regimeivalidator(){
    var model = document.getElementsByName("pmodel").value;
    var len = document.getElementById("rcorners").value;
    var l = len.length;
        if((model == null && model == "") || (l < 15 && l == "" ) ){
             returnToPreviousPage();
            alert("wrong input");
       return false;     
        }
        
}
   
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reg-imei.css">
    <title>Register IMEI</title>
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
                <li class="current"> <a href="reg-imei.php">Submit IMEI</a></li>
                <li> <a href="lost-device.php">Verify Device</a></li>
                <li> <a href="yourdevices.php">Your Devices</a></li>
                <li> <a href="logout.php">Log-out</a></li>
            </ul>
        </nav>
    </div>
    </header>
    
    
    <section id="newsletter">
        <div class="container">
                <div><h1> Welcome <?php echo $_SESSION['email']; ?> </h1></div>
        </div>
        <div class="container">
        <h2>Register IMEI</h2>
        </div>
        
    </section>

    <section id="main">
        <div class="container">
            
             <h2>Register</h2>
                    
                    <form class="#" id="smtt" method="POST" onsubmit="event.preventDefault(); regimeivalidator();>

                    <?php 
                        if (isset($_SESSION['message'])){
                        echo "<div id='success_msg'>" .$_SESSION['message']."</div>";
                        unset ($_SESSION['message']);
                        }
                    ?>
                        <div class="field">
                            
                            <b>Phone Model:<div></b><input type="text" id="rcorner"  name="pmodel" placeholder="Your Phone Model" required></div>
                            
                            <b>IMEI:<div></b><input type="text" id="rcorner" name="imei" placeholder="Your IMEI" required></div>
                        
                            <div class="radio-toolbar">
                                    <b>Status:</b><br>
                                    <input type="radio" id="radioOwned" name="radioStatus" value="Owned" required>
                                    <label for="radioOwned">Owned</label>

                                    <input type="radio" id="radioLost" name="radioStatus" value="Lost">
                                    <label for="radioLost">Lost</label>

                                    <input type="radio" id="radioStolen" name="radioStatus" value="Stolen">
                                    <label for="radioStolen">Stolen</label>
                    
                                    <input type="radio" id="radioSold" name="radioStatus" value="Sold">
                                    <label for="radioSold">Sold</label> 
                            </div>
                            <div>
                                <button type="submit" id="smt" class="registerbtn" name="submit">Register</button>
                            </div>
                    </div>

                        
			
                    </form>
                    
        </div>
    </section>
    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
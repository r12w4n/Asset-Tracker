<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register</title>
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
                <li> <a href="register.php">Register</a></li>
                <li class="current"> <a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
            
    </header>
    
   
    <section id="newsletter">      
        <div class="container">
            <h1>Login</h1>
        </div>
        
    </section>

    <span>
    <?php 
        if (isset($_SESSION['message'])){
        echo "<div id='success_msg'>" .$_SESSION['message']."</div>";
        unset ($_SESSION['message']);
        }
    ?>
    </span>
            

    <section id="main">
        
            

        <form action="login-connection.php" method="post">
            <div class="container">
            <div class="field">
              <p>Please Login with your email and password</p>
              <hr>
            </div>
              
            <div class="field">
              <label for="email"><b>Email</b></label>
              <input type="text" class="rcorner" id="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="field">
              <label for="psw"><b>Password</b></label>
              <input type="password" class="rcorner" id="psw" placeholder="Enter Password" name="psw" required>
            </div>
              
            <div class="field">
            <hr>
            <button type="submit" name="login" class="registerbtn">Login</button>
            </div>
            
            <div class="container regiter">
              <p>Register an account? <a href="register.php">Register Now</a>.</p>
            </div>
          </form>
    </section>
    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
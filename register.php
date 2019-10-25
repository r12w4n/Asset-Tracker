<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="validator.js"></script>  
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
                <li class="current"> <a href="register.php">Register</a></li>
                <li> <a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    </header>
  
   
    <section id="newsletter">
        <div class="container">
            <h1>Register</h1>
            
        </div>
        
    </section>
            
    <section id="main">
      <form style=" border: 1px solid #00adb5;" id="form" name="form" action="connection.php" method="POST" onsubmit="return regform()">
        <div class="container">
          <div class="field">
                <p>Please fill in this form to create an account.</p>
                <hr>
                <!-- <span>
                <?php 
                    if (isset($_SESSION['message']))
                    {
                        echo "<div id='error_msg'>" .$_SESSION['message']."</div>";
                        unset ($_SESSION['message']);
                    }
                ?>
                </span> -->
          </div>  
        </div>
        <div class="container"> 
          <div class="field">
            <label for="fname"><b>First Name</b></label><br>
            <input type="text" class="rcorner1" id="fname" placeholder="First Name" name="fname" required>
          </div>
        
          <div class="field">
            <label for="lname"><b>Last Name</b></label><br>
            <input type="text" class="rcorner1" id="lname" placeholder="Last Name" name="lname" required>
          </div>
        </div>  
               <div class="container">
               <div class="field">      
                  <label for="phone"><b>Phone</b></label>
                  <input type="text" class="rcorner" id="phone" placeholder="Enter Phone Number" name="phone" required>
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
                <label for="pswrepeat"><b>Repeat Password</b></label>
                <input type="password" class="rcorner" id="pswrepeat" placeholder="Repeat Password" name="pswrepeat" required>
              </div>

              <p class= "field">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              <div class="field">
                <button type="submit" name="register"  class="registerbtn">Register</button>
              </div>
            
            <div class="field">
              <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
          </div>
          </form>
    </section>
    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html>
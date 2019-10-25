<?php

session_start();

include("dbconnect.php");

if (isset($_POST['login'])){
 
    $email = $_POST['email'];
    $password = $_POST['psw'];

    $password = md5($password);
    $query = "SELECT * FROM user WHERE email='$email' AND password = '$password'";
    
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) == 0){
        $_SESSION['message'] = "username/password combination incorrect";
        header("location:login.php");
    }
    
    else{
        
        $_SESSION['message'] = "You are now Logged in";
        $_SESSION['email'] = $email;
        header("location:dashboard.php");
    }
}
?>
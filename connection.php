<?php

session_start();

include("dbconnect.php");

if (isset($_POST['register'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $pswrepeat = $_POST['pswrepeat'];

}
 
if ($password == $pswrepeat) {
    $password = md5($password);
    $query = "INSERT INTO user (fname, lname, phone, email, password) VALUES ('$fname','$lname','$phone','$email','$password')";
    mysqli_query($conn,$query);
    $_SESSION['message'] = "You Are Now Registered";
    // $_SESSION['email'] = $email;
    header("location: login.php");
    // if($query_run){
    //     echo '<script type="text/javascript"> alert("You are Successfully Registered")</script>';
    // }
    // else{
    //     echo '<script type="text/javascript"> alert("Registration Failed")</script>';
    // }
    
}
else{
    $_SESSION['message'] = "Error Occured";
    
    header("location: register.php");
    //echo '<script type="text/javascript"> alert("Password does not match");</script>';
}
 
?>
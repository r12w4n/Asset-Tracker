<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assetdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $db = mysqli_select_db($conn,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed because of " . mysqli_connect_error());
}
// echo '<script type="text/javascript"> alert("Database Connected Successfully")</script>';
?>
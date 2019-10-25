<?php 
 session_start();
 include("dbconnect.php");
 
     if (isset($_POST['submit'])) {
         if(isset($_POST['radio']))
         {
             $imei_id = $_POST['imei_id_text'];
             $stt = $_POST['radio'];
             $update = "UPDATE imei SET status = '$stt' WHERE id = '$imei_id' ";
             $ressi = mysqli_query($conn,$update);
             header("location: yourdevices.php");
         }
     }
 
 ?>
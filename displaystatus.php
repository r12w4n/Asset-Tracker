<?php
session_start();

include("dbconnect.php");

$user=$_SESSION['email'];

if(!isset($_SESSION['email'])){
    header('Location:login.php');
}

if(isset($_POST) && isset($_POST['vimei']))
{
    $vimei = $_POST['vimei'];
}   

$query = "SELECT * FROM user where email='$user'";

$runquery = mysqli_query($conn,$query);
$row=mysqli_fetch_array($runquery);
//print_r($row);
$uid1=$row["user_id"];
// $uid=$row["user_id"];

$querytable = "SELECT * FROM imei WHERE imei = '$vimei'";
$querytablerun = mysqli_query($conn,$querytable);

if(mysqli_num_rows($querytablerun) > 0){
    while( $result = mysqli_fetch_array($querytablerun) ){
        ?>
        <tr>
            <td> <?php echo $result['pmodel']; ?> </td>
            <td> <?php echo $result['imei']; ?> </td>
            <td> <?php echo $result['status']; ?> </td>
        </tr>


<?php         
    }
}
?>
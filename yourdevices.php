<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location:login.php');
}
include("dbconnect.php");

$user=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reg-imei.css">
    <title>Your Devices</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
</style>
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
                <li> <a href="lost-device.php">Verify Device</a></li>
                <li class="current"> <a href="yourdevices.php">Your Devices</a></li>
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
        <h2>Your Registered Devices</h2>
        </div>
        
    </section>

<div class="container">
<br>
<h1 class="text-center bg-dark text-white"> Your Registered Devices.</h1>
<br>
<p id="serverResponse"></p>
<table  class="table rsp table-stripped table-bordered text-center" >
    <thead>
        <th>IMEI-ID</th>
        <th>Phone Model</th>
        <th>IMEI</th>
        <th>Status</th>
        <th>Update Action</th>
    </thead>
    
    <tbody id="response">
        <?php
            $query = "SELECT * FROM user where email='$user'";
            $runquery = mysqli_query($conn,$query);
            $row=mysqli_fetch_array($runquery);
            //print_r($row);
            $uid1=$row["user_id"];

            $querytablerun = mysqli_query($conn, "SELECT * FROM imei WHERE user_id='$uid1'");
            while( $result = mysqli_fetch_array($querytablerun) ){
                ?>
                <tr id="<?php echo $result['id'];?>">
                    <td data-target="id"> <?php echo $result['id']; ?> </td>
                    <td> <?php echo $result['pmodel']; ?> </td>
                    <td> <?php echo $result['imei']; ?> </td>
                    <td> <?php echo $result['status']; ?> </td>
                    <td><a href="#" data="update" data-toggle="modal" data-target="#myModal" data-id="<?php echo $result['id']?>">Update</a></td>
                </tr>
            <?php }
        ?>
    </tbody>
    
</table>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        
        
        <div class="radio-toolbar">
        <form action="status.php" method="POST" id="myform">
        
                        <b>Status:</b><br>
                                <input type="radio" id="radioOwned" name="radio" value="Owned" required>
                                <label for="radioOwned">Owned</label>

                                <input type="radio" id="radioLost" name="radio" value="Lost">
                                <label for="radioLost">Lost</label>

                                <input type="radio" id="radioStolen" name="radio" value="Stolen">
                                <label for="radioStolen">Stolen</label>
                
                                <input type="radio" id="radioSold" name="radio" value="Sold">
                                <label for="radioSold">Sold</label><br>
                                <b><input type="hidden" class="form-control" name="imei_id_text" id="id" required>
                                <br>
                                <input type="submit" id="save" class="btn btn-primary" name="submit"  value="Update Status">
                                
         </form>
                        </div>
        </div>
      </div>
    

      <!-- Modal footer -->
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
</footer>
</body>
<script>

$(document).ready(function(){
        $(document).on('click','a[data="update"]',function(){
           window.imei_id = $(this).data('id');

            $('#id').val(imei_id);
            $('#imei').val(imei);
            $('#myModal').modal('toggle');
        
            // $.ajax({
            //     url: form.attr("action"),
            //     type: 'post',
            //     data: $("#myform input").serialize(),
            //     success: function(data){
            //         console.log(data);
            //     }
            // });
        })
    });



    
</script>

</html>
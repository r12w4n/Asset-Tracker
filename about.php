<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('Location:dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>About</title>
    <style>
        #map {
			height:500px;
			width: 100%;
			border:3px dashed black;
		}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Rizwan</span> Syed</h1>
            </div>
        
        <nav>
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li class="current"> <a href="about.html">About</a></li>
                <li> <a href="register.php">Register</a></li>
                <li> <a href="login.php">Login</a></li>
                <!-- <li> <a href="reg-imei.html">Submit IMEI</a></li> -->
            </ul>
        </nav>
    </div>
    </header>
    
   
    <section id="newsletter">
        <div class="container">
            <h1>Why You Should Use Asset Tracker ?</h1>
            
        </div>
    </section>

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class=page-title></h1>
                <p>Before you buy or sell a second-hand mobile device, you should check to see if the device has been reported lost or stolen. This is because if someone inadvertently buys a reported lost or stolen device the rightful owner may have already requested the device be blocked from accessing wireless carrier networks. The rightful owner may have also activated a device protection feature that prevents use of the device, rendering the device inoperable.<p>
                </article>

            <aside id="sidebar">
                <div class="dark">
                    <h3>What we do</h3>
                    <p>"We help you to keep a track of your devices."</p>
                </div>
            </aside>
            <div id="map"></div>
	<script type="text/javascript">
		function initMap()
	{
		var u = {lat:19.8,lng:72.75};
		var map = new google.maps.Map(document.getElementById('map'),
		{
			zoom:8,center:u
		});
		var marker = new google.maps.Marker({position: u,map:map});
	}
	</script>
	<script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2kWxTUcccjWVHP-SpuNbgZsajAeWXquM&callback=initMap">
	</script>
        </div>
    </section>

    <footer>
        <p>BuildEB Tech, Copyright &copy; 2017</p>
    </footer>
</body>
</html
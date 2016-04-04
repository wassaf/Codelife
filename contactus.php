<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if (isset($_SESSION['employeeid']))
{
    header("Location:employeeacount.php");
}
?>
<!doctype html> 
<html lang="en">
<head> 
<meta charset="utf-8" /> 
<title>Deccan Gliding</title>
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="deccan.png">
</head>
<body class="body1">
<header class="colors" >
<li><a href="http://www.facebook.com"><img src=" ff.jpg"/></a></li>
<li><a href="http://www.twitter.com"><img src=" yb.jpg"/></a></li>
<li><a href="http://www.instagram.com"><img src=" tw.jpg"/></a></li>

 </header>
    <header class="banner">
        <a href='index.html' id="logo"></a>
		<nav>
		    <a href="#" id="menu-icon"></a> 
			<ul>
			    <li><a href="index.html" class="current">Home</a><li>
				<li><a href="#" class="current">About us</a><li>
				<li><a href="#" class="current">Gliders</a><li>
				<li><a href="#" class="current">Aerostats</a><li>
				<li><a href="#" class="current">Aeromodelling</a><li>
				<li><a href="#" class="current">Technical Aspect</a><li>
				<li><a href="contactus.php" class="current">Contact</a><li>
			</ul>
		</nav>	
   </header>
   
   <section>
   <div class="contactu"> <p>Address:</p></div>
   <div class="address">
   <p><b>Gliding co<br/>XXX<br/> 
C - 5, "G" Block,<br/> 
gliding<br/>
MANGALORE.<br/>
KARNATAKA India</b></br>
<div class="fonts"Ph: +91-8971904900 <br/>
Email: xxxxs@gmail.com
</p> </div></section>
<section>
<div class="form">
<form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your Name:<br>
    <input name="name" type="text" value="" size="38"/><br> 
    Your Email:<br>
    <input name="email" type="text" value="" size="38"/><br>
    Your Message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Submit"/> 
   
    </form></div>
</section>
<section>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:270px;width:270px; '></div>
<div id='gmap_canvas' style='height:220px;width:320px; padding-left:35px; margin-left:31px;'>
</div>
<div><small><a href="http://embedgooglemaps.com"></a></small></div>
<div><small><a href="http://www.autohuren.world/"></a></small></div>

<style>#gmap_canvas img
{   
	max-width:none!important; 
	background:none!important
	}
	</style>
	
<script type='text/javascript'>
function init_map()
{
	var myOptions = {zoom:9,center:new google.maps.LatLng(13.330359692869681,75.26598686786225),mapTypeId: google.maps.MapTypeId.ROADMAP};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.330359692869681,75.26598686786225)});
	infowindow = new google.maps.InfoWindow({content:'<strong>ARK interiors ,India</strong><br>Zeenat Baksh<br>'});
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
	}google.maps.event.addDomListener(window, 'load', init_map);</script>

</section>

	<footer class="second1">
	   
	    <p>Copyright - Deccan Gliding 2016. </p>
		
    </footer>
</body>
</html>


	
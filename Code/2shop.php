<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="min.css">
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<head>
<body>
<font size="7" face="Arial">
<img src="cricblack2.JPG" height="110pixels" width="1333pixels"
 align="left" alt="this image displays Mumbai City" hspace="0pixels" vspace="0pixels" />
<br>
<br>
<div class="navbar">
  
  <a href="2shop.html">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Shop by Category 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bat.html">English Willow Bats</a>
      <a href="ball.html">Leather Cricket Balls</a>
	<a href="Helmet.html">Helmets</a>
	<a href="batgloves.html">Gloves</a>
	<a href="batpads.html">Pads</a>
	<a href="apparel.html">Cricket Apparel</a>
	<a href="backpack.html">Complete Cricket Set</a>
    </div>
  </div>
  
  <a href="deals.html">Today's Deals</a>

  <a href="cservice.html" width="200px">Customer Service</a>
 
 <div class="dropdown">
    <button class="dropbtn1">
     <i class="fa fa-caret-down"></i>
    </button>
    
  </div> 
<a href="logout.php">Sign Out</a>
</div>

<br>
<br>

<center>
All you need for the Game</center><br>
<a href="ad1.php" >
<img src="Bats.JPG" style="margin-left:130px;margin-right:0;margin-top:10px;margin-bottom:0%;"
height="450pixels" width="1070pixels" align="center">
</img>
</a>

<a href="ball.html">
<img src="Balls.JPG" style="margin-left:130px;margin-right:0;margin-top:30px;margin-bottom:0%;"
height="450pixels" width="1070pixels" align="center">
</img>
</a>


<br>
<br>
<hr width="80%" height="2px" >
<center>Protective Wear</center><br>
<a href="Helmet.html">
<img src="Helmets.JPG" style="margin-left:130px;margin-right:auto;margin-top:10px;margin-bottom:0%;"
height="250pixels" width="250pixels" align="center">
</img>
</a>

<a href="batgloves.html">
<img src="Gloves.JPG" style="margin-left:15px;margin-right:auto;margin-top:10px;margin-bottom:0%;"
height="250pixels" width="250pixels" align="center">
</img>
</a>

<a href="batpads.html">
<img src="Pads.JPG" style="margin-left:15px;margin-right:auto;margin-top:10px;margin-bottom:0%;"
height="250pixels" width="250pixels" align="center">
</img>
</a>

<a href="more.html">
<img src="More.JPG" style="margin-left:15px;margin-right:auto;margin-top:10px;margin-bottom:0%;"
height="250pixels" width="250pixels" align="center">
</img>
</a>
<br>
<br>
<hr width="80%" height="2px" >
<center>Get your Gear on</center><br>
<a href="apparel.html">
<img src="Apparel.JPG" style="margin-left:150px;margin-right:auto;margin-top:10px;margin-bottom:0%;"
height="330pixels" width="1070pixels" align="center">
</img>
</a>



<a href="backpack.html">
<img src="Sets.JPG" style="margin-left:150px;margin-right:auto;margin-top:25px;margin-bottom:0%;"
height="300pixels" width="1070pixels" align="center">
</img>
</a>
</font>
</body>
</html>
<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html>
<head>
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="min.css">


<style>
.checked {
    color: orange;
}
</style>
<style>
.floating-box {
    float: left;
    width: 320px;
    height: 400px;
    margin-right: 45px;
    padding: 15px;
    border: 3px solid #303030;  
}
.floating-box1 {
    float: right;
    width: 320px;
    height: 400px;
    margin-right: 20px;
    padding: 15px;
    border: 2px solid #303030;  
}

</style>
<head>
<body>

<font size="7" face="Arial">
<img src="cricblack2.JPG" height="110pixels" width="1350pixels"
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


<font size="5" face="Arial">


<div class="floating-box">
<img src="ad1.JPG" style="margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0%;"
height="400pixels" width="320pixels" >
</img>
</div>
Brand: Adidas 
<font size="3" face="Arial">
<div class="floating-box1">
<form action="buy1.asp" method="get" name="buy1">
<center>

<input type="hidden" value="Kashmir Willow Bat" name="details" />
<input type="hidden" value="2250" name="price" />
<input type="hidden" value="99" name="del" />
<input type="hidden" value="Adidas" name="name" />


<b>100% Purchase Protection</b><br>
Original Products | Secure Payments<br>
1 offer from &#x20b9 2250 + &#x20b9 99 Delivery charges.
</center>
<br>
</font>
<font size="2" face="Arial">
Payment Option: <select name="pay">
<option>Credit Card </option>
<option>Debit Card </option>
<option>Visa Card</option>
<option>Cash on Delivery</option>
</select><br><br>
Enter Card No.: 
<input type="text" size="1" name="c1">
<input type="text" size="1" name="c2">
<input type="text" size="1" name="c3">
<input type="text" size="1" name="c4"><br><br>
Exp Date: <input type="text" size="1" name="e1">
<input type="text" size="2" name="e2">&nbsp;&nbsp;&nbsp;
Enter CVC No.: <input type="text" size="2" name="cvc"><br><br>
Enter OTP.: <input type="text" size="6" name="otp">&nbsp;
 Quantity: <select name="quan">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>&nbsp;&nbsp;&nbsp;
Size: <select name="size">
<option>3</option>
<option>4</option>
<option>6</option>
</select><br><br>
<center>
Deliver to 
Address:<br>
<textarea rows="3" cols= "15" name="add1"  required></textarea><br><br></center>
Enter Pincode: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" size="10" placeholder="eg. 100001" name=pin1 required><br>
<center>
<button type="submit" name="Submit" style="background-color:#ADD8E6;width:115px;height:22px">
Buy it</button>
</form>
</center>
</div>
</font><br>
Master Blaster Rookie Kashmir Willow Cricket Bat,<br>
Short handle (Poppy/Black/Silver)<br>
Price: &#x20b9 2250
<br>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<hr width="40%" height="1px" align="left">
<br>
<font size="3" face="Arial">
Material: Kashmir Willow<br>
Cane handle for shock absorption<br>
Weight: 900 - 1150 gms<br>
Full covered front face for enhanced protection<br>
Comes with half length cover with straps<br>
Suitable for kids of 15 years and plus and adults<br>
Box Content: 1 Cricket bat and a half length cover<br>

</font>

</font>

</body>
</html>
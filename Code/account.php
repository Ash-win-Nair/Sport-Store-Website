<?php
require('db.php');
include("auth.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="min.css">
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<style>

</style>
<head>
<body>
<?php
//include auth.php file on all secure pages
$u=$_SESSION['username'];
	$qy="SELECT * FROM cric WHERE Username='$u'; ";
	$rs = mysqli_query($con,$qy);
	$r=mysqli_fetch_array($rs);
?>
<?php include("header.php"); ?>



<font size="7" face="Roboto">

<p align="center">

<?php echo $r["First Name"]." ".$r["Last Name"] ?>
</p>
</font>
<font size="5" face="Roboto">

<div class="main" style="padding-left:495px;">

<a href="cart.php">
View Cart
</a>
<br><br>
<a href="orders.php">
Your Orders
</a>
<br><br>

<a href="cp.php">
Change Password
</a>
<br><br>

<a href="logout.php">
Sign out
</a>
</div>
<br>
<br>



<?php include("footer.php"); ?>

</font>
</body>
</html>
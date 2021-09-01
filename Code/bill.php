<?php
require('db.php');
include("auth.php");
?>
<html>
<head>
<link rel="stylesheet" href="min.css">
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<style>
table {
  border-collapse: collapse;
}

table, th {
  border: 1px solid black;
  padding:15px;
  font-size: 20px;
  text-align: center;
}

td{
	border: 1px solid black;
  padding:15px;
  font-size: 20px;
  text-align: left;
}

a:link{
	color:#DDDDDD;
}

a:visited{
	color:#DDDDDD;
}


</style>
<head>
<body>
<?php include("header.php"); ?>

<?php
//include auth.php file on all secure pages
$u=$_SESSION['username'];
	$qy="SELECT * FROM cric WHERE Username='$u'; ";
	$rs = mysqli_query($con,$qy);
	$r=mysqli_fetch_array($rs);
?>

<font size="6" face="Arial">
<center>
<table border="1">

<tr>
<th colspan="4" style="text-align:left;" >
Name: <?php echo $r["First Name"]." ".$r["Last Name"] ?><br><br>
Mobile No.: <?php echo $r["Mobile No."] ?><br><br>
Email ID.: <?php echo $r["Email"] ?><br><br>
Address: <?php echo $r["Address"] ?>
</th>
</tr>


<tr>
<th>Particulars</th>
<th>Quantity</th>
<th>Unicost</th>
<th>Amount</th>
</tr>


<?php
	$u=$_SESSION['username'];
	$query="SELECT * FROM cart WHERE Username='$u'; ";
	$results = mysqli_query($con,$query);
	$total=0;
	if (mysqli_num_rows($results)>0){
		while($row=mysqli_fetch_array($results)){
			
			$mt=0;
	?>
	<tr>
	<form action="cart.php" method="post">
	<td style="text-align:center;"><input type="hidden" name="hidden_name" value="<?php echo $row["Name"]?>">
		<?php echo $row["Name"]?></td>
	<td style="text-align:center;"><?php $q=$row["Quantity"];?>
		<?php echo $row["Quantity"]?></td>
	<td style="text-align:right;">&#x20b9 <?php $p=$row["Price"]; echo $p; ?>
	</td>
	<td style="text-align:right;">&#x20b9 <?php $mt=$p*$q; echo $mt; $total=$total+$mt; ?>
	</td>
	</form>
	</tr>
<?php }} ?>

<tr>
<th colspan="3">Total</th>
<td style="text-align:right;"> &#x20b9; <?php echo $total;?></td>
 
</tr>
</table>
<br>

<form method="post" action="final.php" style="margin-bottom:0px;">
<input type="hidden" name="total" value="<?php echo $total?>">
	<input type="submit" name="proceed" value="Proceed" style="margin-top:-15px;font-size:18px;background-color:purple;color:white;border:0px;width:150px;height:26px; border-radius:10px;">
	</form>


<?php include("footer.php"); ?>
</center>
</body>
</html>
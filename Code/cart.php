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
  text-align: center;
}

td{
	border: 1px solid black;
  padding:15px;
  text-align: left;
}


</style>
<head>
<body>
<?php include("header.php"); ?>

<?php
//include auth.php file on all secure pages

if (isset($_POST["change"])){
$u=$_SESSION['username'];
$n=$_POST["hidden_name"];
$q=$_POST["Qty"];
if($q==0){
$query = "DELETE FROM cart WHERE username='$u' AND Name='$n'  ";
mysqli_query($con,$query);
echo '<script>alert("Product Successfully Removed From Cart")</script>';
header("Refresh:0.5; url=cart.php" );
}
else if($q>0)
{
$query = "UPDATE cart SET Quantity='$q' WHERE username='$u' AND Name='$n'  ";
mysqli_query($con,$query);
echo '<script>alert("Product Successfully Updated in Cart")</script>';
header("Refresh:0.5; url=cart.php" );	
}
}
else{
?>

<font size="4" face="Arial">
<center>
<table border="1">
<tr>
<th>Particulars</th>
<th>Quantity</th>
<th>Unicost</th>
<th>Amount</th>
<th>Change</th>
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
	<th><?php $q=$row["Quantity"];?>
		<input style="text-align:right;" type="text" size="1" name="Qty" value="<?php echo $row["Quantity"]?>"></th>
	<td style="text-align:right;">&#x20b9 <?php $p=$row["Price"]; echo $p; ?>
	</td>
	<td style="text-align:right;">&#x20b9 <?php $mt=$p*$q; echo $mt; $total=$total+$mt; ?>
	</td>
	<th><input type="submit" name="change" value="Change" style="border:0px;background-color:transparent;font-size:16px;color:blue;"></th>
	</form>
	</tr>
<?php }} ?>

<tr>
<th colspan="3">Total</th>
<td> &#x20b9; <?php echo $total;?></td>
<th> <a href="Details.php">
	<button type="submit" name="proceed" value="Proceed" style="border:0px;background-color:transparent;font-size:16px;color:blue;">Proceed
	</a>
</th>
</tr>
</table>
</center>



<?php } ?>

<?php include("footer.php"); ?>

</body>
</html>
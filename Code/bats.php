<?php
require('db.php');
include("auth.php");
?>
<html>
<head>

<link rel="stylesheet" href="min.css">
<title>Welcome <?php echo $_SESSION['username']; ?>!</title>
<style>
.floating-box {
	
    float: left;
    width: 200px;
    height: 300px;
    margin: 20px;
    padding: 10px;
    border: 3px solid #303030;  
}



</style>
<head>
<body>
<?php
//include auth.php file on all secure pages

if (isset($_POST['Qty'])){
$u=$_SESSION['username'];
$query = "SELECT * FROM cric WHERE username='$u';  ";
$results = mysqli_query($con,$query);
$row=mysqli_fetch_array($results);
$id=$_POST["hidden_id"];
$n= $_POST["hidden_name"];
$p= $_POST["hidden_price"];
$qty= $_POST["Qty"];
$m=$u.$id;
$query2 = "INSERT INTO cart 
  			  VALUES('$u','$m', '$n', '$p','$qty')";
mysqli_query($con, $query2);
echo '<script>alert("Product Successfully Added to Cart")</script>';
header("Refresh:0.5; url=bats.php" );
}
else{
	include("header.php");
?>

<font size="7" face="Arial">



<div class="container" style="width:100%;">


</font>

<font size="4" face="Arial">
<?php
	$query="SELECT * FROM product WHERE Category ='Bats' ORDER BY Id ASC";
	$results = mysqli_query($con,$query);
	if (mysqli_num_rows($results)>0){
		while($row=mysqli_fetch_array($results)){
	
?>
	<div class="floating-box">
		<form method="post" action="bats.php" >
				<img src="<?php echo $row["Image"]?>" class="img-responsive" 
				style="margin-left:25px;margin-right:0px;margin-top:0px;margin-bottom:5px;"
				height="160pixels" width="150pixels" >
				<p align="center"><b>Name: </b><?php echo $row["Name"]?><br>
				<b> Price: </b>&#x20b9 <?php echo $row["Price"]?><br>
				<b>Quantity: </b><input type="text" size="1" name="Qty" required><br><br>
				<input type="hidden" name="hidden_id" value="<?php echo $row["Id"]?>">
				<input type="hidden" name="hidden_name" value="<?php echo $row["Name"]?>">
				<input type="hidden" name="hidden_price" value="<?php echo $row["Price"]?>">
				<input type="submit" name="add" value="Add to Cart">
				</p>
		</form>
	</div>
	<?php }} ?>
</font>
</div>
<br>

<?php   } include("footer.php"); ?>
</body>
</html>
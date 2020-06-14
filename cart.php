<?php
require'carttop.php';
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["idindex"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['idindex'] === $_POST["idindex"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>myShopping Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/cartstyle.css' type='text/css' media='all' />
<script type="text/javascript">
    function alertUser(msg){
      alert(msg);
    }
  </script>
</head>
<body>
	<div class="container" style="align-content: center;">
<div style="margin:0%; padding: 0%;">

<span style="font-size: 2em;"><b>My Cart</b></span> 

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">

<img src="cart-icon.png" /> Cart

</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table style="max-width: 80%;" class="table">
<tbody>
<tr>
<td><b>IDENTITY</b></td>
<td><b>ITEM NAME</b></td>
<td><b>QUANTITY</b></td>
<td><b>UNIT PRICE</b></td>
<td><b>ITEMS TOTAL</b></td>
<td><b>REMOVE ITEM</b></td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["itempics"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["itemname"]; ?><br />

</td>
<td>
<form method='post' action=''>
<input type='hidden' name='idindex' value="<?php echo $product["idindex"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Ksh. ".$product["price"]; ?></td>
<td><?php echo "Ksh. ".$product["price"]*$product["quantity"]; ?></td>

<td>
<form method='post' action=''>
<input type='hidden' name='idindex' value="<?php echo $product["idindex"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'><i>Remove <img src="icon-delete.png"></i></button>
</form>
</td>

</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Ksh. ".$total_price; ?></strong>
</td>

</tr>
</tbody>
</table>	
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	echo "<span><button style='font-size:20px;color:black; background-color: #FF6600;border-radius: 5px;'><a style='color:black' href='index.php'>View items</a></button></span>";
	}
?>
</div>



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div style="clear:both;"></div>
<form method="post" action="" class="justify-content-center">
	<input onclick ="alertUser('Order is about to be submitted..')" style="background-color: #E4DAC2" style="font-size:20px;color:black; background-color: #FF6600;border-radius: 5px;" class="button" type="submit" name="submit" value="Buy Now">
</form>

<?php
foreach($_SESSION["shopping_cart"] as &$value){
$productidentity= $value['idindex'];
$nameofitem=$value["itemname"];
$bquantity=$value["quantity"];
$unitprice=$value["price"];
$itemstotal= $value["price"]*$value["quantity"];
$count=1;

echo "</br>";
if (isset($_POST['submit'])) {
	require'db.php';
	if (!isset($_SESSION['customeremailuname'])) {//checking if customer is loged in to proceed
  		echo "<script> location.href='formsample2.html';</script>";
	}else{
				$customername=$_SESSION['customeremailuname']; //define customer email uname as identifier
	$sql="SELECT * FROM mains WHERE idindex='$productidentity'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {
		$seller=$row['sellername'];
		$sellercontact=$row['sellercontact'];
		$sellerlocation=$row['sellerlocation'];
	}//while loop close for vendor details
	

$fetchCustomerDetails="SELECT * FROM customerlog WHERE email='$customername'";
	$result=mysqli_query($con,$fetchCustomerDetails);
	while ($row=mysqli_fetch_array($result)) {
		$customer=$row['names'];
		$customercontact=$row['phone'];
		$customerlocation=$row['county'];
	}//while loop close for customer details
	 // send orders to the database
$insert = "INSERT INTO orders (customer, customerlocation, customercontact, productid, itemname, quantity, unitprice, totalprice, seller, sellerlocation, sellercontact, count) VALUES('$customer', '$customerlocation', '$customercontact', '$productidentity', '$nameofitem', '$bquantity', '$unitprice', '$itemstotal', '$seller', '$sellerlocation', '$sellercontact', '$count')";
if ($con->query($insert) === TRUE) {
    unset($_SESSION["shopping_cart"][$productidentity]);
    echo "<script> location.href='cart.php';</script>";
    //unset($_SESSION["cart_item"][$k]);
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

}//if isset close
}//if user is logged in
}//for each loop close
?>
<div onload ="alertUser('Product Successfully Added to Views')" style="background-color: #E4DAC2">.</div>
<?php


//echo "<script> location.href='index.php';</script>";
}//if !empty statement close
//echo "<script> location.href='successmessage.php';</script>";
// unset($_SESSION["shopping_cart"]);

?>

</div>
</div>
</body>
</html>
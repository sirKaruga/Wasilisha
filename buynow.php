<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['idindex']) && $_POST['idindex']!=""){
$idindex = $_POST['idindex'];
$result = mysqli_query($con,"SELECT * FROM `mains` WHERE `idindex`='$idindex'");
$row = mysqli_fetch_assoc($result);
$itemname = $row['itemname'];
$idindex = $row['idindex'];
$price = $row['price'];
$itempics = $row['itempics'];

$cartArray = array(
  $idindex=>array(
  'itemname'=>$itemname,
  'idindex'=>$idindex,
  'price'=>$price,
  'quantity'=>1,
  'itempics'=>$itempics)
);

if(empty($_SESSION["shopping_cart"])) {
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}else{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($idindex,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";  
  } else {
  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
  $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }
  header('location:cart.php');
}
?>
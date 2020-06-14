<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'shope5');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " SELECT * from customerlog where email = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
// 	
 	while ($row = mysqli_fetch_array($result)) {

 			 $name = $row['names'];
// 			
 		}	
		$num = mysqli_num_rows($result);
echo "$num";
 if ($num == 1){
	$_SESSION['customeremailuname'] = $_POST['user'];
 	$_SESSION['myname'] = $name;
 	if (isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"])>0) {
 		header('location:cart.php');
 		}else{//header('location:index.php');
$url='index.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
 	}
}else{
	header('location:redirect.php');
	}
 ?>

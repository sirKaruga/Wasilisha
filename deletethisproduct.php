<?php
session_start();
$id=$_GET['id'];

$con= mysqli_connect('localhost', 'root', '', 'shope5');
$sql2 = "SELECT * FROM mains WHERE idindex='$id'";
$result = mysqli_query($con, $sql2);
while ($row = mysqli_fetch_assoc($result)) {
	$filename = $row['itempics'];
}
unlink("images/$filename");
$sql="DELETE FROM mains where idindex='$id'";
$con->query($sql);
header('location:allproducts.php');
?>

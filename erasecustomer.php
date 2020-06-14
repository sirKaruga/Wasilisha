<?php
session_start();
$id=$_GET['id'];
$con= mysqli_connect('localhost', 'root', '', 'shope5');
$sql="DELETE FROM customerlog where opr='$id'";
$con->query($sql);
header('location:allcustomers.php');
?>

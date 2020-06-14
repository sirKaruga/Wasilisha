<?php
$conn = new mysqli("localhost", "root", "", "shope5");
$imagesArray=array();
foreach ($_FILES['images']['name'] as $i  => $value) {
	$image_name = $_FILES['images']['tmp_name'][$i];
	$folder = "images/";
	$image_path = $folder.$_FILES['images']['name'][$i];
	move_uploaded_file($image_name, $image_path);
	array_push($imagesArray, $image_path);

	// $sql = "INSERT INTO unfiltered(image_path, identity, goodname, cat, vendor, contact, location, wheres, price, aboutgood) VALUES(?, '$randstr', '$name', '$cat', '$vendor', '$contact', '$location', '$wheres', '$price', '$description')"; 
	// $stmt = $conn->prepare($sql);
	// $stmt->bind_param("s",$image_path);
	// $stmt->execute(); 
}
echo print_r($imagesArray);
echo "the firts image path is:";
echo $imagesArray[0];
?>
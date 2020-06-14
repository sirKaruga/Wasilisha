<?php
function generate($len){
	$result = "";
	$chars = "abcdefw/xyz012jklmnopqrstu345ghiv6789";
	$charArray = str_split($chars);
	for ($i=0; $i < $len; $i++) { 
		$randItm = array_rand($charArray);
		$result .="".$charArray[$randItm];
	}
	return $result;
}
?>
<!-- <?php
//$randstr = randStrGen(6);
//echo $randstr;
 ?> -->
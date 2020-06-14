<?php
session_start();
$max=sizeof($_SESSION['cart']);
    for ($i=0; $i <$max ; $i++) { 
      while (list($key, $val)= each($_SESSION['cart'][$i])) {
        echo "$key -> $val ,";
      }//inner array while loop
      echo "<br>";
      
    }// outer array for loop
    echo "$key";
?>
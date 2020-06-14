<?php
  $db = mysqli_connect("localhost", "root", "", "shope5");
  $sql = "SELECT * FROM mains";
  $result = mysqli_query($db, $sql);
  $items = mysqli_num_rows($result);
?>
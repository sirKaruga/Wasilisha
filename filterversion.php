<?php
require_once("dbcontroller.php");
  $db_handle = new DBController();
  $items=$db_handle->numRows("SELECT * FROM unfiltered");
  echo "$items";
?>
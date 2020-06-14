<?php
 $name = $_SESSION['myname'];
 echo "<div style='display:none !important;'>";
 $max=sizeof($_SESSION["shopping_cart"]);
 echo "</div>";
 $x = explode(' ', $name);
$fname = "$x[0]";
?>
<ul class="nav navbar-nav navbar-right">
  <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo "$fname"; ?></a></li>
  <li><a href="cart.php"><span></span><i class='fas fa-cart-arrow-down' style='font-size:15px;color:red;'></i><span class="badge badge-primary"><?php echo "$max"; ?></span></a></li>

  <li><a href="customerlogout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
</ul>
<!-- <i class='fas fa-cart-arrow-down' style='font-size:58px;color:red'></i> -->
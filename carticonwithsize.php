<?php
 $max=sizeof($_SESSION["shopping_cart"]);
?>
<li><a href="cart.php"><span></span><i class='fas fa-cart-arrow-down' style='font-size:15px;color:red;'></i><span class="badge badge-primary"><?php echo "$max"; ?></span></a></li>
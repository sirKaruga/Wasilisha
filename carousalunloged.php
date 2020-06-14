<ul class="nav navbar-nav navbar-right">
	<?php 
		if (isset($_SESSION["shopping_cart"])) {
			require'carticonwithsize.php';
		}
	 ?>
  <li><a href="signupcustomer.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  <li><a href="formsample2.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
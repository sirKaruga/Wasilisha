<?php
// carousal of the page
require'tophalls.php';
?>
<div style=" padding-top: 8vh;">
<div class="col-sm-2">
	
<!--  -->
<div style="font-family: sans-serif; font-size: 1.5em; float:right; width:13%; height:100vh; overflow:auto; position: fixed;">
   <p>Products</p>
   <ul id="smallerfont">Latest on Wasilisha</ul>
   <p>Fashion</p>
   	<ul id="smallerfont">Ladies</ul>
   	<ul id="smallerfont">men</ul>
   	<ul id="smallerfont">Unigender</ul>
   <p>Smartphones</p>
   	<ul id="smallerfont">tablets</ul>
   	<ul id="smallerfont">iphones</ul>
   	<ul id="smallerfont">Android</ul>
   <p>Computers</p>
   	<ul id="smallerfont">Laptops</ul>
   	<ul id="smallerfont">Desktops</ul>
   <p>Accesories</p>
   <p>Offers</p>
   	<ul id="smallerfont">Promotions</ul>
   <p>Gifts</p>
   
  </div>
</div>

	<!--  -->
</div>
</div>
<div id="lhw" class="col-md-12">
	<?php
	// draw items from database
	    $db = mysqli_connect("localhost", "root", "", "shope5");
	    $sql = "SELECT * FROM mains ORDER BY opr DESC LIMIT 8";
	    $result = mysqli_query($db, $sql);
	       while ($row = mysqli_fetch_array($result)) {
	       	echo "<div class='card-group'>
				 <div class='card mb-2'>
				 <div class='card-img-top'>";
	       	echo "<form method='post' action=''>
        <input type='hidden' name='idindex' value=".$row['idindex']." />";
	           echo "<div class='img'>";
	           
	           echo "<th><a class ='a' href='details.php?id=".$row['idindex']."'>";
	           echo "<a href='details.php?id=".$row['idindex']."'>";
	           echo "<img src='".$row['itempics']."' alt='image' width='300' height='200'>";
	           
	           echo "</a><br><br><br>";
	           echo "<br>";
	          	echo "<hr>";
	          	echo "<hr>";
	           echo "<hr style='height:4px; color:black;'>";
	           echo "<div class='mylink'>";

	           $in = $row['itemname'];
	           $out=strlen($in) > 29 ? substr($in,0,25).'...' : $in;

	           echo "<div class='desc'><b>$out</b></div>";
	           echo "<div class='desc'>Ksh: ".$row['price']."<br><br>";
	           	echo "</a>";
	          // echo "<button style='font-size:1.2em;color:black; background-color: #FF6600;' type='submit' class='button2'>Buy</button><br></div>";
	           echo "";
	           echo "</div>";
	           echo "</div>";
	           echo "</form>";
	           echo "</div></div></div>";

	                       }
	?>
 <hr>             	
</div>
</body>
</html>
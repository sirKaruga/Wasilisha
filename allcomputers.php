<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['idindex']) && $_POST['idindex']!=""){
$idindex = $_POST['idindex'];
$result = mysqli_query($con,"SELECT * FROM `mains` WHERE `idindex`='$idindex'");
$row = mysqli_fetch_assoc($result);
$itemname = $row['itemname'];
$idindex = $row['idindex'];
$price = $row['price'];
$itempics = $row['itempics'];

$cartArray = array(
  $idindex=>array(
  'itemname'=>$itemname,
  'idindex'=>$idindex,
  'price'=>$price,
  'quantity'=>1,
  'itempics'=>$itempics)
);

if(empty($_SESSION["shopping_cart"])) {
  $_SESSION["shopping_cart"] = $cartArray;
  $status = "<div class='box'>Product is added to your cart!</div>";
}else{
  $array_keys = array_keys($_SESSION["shopping_cart"]);
  if(in_array($idindex,$array_keys)) {
    $status = "<div class='box' style='color:red;'>
    Product is already added to your cart!</div>";  
  } else {
  $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
  $status = "<div class='box'>Product is added to your cart!</div>";
  }

  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 15%;
  padding: 10px;
 
}
.column {
  float: left;
  width: 85%;
  padding: 10px;
 
}
.column3 {
  float: left;
  width: 49%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column5 {
  float: left;
  width: 50%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
div.desc {
    padding: 0px;
    text-align: center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (min-width: 790.01px) and (max-width: 1100px) {
   .sidemenu{display: none !important;}
   .showsm{display: none !important;}
   .maindisplay{width: 100%;}
                    }
@media only screen and (min-width: 1100.0001px) and (max-width: 90000px) {
   .showsm{display: none !important;}
   .sidem{width: 10%;}
   .maindisp{width: 90%;}
                    }
@media only screen and (min-width: 1px)and (max-width: 790px){
            .hideall{display: none !important;}
            .showsm{display: inline !important;}
                      }
</style>
</head>
<body>

<?php
// carousal of the page
require'tophalls.php';
?>
<div class="hideall"><!--large screen content -->
<div class="row">
  <div class="column1 sidemenu sidem" style="background-color:#aaa;">
    <div style="font-family: sans-serif; font-size: 1.5em; float:right; width:13%; height:100vh; overflow:auto; position: fixed; padding-left: 4px;">
   <p>Products</p>
   <k id="smallerfont">Wasilisha Latest</k>
   <p>Fashion</p>
   	<k id="smallerfont">Ladies</k>
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
  </div><!--end sidemenu class  -->
  <div class="column maindisp maindisplay" style="background-color:#ffffff;">
    <?php
    require_once("dbcontroller.php");
 	$db_handle = new DBController();
 	$query="SELECT * FROM mains where cat='computers' ORDER BY opr DESC";
 	 $resultset = $db_handle->runQuery($query);
 	 $Nrows=$db_handle->numRows($query);
 	 for ($i=0; $i <$Nrows ; $i++) { 
 	 	# code...
 	 
	// draw items from database
	    
	       	echo "<div class='card-group'>
				 <div class='card mb-2'>
				 <div class='card-img-top'>";
	       	echo "<form method='post' action=''>
        <input type='hidden' name='idindex' value=".$resultset[$i]['idindex']." />";
	           echo "<div class='img'>";
	           
	           echo "<th><a class ='a' href='details.php?id=".$resultset[$i]['idindex']."'>";
	           echo "<a href='details.php?id=".$resultset[$i]['idindex']."'>";
	           echo "<img src='".$resultset[$i]['itempics']."' alt='image' width='300' height='200'>";
	           
	           echo "</a><br><br><br>";
	           echo "<br>";
	          	echo "<hr>";
	          	echo "<hr>";
	           echo "<hr style='height:4px; color:black;'>";
	           echo "<div class='mylink'>";

	           $in = $resultset[$i]['itemname'];
	           $out=strlen($in) > 29 ? substr($in,0,25).'...' : $in;

	           echo "<div class='desc'><b>$out</b></div>";
	           echo "<div class='desc'>Ksh: ".$resultset[$i]['price']."<br><br>";
	           	echo "</a>";
	          echo "<button style='font-size:1.2em;color:black; background-color: #FF6600;' type='submit' class='button2'>Buy</button><br></div>";
	           echo "";
	           echo "</div>";
	           echo "</div>";
	           echo "</form>";
	           echo "</div></div></div>";

	     }                  
	?>
 <hr>             	
  </div><!--end main disp class  -->
</div><!--end row class  -->
</div><!--//// big scrn  -->


<div style="background-color: #ffffff" class="showsm"><!-- sm scrn  -->
 <?php
	echo "<div  style='overflow:hidden;'>";
	for ($i=0; $i <$Nrows ; $i++) {
		$in = $resultset[$i]['itemname'];
		           $out=strlen($in) > 29 ? substr($in,0,25).'...' : $in;

	echo "<div class='row shadow p-3 mb-5 bg-white rounded'>
	  <div class='column3'>
	    <a style='color:black;' class ='a' href='details.php?id=".$resultset[$i]['idindex']."'>
	    <img style='min-width:50vw; max-height:10em;' src='".$resultset[$i]['itempics']."' alt='image' width='300' height='200'>
	    
	  </div>
	  <div class='column5'>
	    <div style=' font-size:1.5em;' class='desc'><b>$out</b></div><br>
	    <div style=' font-size:1.3em;' class='desc'>Ksh: ".$resultset[$i]['price']."/=</div>
	    </a>
	  </div>
	</div>
	<hr style='background-color:black;'>
	";
	}
	echo "</div>";
  ?>
</div><!-- sm scrn  -->
</body>
</html>

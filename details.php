<!-- the cart add session strat -->
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


  <!-- the cart add session ends here -->
<!DOCTYPE html>
<html style="margin: 0%; padding: 0%;">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 83%;padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column1-1 {
  float: left;
  width: 20.2%;padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column1-2 {
  float: left;
  width: 70.2%;padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column1-3 {
  float: left;
  width: 29.8%;padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
.column2 {
  float: left;
  width: 17%;padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}
  .scrolling-wrapper{
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  height: 70vh;
}
  .card {
    flex: 0 0 auto;
    width: auto;

  }
  .smallfont{
  font-size: 11px;
}
/*.myspan{
  align-content: block;
}*/
.mylink{
  color: black;
  font-family: sans-serif;
  font:bold;
  padding: 1em;
  font-size: 1.5em;
}
.button2{
  background-color: #FF6600;
  height: 3em;
  border-radius: 5px;
 /* padding: 1em;*/
}
.righter{
  float: right;
}
.button1{
  background-color: #ff9900;
  height: 3em;
  border-radius: 5px;
 /* padding: 1em;*/
}
.myside{
    transform: perspective(1px) translateZ(0);
    backface-visibility: hidden;
  }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 @media only screen and (min-width: 1px)and (max-width: 790px){
            
            .largeScreenContent{display: none !important;}
            .smallScreenContent{display: inline !important;}
                      }
@media only screen and (min-width: 790.01px) and (max-width: 9000px) {
            .largeScreenContent{display: inline !important;}
            .smallScreenContent{display: none !important;}
                      
                    }
</style>
</head>
<body style="overflow-x: hidden;">
<div class="largeScreenContent">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#"><span style="font-family: Ravie; font-size: 20px;"><b>Wasilisha</b></span></a>
          
          
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
          <form class="navbar-form navbar-left" action="search.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" name="submit-search" class="btn btn-default">Search</button>
        </form>
            <li class=""><a href="index.php">Home</a></li>
            
            
          </ul>
          <?php 
            if (!isset($_SESSION['myname'])) {
              require'carousalunloged.php';
            }else{
              require'carousaloged.php';
            }
           ?>
        </div>
      </div>
    </nav>
<!-- db connection -->
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!-- db connection -->
<!-- <div class="largeScreenContent"> -->
<div class="row">
  <div class="column" style="background-color:#ffffff;">
    <!-- product Name as the heading -->
    <div style="padding-left: 0.5em;">
    <?php
      if (isset($_GET['id'])){
        $id = $_GET['id'];
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE idindex='$id' ORDER BY idindex DESC");
        echo "<h2 class='center'><b>".$resultset[0]['itemname']."</b></h2>";
        echo "<hr>";}
    ?>
    </div>
    <div class="column1-2">
      <!--///  -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="true">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->


          <div class="carousel-inner">
            <?php
            if (isset($_GET['id'])){
            $id = $_GET['id'];
            ?>
            <?php
            // first picture of the product// first slide
              function picEcho($itmindex){
                  global $resultset;
                echo '<div class="item active" style="float: center;padding-left: 30%;">
                  <img style="height: 30vw; width: auto; float: center;" src='.$resultset[$itmindex]['itempics'].'>
            </div>';
                }
              // subsequent pictures of the product
                function spicEcho($itmindex){
                  global $resultset;
                  if (isset($resultset[$itmindex]['image'])) {
                    echo '<div class="item"style="float: center;padding-left: 30%;">
                      <img style="height: 30vw; width: auto; float: center;" src='.$resultset[$itmindex]['image'].'>
                      </div>';
                  }
                
                }
//$id=$_GET['id'];
              $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE idindex='$id' ORDER BY idindex DESC");
              ?>
            
            <!-- first picture slide -->
              <?php
              picEcho(0);
              ?>
            <!-- subsequent picture slides -->
            <?php 
            $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC");  
             ?>
            <?php  spicEcho(0); ?>
            <?php  spicEcho(1); ?>
            <?php  spicEcho(2); ?>
            <?php  spicEcho(3); ?>
            <?php  spicEcho(4); ?>
            <?php  spicEcho(5); ?>
            <?php  spicEcho(6); ?>
            <?php  spicEcho(7); ?>
          </div>
          
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <script type="text/javascript">
          // Sets interval...what is transition slide speed?
          $('#myCarousel').carousel({
          interval: 4000
          });
        </script>
      <!-- </div> -->







      <!-- /// -->
    </div>
    <!-- product details section -->
    <div style="overflow: hidden;" class="column1-3">
      <?php
      $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE idindex='$id' ORDER BY idindex DESC");
      echo "<form method='post' action=''>
        <input type='hidden' name='idindex' value=".$resultset[0]['idindex']." />";
        echo "<item style='font-size:2em;'><b>Product Details</b></item><br>";
        echo "<span class='smallfont'>have yours to sell <a href='vendorsdash.php'>here?</a><br><br></span>";
        echo "<div class='det'>".str_replace("\r",'<br/><li>',$resultset[0]['features'])."</div>";
        echo "<div class='mylink'>Cost: Ksh. ".$resultset[0]['price']."/=</div>";
        echo "<button style='font-size:1.4em;' type='submit' class='button2 righter'><b> Add to Cart<b></button></span>";
        echo "</form>";
        echo "</a> ";       
        $sellername=$resultset[0]['sellername'];

        echo "<form method='post' action='buynow.php'>
        <input type='hidden' name='idindex' value=".$resultset[0]['idindex']." />
        <span class='myspan'><button style='font-size:1.4em;' type='submit' class='button1'><b>Buy now</b></button>
        </form>";
      ?>
    </div>
  </div>
  <?php
   }
  ?>
  <div class="column2">
  
  <div class="pad" style="  width: 100%; font-family: sans-serif; color: grey; border-radius: 5px;">
    <li class='smallfont'>Sold by: <?php echo "$sellername"; ?></li>
    <li>Easy Return</li>
    <li>Fast Delivery</li><br>
    <li><i style="font-size: 5em; text-align: center;" class='fas fa-shipping-fast'></i></li>
  </div>
  </div>
  
</div><!-- row class ends here -->
<h3>See Also..</h3>
   <?php
    require_once("dbcontroller.php");
  $db_handle = new DBController();
  $query="SELECT * FROM mains ORDER BY opr DESC";
   $resultset = $db_handle->runQuery($query);
   $Nrows=$db_handle->numRows($query);
function prints($i){
  // draw items from database
    global $resultset;
  echo "<a href='details.php?id=".$resultset[$i]['idindex']."'>";
  echo "<img src='".$resultset[$i]['itempics']."' alt='image' width='200' height='200' style='padding:2em;'>";
  echo "</a>";
     }
  echo "
<table style='width: 100vw; overflow-x: hidden;'>
  <tr>
    <td>
      ".prints(0)."
    </td>
    <td>
      ".prints(1)."
    </td>
    <td>
      ".prints(2)."
    </td>
    <td>
      ".prints(3)."
    </td>
    
  </tr>
</table>";
  ?>
</div><!-- large screen content ends here -->
<div class="smallScreenContent">
  <?php require'mobiletop.php';  ?>
  <div style="height: 22em; overflow-y: hidden;" class="scrolling-wrapper"> 
    <div style="min-height: 19.5em; max-height: 19.5em;"><!-- padcard -->
      <div style="padding: 1em;min-height: 21.5em; max-height: 21.5em;" class="card">
        <?php
        //function outputting entire scrollable containers' sections
        function scrollEcho($itmindex, $picname){
              global $resultset;
            if (isset($resultset[$itmindex][$picname])) {
                echo "<a href=".$resultset[$itmindex][$picname].">";
                echo "<img style='max-width: 90vw; min-height: 19.5em; max-height: 19.5em;' src=".$resultset[$itmindex][$picname].">";
                echo "</a>";
              }
            }
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE idindex='$id' ORDER BY opr DESC");  scrollEcho(0, 'itempics');
        ?>
      </div>
    </div><!-- padcard -->
    <div style=""><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 21.5em; max-height: 21.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC"); 
        scrollEcho(0, 'image');
        ?>
      </div>
    </div><!-- padcard -->
    <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 21.5em; max-height: 21.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC"); 
        scrollEcho(1, 'image');
        ?>
      </div>
    </div><!-- padcard -->
    <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 21.5em; max-height: 21.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC"); 
        scrollEcho(2, 'image');
        ?>
      </div>
    </div><!-- padcard -->
    <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 21.5em; max-height: 21.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC"); 
        scrollEcho(3, 'image');
        ?>
      </div>
    </div><!-- padcard -->
    <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 21.5em; max-height: 21.5em;">
        
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM secondaryimages WHERE idindex='$id' ORDER BY opr DESC"); 
        scrollEcho(4, 'image');
        ?>
      </div>
    </div><!-- padcard -->
  </div><!-- end of first scrolling containers -->

  <div style="padding-left: 5px;">
    <?php
      $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE idindex='$id' ORDER BY idindex DESC");
      echo "<div class='mylink'>Cost: Ksh. ".$resultset[0]['price']."/=</div>";
      echo "<form method='post' action=''>
        <input type='hidden' name='idindex' value=".$resultset[0]['idindex']." />";
        echo "<item style='font-size:2em;'><b>Product Details</b></item><br>";
        echo "<span class='smallfont'>have yours to sell <a href='vendorsdash.php'>here?</a><br><br></span>";
        echo "<div class='det'>".str_replace("\r",'<br/><li>',$resultset[0]['features'])."</div>";
        
        echo "<button style='font-size:1.4em;' type='submit' class='button2 righter'><b> Add to Cart<b></button></span>";
        echo "</form>";
        echo "</a> ";       
        $sellername=$resultset[0]['sellername'];
        echo "<form method='post' action='buynow.php'>
        <input type='hidden' name='idindex' value=".$resultset[0]['idindex']." />
        <span class='myspan'><button style='font-size:1.4em;' type='submit' class='button1'><b>Buy now</b></button>
        </form>";
      ?>
  </div>
</div><!-- small screen content ends here -->



</body>
</html>

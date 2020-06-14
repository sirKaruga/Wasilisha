<script type="text/javascript">
  function jsUpdateSize(){
    // Get the dimensions of the viewport
    var width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;
    var height = window.innerHeight ||
                 document.documentElement.clientHeight ||
                 document.body.clientHeight;

    if (width>790) {
        window.location.replace("index2.php");
    }
};
window.onload = jsUpdateSize;       // When the page first loads
window.onresize = jsUpdateSize;     // When the browser changes size
</script>
<?php
session_start();
?>
<!DOCTYPE html>
<html style="overflow-x: hidden;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Wasilisha Gooddies</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- custom css -->

    <style type="text/css">
        .scrolling-wrapper{
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}
  .card {
    flex: 0 0 auto;
   
    width: auto;
  }
.row:after {
  content: "";
  clear: both;
  display: table;
}
.nopad{margin: 0%; padding: 0%;}
.nopadding{
  padding: 0%; 
  margin: 0%;
}
.bluehead{
  background-color: blue; 
  padding: 0.8em; 
  border-top-left-radius: 5px; 
  border-top-right-radius: 5px;
   color: white;
}
.blackhead{
  background-color: black; 
  padding: 0.8em; 
  border-top-left-radius: 5px; 
  border-top-right-radius: 5px;
   color: white;
}
.yellowhead{
  background-color: yellow; 
  padding: 0.8em; 
  border-top-left-radius: 5px; 
  border-top-right-radius: 5px;
   color: black;
}
.hoverflow{overflow: hidden;}

[class*="col-"] {
  float: left;
  padding: 15px;
  width: 100%;
}
 @media only screen and (min-width: 1px) and (max-width: 2000px) {
    .col-s-1{width: 50% !important;}
    .col-s-2{width: 25vw !important;}
    .col-s-period{width: 1%;}
    .co-s-pic{width: 49%;}
    .full1{width: 100vw;}
    .col-base{width: 33.33%}
                    }
  .myside{
    transform: perspective(1px) translateZ(0);
    backface-visibility: hidden;
  }
</style>

</head>

<body style="overflow: hidden;">

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav class="myside" id="sidebar" style="background-color: black;">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Wasilisha Mall</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a style="color: yellow;" href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a style="color: white;" href="#">Page 1</a>
                        </li>
                        <li>
                            <a style="color: white;" href="#">Page 2</a>
                        </li>
                        <li>
                            <a style="color: white;" href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <!-- <div id="content"> -->
<div style="overflow: hidden; background-color: black; width: 100%; height: 3em;">
  <marquee behavior="scroll" direction="up" scrollamount="3"><p style="font-size: 2em; color: red; text-align: center;"><b><i style="font-size: 2.5em;" class="fa fa-gift"></i>Wasilisha Mega Sale Season!<br>Crazy Discounts!!!</b></p></marquee>
</div>
<!-- connecting to Db -->
 <?php
  require_once("dbcontroller.php");
  $db_handle = new DBController();
?>

<nav class="nopadding navbar navbar-light bg-white" style="padding: none; background-color: white;">
  <div class="col-sm-12 myside" style="background-color: #ffffff">
    <span><m1 style='float: right;'><a class="nav-link" href="formsample2.html"><i style="color: black; text-decoration: none;">
      <?php
        if (isset($_SESSION['myname'])) {
          $dname=$_SESSION['myname'];
          $x = explode(' ', $dname);
          $result = "$x[0]";
          echo $result;
        }
      ?>
      <img style="height: 2em;" src="icons/user_valid-512.png"></i></a></m1>
      
         <m3 style='float: right;'><a href="cart.php"><i class='fas fa-cart-arrow-down' style='font-size:30px;height: 1em;color:red;'></i>
          <?php
            if (isset($_SESSION["shopping_cart"]) && sizeof($_SESSION["shopping_cart"])>0) {
              $max=sizeof($_SESSION["shopping_cart"]);
              echo "<span style='background-color:blue; vertical-align: top;' class='badge badge-primary'>".$max."</span>";
            }
          ?></a>
         </m3>
      <m2 style='float: left;'>
        <button style="background-color: white; font-size: 1.5em; color: black; border: none;"
          type="button" id="sidebarCollapse" class="btn btn-info nopadding">
          <span class="navbar-left"><i class="fas fa-align-justify navbar-left"></i> Wasilisha
          </span>
          </button></m2>
    </span>
  </div>     
      <!-- the top search form inside top nav-->
      <span style="background-color: #ffffff; width: 100vw; overflow: hidden;"><form style="width: 100vw;" class="form-inline " action="search.php" method="post">
      <input style="width: 95vw;"  class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search products, Brands, Cartegories..."
      aria-label="Search">
      <button type="submit" name="submit-search"><i style="border: none; font-size: 1.8em;" class="fas fa-search" aria-hidden="true"></i></button>
      </form></span>
</nav><!-- end of tops navs -->
  <!-- scrolling containers -->
   
<div class="scrolling-wrapper"> 
 <div style="padding-right: 1em; min-height: 19.5em; max-height: 19.5em;"><!-- padcard -->
  <div style="padding: 1em;min-height: 19.5em; max-height: 19.5em;" class="card">
    <?php
    //function outputting entire scrollable containers' sections
    function scrollEcho($itmindex){
          global $resultset;
          $in = $resultset[$itmindex]['itemname'];
             $out=strlen($in) > 10 ? substr($in,0,13).'...' : $in;
        echo "<a href='details.php?id=".$resultset[$itmindex]['idindex']."'>";
        echo "<img style='width: auto; height:12em;' src=".$resultset[$itmindex]['itempics'].">";
        echo "<p class='text-center text-dark'><b>$out</b></p>";
        echo "<p class='text-center text-dark'>KSh. ".$resultset[$itmindex]['price']."/=</p>";
        echo "</a>";
        }
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='smartphones' ORDER BY opr DESC");  scrollEcho(5);
    ?>
  </div>
  </div><!-- padcard -->
  <div style="padding-right: 1em; "><!-- padcard -->
  <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
    <?php
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='clothingsAndFash' ORDER BY opr DESC"); 
    scrollEcho(5);
    ?>
  </div>
  </div><!-- padcard -->
  <div style="padding-right: 1em;"><!-- padcard -->
  <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
    <?php
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='computers' ORDER BY opr DESC"); 
    scrollEcho(5);
    ?>
  </div>
  </div><!-- padcard -->
  <div style="padding-right: 1em;"><!-- padcard -->
  <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
    <?php
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); 
    scrollEcho(5);
    ?>
  </div>
  </div><!-- padcard -->
  <div style="padding-right: 1em;"><!-- padcard -->
  <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
    <?php
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC"); 
    scrollEcho(5);
    ?>
  </div>
  </div><!-- padcard -->
  <div style="padding-right: 1em;"><!-- padcard -->
  <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
    
    <?php
    $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='tvs' ORDER BY opr DESC"); 
    scrollEcho(0);
    ?>
  </div>
  </div><!-- padcard -->
</div><!-- end of first scrolling containers -->

<!-- row 2 button -->
<!-- // -->
<!-- row3 topselling products -->
 
  
<div class="row"><br>
  <div class="shadow p-3 mb-5 bg-white rounded nopadding" style="overflow: hidden;"><!-- buttons start here -->
    <div class="col-s-2">
      <a style="text-decoration: none;" href="tel:0708453589"><i class="fa fa-phone" style="font-size:24px;"></i>
      <p style="font-size: 0.95em;">Call-Order</p></a>
    </div>
    <div class="col-s-2">
      <i class="fa fa-truck" style="font-size:24px;"></i>
      <p style="font-size: 0.95em;">Delivery-check</p>
    </div>
    <div class="col-s-2">
      <a style="text-decoration: none;" href="alltopdeals.php"><i class="fa fa-gift" style="font-size:24px;color:red;"></i>
      <p style="font-size: 0.95em;">Top-Promotions</p></a>
    </div>
    <div class="col-s-2">
      <a style="text-decoration: none;" href="seeall.php"><i class="fa fa-heart" style="font-size:24px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>
      <p style="font-size: 0.95em;">All-Collections</p></a>
    </div>
  </div><!-- buttons end here -->
  <!-- // -->
<div style="overflow: hidden;" class=" shadow p-3 mb-5 bg-white rounded nopadding"><!-- product x start here -->
  <div class="nopadding"><!-- top start here -->
    <h6 class="blackhead"><b>Smartphones of all Prices</b><span style="float: right;"><a style="color: white;" href="allsmartphones.php"><b>See More></b></a></span></h6>
      </div>
    <div class="col-s-1">
      <?php
      // function to output the entire carts sections
      function myEcho($itmindex){
          global $resultset;
          $in = $resultset[$itmindex]['itemname'];
             $out=strlen($in) > 10 ? substr($in,0,13).'...' : $in;
        echo "<a href='details.php?id=".$resultset[$itmindex]['idindex']."'>";
        echo "<img style='width: auto; height:29vw;' src=".$resultset[$itmindex]['itempics'].">";
        echo "<p class='text-center text-dark'><b>$out</b></p>";
        echo "<p class='text-center text-dark'>KSh. ".$resultset[$itmindex]['price']."/=</p>";
        echo "</a>";
        } 
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='smartphones' ORDER BY opr DESC"); myEcho(0);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(1);
       ?>
    </div>
    <div class="col-s-1"><!-- top carts table start here -->
      <?php
      myEcho(2);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(3);
       ?>
    </div>
</div> <!-- //smartphones group end here-->

<!--  -->
<!-- period black1 start here -->
<div style="margin: 0%; padding: 0%;" class="shadow p-3 mb-5 bg-white rounded nopadding full1" style="overflow: hidden;">
    <div style="margin: 0%; padding: 0%;" class="col-s-1">
      <img style="margin: 0%; padding: 0%;width: 47vw; border-radius: 5px; min-height: 27vw; max-height: 27vw;" src="static/st02.jpg">
    </div>
    
    <div style="margin: 0%; padding: 0%;" class="col-s-1">
      <img style=" margin: 0%; padding: 0%;width: 54vw; border-radius: 5px; min-height: 27vw; max-height: 27vw;" src="static/camside.jpg">
    </div>
  </div><!-- end period black1 -->
<!--  -->

<!-- //dress group start -->
<div class=" hoverflow shadow p-3 mb-5 bg-white rounded nopadding">
  <div class="nopadding"><!-- top carts table start here -->
    <h6 class="yellowhead"><b>Computers of all Carts</b><span style="float: right;"><a style="color: black;" href="allcomputers.php"><b>See More></b></a></span></h6>
      </div>
    <div class="col-s-1">
      <?php 
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='computers' ORDER BY opr DESC"); myEcho(0);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(1);
       ?>
    </div>
    <div class="col-s-1"><!-- top carts table start here -->
      <?php
      myEcho(2);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(3);
       ?>
    </div>
</div><!-- item group2 -->

<!-- period black1 start here -->
<div style="width: 101vw; margin: 0%; padding: 0%;" class="shadow p-3 mb-5 bg-white rounded nopadding full1" style="overflow: hidden;">
    <div style="margin: 0%; padding: 0%;" class="col-s-1">
      <img style="margin: 0%; padding: 0%;width: 47vw; border-radius: 5px; min-height: 27vw; max-height: 27vw;" src="static/cam.jpg">
    </div>
    
    <div style="margin: 0%; padding: 0%;" class="col-s-1">
      <img style=" margin: 0%; padding: 0%;width: 54vw; border-radius: 5px; min-height: 27vw; max-height: 27vw;" src="static/line1.jpg">
    </div>
  </div><!-- end period black1 -->

    <!-- // -->
    <!-- start clothings and fashion -->
<div style="overflow: hidden;" class=" shadow p-3 mb-5 bg-white rounded nopadding"><!-- product x start here -->
  <div class="nopadding"><!-- top start here -->
    <h6 class="blackhead"><b>Dress and Fashion</b><span style="float: right;"><a style="color: white;" href="allclotings.php"><b>See More></b></a></span></h6>
      </div>
    <div class="col-s-1">
      <?php 
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='clothingsAndFash' ORDER BY opr DESC");
        myEcho(0);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(1);
       ?>
    </div>
    <div class="col-s-1"><!-- top carts table start here -->
      <?php
      myEcho(2);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(3);
       ?>
    </div>
</div> <!-- //dressing and fashion group end here-->

<!-- /// -->
    <!-- period2 scrollable containers start -->
    <div class="scrolling-wrapper"> 
     <div style="padding-right: 1em; min-height: 19.5em; max-height: 19.5em;"><!-- padcard -->
      <div style="padding: 1em;min-height: 19.5em; max-height: 19.5em;" class="card">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='earphones' ORDER BY opr DESC");

        scrollEcho(1);
        ?>
      </div>
      </div><!-- padcard -->
      <div style="padding-right: 1em; "><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
        <?php
        
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); scrollEcho(3);
        ?>
      </div>
      </div><!-- padcard -->
      <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); scrollEcho(4);
        ?>
      </div>
      </div><!-- padcard -->
      <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); scrollEcho(5);
        ?>
      </div>
      </div><!-- padcard -->
      <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); scrollEcho(6);
        ?>
      </div>
      </div><!-- padcard -->
      <div style="padding-right: 1em;"><!-- padcard -->
      <div class="card" style="padding: 1em;min-height: 19.5em; max-height: 19.5em;">
        
        <?php
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='electronics' ORDER BY opr DESC"); scrollEcho(0);
        ?>
      </div>
      </div><!-- padcard -->
    </div><!-- end of second scrolling containers -->

<!-- /// -->

    <!-- start other cart -->
<div style="overflow-x: hidden;" class=" shadow p-3 mb-5 bg-white rounded nopadding"><!-- product x start here -->
  <div class="nopadding"><!-- top start here -->
    <h6 class="bluehead"><b>Other Carts</b><span style="float: right;"><a style="color: white;" href="allothercats.php"><b>See More></b></a></span></h6>
      </div>
    <div class="col-s-1">
      <?php 
        $resultset = $db_handle->runQuery("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC"); $in = myEcho(0);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(1);
       ?>
    </div>
    <div class="col-s-1"><!-- top carts table start here -->
      <?php
      myEcho(2);
       ?>
    </div>
    <div class="col-s-1">
      <?php
      myEcho(3);
       ?>
    </div>
</div> <!-- //other cart group end here-->
<!-- //// -->

<!-- policy -->
<div style="overflow: hidden;" class=" shadow p-3 mb-5 bg-white rounded nopadding">
<?php
  require'policy.html';
?>
</div>
<!-- /// -->

<!-- bottom navigation -->
  <div class="nopadding col-s-12" style="background-color: black; color: white;">
    <div class="col-base">
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="tel:0708453589">Contact Us</a><br>
    </div>
    <div class="col-base">
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">About</a><br>
    </div>
    <div class="col-base">
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">Careers</a><br>
    </div>
  
  <div class="col-sm-12"><!-- bottom line/copyright -->
    <p style="font-size: 1.2em; text-align: center; color: white;">
              &#169; Designed By <a style="color:pink;" href="https://www.vidielites.co.ke">Vidielites Technologies</a>
            </p>
  </div><!-- bottom line/copyright -->
  </div><!-- column base -->
</div><!-- row class ends -->


    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
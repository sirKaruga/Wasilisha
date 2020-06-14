<script type="text/javascript">
  function jsUpdateSize(){
    // Get the dimensions of the viewport
    var width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;
    var height = window.innerHeight ||
                 document.documentElement.clientHeight ||
                 document.body.clientHeight;

    if (width<=790) {
        window.location.replace("index3.php");
    }
};
window.onload = jsUpdateSize;       // When the page first loads
window.onresize = jsUpdateSize;     // When the browser changes size
</script>
<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wasilisha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<!-- <link rel="stylesheet" type="text/css" href="css/stylesz..css"> -->

  <style type="text/css">
    #lhw{
      background-color: white;
    }
    .ptable{
      width: 100%;
      border: 1px solid grey;
    }
    #lhwh{
      background-color: white;
      border-radius: 10%;
    }
    .jm {
     background: rgba(209, 209, 209, 0.5);
     float: left;
    }
    #indents{
      margin-left: 3em;
      font-size: 10px;
    }
    #toplefts{
      padding-top: 1.5em;
    }
    #buttons{
      font-weight: bold;
      font-size: 20px;
      

    }
    .ic{
     background-color: white;
     border-radius: 50%;
     padding:10px;
    }

    /*start*/
    img{
  float: left;
  margin: none;
  width: 3em;
  
  
}

div.img {
    margin: 5px;
 /*   border: 1px solid #ccc;*/
    float: left;
    width: auto;
    padding: 1em;
   align-content: left;
   height: 18.5em;
   position: relative;
}

div .img:hover{
  background-color: beige;
}

.wrapper{
  position: relative;
}
div .img .mylink{
  position: absolute;
  bottom: 0;
}

/*div.img:hover {
    border: 1px solid #777;
}*/
div .img .mylink:hover{
  background-color: beige;
}
.cats{
  text-decoration: none !important;
  color: black;
}
.cats:hover{
  background-color: wheat;
  color: black !important;
  /*width: 100% !important;*/
}

div.img img {
    width: 12.2em;
    height: auto;
    max-height: 12em;
}

div.desc {
    padding: 0px;
    text-align: center;
}
body {
padding: 0;
margin: 0;
}
.align{
  float: center;
}
          @media only screen and (min-width: 1px)and (max-width: 790px){
            
            .hideMeOnScreenSize{display: none !important;}
            .showmesmall{display: inline !important;}
                      }
                    @media only screen and (min-width: 790.01px) and (max-width: 9000px) {
                      .hideMeOnScreenSize{display: inline !important;}
                      
                    }
                    /*extralinks*/
 @media only screen and (min-width: 990px)and (max-width: 1199px){
            
            .hideTwoOnScreenSize{display: none !important;}
            .hideBigIcOnScreenSize{display: none !important;}
                      }
                    @media only screen and (min-width: 790.011px) and (max-width: 991px) {
                      .last{display: none !important;}
                      .hidethis{display: none !important;}
                    }
      /*display db section*/
  
  @media only screen and (min-width: 1355px)and (max-width: 99999px){
            
            .hideitmd1{display: inline !important;}
            .showremainder5{display: none !important;}
            .showremainder4{display: none !important;}
            .showremainder3{display: none !important;}
                      }
                    @media only screen and (min-width: 1147px) and (max-width: 1354.999px) {
                      .hideitmd1{display: none !important;}
                      .showremainder5{display: inline !important;}
                      .showremainder4{display: none !important;}
                      .showremainder3{display: none !important;}
                    }
                    @media only screen and (min-width: 937px) and (max-width: 1146.999px) {
                      .hideitmd1{display: none !important;}
                      .showremainder5{display: none !important;}
                      .showremainder4{display: inline !important;}
                      .showremainder3{display: none !important;}
                    }
                     @media only screen and (min-width: 790.01px) and (max-width: 936.99px) {
                      .hideitmd1{display: none !important;}
                      .showremainder5{display: none !important;}
                      .showremainder4{display: none !important;}
                      .showremainder3{display: inline !important;}
                    }
  </style>

</head>
<body style="background-color: #F5F5F9; margin-right: 3em; margin-left: 3em;">


  <div class="hideMeOnScreenSize">
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
            <li class="active"><a href="#">Home</a></li>
            
            
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
  </div>    
<div class="hideMeOnScreenSize">

    <div style="overflow: hidden;"><!-- links and slide shows Part start -->

                  <div class="col-sm-2 shadow p-3 mb-5 bg-white rounded" style="background-color: #FFFFFF; border-radius: 2em;">
                        <p><i class='far fa-star' id="toplefts"></i> Featured</p>
                        <p><i class='fas fa-heart'></i> Top selling</p>
                        <p><i class='far fa-thumbs-up'></i> Like</p>
                        <p><i class="fa fa-globe"></i> Assistance</p>
                        <p><i class='fas fa-shipping-fast'></i> Delivery</p>
                      <div class="last">
                        <p><i class="fa fa-phone"></i> Recomend Us</p>
                      
                      <div class ="extralink1">
                        <p><i class='fas fa-mobile-alt'></i> Experience</p>
                        
                        <p><i class='fas fa-laptop'></i> Give Feedback</p>
                        
                      </div>
                      <div class ="hideTwoOnScreenSize">
                        <p><i class='fas fa-search-dollar'></i> Promo</p>
                        <p><i class='fas fa-money-bill-wave'></i> Money Value</p>
                        <!-- <p><i class=' fab fa-black-tie'></i> First Link</p> -->
                      </div></div>
                          
                  </div>

                    <div class="col-sm-8" style="background-color: #FFFFFF; border-radius: 2em;">
                      
                      <div class="container">
                 
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                      <div class="item active">
                        <img src="images/f6.jpg" alt="Los Angeles" style="width:60%;">
                        <div class="carousel-caption">
                          <div class="jm">
                            <h3>Los Angeles</h3>
                            <p>thygf</p>
                          </div>
                           
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f2.jpg" alt="Chicago" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>Chicago</h3>
                          <p>Thank you, Chicago!</p>
                        </div>
                      </div>
                    
                      <div class="item">
                        <img src="images/f9.jpg" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f7.jpg" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f5.png" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f8.jpg" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/ShakeShack-resized-700x350.jpg" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f3.jpg" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="images/f1.png" alt="New York" style="width:60%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>
                  
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
                </div>

                    </div>

                    <div class="col-sm-2 shadow p-3 mb-5 bg-white rounded" style="background-color: #FFFFFF; border-radius: 2em;">
                      <p><b><i class='fas fa-certificate' style='font-size:25px;color:red;'></i>  Original</b><br><span id="indents">  Filtered Products</span></p>
                      <p><b><i class='fas fa-gem' style='font-size:25px;color:black;'></i>  Quality</b><br><span id="indents">  Quality Guarantee</span></p>
                    <div class="hideBigIcOnScreenSize hidethis">
                      <p><b><i class='fas fa-gift' style='font-size:25px;color:blue;'></i>  Promotions</b><br><span id="indents">  Exciting Offers</span></p>
                      <p><b><i class='fas fa-gift' style='font-size:25px;color:#FF6600;'></i>  Gift Hampers</b><br><span id="indents">  Thousand Gifts</span></p>
                    <div id="hidei">
                      <p><b><i class='fab fa-google-wallet' style='font-size:25px;color:#CC0000;'></i>  Process</b><br><span id="indents">  Easy Return</span></p>
                    </div>
                          
                      <div class="hideBigIcOnScreenSize">
                      <p><b><i class='fas fa-cart-arrow-down' style='font-size:58px;color:red'></i></b></p>
                      </div>
                          
                    </div>
                      
                  </div>

    </div><!-- links and slide shows Part ends -->

    <!-- Buttond down slide -->
    




<!-- featured cartegories part -->
<div id="largebuttons">

  <div class="row">
    <div class="col-3 menu drop-shadow">
      <ul>
      <p id="buttons"><a style="color: black;text-decoration: none;" href="allelectronics.php"><i class='fas fa-microchip ic' style='font-size:20px;color:red; background-color: purple;'></i>Electronics</p></a>
      </ul>
    </div>

    <div class="col-3 menu shadow p-3 mb-5 bg-white rounded">
      <ul>
      <p id="buttons"><a style="color: black;text-decoration: none;" href="allsmartphones.php"><i class="fa fa-eercast ic" style="font-size:20px;color:blue; background-color: brown;"></i>Smartphones</p></a>
      </ul>
    </div>

    <div class="col-3 menu shadow p-3 mb-5 bg-white rounded">
      <ul>
      <p id="buttons"><a style="color: black;text-decoration: none;" href="seeall.php"><i class="fa fa-free-code-camp ic" style="font-size:20px;color:black; background-color: #ff9900;"></i>Hot deals</p></a>
      </ul>
    </div>

    <div style=" border: 1px #ececec;" class="col-3 menu shadow p-3 mb-5 bg-white rounded">
      <ul>
      <p id="buttons"><a style="color: black; text-decoration: none;" href="allclotings.php"><i class="fa fa-pencil ic" style="font-size:20px;color:black; background-color: #FF6600;"></i> Clothings</p></a>
      </ul>
    </div>
  


<!-- real featured carts -->
  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded">
    
    <h4 style="font-weight: bold; padding-left: 2em;">Featured Categories</h4>
    
    <table style="border-collapse: collapse;" class="mtable1" border="1">
      <tr>
        <td align="center" style="padding-top: 1em;">
          <a href="allsmartphones.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/cphone.jpg"><br>
          <span style="width: 100%;"><br>Smartphones</span><br></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allclotings.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/cdress2.jpg"><br>
          <span>Dressing</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allelectronics.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 2em;" class="respond" src="images/cgadgets2.jpg"><br>
          <span>Accessories</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allothercats.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/claundry.png"><br>
          <span>Laundry</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="alltvs.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/smartTV.jpg"><br>
          <span>SmartTV</span></a>
        </td>
      </tr>
      <tr>
        <td align="center" style="padding-top: 1em;">
          <img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/cfoods.jpg"><br>
          <span>Fooding</span>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allcomputers.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/ccomputers2.jpg"><br>
          <span>Computers</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allothercats.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/coocker.png"><br>
          <span>Coockers</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allautoparts.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/cautoparts.jpg"><br>
          <span>Auto Parts</span></a>
        </td>
        <td align="center" style="padding-top: 1em;">
          <a href="allheadphones.php" class="cats"><img style="padding-left: 2em; width: 100%; padding-right: 3em;" class="respond" src="images/cheadphones.jpg"><br>
          <span>Headphones</span></a>
        </td>
      </tr>
    </table>
  </div>
<!-- end featured categories part -->
<!-- all products display function -->
<?php
// connect Db
require_once("dbcontroller.php");
$db_handle = new DBController();
// display function
  function fdisplay($query){
    global $db_handle;
    $resultset = $db_handle->runQuery($query);
    $Nmrows=$db_handle->numRows($query);
    for ($i=0; $i <$Nmrows; $i++) { 
      echo "<div class='img'>";
      echo "<th><a class ='a' href='details.php?id=".$resultset[$i]['idindex']."'>";
      echo "<a href='details.php?id=".$resultset[$i]['idindex']."'>";
      echo "<img src='".$resultset[$i]['itempics']."' alt='image' width='300' height='200'>";
      echo "</a><br>";
      echo "<div class='mylink'>";
      $in = $resultset[$i]['itemname'];
      $out=strlen($in) > 29 ? substr($in,0,37).'...' : $in;
      echo "<div class='desc'>$out</div>";
      echo "<div class='desc'><b>Ksh: ".$resultset[$i]['price']."</b></div>";
      echo "</a> </div>";
      echo "</div>";
               }
             }
?>
<div class="col-sm-12"></div><!-- period -->
<!-- real featured carts -->
  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole top current deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: #ff9900; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px;"><b>Top Current Deals</b><span style="float: right;"><a style="color: black;" href="seeall.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->
            <div class="hideitmd1 featured align">
    
              <?php
               

             fdisplay("SELECT * FROM mains ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                          

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains ORDER BY opr DESC limit 3");
            ?>
          </div><!-- wrapper of 3 records -->
  </div><!-- wrapper of the whole top current deals -->

<div class="col-sm-12"></div><!-- period -->

<!-- real smartphones carts -->
  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole smartphones deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: blue; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: white;"><b>Smartphones of all Prices</b><span style="float: right;"><a style="color: white;" href="allsmartphones.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains where cat='Smartphones' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains where cat='Smartphones' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='Smartphones' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='Smartphones' ORDER BY opr DESC limit 3");
            ?>
          </div>
  </div><!-- wrapper of the whole  smartphones deals -->

<div class="col-sm-12"></div><!-- period -->

<div id="lhw" class="ptable col-12 shadow p-3 mb-5 bg-white rounded"><!-- promotion period -->
  <table class="mtable1">
    <tr>
      <td><img style="width: 100%; height: 20em;" src="images/customercare.jpg"> </td>
    </tr>
  </table>
</div>

<div class="col-sm-12"></div><!-- period -->

<!--  -->

  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole clothing and fashion deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: #ff9900; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px;"><b>Clothings and Fashion</b><span style="float: right;"><a style="color: black;" href="allclotings.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains where cat='clothingsAndFash' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                          

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains where cat='clothingsAndFash' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='clothingsAndFash' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='clothingsAndFash' ORDER BY opr DESC limit 3");
            ?>
          </div><!-- wrapper of 3 records -->
  </div><!-- wrapper of the whole clotings and fashion deals -->

<div class="col-sm-12"></div><!-- period -->

<!-- real smartphones carts -->
  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole computers deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: blue; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: white;"><b>Computers of all Prices</b><span style="float: right;"><a style="color: white;" href="allcomputers.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains where cat='computers' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains where cat='computers' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='computers' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='computers' ORDER BY opr DESC limit 3");
            ?>
          </div>
  </div><!-- wrapper of the whole  computers deals -->

<div class="col-sm-12"></div><!-- period -->

<div id="lhw" class="ptable col-12 shadow p-3 mb-5 bg-white rounded"><!-- promotion period -->
  <table class="mtable1">
    <tr>
      <td><img style="width: 100%; height: 20em;" src="images/hot.png"> </td>
      <td><img style="width: 100%; height: 20em;" src="images/crazy2.png"> </td>
    </tr>
  </table>
</div>

<div class="col-sm-12"></div><!-- period -->
<!--  -->

  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole TVS deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: #ff9900; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px;"><b>Top TV's of all Sizes</b><span style="float: right;"><a style="color: black;" href="alltvs.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains where cat='tvs' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                          

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains where cat='tvs' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='tvs' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='tvs' ORDER BY opr DESC limit 3");
            ?>
          </div><!-- wrapper of 3 records -->
  </div><!-- wrapper of the whole tvs deals -->

<div class="col-sm-12"></div><!-- period -->

<!-- real smartphones carts -->
  <div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole Autoparts deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: blue; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: white;"><b>Autoparts and Accessories</b><span style="float: right;"><a style="color: white;" href="allautoparts.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains where cat='autoparts' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                 fdisplay("SELECT * FROM mains where cat='autoparts' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
             fdisplay("SELECT * FROM mains where cat='autoparts' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
             fdisplay("SELECT * FROM mains where cat='autoparts' ORDER BY opr DESC limit 3");
            ?>
          </div>
  </div><!-- wrapper of the whole  autoparts deals -->

<div class="col-sm-12"></div><!-- period -->

<div id="lhw" class="ptable col-12 shadow p-3 mb-5 bg-white rounded"><!-- promotion period -->
  <table class="mtable1">
    <tr>
      <td><img style="width: 100%; height: 20em;" src="images/hot.png"> </td>
      <td><img style="width: 100%; height: 20em;" src="images/crazy2.png"> </td>
    </tr>
  </table>
</div>

<div class="col-sm-12"></div><!-- period -->

<!--  -->

<!-- real computers carts -->
<div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole Electronics deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: #ff9900; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: black;"><b>Electronics of All Categories</b><span style="float: right;"><a style="color: white;" href="allelectronics.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
               fdisplay("SELECT * FROM mains where cat='electronics' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains where cat='electronics' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='electronics' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains where cat='electronics' ORDER BY opr DESC limit 3");
            ?>
          </div>
</div><!-- wrapper of the whole  Electronics deals -->

<div class="col-sm-12"></div><!-- period -->

<!-- real dressing carts -->
<div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole Headphones/Earphones deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: blue; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: white;"><b>Headphones and Earphones</b><span style="float: right;"><a style="color: white;" href="allheadphones.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains WHERE cat='headphones' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains WHERE cat='headphones' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains WHERE cat='headphones' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains WHERE cat='headphones' ORDER BY opr DESC limit 3");
            ?>
          </div>
</div><!-- wrapper of the whole  dressing deals -->

<div class="col-sm-12"></div><!-- period -->

<div id="lhw" class="ptable col-12 shadow p-3 mb-5 bg-white rounded"><!-- promotion period -->
  <table class="mtable1">
    <tr>
      <td><img style="width: 100%; height: 20em;" src="images/s7.jpg"> </td>
      <td><img style="width: 100%; height: 20em;" src="images/cheadphones.jpg"> </td>
    </tr>
  </table>
</div><!-- promotion period -->

<div class="col-sm-12"></div><!-- period -->

<div class="featured col-12 shadow p-3 mb-5 bg-white rounded"><!-- whole smartphones deals -->
    
      <div class=" shadow p-3 mb-5 bg-white rounded"><!-- part1 to feature products from database -->
        <h4 style="background-color: blue; padding: 0.8em; border-top-left-radius: 5px; border-top-right-radius: 5px; color: white;"><b>Other Categories</b><span style="float: right;"><a style="color: white;" href="allothercats.php"><b>See More></b></a></span></h4>
      </div>
        <div id="toremain3"><!-- to hide all but3 -->
          <div id="toremain4"><!-- to hide all but4 -->


            <div class="hideitmd1 featured align">
    
              <?php
              fdisplay("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC limit 6");
              ?>
            </div><!-- wrapper of the db output to current deals with 6 records -->
                         

              <div class ="showremainder5"><!-- wrapper of the db output to current deals with 5 records -->
                <?php
                fdisplay("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC limit 5");
                ?>
              </div><!-- wrapper of remainder 5 -->
          </div> <!-- to hide all but4 -->   
          <div class ="showremainder4"><!-- wrapper of the db output to current deals with 4 records -->
            <?php
            fdisplay("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC limit 4");
            ?>
          </div><!-- wrapper of the db output to current deals with 4 records -->
              
         
           
        </div><!-- to hide all but3 -->
          <div class ="showremainder3"><!-- wrapper of 3 records -->
            <?php
            fdisplay("SELECT * FROM mains WHERE cat='other' ORDER BY opr DESC limit 3");
            ?>
          </div>
</div><!-- wrapper of the whole  other cats deals -->

<div class="col-sm-12">
<?php
  require'policy.html';
?>
</div>
<div class="col-12" style="background-color: black; color: white;"><!-- bottom navigation -->
  <div class="col-sm-4"><!-- column 1 -->
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">Contact Us</a><br>
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">About</a><br>
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">Careers</a><br>
  </div><!-- column 1 -->
  <div class="col-sm-4"><!-- column 2 -->
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="vendors.php">Sell Here</a><br>
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">Deliveries</a><br>
  </div><!-- column 2 -->
  <div class="col-sm-4"><!-- column 3 -->
    <a style="color: white; font-size: 1.2em; font-style: Aerial;" href="#">Policy</a><br>
  </div><!-- column 3 -->
  <div class="col-sm-12"><!-- bottom line/copyright -->
    <p style="font-size: 1.2em; text-align: center;">
              &#169; Designed By <a style="text-decoration: none;" href="https://www.vidielites.co.ke">Vidielites Technologies</a>
            </p>
  </div><!-- bottom line/copyright -->
</div><!-- bottom navigation -->

<div class="col-sm-12"></div><!-- period -->

</div><!-- this ends the row class -->
</div><!-- hide this content on screen size/ all mobile devices -->
</body>
</html>
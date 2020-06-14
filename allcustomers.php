<?php 
session_start();
if (!isset($_SESSION['post'])) {
  header('location:login.html');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Filters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
            .table-hover tbody tr:hover td {
            background: #ECD4FF;
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
             /* padding: 1em;*/
             align-content: left;
             /*height: 12.5em;*/
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
              width: auto;
              height: 2em;
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

          @media only screen and (min-width: 10px) and (max-width: 99354.999px) {
                      .hide{display: none !important;}
                    }

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  
}
  </style>
  <!-- auto refresh notification --><script>
                         $(document).ready(function()
                         {
                          setInterval(function(){
                            $("#thetables").load("refereshedAllCustomers.php");
                            refresh();
                           }, 1000);
                         });
                        </script><!-- auto refresh notification -->
</head>
<body>
  <div class="hide">
    <?php require'refereshedAllCustomers.php' ?>
  </div>
<div class="container">
  
  <h2>AllCustomers</h2>
    <span><button style="float: left; border-radius: 10px;"><a style="color: black; font-size: 18px;" href="monetor.php">BackToAdmon</a></button>
<form action="findcustomer.php" method="POST" style="float: right;">
  <input style="border-radius: 5px; padding: 5px;" type="text" name="search" placeholder="Search">
  <input style="border-radius: 5px; padding: 5px;" name="submit-search" type="submit" value="Search">
</form>
      </span>
  <div id="thetables"></div>
</div> 

</body>
</html>

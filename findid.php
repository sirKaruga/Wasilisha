<?php 
session_start();
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
                            $("#thetables").load("refereshedAllProducts.php");
                            refresh();
                           }, 1000);
                         });
                        </script><!-- auto refresh notification -->
</head>
<body>
<div class="container">
<?php
$conn = new mysqli("localhost", "root", "", "shope5");

 if (isset($_POST['submit-search'])) {
 	$search = mysqli_real_escape_string($conn, $_POST['search']);
 	$sql = "SELECT * FROM mains WHERE itemname LIKE '%$search%'OR sellername LIKE '%$search%'OR sellercontact LIKE '%$search%'OR idindex LIKE '%$search%'ORDER BY opr DESC";
 	$result = mysqli_query($conn, $sql);
 	$queryResult = mysqli_num_rows($result);

  echo "".$queryResult." Search Results found of '".$search."'</br>";

 	if ($queryResult > 0) {
 		 while ($row = mysqli_fetch_array($result)) {
                  $identity=$row['idindex'];
                  echo "<table id='myTable' class='table table-striped table-hover table-condensed table-bordered'>
                        <thead>
                          <tr>
                          <th>Picture</th>
                          <th>Identity</th>
                          <th>Item</th>
                          <th>Cat</th>
                          <th>Vendor</th>
                          <th>Contact</th>
                          <th>Location</th>
                          <th>Price</th>
                          
                          
                          <th>Delete</th>
                        </tr>
                        </thead>
                      <tbody>
                        <tr>
                          <td>
                          <div class='img'>
                          <a class ='a' href='details.php?id=".$row['opr']."'>
                          <a href='details.php?id=".$row['opr']."'>
                          <img src='images/".$row['itempics']."' alt='image' width='300' height='200'>
                          </a><br>
                          </td>

                          <td>
                          ".$row['idindex']."
                          </td>

                          <td>".$row['itemname']."</td>
                          <td>".$row['cat']."</td>
                          <td>".$row['sellername']."</td>
                          <td>".$row['sellercontact']."</td>
                          <td>".$row['sellerlocation']."</td>
                          <td>".$row['price']."</td>
                          
                          
                          <td><a href='deletegood.php'>Delete</a></td>
                        </tr>
                      </tbody>
                    </table>";
              }


 	}else{
 		echo "there are no results matching your search!";
 	}
 }
?>
</div>
</body>
</html>

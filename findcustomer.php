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
 	$sql = "SELECT * FROM customerlog WHERE names LIKE '%$search%'OR email LIKE '%$search%'OR phone LIKE '%$search%'OR county LIKE '%$search%'ORDER BY opr DESC";
 	$result = mysqli_query($conn, $sql);
 	$queryResult = mysqli_num_rows($result);

  echo "".$queryResult." Search Results found of '".$search."'</br>";

 	if ($queryResult > 0) {
 		 while ($row = mysqli_fetch_array($result)) {
               
                  echo "<table id='myTable' class='table table-striped table-hover table-condensed table-bordered'>
                        <thead>
                          <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>County/Location</th>
                          <th>Password_Reset</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                      <tbody>
                        <tr>
                        

                          <td>
                          ".$row['names']."
                          </td>

                          <td>".$row['email']."</td>
                          <td>".$row['phone']."</td>
                          <td>".$row['county']."</td>
                          
                          <td><a href='erasecustomer.php'>ResetPass</a></td>
                          <td><a href='erasecustomer.php'>Delete</a></td>
                          
                          
                          
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

<?php
include 'toph.php';

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
</div>

</body>
</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.html');
}
$welcome = $_SESSION['seller'];
$myemail = $_SESSION['email'];
$_SESSION['email'] = $myemail;
?>




<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function alertUser(msg){
      alert(msg);
    }
  </script>
	<title>Posting</title>
	<style type="text/css">
		.cont{
			text-align: left;
			border: 1px solid grey;

			background-color: #EFEEEE;
			animation: solid grey;
			box-shadow: 5px 10px 18px black;
			align-self: center;
			
		}
		input{
			width: 70%;
			border-radius: 0.5em;
			height: 2em;
			border: 0.5px solid grey;
			box-shadow: 2px grey;
		}
    select{
      width: 57%;
      border-radius: 0.5em;
      height: 2em;
      border: 0.5px solid grey;
      box-shadow: 2px grey;
    }
    textarea{
      border-radius: 0.8em;
    }

		button{
			background-color: green;
		}

		button li:hover{
			background-color: pink;
		}
		
* {
  box-sizing: border-box;
}

img {
  width: auto;
  height: 100%;
}

.row:after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
  width: 100%;
}

@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
  
}

@media only screen and (min-width: 768px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
  .col-13 {width: 20%;}
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}




}
.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color :#33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
a{
  color: red;
  text-decoration: none;
  font-size: 2em;
}
	</style>

</head>
<body onload ="alertUser('Product Successfully Added to Views')" style="background-color: #E4DAC2">

		<div class="row">
      <div class="col-13">
      </div>
			<div class="col-s-12 col-7 cont">
        
				<form method="post" action="tounfiltered.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000"><br>
					<div>
						Photo:<input type="file" name="image" required><br><br>
					</div>

          <div>
           Select Category: <select name="cat" required>
              <option>--Select--</option>
              <option value="electronics">Electronics</option>
              <option value="smartPhones">Smart Phones</option>
              <option value="computers">Computers</option>
              <option value="tablets">Tablets</option>
              <option value="clothingsAndFash">Clothings and Fashion</option>
              <option value="other">Other</option>
            </select> <br><br>
          </div>
					<div>
						Name:<input type="text" name="name" placeholder=" Name and model of the item" required><br><br>
					</div>
				
					<div>
						Price:<input type="text" name="price" placeholder=" Input price" required><br><br>
					</div>

					<div>
						Description:<textarea name="text" cols="50" rows="9" placeholder=" Brief description of the item"></textarea><br><br>
					</div>
          
					<div>
						<br><input type="submit" name="upload" value="Sell Item"><br>
					</div>

					
				</form>
			</div>
      <div><a style="color: blue; font-size: 18px;" href="vendorsdash.php">. . <u>Back to my account</u></a></div>
		</div>
</body>
</html>
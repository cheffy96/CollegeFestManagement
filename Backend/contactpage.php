<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="fest.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
float:left;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
body{
background-color:grey;
}
.containeri {
    position: relative;
margin-left:"-20px"
}

.topright {
    position: absolute;
    top: 8px;
    right: 16px;
    font-size: 18px;
}

 
img {
width:100%;
    height: auto;
    margin-top: -10px;
    margin-left: -10px;
margin-right: -10px

}



.image {
  display: block;
  width: 100%;
  height: auto;
margin-left:30px;

}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: grey;
margin-left:30px;
}



.text {
  color: white;
  font-size: 14px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);


}



.searchi {
    position: fixed;
    top: 8px;
    right: 16px;
    font-size: 18px;
}

.containeri {
    position: relative;

}










</style>
</head>
<body>
<div class="fixed">
<ul>
  <li><a href="http://localhost/fest.html">Home</a></li>
  <li><a href="http://localhost/newsupdate.php">News</a></li>
 <li><a href="fests.html">Fests</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="http://localhost/contactpage.php">Contact Us</a></li>
  <li><a href="registration.html">Registration</a></li>

 <div class="tooltip"> <li><a href="reviews.html">Reviews</a></li>
  <span class="tooltiptext">Give Your Valuable Reviews</span>

</div>

</ul>
</div>






    



<div style="text-align:center; background-color:grey; margin-top:-26px;
height:96px; margin-left:-10px;margin-right:-10px;">


<h1>Personal Details</h1>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT img,name,phn,post,fest FROM contact ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>

       <td> <img src="<?php echo $row["img"];?>" >
<br>

<?php
  echo "Name:  " .$row["name"]."<br>"."Phone No:  " .$row["phn"]."<br>"."Post:  " .$row["post"]."<br>"."Fest:  " .$row["fest"]."<br>"."<br>"."<br>"."<br>"."<hr>"."<br>"."<br>"."<br>"."<br>";
      
}
}
else {
    echo "0 results";
}

$conn->close();
?>
      
    </div>
  </div>
</div>
</body>
</html>

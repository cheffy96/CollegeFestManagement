<!DOCTYPE html>
<html>
<head>
<title>News</title>

<style>
div.fixed {
    position: fixed;
     width:100%;
height:auto;
margin-top:-10px;
margin-left:-10px;
]
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: auto;
    background-color: #333;
    text-align:left;


}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: green;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:green}

.dropdown:hover .dropdown-content {
    display: block;
}
.tooltip {
    position: relative;
    display: inline-block;
    
}

 .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: white;
    color:black;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
body {
   
background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}
* {
    box-sizing: border-box;
}


/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
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
</div>
</div>s
<h1><center>Fest's Updates</center> </h1>

<div class="timeline">
  <div class="container left">
    <div class="content">
<h1>Technical Fests</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT newsup FROM newsupdate where fest='technical' AND time BETWEEN '2018-04-20 12:03:03' AND '2018-04-29 12:03:03'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>&rarr;        " .  $row["newsup"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
    </div>

 <div class="container right">
    <div class="content">
<h1>Cultural Fests</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);//. KE BAD jo hai vo baatega error code kya hai
} 

$sql = "SELECT newsup FROM newsupdate where fest='cultural'";
$result = $conn->query($sql);//newsup column select ki and is column me jin jin rows me cultural tha vo select

if ($result->num_rows > 0) {//result me agar no of rows 0 se zyada to execute
    // output data of each row
    while($row = $result->fetch_assoc()) {//ye while loop har loop ko execute karne ke liye
        echo "<h3>&rarr;        " .  $row["newsup"];//no of rows apne ap decrement hogi
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
    </div>

  <div class="container left">
    <div class="content">
<h1>Sports Fests</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT newsup FROM newsupdate where fest='sports' AND time BETWEEN '2018-04-20 11:03:03' AND '2018-04-29 11:03:03'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>&rarr;        " .  $row["newsup"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>
</div>

</script>
</body>
</html> 
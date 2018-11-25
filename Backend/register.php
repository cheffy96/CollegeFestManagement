<html>
<style>
body{
background-image:url('register-background.jpg');
}
</style>
<body>
<div style="text-align:center;font-size:20px;">

<h1 style="color:darkGrey;">Thanks For Registering</h1>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "INSERT INTO register (firstname ,lastname ,branch ,year 
,fest 
,event 
,contact )
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[branch]','$_POST[year]','$_POST[fest]','$_POST[event]','$_POST[contact]')";
$conn->query($sql);
   


$conn->close();
?>
</body>
</html>
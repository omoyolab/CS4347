
<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matchingapp";
  
// Create connection
$conn = mysqli_connect($servername,  $username, '', $dbname);
  
// Check connection
if (! $conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php

$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password,"info");

// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>
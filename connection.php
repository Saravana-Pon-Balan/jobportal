
<?php

$servername = "www.db4free.net/phpMyAdmin";
$username = "root_1515";
$password = "Saravana@2003.";

// Create connection
$conn = new mysqli($servername, $username, $password,"info_1515");

// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>
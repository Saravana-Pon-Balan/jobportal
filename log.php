<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$email = $_POST['Email_Id'];
$pass  = $_POST['pswd'];

$sel = "SELECT email,password FROM info.empinfo";
$res = $conn->query($sel);
if($res->num_rows>0){
	while($row = $res->fetch_assoc()){
		if($email == $row['email']){
			if($pass == $row['password']){
				echo "<br><a href = 'index.html'>login  here</a>";
				break;
			}
			else{
				echo "<br>incorrect password";
				break;
			}
		}
		else{
			echo "<br>email id is not exist";
			break;
		}
	$row++;
	}
}

?>
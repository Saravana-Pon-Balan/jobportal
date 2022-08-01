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



$fname = $_POST['First_Name'];
$lname = $_POST['Last_Name'];
$dob = $_POST['dob'];
$email = $_POST['Email_Id'];
$num = $_POST['Mobile_Number'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$pincode = $_POST['Pin_Code'];
$state = $_POST['State'];
$country = $_POST['Country'];

$sclname = $_POST['sclname'];
$address = $_POST['sclplace'];
$mark    = $_POST['sclmark'];

$clgname = $_POST['clgname'];
$address = $_POST['clgplace'];
$course = $_POST['course'];
$mark = $_POST['clgmark'];
$setpass = $_POST['createpass'];
$repass = $_POST['repass'];


if($setpass == $repass){
	$hashpass = password_hash("$setpass", PASSWORD_DEFAULT);
	echo "password hashed";
}


$ins = "INSERT INTO info.empinfo(firstname,lastname,dob,email,phone,gender,address,city,pincode,state,country,password) VALUES('$fname','$lname','$dob','$email','$num','$gender','$address','$city','$pincode','$state','$country','$hashpass')";
if($conn->query($ins) === TRUE){
	echo "<br>inserted successfully<br>";
	$empid = $conn->insert_id;

}
else{
	echo "not inserted";
}

$sclins = "INSERT INTO info.school(sclname,address,mark,empid) VALUES('$sclname','$address','$mark','$empid')";
if($conn->query($sclins) === TRUE){
	echo "successfully inserted in scl<br>";
}
else{
	echo "somthing wrong";
}
$clgins = "INSERT INTO info.college(clgname,course,address,mark,empid) VALUES('$clgname','$address','$course','$mark','$empid')";
if($conn->query($clgins) === TRUE){
	echo "successfully inserted into clg";
}
else{
	echo "somthing wrong";
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="login.html">Click me to go login form</a>
</body>
</html>
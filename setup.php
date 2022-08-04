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



// CREATE DB

/*$db = "CREATE DATABASE info";
if ($conn->query($db) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}*/

//  	CREATE TABLES

/*$tab ="CREATE TABLE info.stuinfo(firstname nvarchar(20),lastname nvarchar(20),dob date(),email nvarchar(30) PRIMARY KEY,phone number(10),gender nvarchar(6),address nvarchar(50),city nvarchar(30),pincode number(6),state nvarchar(20),country nvarchar(5))";
if ($conn->query($tab) === TRUE){
	echo "table created successfully";

}
else{
	echo "not created";
}*/
/*$tab = "CREATE TABLE info.empinfo(empid int AUTO_INCREMENT PRIMARY KEY,firstname NVARCHAR(20),lastname NVARCHAR(20),dob DATE,email NVARCHAR(30),phone INT,gender NVARCHAR(6),address NVARCHAR(50),city NVARCHAR(30),pincode INT,state NVARCHAR(20),country NVARCHAR(5),created_at DATETIME DEFAULT CURRENT_TIMESTAMP,updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($tab) === TRUE){
	echo "table created success";
}

else{
	echo "un success";
}*/
/*$scl = "CREATE TABLE info.school(id int AUTO_INCREMENT PRIMARY KEY,sclname nvarchar(30),address nvarchar(50),mark nvarchar(3),empid int, created_at DATETIME DEFAULT CURRENT_TIMESTAMP,updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,FOREIGN KEY (empid)  REFERENCES  info.empinfo(empid)
)";

if($conn->query($scl) === TRUE){
	echo " successfully";
}
else
{
	echo "unsuccess";
}*/

/*$clg = "CREATE TABLE info.college(id int AUTO_INCREMENT PRIMARY KEY,clgname nvarchar(30),course nvarchar(20),address nvarchar(50),mark nvarchar(3),empid int,FOREIGN KEY (empid)  REFERENCES  info.empinfo(empid), created_at DATETIME DEFAULT CURRENT_TIMESTAMP,updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conn->query($clg) === TRUE){
	echo "success";


}
else{
	echo "unsuccess";
}	*/


 ?>
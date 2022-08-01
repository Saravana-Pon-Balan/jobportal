<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
.error{
    position: absolute;
    margin-top: 5px;
    color: red;
}

  </style>
</head> 

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div id="bac" class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="my_form user row g-3 needs-validation" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myform">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating ">
                                            <input type="text" class="form-control form-control-user" placeholder="First Name" name="First_Name" required> 
                                            <small class="small error">*<span class="small error"><?php //echo $nameErr; ?></span></small>
                                            <label for="pwd" class="small">First Name</label>
                                             
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating ">
                                            <input type="text" class="form-control form-control-user"placeholder="Last Name" name="Last_Name" >
                                            <label for="pwd" class="small">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                     <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="date" class="form-control form-control-user"placeholder="Date Of Birth" name="dob" required>
                                            <label for="pwd" class="small">Date Of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="email" class="form-control form-control-user"placeholder="Email" name="Email_Id" required>
                                            <label for="pwd" class="small">Email Id</label>
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user"placeholder="Mobile_Number" name="Mobile_Number" id="mblnum" maxlength="10" required pattern="[6789][0-9]*">
                                            <label for="pwd" class="small">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <div class="form-floating">
                                                <select class="form-select form-control form-control-user " id="floatingSelect" name="Gender" required>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                                </select>
                                                <label for="Gender" class="small">Gender</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user"placeholder="Address" name="Address" required>
                                            <label for="pwd" class="small">Address</label>
                                        </div>
                                    </div>
                                   <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user"placeholder="City Name" name="City" required>
                                            <label for="pwd" class="small">City Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user"placeholder="Pin_Code" name="Pin_Code" maxlength="6" pattern="[0-9]*" required>
                                            <label for="pwd" class="small">Pin Code</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user"placeholder="State Name" name="State" required>
                                            <label for="pwd" class="small">State Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" value="India" readonly name="Country">
                                            <label for="pwd" class="small">Country Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="School Name" name="sclname" required>
                                            <label for="pwd" class="small">School Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="School Address" name="sclplace" required>
                                            <label for="pwd" class="small">School Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="Your Percentage" name="sclmark" required>
                                            <label for="pwd" class="small">Your Percentage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="College Name" name="clgname" required>
                                            <label for="pwd" class="small">College Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="College Address" name="clgplace" required>
                                            <label for="pwd" class="small">College Address</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="Course Name" name="course" required>
                                            <label for="pwd" class="small">Course Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="text" class="form-control form-control-user" placeholder="Your Percentage" name="clgmark" required>
                                            <label for="pwd" class="small">Your Percentage</label>
                                        </div>
                                    </div>
                                </div> 


                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="password" id="psw" class="form-control form-control-user"placeholder="Enter password" name="createpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                            <label for="pwd" class="small">Create Password</label>
                                            
                                        </div>
                                    </div>
                                     <div class="col-sm-6 mb-3 mb-sm-0">

                                        <div class="form-floating mt-3 mb-3">
                                            <input type="password" id="psw" class="form-control form-control-user"placeholder="Repeat password" name="repass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"> 
                                            <label for="pwd" class="small">Repeat Password</label>
                                        </div>
                                    </div>
                                    <div id="message">
                                                <h6>NOTE:<h6> <h6>Password must contain the following:</h6>
                                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                                <p id="number" class="invalid">A <b>number</b></p>
                                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="REGISTER" class="btn btn-primary btn-user btn-block">
                                    
                                
                                <hr style="background-color: white;">
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i>Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr style="background-color: white;">
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    

</body>

</html>



<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
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



if ($_SERVER["REQUEST_METHOD"] == "POST") {

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$nameErr = $dobErr = $emailErr = $numErr = $genderErr = $addressErr = $cityErr = $pincodeErr  = $stateErr = $sclnameErr = "";
$scladdErr =$sclperErr = $clgnameErr = $clgaddErr = $courseErr = $clgperErr = $cpassErr = $repassErr = "" ;

  if (empty($_POST['First_Name'])) {
   $nameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["First_Name"]);
  }
  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  
  if (empty($_POST["Email_Id"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email_Id"]);
  }
    
  if (empty($_POST["Mobile_Number"])) {
    $numErr = "Mobile Number is required";
  } else {
    $num = test_input($_POST["Mobile_Number"]);
  }

  if (empty($_POST["Gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["Gender"]);
  }

  if (empty($_POST["Address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["Address"]);
  }
  if (empty($_POST["City"])) {
    $cityErr = "City is required";
  } else {
    $city = test_input($_POST["City"]);
  }
  if (empty($_POST["Pin_Code"])) {
    $pincodeErr = "pincode is required";
  } else {
    $pincode = test_input($_POST["Pin_Code"]);
  }
  if (empty($_POST["State"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["State"]);
  }
  if (empty($_POST["sclname"])) {
    $sclnameErr = "school name is required";
  } else {
    $sclname = test_input($_POST["sclname"]);
  }
  if (empty($_POST["sclplace"])) {
    $scladdErr = "school address is required";
  } else {
    $scladdress = test_input($_POST["sclplace"]);
  }

  if (empty($_POST["sclmark"])) {
    $sclperErr = "Your school percentage is required";
  } else {
    $sclmark = test_input($_POST["sclmark"]);
  }
  if (empty($_POST["clgname"])) {
    $clgnameErr = "college name is required";
  } else {
    $clgname = test_input($_POST["clgname"]);
  }
  if (empty($_POST["clgplace"])) {
    $clgaddErr = "college address is required";
  } else {
    $clgaddress = test_input($_POST["clgplace"]);
  }
  if (empty($_POST["course"])) {
    $courseErr = "course name is required";
  } else {
    $course = test_input($_POST["course"]);
  }
  if (empty($_POST["clgmark"])) {
    $clgperErr = "Your college percentage is required";
  } else {
    $clgmark = test_input($_POST["clgmark"]);
  }
  if (empty($_POST["createpass"])) {
    $cpassErr = "password is required";
  } else {
    $setpass = test_input($_POST["createpass"]);
  }
  if (empty($_POST["repass"])) {
    $repassErr = "conform password  is required";
  } else {
    $repass = test_input($_POST["repass"]);
  }
  $lname = test_input($_POST['Last_Name']);
  $country = test_input($_POST['Country']);

}

/*$fname = $_POST['First_Name'];
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
$scladdress = $_POST['sclplace'];
$sclmark    = $_POST['sclmark'];

$clgname = $_POST['clgname'];
$clgaddress = $_POST['clgplace'];
$course = $_POST['course'];
$clgmark = $_POST['clgmark'];

$setpass = $_POST['createpass'];
$repass = $_POST['repass'];*/


if($setpass == $repass){
    $hashpass = md5($setpass);
    echo "password hashed";
}
else{
    echo "password doesn't match";
}

if($fname!=null&&$dob!=null&&$email!=null&&$num!=null&&$gender!=null&&$address!=null&&$city!=null&&$pincode!=null&&$state!=null&&$country!=null&&$hashpass!=null&&$sclname!=null&&$scladdress!=null&&$sclmark!=null&&$clgname!=null&&$clgaddress!=null&&$course!=null&&$clgmark!=null){
$ins = "INSERT INTO info.empinfo(firstname,lastname,dob,email,phone,gender,address,city,pincode,state,country,password) VALUES('$fname','$lname','$dob','$email','$num','$gender','$address','$city','$pincode','$state','$country','$hashpass')";
if($conn->query($ins) === TRUE){
    echo "<br>inserted successfully<br>";
    $empid = $conn->insert_id;

}
else{
    echo "not inserted";
}

$sclins = "INSERT INTO info.school(sclname,address,mark,empid) VALUES('$sclname','$scladdress','$sclmark','$empid')";
if($conn->query($sclins) === TRUE){
    echo "successfully inserted in scl<br>";
}
else{
    echo "somthing wrong";
}
$clgins = "INSERT INTO info.college(clgname,course,address,mark,empid) VALUES('$clgname','$clgaddress','$course','$clgmark','$empid')";
if($conn->query($clgins) === TRUE){
    echo "successfully inserted into clg";
}
else{
    echo "somthing wrong";
}


echo "<a href='login.html'>Click me to go login form</a>";
}
$conn->close();

}
?>


<!DOCTYPE html>
<?php
if(!isset($_SESSION['email']))
{
  session_start();
 
}
 if(isset($_SESSION['is_loggedin'])){
    echo '<script>window.location.replace("front.php")</script>' ;
  }  

error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['submit'])){
include "connection.php";
$email = $_POST['Email_Id'];
$pass  = $_POST['pswd'];
$pswd = md5($pass);



$sel = "SELECT * FROM empinfo WHERE email='$email' AND password ='$pswd'";
$res = $conn->query($sel);
if($res->num_rows === 1){
    $row = $res->fetch_assoc();
    if($row['email'] === $email && $row['password'] === $pswd){
        // setting COKKIES .......
        setcookie('email', $email, time() + (86400 * 30), "/");
        $_SESSION['email'] = $email;
        $_SESSION['is_loggedin'] =1;
        echo "<script>alert('logging success');
        window.location.replace('front.php');</script>";
    }
    else{
        echo " incorrect password";
    }
}
else{
    echo "<script>alert('incorrect username or password');</script>";
}


$conn->close();
}
?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <div class="form-group">
                                            

                                            <div class="form-floating mt-3 mb-3">
                                                <input type="text" class="form-control form-control-user"placeholder="Email" name="Email_Id" required>
                                                <label for="pwd" class="small">Email Id</label>
                                            </div>
                                            
                                            <div class="form-floating mt-3 mb-3">
                                                <input type="password" class="form-control form-control-user"placeholder="Password" name="pswd" required>
                                                <label for="pwd" class="small">Password</label>
                                            </div>
                                        </div>
                                        

                                        <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
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

</body>

</html>

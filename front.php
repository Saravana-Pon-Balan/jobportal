<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Color Utilities</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

           
       

           

           
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                    include "connection.php";

                                    $lname = ""; 
                                    $fname = "SELECT firstname FROM empinfo WHERE empid = 1";
                                    $lname = "SELECT lastname FROM empinfo WHERE empid = 1";
                                    echo $fname." ".$lname;
                                ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
<div class="body">
        
    <center><h2>Employee Details</h2></center>
    
</div>

                
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

<?php
        $empid = "SELECT empid FROM empinfo WHERE empid = 1";
        $fname = "SELECT firstname FROM empinfo WHERE empid = 1";
        $lname = "SELECT lastname FROM empinfo WHERE empid = 1";
        $dob = "SELECT dob FROM empinfo WHERE empid = 1";
        $email = "SELECT email FROM empinfo WHERE empid = 1";
        $num = "SELECT phone FROM empinfo WHERE empid = 1";
        $gender = "SELECT gender FROM empinfo WHERE empid = 1";
        $address = "SELECT address FROM empinfo WHERE empid = 1";
        $city = "SELECT city FROM empinfo WHERE empid = 1";
        $pincode = "SELECT pincode FROM empinfo WHERE empid = 1";
        $state = "SELECT state FROM empinfo WHERE empid = 1";
        $country = "SELECT country FROM empinfo WHERE empid = 1";
        $created_at = "SELECT created_at FROM empinfo WHERE empid = 1";
        $updated_at = "SELECT updated_at FROM empinfo WHERE empid = 1";
        $password = "SELECT password FROM empinfo WHERE empid = 1";
        $sclname = "SELECT sclname FROM school WHERE id = 1";
        $scladd = "SELECT address FROM school WHERE id = 1";
        $sclmark = "SELECT mark FROM school WHERE id = 1";
        $clgname = "SELECT clgname FROM college WHERE id = 1";
        $course = "SELECT course FROM college WHERE id = 1";
        $clgadd = "SELECT address FROM college WHERE id = 1";
        $clgmark = "SELECT mark FROM college WHERE id = 1";

        echo $empid."<br>";
        echo $fname."<br>";
        echo $lname."<br>";
        echo $dob."<br>";
        echo $email."<br>";
        echo $num."<br>";
        echo $gender."<br>";
        echo $address."<br>";
        echo $city."<br>";
        echo $pincode."<br>";
        echo $state."<br>";
        echo $country."<br>";
        echo $created_at."<br>";
        echo $updated_at."<br>";
        echo $password."<br>";
        echo $sclname."<br>";
        echo $scladd."<br>";
        echo $sclmark."<br>";
        echo $clgname."<br>";
        echo $course."<br>";
        echo $clgadd."<br>";
        echo $clgmark."<br>";



      ?>
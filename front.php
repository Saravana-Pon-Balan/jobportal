<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
  include "connection.php";
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
                                  

                                    $lname = ""; 
                                    $fname = "SELECT firstname,lastname FROM empinfo WHERE empid = 1";
                                    $name = $conn->query($fname);
                                    $row = $name->fetch_assoc();
                                    echo $row['firstname']." ".$row['lastname'];
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
<div style="text-align: center;">
        
    <center><h2>Employee Details</h2></center>
   <?php
        $emp = $conn->query("SELECT * FROM empinfo WHERE empid = 1");
    
        $school = $conn->query("SELECT * FROM school WHERE id = 1");
        
        $college = $conn->query("SELECT * FROM college WHERE id = 1");
      
        echo "<hr><h3>Your Personal Informations</h3><hr>";

        $row = $emp->fetch_assoc();
     
        echo "Your ID is : ".$row['empid']."<br>";
        echo "Your Name is :".$row['firstname']." ".$row['lastname']."<br>";
        echo "Your Date Of Birth is : ".$row['dob']."<br>";
        echo "Your Email Id is : ".$row['email']."<br>";
        echo "Your Mobile Number is : ".$row['phone']."<br>";
        echo "Your Gender is : ".$row['gender']."<br>";
        echo "Your Address is : ".$row['address']."<br>";
        echo "Your City is : ".$row['city']."<br>";
        echo "Your Pin Code is : ".$row['pincode']."<br>";
        echo "Your State is : ".$row['state']."<br>";
        echo "Your Country is : ".$row['country']."<br>";
        echo "It is Created At : ".$row['created_at']."<br>";
        echo "It is updated At: ".$row['updated_at']."<br><br>";
        

        echo "<hr><h3>Your School Informations</h3><hr>";
        
        $row = $school->fetch_assoc();
        echo "Your Schoool Name is : ".$row['sclname']."<br>";
        echo "Your School Address is : ".$row['address']."<br>";
        echo "Your School Percentage is : ".$row['mark']."<br>";


        echo "<hr><h3>Your College Informations</h3><hr>";

        $row = $college->fetch_assoc();
        echo "Your College Name is : ".$row['clgname']."<br>";
        echo "Your College Address is : ".$row['address']."<br>";
        echo "Your Course Name is : ".$row['course']."<br>";
        echo "Your College Percentage is : ".$row['mark']."<br>";





      ?>
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
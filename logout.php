<?php
 if(!isset($_SESSION['is_loggedin'])){
 	session_start();


}


	unset($_SESSION['is_loggedin']);
	unset($_SESSION['email']);


   session_destroy();
   if (isset($_COOKIE['email'])) {
    unset($_COOKIE['email']); 
    setcookie('email', null, -1, '/'); 

}
    echo '<script>window.location.replace("index.php")</script>' ;



?>
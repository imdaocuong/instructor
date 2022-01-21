<?php
session_start();
define('SITEURL', 'http://localhost:9090/e-Project/instructor/');
?>

<?php
    // xoá phiên làm việc
    // remove all session variables
    session_destroy(); // unset $_SESSION['username'] = $username;
    
    session_unset(); 
    // destroy the session   
    
    header("Location:".SITEURL."admin/authen/admin_login.php");
?>
<?php session_start();?>
<?php  
    // authorization - access control
    // check whether the user is logged or not
    if(!isset($_SESSION['username'])){
        $_SESSION['no_login_message'] = "<div style='color:red;'>Please login to access Admin Panel</div>"; 
        //redirect to login page
        header('location: ../admin/login.php');
    }
?>
<?php session_start();?>
<?php  
    // authorization - access control
    // check whether the user is logged or not
    if(isset($_SESSION['username']) == false){
        //redirect to login page
        $_SESSION['no_login_message'] = "*Please login to access Admin Panel"; 
        header('location:'.SITEURL.'admin/authen/admin_login.php');
    }
?>
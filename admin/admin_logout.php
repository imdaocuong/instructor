<?php session_start();?>

<?php
    // xoá phiên làm việc
    // remove all session variables
    session_unset(); 
    // destroy the session
    session_destroy(); // unset $_SESSION['username'] = $username;
    // xoá cookie tại client
    setcookie ("PHPSESSID", "", time() - 864000, '/');
    // echo '<script type="text/javascript">
    //             document.cookie = "PHPSESSID=;Path=/;expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    //     </script>';
    
    header("Location: login.php");
?>
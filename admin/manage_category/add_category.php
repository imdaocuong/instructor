<?php
    include('../../database/config.php');
    include('../partials/login_check.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Add-admin</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../css/admin.css" rel="stylesheet">

    </head>
    <body id="page-top">
        <?php include('../partials/message_login.php');?>
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include('../partials/menu.php');?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include('../partials/navbar.php'); ?>

                    <!-- code database bắt đầu từ đây  -->
                    <div class="container-fluid d-flex justify-content-center">
                        <form method="POST">
                            <?php
                                if(isset($erros['resdes'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['resdes'];
                                        unset($erros['resdes']);
                                    echo "</div>";
                                }
                                if(isset($erros['exists'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['exists'];
                                        unset($erros['exists']);
                                    echo "</div>";
                                }
                            ?>
                            <h2 class="form-title">Create account admin</h2>
                            <div class="form-group display-6">
                                <input type="text" class="form-control form-control-sm py-4 px-3 mb-1" name="fullname" style="width: 100%;" placeholder="Full Name" value="<?php echo (!empty($fullname)?$fullname:""); ?>" />
                                <?php 
                                    if(isset($erros['fullname'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['fullname'];
                                        unset ($erros['fullname']);
                                    echo "</div>";
                                    } 
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm py-4 px-3 mb-1" name="username" style="width: 100%;"  placeholder="User Name" value="<?php echo (!empty($username)?$username:""); ?>" />
                                <?php 
                                    if(isset($erros['username'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['username'];
                                        unset ($erros['username']);
                                    echo "</div>";
                                    } 
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-sm py-4 px-3 mb-1" name="password" style="width: 100%;" placeholder="Password" value="<?php echo (!empty($password)?$password:""); ?>" />
                                <?php 
                                    if(isset($erros['password'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['password'];
                                        unset ($erros['password']);
                                    echo "</div>";
                                    } 
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-sm py-4 px-3 mb-1" name="re_password" style="width: 100%;" placeholder="Repeat your password" value="<?php echo (!empty($re_password)?$re_password:""); ?>" />
                                <?php 
                                    if(isset($erros['re_password'])){
                                    echo "<div class='alert alert-danger text-danger'>";
                                        echo $erros['re_password'];
                                        unset ($erros['re_password']);
                                    echo "</div>";
                                    } 
                                ?>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button  type="submit" name="submit" class="btn btn-primary mx-2">Add admin</button>
                                <a href="<?php echo SITEURL; ?>admin/manage_admin/manage_admin.php" class="btn btn-secondary">Go back</a>
                                </div>
                        </form>
                    </div>
                    <!-- kết thúc code ở đây  -->
                        
                    </div>
                    <!-- End of Main Content -->
                    <?php include('../partials/footer.php') ;?>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
            
        <?php include('../partials/message_logout.php');?>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.nav_manage_category').addClass('active');
                $('#collapseUtilities').addClass('show');
                $('.nav_dashboard').removeClass('active');
            });
        </script>
      

    </body>
</html>

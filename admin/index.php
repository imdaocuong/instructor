<?php
    include('../database/config.php');
    include('./partials/login_check.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="./css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">

    </head>
    <body id="page-top">
        <?php include('partials/message_login.php');?>
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include('partials/menu.php');?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include('partials/navbar.php'); ?>
                    <?php include('partials/report.php'); ?>
                    <!-- code database bắt đầu từ đây  -->
                    <div class="container-fluid">

                    </div>
                    
                    <!-- kết thúc code ở đây  -->
                        
                    </div>
                    <!-- End of Main Content -->
                    <?php include('partials/footer.php') ;?>
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
            
        <?php include('partials/message_logout.php');?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

        <script>
            $(document).ready(function(){
                var showMes = $('.cancel_btn').click(function(){
                    $('.confirm_form').hide()
                });
                setTimeout(showMes, 5000);
            });
        </script>


    </body>

</html>

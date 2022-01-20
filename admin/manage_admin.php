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

                    <!-- code database bắt đầu từ đây  -->
                    <div class="container-fluid">
                        <h1>Manage Admins</h1>
                        <!-- button to add admin  -->
                        <a href="../admin/add_admin.php" class="btn btn-primary mb-3">Add admin</a>
                        <?php
                            if(isset($_SESSION['add_admin'])){
                                echo "<div class='alert alert-success'>";
                                    echo $_SESSION['add_admin'];
                                    unset($_SESSION['add_admin']);
                                echo "</div>";
                            }
                        ?>

                        <table class="table table-striped table-hover shadow-lg rounded-top rounded-3">
                            <thead class="thead-dark rounded-top rounded-3">
                                <tr >
                                    <th>STT</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <?php
                                // 1. kết nối
                                $conn = config::getConnection();
                                // 2. lấy giá trị từ database
                                $sql = "select fullname,username from admin";
                                $res = mysqli_query($conn, $sql);

                                // 3. check xem đã lấy đc giá trị hay chưa?
                                if($res==true){
                                    // đếm số hàng dữ liệu đã lấy được trong database hay chưa?
                                    $count = mysqli_num_rows($res);

                                    // kiểm tra số hàng
                                    if($count > 0){
                                        // đã lấy được dữ liệu từ database
                                        // tạo vòng lặp để duyệt từng hàng
                                        $stt = 0;
                                        while($rows=mysqli_fetch_assoc($res)){
                                            $stt++;
                                            // gán dữ liệu vào biến
                                            $fullname = $rows['fullname'];
                                            $username = $rows['username'];
                                            // hiển thị dữ liệu ra bảng
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $stt ?></td>
                                                    <td><?php echo $fullname ?></td>
                                                    <td><?php echo $username ?></td>
                                                    <td>
                                                        <a href="" class="btn btn-success">Update Admin</a>
                                                        <a href="" class="btn btn-danger">Delete Admin</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php
                                        }
                                    } else {
                                        // ko có dữ liệu
                                    }
                                }
                            ?>
                        </table>
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

        <script type="text/javascript">
        $(document).ready(function(){
            $('.nav_manage_admin').addClass('active');
            $('#collapseUtilities').addClass('show');
            $('.nav_dashboard').removeClass('active');
        });
    </script>


    </body>

</html>

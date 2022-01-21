<?php 
    include('../../database/config.php');
    session_start();
?>
<?php
    // 1. lấy id để xoá
    $id = $_GET['id'];
    // 2. tạo kết nối
    $conn = config::getConnection();
    // 3. khởi tạo câu lệnh SQL để xoá 
    $sql = "DELETE FROM admin WHERE id=?";
    $st = $conn->prepare($sql);
    $st->bind_param('i',$id);
    // 4. Check đã xoá thành công hay chưa?
    if($st->execute()){
        // xoá thành công
        $_SESSION['delete_admin'] = "<div>Xoá thành công.</div>";
        // echo "admindeted";
        header('location:'.SITEURL.'admin/manage_admin/manage_admin.php');
    } else {
        // xoá thất bại
        $_SESSION['delete_admin'] = "<div>Xoá thất bại.</div>";
        // echo "fail to admindeted";
        header('location:'.SITEURL.'admin/manage_admin/manage_admin.php');
    }
    $st->close();
    config::closeConnection($conn);
    mysqli_close($conn);
    unset($conn);
?>
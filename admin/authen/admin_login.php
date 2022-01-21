<?php include('../../database/config.php')?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

    <?php 
        $erros = [];
        // submit xử lý login admin
        if(isset($_POST['loginadmin'])){
            // 1. get data from login form: username and password
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));

            // 2. check username and password có tồn tại
            if(empty($password)){
                $erros['password'] = "*Mật khẩu không được để trống";
            }
            if(empty($username)){
                $erros['username'] = "*Tài khoản không được để trống";
            }
            if(count($erros) == 0){
                $conn = config::getConnection();
                $sql = "select id,fullname,username,password from admin where username='$username' and password="."'".md5($password)."'";
                //  3. Execute the query
                $res = mysqli_query($conn, $sql);

                // 4. Count rows to check whether the user exists or not
                $count = mysqli_num_rows($res);

                if($count == 1){
                    $rows = mysqli_fetch_assoc($res);
                    $id = $rows['id'];
                    // user available and login success
                    $_SESSION['username'] = $username; // to check whether the user is logged in or not and logout will unset it
                    // redirect to home page/dashboard
                    $_SESSION['login'] = "Đăng nhập thành công";
                    header('Location:'.SITEURL.'admin/index.php?id='."$id");
                }else{
                    // user not exists
                    $erros['login'] = "*Tài khoản hoặc mật khẩu không đúng";
                }
        
                // 5 close
                mysqli_close($conn);
                unset($conn);
            }
        }
    ?>
    <div class="admin_container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <!-- form đăng nhập  -->
                <form method="post" class="sign-in-form">
                    <?php
                        echo "<div style='color: red; font-weight: bold; font-size: 14px'>";
                        if(isset($erros['login'])){
                            echo $erros['login'];
                            unset($erros['login']);
                        } 
                        echo "</div>";
                    ?>
                    <?php
                        echo "<div style='color: red; font-weight: bold; font-size: 14px'>";
                        if(isset($_SESSION['no_login_message'])){
                            echo $_SESSION['no_login_message'];
                            unset($_SESSION['no_login_message']);
                        } 
                        echo "</div>";
                    ?>
                    <h2 class="title">Admin</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username" value="<?php echo (!empty($username)?$username:""); ?>" />
                    </div>
                    <?php 
                        echo "<div style='color: red; font-weight: bold; font-size: 14px;'>";
                            if(isset($erros['username'])){
                                echo $erros['username'];
                            } 
                        echo "</div>";
                    ?>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" value="<?php echo (!empty($password)?$password:""); ?>"/>
                    </div>
                    <?php 
                        echo "<div style='color: red; font-weight: bold; font-size: 14px;'>";
                            if(isset($erros['password'])){
                                echo $erros['password'];
                            } 
                        echo "</div>";
                    ?>
                    <button type="submit" name="loginadmin" class="btn solid">Đăng nhập</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Instructor</h3>
                    <p>
                       <i>"Dao có mài mới sắc, người có học mới nên. Dốt đến đâu học lâu cũng biết."</i> 
                    </p>
                </div>
                <img src="../img/log.svg" class="image"/>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
</body>
</html>
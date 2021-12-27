<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php include('./admin/partials/navbar.php');?>
    <div class="home_page_banner" id="home_page">
        <div class="content">
            <span>Welcome Instructor</span>
            <h3>Start your Ali Human </h3>
            <h3>Revolution today 😋</h3>
            <p>with private practice in FPT Aptech</p>
            <div class="home_page_click">
                <div class="icon_click">
                    <i class="fab fa-telegram-plane"></i>
                </div>
                <a data-text="CLICK TO PLAY" href="#">CLICK TO PLAY</a>
            </div>
        </div>
        <div class="image">
            <video loop muted autoplay src="../instructor/image/background.mp4"></video>
        </div>         
    </div>


    <?php include('./admin/partials/footer.php'); ?>
    <?php include('./admin/partials/click_scroll_top.php'); ?>
    <script type="text/javascript" src="../instructor/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../instructor/js/main.js"></script>
</body>
</html>
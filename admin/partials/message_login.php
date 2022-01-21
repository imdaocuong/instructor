<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
   <?php 
        if(isset($_SESSION['login']))
        {
   ?>
        <div class="confirm_container">
            <div class="confirm_form">
                <strong><i class="fas fa-check-circle"></i></strong>
                <?php
                    echo "<h4 style='color: #5cb85c; font-weight: bold;margin:25px 0'>";
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    echo "</h4>";
                ?>
                <form>
                    <input class="cancel_btn btn btn-secondary" type="submit" value="Cancel">
                </form>
            </div>
        </div>
    <?php
        }
    ?>
    
</body>
</html>
<?php 
    // define('HOST', 'localhost');
    // define('DATABASE', 'instructor');
    // define('USERNAME', 'root'); //nhớ sửa lại khi public lên hệ thống
    // define('PASSWORD', '');
    define('SITEURL', 'http://localhost:9090/e-Project/instructor/');
    
    class config{
        private const SERVERNAME = '127.0.0.1:3306';
        private const USERNAME = 'root';
        private const PASSWORD = '';
        private const DATABASE = 'instructor';
    
        static function getConnection()
        {
            $connection = mysqli_connect(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DATABASE);
            return $connection;
        }
        static function closeConnection($con)
        {
            if($con !=null){
                $con->close();
            }
        }
    }
?>
<?php 
// require_once ('config.php');

// // insert, update, delete, select
// // SQL: insert, update, delete
// function execute($sql){
//     // open connection
//     $conn = mysqli_connect(HOST, DATABASE, USERNAME ,PASSWORD);
//     mysqli_set_charset($conn, 'utf8');

//     // query
//     mysqli_query($conn, $sql);
//     //close connection
//     mysqli_close($conn);
// }

// // SQL: select -> lấy dữ liệu đầu ra.
// function executeResult($sql){
//     $data = [];

//     // open connection 
//     $conn = mysqli_connect(HOST, DATABASE, USERNAME ,PASSWORD);
//     mysqli_set_charset($conn, 'utf8');
//     //querry
//     $resultset = mysqli_query($conn, $sql);
//     while (($row = mysqli_fetch_array($resultset, 1)) != null) {
//         $data [] = $row;
//     }

//     // close
//     mysqli_close($conn);
    
//     return $data;
// }
?>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['name'])) {
    header('Location: ../dangnhap.php');
}
$name = $_SESSION['name'];
$id = $_SESSION['id'];
require_once '../Chucnang/ketnoiSQL.php';

if (isset($_POST['passCu'])) {
    $passmoi = $_POST['passMoi'];
    $passcu = $_POST['passCu'];

    $sql1 = "SELECT usersPass FROM users Where usersID = $id";
    $query1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($query1);


    $sql2 = "SELECT MD5('.$passcu.') as mdCu, MD5('.$passmoi.') as mdMoi";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);

    if ($row2['mdCu'] != $row1['usersPass']) {
        echo 'Mật khẩu nhập không đúng!';
    }else{
        $conn->query("UPDATE `users` set `usersPass` = '$passMoi' WHERE `usersID` = '$id'");
    }
}

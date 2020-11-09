<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST["btn_dangnhap"])) {
    //Lấy dữ liệu nhập vào
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    //kết nối tới mySQL
    require_once "ketnoiSQL.php";

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$email || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
    } else {
        $sql = "SELECT * FROM users WHERE  usersEmail='$email'";
        $query = mysqli_query($conn,$sql);
        //kiểm tra email
        if (mysqli_num_rows($query) == 0) {
            echo "Tài khoản này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        } else {
            //Lấy mật khẩu trong database ra
            $row = mysqli_fetch_assoc($query);
            $sql2 = "SELECT MD5('.$password.') as md5";
            $query2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($query2);
            if ($row['usersPass'] == $row2['md5']) {
                $status = $row['usersStatus'];
                if($status == 1){
                    $name = $row['usersName'];
                    $_SESSION['name'] = $name;
                    $id = $row['usersID'];
                    $_SESSION['id'] = $id;
                    $level = $row['usersLevel'];
                    if ($level == 1) {
                        header('Location: ../Admin/index.php');
                    } elseif ($level == 2) {
                        header('Location: ../Manager/index.php');
                    } else {
                        echo "Bạn không có quyền hạn đăng nhập vào trang web này! <br> Vui lòng liên hệ với quản lý để được xem xét. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    }
                }else{
                    echo "Tài khoản chưa được kích hoạt! <a href='javascript: history.go(-1)'>Trở lại</a>";
                }  
            } else {
                echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            }
        }
    }
}
?>
<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST["btn_xacnhan"])) {
    //Lấy dữ liệu nhập vào
    $mail = $_SESSION['emaildk'];
    //kết nối tới mySQL
	require('ketnoiSQL.php');
	
    $sql = "SELECT usersEmail, usersPass, usersName, usersLevel FROM users WHERE  usersEmail='$mail' ";
    $query = mysqli_query($conn, $sql);

    //kiểm tra email
    if (mysqli_num_rows($query) == 0) {
        echo "Tài khoản này không tồn tại. Vui lòng kiểm tra lại.";
    } else {
        $sql = "UPDATE users SET usersStatus = 1 WHERE usersEmail = '$mail'";
        mysqli_query($conn, $sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Send Mail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css” />
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method='POST'>
					<span class="login100-form-title">
                        Kích hoạt tài khoản thành công!
                    </span>
                    <div class="text-center p-t-136">
						<a class="txt2" href="../dangnhap.php">
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
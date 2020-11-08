<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Create account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">>
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
			<div class="wrap-login100" style="padding-top: 100px;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Your name is required">
						<input class="input100" type="text" name="txtUser" placeholder="Your Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="txtEmail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="txtPass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="txtPass2" placeholder="Enter the password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php
					if (isset($_POST["btn_dangky"])) {
						//kết nối tới mySQL
						require('ketnoiSQL.php');

						//lấy thông tin từ các form bằng phương thức POST
						$password2 = $_POST["txtPass2"];
						$password1 = $_POST["txtPass"];
						$name = $_POST["txtUser"];
						$email = $_POST["txtEmail"];

						//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
						if ($password1 != $password2) {
							echo "Mật khẩu không khớp";
						} else {
							$sql = "SELECT usersEmail, usersPass, usersName, usersLevel FROM users WHERE  usersEmail='$email' ";
							$query = mysqli_query($conn,$sql);

							//kiểm tra email
							if (mysqli_num_rows($query) == 0) {
								$sql2 = "SELECT MD5('.$password1.') as md5";
            					$query2 = mysqli_query($conn,$sql2);
            					$row2 = mysqli_fetch_assoc($query2);
								$md5Pass = $row2['md5'];
								$sql2 = "INSERT INTO users( usersName, usersEmail, usersPass) 
										VALUES (N'$name', '$email', '$md5Pass')";

								// thực thi câu $sql với biến conn lấy từ file connection.php
								if (mysqli_query($conn,$sql2)) {
									$_SESSION['namedk'] = $_POST["txtUser"];
									$_SESSION['emaildk'] = $_POST["txtEmail"];
									header('Location: sendmail.php');
								} else {
									echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
								} 
							}else {
								echo "Email này đã đăng ký tài khoản.<br/> Vui lòng sử dụng Email khác!";
							}
						}
					}
					?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btn_dangky">
							Sign Up
						</button>
					</div>

					<div class="container-login100-form-btn">
						<a class="txt2" href="../dangnhap.php">
							Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="../js/main.js"></script>

</body>

</html>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['name'])) {
    header('Location: ../dangnhap.php');
}
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
</head>

<body>
	<div class="col-md-12 well">
		<hr style="border-top:1px dotted #ccc;" />
		<form method="POST">
			<div class="form-inline">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Tên Người Dùng</th>
						<th>Email Đăng Ký</th>
						<th>Mật Khẩu</th>
						<th>Chức Vụ</th>				
					</tr>
					<tr>
						<th><input type="text" id="name" class="form-control" style="width: 100%"/></th>
						<th><input type="text" id="email" class="form-control" style="width: 100%"/></th>
						<th><input type="text" id="matkhau" class="form-control" style="width: 100%"/></th>
						<th><input type="text" id="chucvu" class="form-control" style="width: 100%"/></th>
					</tr>
				</table>
			</div>
			<br />
			<center><button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>Thêm vào</button><button type="button" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa thông tin</button></center>
		</form>
		<br />
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="15%" style="text-align: center">Tên Người Dùng</th>
					<th width="25%" style="text-align: center">Email Đăng Ký</th>
					<th width="25%" style="text-align: center">Mật Khẩu</th>
					<th width="10%" style="text-align: center">Trạng Thái</th>
					<th width="10%" style="text-align: center">Chức Vụ</th>
				</tr>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
</body>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/script.js"></script>
</html>
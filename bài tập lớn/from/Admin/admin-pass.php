<?php
	require_once '../Chucnang/ketnoiSQL.php';
	
	if(ISSET($_POST['usersID'])){
		$id = $_POST['usersID'];
		$name = $_POST['nameNew'];
		$email = $_POST['emailNew'];
		$matkhau = $_POST['mkNew'];

		$sql2 = "SELECT MD5('.$matkhau.') as md5";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_assoc($query2);

		if($row2['md5'] != $matkhau){
			$matkhau = $row2['md5'];
		}

		if($_POST['cvNew'] == 'Hội Viên') {
			$chucvu = 3;
		}else{
			$chucvu = 2;
		}
		
		$conn->query("UPDATE `users` set `usersPass` = '$matkhau' WHERE `usersID` =1");
	}
?>
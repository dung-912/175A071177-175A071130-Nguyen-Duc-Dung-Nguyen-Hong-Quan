<?php
	require_once '../Chucnang/ketnoiSQL.php';
		$name = $_POST['nameNew'];
        $email = $_POST['emailNew'];
        $idd = $_POST['idu'];
		$sql2 = "SELECT MD5('.$matkhau.') as md5";
		$query2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_assoc($query2);
		$matkhau = $row2['md5'];
	$conn->query("INSERT INTO users( usersName, usersEmail, usersPass, usersStatus, usersLevel) 
	VALUES (N'$name', '$email', '$matkhau', 1, 3)");	
?>
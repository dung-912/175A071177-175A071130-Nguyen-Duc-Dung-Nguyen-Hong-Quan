<?php
	require_once '../Chucnang/ketnoiSQL.php';
	
	$id = $_POST['id'];
	
	$conn->query("DELETE FROM `users` WHERE `usersID` = '$id'");
	
?>

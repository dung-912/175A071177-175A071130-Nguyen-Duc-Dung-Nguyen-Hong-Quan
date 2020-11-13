<?php
	require_once '../Chucnang/ketnoiSQL.php';
	
	if(ISSET($_POST['newID'])){
		$id = $_POST['newID'];
		$tab = $_POST['tieude'];
		$contant = $_POST['noidung'];
		$img = $_POST['hinhanh'];

		if($_POST['chude'] == 'Slide Show') {
			$cat = 1;
		}else{
			$cat = 2;
		}
		
		$conn->query("UPDATE `news` set `newsTab` = '$tab', `newsContant` = '$contant', `newsImg` = '$img',  `usersID` = 1,  `catID` = '$cat'  WHERE `newID` = '$id'");
	}
	
?>
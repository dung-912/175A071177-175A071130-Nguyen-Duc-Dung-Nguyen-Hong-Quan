<?php
	require_once '../Chucnang/ketnoiSQL.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		
		$query = $conn->query("SELECT `newID`, `newsTab`, `newsContant`, `newsImg`, `catID` FROM `news` WHERE `newID` ='$id'");
		$fetch = $query->fetch_array();
		$array = array(
			'newID' => $fetch['newID'],
			'newsTab' => $fetch['newsTab'],
			'newsContant' => $fetch['newsContant'],
            'newsImg' => $fetch['newsImg'],
            'catID' => $fetch['catID']
		);
		echo json_encode($array);
	}
?>

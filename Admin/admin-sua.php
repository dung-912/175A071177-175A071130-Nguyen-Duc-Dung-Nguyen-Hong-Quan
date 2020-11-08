<?php
	require_once '../Chucnang/ketnoiSQL.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		
		$query = $conn->query("SELECT `usersID`, `usersName`, `usersEmail`, `usersPass`, `usersLevel` FROM `users` WHERE usersID='$id'");
		$fetch = $query->fetch_array();
		$array = array(
			'usersID' => $fetch['usersID'],
			'usersName' => $fetch['usersName'],
			'usersEmail' => $fetch['usersEmail'],
            'usersPass' => $fetch['usersPass'],
            'usersLevel' => $fetch['usersLevel']
		);
		echo json_encode($array);
	}
?>

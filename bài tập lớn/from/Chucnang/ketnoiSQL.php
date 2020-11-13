<?php
    $conn = new mysqli('localhost', 'root', '', 'webmax');
	if(!$conn){
		die("Error: Không thể kết nối đến database");
	}
?>
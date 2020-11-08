<?php
require_once '../Chucnang/ketnoiSQL.php';

$td = $_POST['tieude'];
$nd = $_POST['noidung'];
$ha = $_POST['hinhanh'];
$maID = $_POST['maID'];
if ($_POST['chude'] == 'Slide Show') {
	$cd = 1;
} else {
	$cd = 2;
}
	$conn->query("INSERT INTO news(newsTab, newsContant, newsImg, catID, usersID) VALUES (N'$td', N'$nd', '$ha', $cd, $maID)");
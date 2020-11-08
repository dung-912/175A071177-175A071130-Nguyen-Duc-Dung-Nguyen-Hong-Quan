<?php
header("Content-Type: image/jpeg");
require_once '../Chucnang/ketnoiSQL.php';
if (isset($_POST['res'])) {
    $query = $conn->query("SELECT * FROM `news`");
    while ($fetch = $query->fetch_array()) {
        echo '<tr>';
        echo '<td width="15%">' . $fetch["newsTab"] . '</td>';
        echo '<td width="30%">' . $fetch["newsContant"] . '</td>';

        echo '<td width="20%"><img src=' . $fetch['newsImg'] . ' style="width: 420px; height: 250px"/></td>';
        if ($fetch["catID"] == 1) {
            echo '<td>Slide Show</td>';
        } else {
            echo '<td>Bản Tin</td>';
        }
        $ten =  $fetch["usersID"];
        $query2 = $conn->query("SELECT * FROM `users` WHERE usersID = $ten");
        $fetch2 = $query2->fetch_array();
        echo '<td width="10%">' . $fetch2['usersName'] . '</td>';
        echo "
            <td><center><button class='btn btn-warning edit' name='" . $fetch['newID'] . "'>
            <span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='" . $fetch['newID'] . "'>
            <span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>
        ";
        echo '</tr>';
    }
}
?>
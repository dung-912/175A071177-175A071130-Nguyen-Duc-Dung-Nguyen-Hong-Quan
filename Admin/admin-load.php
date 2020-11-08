<?php
    require_once '../Chucnang/ketnoiSQL.php';
    if (isset($_POST['res'])) {
        $query = $conn->query("SELECT * FROM `users`");
        while ($fetch = $query->fetch_array()) {
            {
                echo '<tr>';
                echo '<td>' . $fetch["usersName"] . '</td>';
                echo '<td>' . $fetch["usersEmail"] . '</td>';
                $in = '*';
                for ($i = 0; $i <= strlen($fetch["usersPass"]); $i++) {
                    $in .= '*';
                }
                echo '<td>' . $in . '</td>';
                if ($fetch["usersStatus"] == 1) {
                    echo '<td>Đã kích hoạt</td>';
                } else {
                    echo '<td>Chưa kích hoạt</td>';
                }
                if ($fetch["usersLevel"] == 1) {
                    echo '<td>Admin</td>';
                } elseif ($fetch["usersLevel"] == 2) {
                    echo '<td>Quản Lý</td>';
                } else {
                    echo '<td>Hội Viên</td>';
                }
                if ($fetch["usersLevel"] != 1) {
                    echo "
                    <td><center><button class='btn btn-warning edit' name='" . $fetch['usersID'] . "'>
                    <span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='" . $fetch['usersID'] . "'>
                    <span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>";
                } else {
                    echo '<td></td>';
                }
                echo '</tr>';
            }
            
        }
    }
?>
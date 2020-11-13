<?php
$conn = mysqli_connect('localhost', 'root', '', 'webmax');
if (!$conn) {
    die('Khong the ket noi');
} else {
    header('charset:"utf-8"');
    echo '<table class="table table-bordered table-striped">';
    echo '<tr>
            <th width="5%" style="text-align: center">ID</th>
            <th width="10%" style="text-align: center">Tên Người Dùng</th>
            <th width="20%" style="text-align: center">Email Đăng Ký</th>
            <th width="20%" style="text-align: center">Mật Khẩu</th>
            <th width="10%" style="text-align: center">Kích Hoạt</th>
            <th width="10%" style="text-align: center">Chức Vụ</th>
            <th width="10%" style="text-align: center">Thay Đổi Quyền</th>
            <th width="10%" style="text-align: center">Xóa Tài Khoản</th>
        </tr>';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row["usersID"] . '</td>';
        echo '<td>' . $row["usersName"] . '</td>';
        echo '<td>' . $row["usersEmail"] . '</td>';
        $in = '*';
        for($i = 0; $i <= strlen($row["usersPass"]); $i++){
            $in .= '*';
        }
        echo '<td>' . $in . '</td>';
        if($row["usersStatus"]==1){
            echo '<td>Đã kích hoạt</td>';
        }else{
            echo '<td>Chưa kích hoạt</td>';
        }
        if($row["usersLevel"]==1){
            echo '<td>Admin</td>';
        }elseif($row["usersLevel"]==2){
            echo '<td>Quản Lý</td>';
        }else{
            echo '<td>Hội Viên</td>';
        }
        if($row["usersLevel"]!=1){
            echo '<td style="text-align: center"><button type="button" name="btnAdEdit" class="btn btn-primary" btn-lg btn-block><i class="fa fa-pencil" aria-hidden="true"></i></button></td>';
            echo '<td style="text-align: center"><button type="button" name="btnAdDelete" class="btn btn-primary" btn-lg btn-block><i class="fa fa-user-times" aria-hidden="true"></i> </button></td>';
        }else{
            echo '<td></td><td></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
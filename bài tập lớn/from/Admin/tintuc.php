<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['name'])) {
    header('Location: ../dangnhap.php');
}
$name = $_SESSION['name'];
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quản Lý Thông Tin Web</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles.minc726.css">
</head>

<body class="">
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php">Đại học Nguyễn Tất Thành</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">
                        <?php
                        echo "" . $name;
                        ?>
                        <i class="fa fa-caret-down"></i></span><img src="../images/img-01.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="../images/img-01.png" alt="Jeff Dangerfield" /></div>
                            <div class="pull-right">
                            <input type="hidden" name="" id="maID" value= '<?php echo $id?>'>
                                <?php
                                echo "Hello " . $name . "!";
                                ?>
                            </div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="taikhoan.php">Thay đổi thông tin<i class="pull-right fa fa-cog"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="../Chucnang/dangxuat.php" class="text-right">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <div id="page-container">
        <nav id="page-leftbar" role="navigation">
            <ul class="acc-menu" id="sidebar">
                <li class="divider"></li>
                <li><a href="index.php" id="trangchu"><i class="fa fa-home"></i> <span>Trang Chủ</span></a></li>
                <li><a href="tintuc.php" id="tintuc"><i class="fa fa-th"></i> <span>Tin tức</span> </a>
                </li>
                <li><a href="quanly.php" id="quanly"><i class="fa fa-table"></i> <span>Quản lý tài khoản</span></a>
                </li>
            </ul>
        </nav>
        <div id="page-content">
            <div class="container">
                <br>
                <div class="col-lg-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                            <h4>Quản Lý Tin Tức</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-10">
                                    <button type="button" id="addtk" class="btn btn-primary" btn-lg btn-block><i class="fa fa-user-plus"></i></button>
                                </div>
                                <div class="container">
                                    <div id="List">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th width="20%" style="text-align: center">Tiêu Đề</th>
                                                <th width="25%" style="text-align: center">Nội Dung</th>
                                                <th width="25%" style="text-align: center">Link Hình Ảnh</th>
                                                <th width="15%" style="text-align: center">Chủ Đề</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="" id="tieude" style="width: 100%"></td>
                                                <td><input type="text" name="" id="noidung" style="width: 100%"></td>
                                                <td><input type="text" src="" alt="" id="hinhanh" style="width: 100%"></td>
                                                <td><select name="" id="chude" style="width: 100%">
                                                        <option>Slide Show</option>
                                                        <option>Tin Tức</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <div align="center">
                                            <button type="button" id="update" class="btn btn-warning">
                                                <span class="glyphicon glyphicon-edit"></span>Sửa thông tin
                                            </button>
                                            <button type="button" name="save" id="save" class="btn btn-info">Lưu Lại</button>
                                            <button type="button" name="cancel" id="cancel" class="btn btn-info">Hủy Bỏ</button>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="15%" style="text-align: center">Tiêu Đề</th>
                                            <th width="30%" style="text-align: center">Nội Dung</th>
                                            <th width="20%" style="text-align: center">Hình Ảnh</th>
                                            <th width="10%" style="text-align: center">Chủ Đề</th>
                                            <th width="10%" style="text-align: center">Người Viết</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="datatin"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='../js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='../js/jqueryui-1.10.3.min.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/jquery.nicescroll.min.js'></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="xuly-tintuc.js"></script>
</body>

</html>
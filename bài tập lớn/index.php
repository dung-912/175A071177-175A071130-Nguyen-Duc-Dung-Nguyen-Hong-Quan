<!doctype html>
<html lang="en">

<head>
    <title>Trường Đại Học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#024282;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item" style="display: flex;">
                                    <a class="nav-link" href="#" style="color: #fdb913">HOTLINE:
                                        <a href="tel:0912.298.300" style="padding-top: 8px; color: #fdb913">0912.298.300</a>
                                        &nbsp;-&nbsp;<a href="tel:0914.298.300" style="padding-top: 8px; color: #fdb913">0914.298.300</a>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#" style=" color: white;">SINH VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style=" color: white;">GIẢNG VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style=" color: white;">ĐÀO TẠO QUỐC TẾ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="navbar-brand">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#024282; ">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <form class="form-inline" action="from/dangnhap.php">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">
                            Đăng Nhập
                        </button>
                    </form>
                </a>
            </a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button> <a class="navbar-brand" href="#">
                            <img src="img/logo_ntt.png" alt="" style="height: 70px !important;">
                        </a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class=" w-100 hidden-md-down">
                                <ul class="h-nav list-unstyled mb-0 d-flex justify-content-between align-items-center" style="margin-left: 20px;" id="trangSK">
                                    <li><a href="/web/gioi-thieu" class="d-flex align-items-center" id="txt">
                                            <span class="bdr-round"><i class="fa fa-info-circle"></i></span>
                                            <span class="txt">Giới thiệu</span>
                                        </a></li>
                                    <li><a href="/web/tuyen-sinh/" class="d-flex align-items-center" id="txt">
                                            <span class="bdr-round"><i class="fa fa-graduation-cap"></i></span>
                                            <span class="txt">Tuyển sinh</span>
                                        </a></li>
                                    <li><a href="/web/dao-tao/" class="d-flex align-items-center" id="txt">
                                            <span class="bdr-round"><i class="fa fa-book"></i></span>
                                            <span class="txt">Đào tạo</span>
                                        </a></li>
                                    <li><a href="/web/nghien-cuu/" class="d-flex align-items-center" id="txt">
                                            <span class="bdr-round"><i class="fa fa-bookmark"></i></span>
                                            <span class="txt">Nghiên cứu</span>
                                        </a></li>
                                    <li><a href="/web/hop-tac-doanh-nghiep/" class="d-flex align-items-center" id="txt">
                                            <span class="bdr-round"><i class="fa fa-handshake-o"></i></span>
                                            <span class="txt">Hợp tác doanh nghiệp</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    require 'from/Chucnang/main.php';
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class=" row fnav pb-4">
                            <div class="col-lg-3 col-sm-6">
                                <P>
                                    <a href class="word">
                                        <b style=" font-size: 20px">ĐH NGUYỄN TẤT THÀNH</b>
                                    </a>
                                </P>
                                <ul class="fsub" style="width: 500px;">
                                    <li><a href="http://ntt.edu.vn/web/tin-tuc/Thu-ngo-hieu-truong">Thư ngỏ</a></li>
                                    <li><a href="http://ntt.edu.vn/web/tin-tuc/tam-nhin-su-mang">Tầm nhìn - Sứ mạng</a></li>
                                    <li><a href="http://ntt.edu.vn/web/dao-tao/gioi-thieu-chung/van-hoa-dh-nguyen-tat-thanh">Văn
                                            hóa ĐH Nguyễn Tất Thành</a></li>
                                    <li><a href="http://ntt.edu.vn/web/dao-tao/thong-tin-3-cong-khai">Thông tin 3 công khai</a>
                                    </li>
                                    <li><a href="http://ntt.edu.vn/web/dao-tao/dam-bao-chat-luong">Đảm bảo chất lượng</a></li>
                                    <li><a href="http://ntt.edu.vn/web/danh-muc/phat-trien-ben-vung">Phát triển bền vững</a>
                                    </li>
                                    <li><a href="http://tcntt.edu.vn/">Trường Trung cấp Nguyễn Tất Thành</a></li>
                                    <li><a href="http://anhvietmy.ntt.edu.vn/">Trường Tiểu học Anh Việt Mỹ</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <p>
                                    <a href class="word">
                                        <b style=" font-size: 20px">PHÒNG - BAN</b>
                                    </a>
                                </p>
                                <p>
                                    <a href class="word">
                                        <b style=" font-size: 20px">THƯ VIỆN ẢNH</b>
                                    </a>
                                </p>
                                <p>
                                    <a href class="word">
                                        <b style=" font-size: 20px">E-LEARNING</b>
                                    </a>
                                </p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <p>
                                    <a href class="word">
                                        <b style=" font-size: 20px">TRUNG TÂM - VIỆN</b>
                                    </a>
                                </p>
                                <ul class="fsub" style="width: 500px;">
                                    <li><a href="http://www.niie.edu.vn/vi">Viện Đào Tạo Quốc Tế</a></li>
                                    <li><a href="http://hitech.ntt.edu.vn/">Viện Công Nghệ Cao</a></li>
                                    <li><a href="http://saudaihoc.ntt.edu.vn/">Viện Đào tạo Sau đại học</a></li>
                                    <li><a href="http://elib.ntt.edu.vn/">Trung tâm Thông tin Thư viện</a></li>
                                    <li><a href="http://ttngoainguntt.com">TT Ngoại Ngữ</a></li>
                                    <li><a href="http://www.nttc.vn/">TT Tin Học NTT</a></li>
                                    <li><a href="http://vieclam-thuctap.ntt.edu.vn">TT QH Doanh Nghiệp &amp; Khởi nghiệp</a>
                                    </li>
                                    <li><a href="http://daotaoncxh.ntt.edu.vn/">TT Đào tạo theo nhu cầu XH</a></li>
                                    <li><a href="http://texgamex.vn/">TT Xuất khẩu lao động Texgamex</a></li>
                                    <li><a href="http://congdoan.ntt.edu.vn/">Công đoàn Trường ĐH Nguyễn Tất Thành</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <ul class="sub-page">
                                    <li><a href="http://facbook.com/daihocnguyentatthanh" class="btn"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                                    <li><a href="https://plus.google.com/112750194814925795608" class="btn"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                                    <li><a href="http://youtube.com/daihocntt" class="btn"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                                    <li><a href="mailto:#" class="btn"><i class="fa fa-envelope"></i>E-mail</a></li>
                                    <li><a href="https://zalo.me/1656351623584574728" class="btn"><i class="fa fa-wechat"></i>Zalo</a></li>
                                    <li><a href="https://eo1.ntt.edu.vn" class="btn"><i class="fa fa-mortar-board"></i>E-office</a></li>
                                    <li><a href="http://tcns.ntt.edu.vn" class="btn"><i class="fa fa-users"></i>Tuyển dụng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-f">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="cellfooter">
                        <div class="col-md-7">
                            <P class="pb-0">
                                <b>THÔNG TIN LIÊN HỆ</b><br>
                                Trụ sở chính: <b>300A – Nguyễn Tất Thành, Phường 13, Quận 4, TP. Hồ Chí Minh, Việt
                                    Nam</b><br>
                                Điện thoại: <b>1900 2039</b> Fax:<b> 028 39 404 759</b><br>
                                Hotline: <b> 0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b><br>
                                Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn</b>
                            </P>
                        </div>
                        <div class="col-md-5">
                            <p class="pb-0"> &#169;2017. Bản quyền thuộc về trường<b> Đại học Nguyễn Tất Thành</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
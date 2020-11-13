<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/jquery.shorten.1.0.js">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="carousel slide" id="carousel-303693">
        <div class="carousel-inner">
            <?php
            require_once 'ketnoiSQL.php';

            $query = $conn->query("SELECT * FROM `news`");
            $i = 0;
            while ($fetch = $query->fetch_array()) {
                if ($fetch['catID'] == 1) {
                    if ($i == 0) {
                        echo '<div class="carousel-item active">';
                        echo '<img class="d-block w-100" alt="Carousel Bootstrap First" src="' . $fetch["newsImg"] . '" />';
                        echo '<div class="titles">';
                        echo '<div id="chu">';
                        echo $fetch['newsTab'];
                        echo '</div>
                                <div id="btnChuyen">
                                <a class="carousel-control-prev" href="#carousel-303693" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-303693" data-slide="next">
                                    <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span>
                                </a>
                                </div>
                            </div>
                        </div>';
                    } else {
                        echo '<div class="carousel-item">';
                        echo '<img class="d-block w-100" alt="Carousel Bootstrap Second" src="' . $fetch["newsImg"] . '" />';
                        echo '<div class="titles">';
                        echo '<div id="chu">';
                        echo $fetch['newsTab'];
                        echo '</div>
                                <div id="btnChuyen">
                                    <a class="carousel-control-prev" href="#carousel-303693" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-303693" data-slide="next">
                                        <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }
                    $i++;
                }
                
            }
            ?>
        </div>
    </div>
    <br>
    <div class="carousel-inner">
        <div class="row">
            <div class="col-md-9">
                <span class="badge badge-default">Tin tức</span>
                <div class="row">
                    <?php
                    require_once 'ketnoiSQL.php';

                    $query = $conn->query("SELECT * FROM `news`");
                    $i = 0;
                    while ($fetch = $query->fetch_array()) {
                        if ($fetch['catID'] == 2) {
                            $i++;
                            if ($i == 3) {
                                echo '<div class="col-md-4">';
                                echo '<img class="card-img-top" alt="Bootstrap Thumbnail First" src="' . $fetch["newsImg"] . '" />';
                                echo '<div class="card-block">
                                        <h5 class="card-title">';
                                echo $fetch['newsTab'];
                                echo '</h5>
                                        <div class="content">
                                        <p class="card-text">';
                                echo '<p class="card-text">' . $fetch['newsContant'] . '</p>
                                        </div>
                                        <a class="c-blue-a5 font-weight-bold row justify-content-end align-items-center m-0" style="width: 270px; margin-left: 150px; margin-top: 20px;color: #024282" href="https://www.youtube.com/channel/UCPuljJ0RsiXHf3odISzjqDw"><i class="fa fa-chevron-circle-right mr-2"></i>Xem thêm</a>
                                        </div>
                                        </div>';
                            } else {
                                echo '<div class="col-md-4">';
                                echo '<img class="card-img-top" alt="Bootstrap Thumbnail First" src="' . $fetch["newsImg"] . '" />';
                                echo '<div class="card-block">
                                        <h5 class="card-title">';
                                echo $fetch['newsTab'];
                                echo '</h5>
                                        <div class="content">
                                        <p class="card-text">';
                                echo '<p class="card-text">' . $fetch['newsContant'] . '</p>
                                        </div>
                                        </div>
                                        </div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <span class="badge badge-default">Media</span>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <article class="post-video" style="width: inherit">
                                <iframe style="width: inherit;" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allowfullscreen=""></iframe>
                                <div class="description">
                                    <ul class="list-style-1">
                                        <p><i class="fa fa-angle-right"></i><a class="video" href="https://www.youtube.com/watch?v=iZ1EUr2DAMs">ĐIỂM TIN THÁNG 8</a>
                                        </p>
                                        <p><i class="fa fa-angle-right"></i><a class="video" href="https://www.youtube.com/watch?v=SwWJkVE6vMg">ĐH Nguyễn Tất Thành –
                                                20
                                                năm dấu ấn một chặng đường</a></p>
                                        <p><i class="fa fa-angle-right"></i><a class="video" href="https://www.youtube.com/watch?v=txdD9O_bGXA">NỎ THẦN - TẬP 8 | BẬT
                                                MÍ
                                                VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a></p>
                                    </ul>
                                    <a class="c-blue-a5 font-weight-bold row justify-content-end align-items-center m-0" style="width: 250px; margin-left: 150px; margin-top: 20px;color: #024282" href="https://www.youtube.com/channel/UCPuljJ0RsiXHf3odISzjqDw"><i class="fa fa-chevron-circle-right mr-2"></i>Xem thêm</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="section sub-slider" id="why">
        <h3 class="title-carousel"><b>
                TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?
            </b></h3>
        <div class="bx-wrapper" style="max-width: 1200px; margin: 0px auto;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 350px;">
                <div class="multi-slide" style="width: 715%; position: relative; transition-duration: 0.5s; transform: translate3d(-2400px, 0px, 0px);">
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_nhatruong-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/dai-hoc-hanh-phuc" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                            <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_sinhvien-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/top-10-thuong-hieu-noi-tieng" style="text-decoration: none; color: inherit">Top 10 thương hiệu nổi tiếng nhất</a></p>
                            <p class="line">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_doanhnghiep-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/95-sinh-vien-tot-nghiep-co-viec-lam" style="text-decoration: none; color: inherit">95% sinh viên tốt nghiệp có việc làm</a></p>
                            <p class="line">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center" style="background-image: url(&quot;/web/upload/images/hp_nguoithay-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/chuan-3-sao-qs-stars-anh-quoc" style="text-decoration: none; color: inherit">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></p>
                            <p class="line">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center" style="background-image: url(&quot;/web/upload/images/hp_xhoi-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/dat-chuan-chat-luong-quoc-gia" style="text-decoration: none; color: inherit">Đạt chuẩn chất lượng quốc gia</a></p>
                            <p class="line">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center" style="background-image: url(&quot;/web/upload/images/hp_nhatruong-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/dai-hoc-hanh-phuc" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                            <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center" style="background-image: url(&quot;/web/upload/images/hp_sinhvien-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/top-10-thuong-hieu-noi-tieng" style="text-decoration: none; color: inherit">Top 10 thương hiệu nổi tiếng nhất</a></p>
                            <p class="line">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế, công tác sinh viên.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center" style="background-image: url(&quot;/web/upload/images/hp_doanhnghiep-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/95-sinh-vien-tot-nghiep-co-viec-lam" style="text-decoration: none; color: inherit">95% sinh viên tốt nghiệp có việc làm</a></p>
                            <p class="line">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải nghiệm thực tiễn cho sinh viên.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_nguoithay-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/chuan-3-sao-qs-stars-anh-quoc" style="text-decoration: none; color: inherit">Chuẩn 3 sao QS-Stars (Anh Quốc)</a></p>
                            <p class="line">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu dành cho các trường đại học trên thế giới.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_xhoi-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center" id="tuade">
                            <p class="highlight"><a href="/web/thong-tin/dat-chuan-chat-luong-quoc-gia" style="text-decoration: none; color: inherit">Đạt chuẩn chất lượng quốc gia</a></p>
                            <p class="line">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng theo bộ tiêu chí quốc gia do Bộ GD&amp;ĐT ban hành.</p>
                        </div>
                    </div>
                    <div class="slide d-flex justify-content-center bx-clone" style="background-image: url(&quot;/web/upload/images/hp_nhatruong-01.svg&quot;); float: left; list-style: outside none none; position: relative; width: 400px;">
                        <div class="caption text-center">
                            <p class="highlight"><a href="/web/thong-tin/dai-hoc-hanh-phuc" style="text-decoration: none; color: inherit">Đại học hạnh phúc</a></p>
                            <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên với 5 giá trị nổi bật</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" id="sukien">
        <div class="col-md-4">
            <h2 class="heading-2"><a href="http://ntt.edu.vn/web/hop-tac-quoc-te">Hợp tác quốc tế</a></h2>
            <a class="thumbnail large" href="#">
                <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/DSC08730.jpg" alt="" width="100%">
            </a>
            <a href="/web/thong-tin/khoa-cong-nghe-sinh-hoc-dh-nguyen-tat-thanh-lam-viec-voi-dh-hiroshima" class="title" style=" overflow: hidden; height: 65px;">Khoa Công nghệ Sinh học ĐH
                Nguyễn Tất Thành làm việc với ĐH Hiroshima</a>
            <div class="content">
                <p>NTTU - Sáng ngày 17/09/2019, khoa Công nghệ Sinh học Trường ĐH Nguyễn Tất Thành
                    đã có buổi làm việc với ĐH Hiroshima (Nhật Bản)</p>
            </div>
            <ul class="list-unstyled">
                <li><a class="c-blue-a5 font-weight-bold" href="/web/hop-tac-quoc-te"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2 class="heading-2"><a href="#">Môi trường học tập</a></h2>
            <a class="thumbnail large" href="/web/thong-tin/tim-hieu-ve-cac-cau-lac-bo-tai-truong-dh-nguyen-tat-thanh">
                <img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/IMG_6169.jpg" alt="" width="100%">
            </a>
            <a href="/web/thong-tin/tim-hieu-ve-cac-cau-lac-bo-tai-truong-dh-nguyen-tat-thanh" class="title" style="overflow: hidden;height: 65px;">Tìm hiểu về các câu lạc bộ tại
                Trường ĐH Nguyễn Tất Thành</a>
            <div class="content">
                <p>NTTU - Những năm gần đây, bên cạnh việc nâng cao chất lượng đào tạo, Trường ĐH
                    Nguyễn Tất Thành không ngừng phát triển mô</p>
            </div>
            <ul class="list-unstyled">
                <li><a class="c-blue-a5 font-weight-bold" href="/web/moi-truong-hoc-tap"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2 class="heading-2"><a href="#">Sự kiện nổi bật</a></h2>
            <ul class="list-unstyled">
                <li class="time events">
                    <div class="box">
                        <div class="boxs">
                            <b>
                                Sep </b><br>
                            <h1> 25 </h1>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="title1 mt-0" id="dex"><a href="/web/su-kien/dai-hoi-dai-bieu-doan-tncs-ho-chi-minh-truong-dh-nguyen-tat-thanh-lan-vii-nhiem-ky-2019-2022">Đại
                                hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành lần VII,
                                nhiệm kỳ 2019 - 2022</a></h5>
                        <ul class="breadcrumb mb-0 bgm-white">
                            <li class="breadcrumb-item col-xs-auto time">
                                <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                            </li>
                            <li class="breadcrumb-item col-xs-auto">Hội trường A.801, 300A Nguyễn Tất Thành,
                                phường 13, quận 4, TP. HCM</li>
                        </ul>
                    </div>
                </li>
                <li class="time events">
                    <div class="box">
                        <div class="boxs">
                            <b>
                                Sep </b><br>
                            <h1> 22 </h1>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="title1 mt-0" id="dex"><a href="/web/su-kien/chuyen-de-tot-nghiep-lop-viet-nam-hoc-khoa-du-lich-va-viet-nam-hoc">Chuyên
                                đề tốt nghiệp lớp Việt Nam học - Khoa Du lịch và Việt Nam học</a></h5>
                        <ul class="breadcrumb mb-0 bgm-white">
                            <li class="breadcrumb-item col-xs-auto time">
                                <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:00
                            </li>
                            <li class="breadcrumb-item col-xs-auto">Sân bóng - cơ sở quận 7, 458/3F Nguyễn
                                Hữu Thọ, phường Tân Hưng, quận 7</li>
                        </ul>
                    </div>
                </li>
                <li class="time events">
                    <div class="box">
                        <div class="boxs">
                            <b>
                                Sep </b><br>
                            <h1> 19 </h1>
                        </div>
                    </div>
                    <div class="media-body">
                        <h5 class="title1 mt-0" id="dex"><a href="/web/su-kien/workshop-chu-de-youtube-da-thay-doi-cuoc-song-cua-toi-nhu-the-nao">Workshop,
                                Chủ đề: "Youtube đã thay đổi cuộc sống của tôi như thế nào''</a></h5>
                        <ul class="breadcrumb mb-0 bgm-white">
                            <li class="breadcrumb-item col-xs-auto time">
                                <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>07:30
                            </li>
                            <li class="breadcrumb-item col-xs-auto">Hội trường L.HT1, 331 QL1A, phường An
                                Phú Đông, quận 12</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li><a class="c-blue-a5 font-weight-bold" href="http://ntt.edu.vn/web/su-kien/"><i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
            </ul>
        </div>
    </div>

</body>

</html>
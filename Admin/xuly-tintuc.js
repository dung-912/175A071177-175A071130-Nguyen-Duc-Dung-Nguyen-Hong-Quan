$(document).ready(function () {
    $('#List').hide();
    $('#addtk').click(function () {
        $('#update').hide();
        $('#tieude').val('');
        $('#noidung').val('');
        $('#hinhanh').val('');
        $('#chude').val('');
        $('#save').show();
        $('#List').show();
    })
    $('#cancel').click(function () {
        $('#List').hide();
    })
    // tieude, noi dung, hinhanh, chude
    var newID;
    $('#update').hide();
    DisplayData();
    $('#save').on('click', function () {
        if ($('#tieude').val() == "" || $('#noidung').val() == "" || $('#hinhanh').val() == "" || $('#chude').val() == "") {
            alert("Vui lòng nhập đầy đủ thông tin");
        } else {
            var tieude = $('#tieude').val();
            var noidung = $('#noidung').val();
            var hinhanh = $('#hinhanh').val();
            var chude = $('#chude').val();
            $.ajax({
                url: 'tinluu.php',
                type: 'POST',
                data: {
                    tieude: tieude,
                    noidung: noidung,
                    hinhanh: hinhanh,
                    chude: chude
                },
                success: function (datatin) {
                    $('#tieude').val('');
                    $('#noidung').val('');
                    $('#hinhanh').val('');
                    $('#chude').val('');
                    DisplayData();
                }
            });
        }
    });
    function DisplayData() {
        $.ajax({
            url: 'tinload.php',
            type: 'POST',
            data: {
                res: 1
            },
            success: function (response) {
                $('#datatin').html(response);
            }
        })
    }
    $(document).on('click', '.delete', function () {
        var id = $(this).attr('name');

        $.ajax({
            url: 'tintuc-xoa.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (datatin) {

                $('#update').hide();
                $('#save').show();
                $('#tieude').val('');
                $('#noidung').val('');
                $('#hinhanh').val('');
                $('#chude').val('');
                DisplayData();
            }
        });
    })

    $(document).on('click', '.edit', function () {
        $('#List').show();
        var id = $(this).attr('name');
        $.ajax({
            url: 'tintuc-sua.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (response) {
                var getArray = jQuery.parseJSON(response);
                newID = getArray.newID;
                $('#tieude').val(getArray.newsTab);
                $('#noidung').val(getArray.newsContant);
                $('#hinhanh').val(getArray.newsImg);
                if (getArray.catID == 1) {
                    $('#chude').val('Slide Show');
                } else {
                    $('#chude').val('Tin Tức');
                }
                $('#update').show();
                $('#save').hide();
            }
        })
    });

    $('#update').on('click', function () {
        $('#List').hide();
        var tieude = $('#tieude').val();
        var noidung = $('#noidung').val();
        var hinhanh = $('#hinhanh').val();
        var chude = $('#chude').val();
        $.ajax({
            url: 'tintuc-capnhat.php',
            type: 'POST',
            data: {
                newID: newID,
                tieude: tieude,
                noidung: noidung,
                hinhanh: hinhanh,
                chude: chude
            },
            success: function (datatin) {
                DisplayData();
                $('#tieude').val('');
                $('#noidung').val('');
                $('#hinhanh').val('');
                $('#chude').val('');
                alert("Cập nhật thành công!");

                $('#update').hide();
                $('#save').show();

                newID = "";
            }
        });
    });
});
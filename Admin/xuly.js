$(document).ready(function () {
    $('#List').hide();
    $('#addtk').click(function () {
        $('#update').hide();
        $('#nameNew').val('');
        $('#emailNew').val('');
        $('#mkNew').val('');
        $('#cvNew').val('');
        $('#save').show();
        $('#List').show();
    })
    $('#cancel').click(function () {
        $('#List').hide();
    })
    var usersID;
    $('#update').hide();
    DisplayData();
    $('#save').on('click', function () {
        if ($('#nameNew').val() == "" || $('#emailNew').val() == "" || $('#mkNew').val() == "" || $('#cvNew').val() == "") {
            alert("Vui lòng nhập đầy đủ thông tin");
        } else {
            var nameNew = $('#nameNew').val();
            var emailNew = $('#emailNew').val();
            var mkNew = $('#mkNew').val();
            var cvNew = $('#cvNew').val();
            $.ajax({
                url: 'luulai.php',
                type: 'POST',
                data: {
                    nameNew: nameNew,
                    emailNew: emailNew,
                    mkNew: mkNew,
                    cvNew: cvNew
                },
                success: function (data) {
                    $('#nameNew').val('');
                    $('#emailNew').val('');
                    $('#mkNew').val('');
                    $('#cvNew').val('');
                    DisplayData();
                }
            });
        }
    });
    function DisplayData() {
        $.ajax({
            url: 'admin-load.php',
            type: 'POST',
            data: {
                res: 1
            },
            success: function (response) {
                $('#data').html(response);
            }
        })
    }
    $(document).on('click', '.delete', function () {
        var id = $(this).attr('name');

        $.ajax({
            url: 'admin-xoa.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (data) {

                $('#update').hide();
                $('#save').show();
                $('#nameNew').val('');
                $('#emailNew').val('');
                $('#mkNew').val('');
                $('#cvNew').val('');
                DisplayData();
            }
        });
    })
    $(document).on('click', '.edit', function () {
        $('#List').show();
        var id = $(this).attr('name');
        $.ajax({
            url: 'admin-sua.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (response) {
                var getArray = jQuery.parseJSON(response);
                usersID = getArray.usersID;
                $('#nameNew').val(getArray.usersName);
                $('#emailNew').val(getArray.usersEmail);
                $('#mkNew').val(getArray.usersPass);
                if (getArray.usersLevel == 3) {
                    $('#cvNew').val('Hội Viên');
                } else {
                    $('#cvNew').val('Quản Lý');
                }
                $('#update').show();
                $('#save').hide();
            }
        })
    });

    $('#update').on('click', function () {
        $('#List').hide();
        var nameNew = $('#nameNew').val();
        var emailNew = $('#emailNew').val();
        var mkNew = $('#mkNew').val();
        var cvNew = $('#cvNew').val();

        $.ajax({
            url: 'admin-capnhat.php',
            type: 'POST',
            data: {
                usersID: usersID,
                nameNew: nameNew,
                emailNew: emailNew,
                mkNew: mkNew,
                cvNew: cvNew
            },
            success: function (data) {
                DisplayData();
                $('#nameNew').val('');
                $('#emailNew').val('');
                $('#mkNew').val('');
                $('#cvNew').val('');
                alert("Cập nhật thành công!");

                $('#update').hide();
                $('#save').show();

                usersID = "";
            }
        });
    });
});
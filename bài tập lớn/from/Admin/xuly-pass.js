$(document).ready(function () {
    var ID;
    $('#yes').on('click', function () {
        if ($('#passCu').val() == "" || $('#passMoi1').val() == "" || $('#passMoi2').val() == "") {
            alert("Vui lòng nhập đầy đủ thông tin");
        } else {
            if ($('#passMoi1').val() == $('#passMoi2').val()) {
                var passCu = $('#passCu').val();
                var passMoi = $('#passMoi1').val();
                $.ajax({
                    url: 'admin-passnew.php',
                    type: 'POST',
                    data: {
                        passCu: passCu,
                        passMoi: passMoi
                    },
                    success: function (datatin) {
                        $('#passCu').val('');
                        $('#passMoi1').val('');
                        $('#passMoi2').val('');
                        alert("Cập nhật thành công!");
                    }
                });
            }else{
                alert("Mật khẩu mới nhập không khớp!");
            }
        }
    });
});
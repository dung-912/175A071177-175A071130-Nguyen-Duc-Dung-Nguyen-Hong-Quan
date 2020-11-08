$(document).ready(function () {
	var mem_id;

	DisplayData();

	$('#update').hide();

	$('#save').on('click', function () {
		if ($('#name').val() == "" || $('#email').val() == "" || $('#matkhau').val() == "" || $('#chucvu').val() == "") {
			alert("Vui lòng nhập đầy đủ thông tin");
		} else {
			var name = $('#name').val();
			var email = $('#email').val();
			var matkhau = $('#matkhau').val();
			var chucvu = $('#chucvu').val();

			$.ajax({
				url: 'save_query.php',
				type: 'POST',
				data: {
					name: name,
					email: email,
					matkhau: matkhau,
					chucvu: chucvu
				},
				success: function (data) {
					$('#name').val('');
					$('#email').val('');
					$('#matkhau').val('');
					$('#chucvu').val('');
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
				DisplayData();
				$('#update').hide();
				$('#save').show();
				$('#name').val('');
				$('#email').val('');
				$('#matkhau').val('');
				$('#chucvu').val('');
			}
		});
	})

	$(document).on('click', '.edit', function () {
		var id = $(this).attr('name');

		$.ajax({
			url: 'admin-sua.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function (response) {
				var getArray = jQuery.parseJSON(response);

				mem_id = getArray.mem_id;

				$('#name').val(getArray.name);
				$('#email').val(getArray.email);
				$('#matkhau').val(getArray.matkhau);
				$('#chucvu').val(getArray.chucvu);
				$('#update').show();
				$('#save').hide();
			}
		})
	});

	$('#update').on('click', function () {
		var name = $('#name').val();
		var email = $('#email').val();
		var matkhau = $('#matkhau').val();
		var chucvu = $('#chucvu').val();


		$.ajax({
			url: 'admin-capnhat.php',
			type: 'POST',
			data: {
				id: mem_id,
				name: name,
				email: email,
				matkhau: matkhau,
				chucvu: chucvu
			},
			success: function () {
				DisplayData();
				$('#name').val('');
				$('#email').val('');
				$('#matkhau').val('');
				$('#chucvu').val('');

				alert("Đã cập nhật thành công!");

				$('#update').hide();
				$('#save').show();

				mem_id = "";
			}
		});
	});
});
function inserttmb() {
    var nama = $("#nama").val();
    $.ajax({
        url: 'proses/insert.php',
        type: 'POST',
        data: {
            nama: nama,
        },
        success: function (result) {
            alert(result);
        }
    });
}

function addpgw() {
    var nip = $("#nip").val();
    var nama = $("#nama").val();
    var sap = $("#sap").val();
    var t_lahir = $("#t_lahir").val();
    var tgl_lahir = $("#tgl_lahir").val();
    var kelamin = $("input[name=jkelamin]:checked").val();
    var agama = $("#agama").val();
    var status = $("input[name=status]:checked").val();
    var keluarga = $("#jml_kel").val();
    var alamat = $("#alamat").val();
    var password = $("#pass").val();
    // var gambar = $("#uploadPhoto").val();
    var id_unit = $("#unit").val();
    var id_jabatan = $("#jabatan").val();
    $.ajax({
        url: 'proses/adduser.php',
        type: 'POST',
        data: {
            nip: nip,
            nama_p: nama,
            no_sap: sap,
            t_lahir: t_lahir,
            tgl_lahir: tgl_lahir,
            jkelamin: kelamin,
            agama: agama,
            status: status,
            kel: keluarga,
            alamat: alamat,
            password: password,
            // gambar:gambar,
            id_unit: id_unit,
            id_jabatan: id_jabatan,
        },
        success: function (result) {
            $('#addUser').modal('hide');
            location.reload();
        }
    });
}

function login() {
    var nip1 = $('#nip').val();
    var pass1 = $('#pass').val();
    $.ajax({
        url: 'proses/login.php',
        type: 'POST',
        data: {
            nip: nip1,
            password: pass1,
        },
        success: function (result) {
            $('#box').html(result);
            console.log(result);
        }
    });
}

function editJabatan(id) {
    $.ajax({
        url: 'page/jabatan/update.php?id=' + id,
        type: 'GET',
        success: function (result) {
            $('#contentUpdate').html(result);
            $('#updateJabatan').modal('show');
        }
    });
}

function editUnit(id) {
    $.ajax({
        url: 'page/unit/update.php?id=' + id,
        type: 'GET',
        success: function (result) {
            $('#contentUpdate').html(result);
            $('#updateUnit').modal('show');
        }
    });
}

function editPegawai(id) {
    $.ajax({
        url: 'page/user/update.php?id=' + id,
        type: 'GET',
        success: function (result) {
            $('#contentUpdate').html(result);
            $('#editUser').modal('show');
        }
    });
}

$(document).ready(function () {
    $('.modal-content').on('change','#unit_kerja', function () {
        // alert($(this).find(":selected").val());
        $.ajax({
            url: 'proses/model_pegawai.php?method=get_data_pegawai&id_unit=' + $(this).find(":selected").val(),
            type: 'GET',
            success: function (result) {
                $('.modal-content #data-atasan')
                    .empty()
                    .append('<option selected="" disabled="">Pilih Atasan Karyawan</option>');
                var opts = $.parseJSON(result);
                $.each(opts, function (i, d) {

                    $('.modal-content #data-atasan').append('<option value="' + d.id + '">' + d.nama_p + '</option>');
                });
            }
        });
    })
});


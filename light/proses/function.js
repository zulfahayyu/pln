function inserttmb(){
    var nama = $("#nama").val();
    $.ajax({
        url:'proses/insert.php',
        type:'POST',
        data:{
            nama:nama,
        },
        success:function(result){
            alert(result);
        }
    });
}

function addpgw(){
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
        url:'proses/adduser.php',
        type:'POST',
        data:{
            nip:nip,
            nama_p:nama,
            no_sap:sap,
            t_lahir:t_lahir,
            tgl_lahir:tgl_lahir,
            jkelamin:kelamin,
            agama:agama,
            status:status,
            kel:keluarga,
            alamat:alamat,
            password:password,
            // gambar:gambar,
            id_unit:id_unit,
            id_jabatan:id_jabatan,
        },
        success:function(result){
        $('#addUser').modal('hide');
        location.reload();
        }
    });
}

function login (){
    var nip1 = $('#nip').val();
    var pass1 = $('#pass').val();
    $.ajax({
        url:'proses/login.php',
        type:'POST',
        data:{
            nip:nip1,
            password:pass1,
        },
        success:function(result){
            $('#box').html(result);
            console.log(result);
        }
    });
}


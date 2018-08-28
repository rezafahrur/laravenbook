//notifikasi dan bunyi saat click tombol close tabel siswa
$("#closeBuku").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#3B87B3',
            color: '#fff',
            message: '<b>Data Buku ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var sound = document.getElementById("notif");
    sound.play();
});

//notifikasi dan bunyi saat click tombol close tabel wali murid
$("#closeKategori").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#039E58',
            color: '#fff',
            message: '<b>Data Kategori ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var sound = document.getElementById("notif");
    sound.play();
});

//close tabel guru dan notifikasi dan bunyi saat click tombol 
$("#closeSupplier").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#3B87B3',
            color: '#fff',
            message: '<b>Data Supplier ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var sound = document.getElementById("notif");
    sound.play();
});

//close tabel guru aktif dan notifikasi dan bunyi saat click tombol 
$("#closeAdmin").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#039E58',
            color: '#fff',
            message: '<b>Data Admin Sistem Ini ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var sound = document.getElementById("notif");
    sound.play();
});


//maksimalkan tabel data siswa
$("#maxBuku").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        $('#dataTabelBuku').addClass('col-md-6').removeClass('col-md-12');
    } else {
        $('#dataTabelBuku').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//maksimalkan tabel data wali murid
$("#maxKategori").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        $('#dataTabelKategori').addClass('col-md-6').removeClass('col-md-12');
    } else {
        $('#dataTabelKategori').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//tambah suara di form
$(".addForm").click(function () {
    var sound = document.getElementById("addSound");
    sound.play();
});

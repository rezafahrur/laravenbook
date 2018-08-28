//notifikasi dan bunyi saat click tombol close tabel siswa
$("#closeSiswa").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#3B87B3',
            color: '#fff',
            message: '<b>Data Siswa ditutup</b><br> refresh halaman jika ingin melihat kembali'
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
$("#closeWali").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#039E58',
            color: '#fff',
            message: '<b>Data Wali Murid ditutup</b><br> refresh halaman jika ingin melihat kembali'
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
$("#closeGuru").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#3B87B3',
            color: '#fff',
            message: '<b>Data Guru ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var clicks = $(this).data('clicks');
    if (!clicks && $('#dataTabelGuru').hasClass('col-md-4')) {
        $('#dataTabelGuruAktif').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelPegawai').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelGuru').removeClass('col-md-4');
    }
    if (!clicks && $('#dataTabelGuru').hasClass('col-md-12')) {
        $('#dataTabelGuruAktif').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelPegawai').addClass('col-md-6').removeClass('col-md-4');
    }
    $(this).data("clicks", !clicks);
    var sound = document.getElementById("notif");
    sound.play();
});

//close tabel guru aktif dan notifikasi dan bunyi saat click tombol 
$("#closeGuruAktif").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#039E58',
            color: '#fff',
            message: '<b>Data Guru Yang Masih Mengajar ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var clicks = $(this).data('clicks');
    if (!clicks && $('#dataTabelGuruAktif').hasClass('col-md-4')) {
        $('#dataTabelGuru').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelPegawai').addClass('col-md-6').removeClass('col-md-4');
    }
    if (!clicks && $('#dataTabelGuruAktif').hasClass('col-md-12')) {
        $('#dataTabelGuru').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelPegawai').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelGuruAktif').removeClass('col-md-12');
    }
    $(this).data("clicks", !clicks);
    var sound = document.getElementById("notif");
    sound.play();
});

//close tabel pegawai notifikasi dan bunyi saat click tombol 
$("#closePegawai").click(function () {
    $.amaran({
        'theme': 'colorful',
        'content': {
            bgcolor: '#E69515',
            color: '#fff',
            message: '<b>Data Pegawai Sekolah ditutup</b><br> refresh halaman jika ingin melihat kembali'
        },
        'resetTimeout': true,
        'closeOnClick': true,
        'cssanimationIn': 'bounceInRight',
        'cssanimationOut': 'zoomOutRight',
        'position': 'bottom right'
    });
    var clicks = $(this).data('clicks');
    if (!clicks && $('#dataTabelPegawai').hasClass('col-md-4')) {
        $('#dataTabelGuru').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelGuruAktif').addClass('col-md-6').removeClass('col-md-4');
    }
    if (!clicks && $('#dataTabelPegawai').hasClass('col-md-12')) {
        $('#dataTabelGuru').addClass('col-md-6').removeClass('col-md-4');
        $('#dataTabelGuruAktif').addClass('col-md-6').removeClass('col-md-4');
    }
    $(this).data("clicks", !clicks);
    var sound = document.getElementById("notif");
    sound.play();
});

//maksimalkan tabel data siswa
$("#maxSiswa").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        $('#dataTabelSiswa').addClass('col-md-6').removeClass('col-md-12');
    } else {
        $('#dataTabelSiswa').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//maksimalkan tabel data wali murid
$("#maxWali").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        $('#dataTabelWali').addClass('col-md-6').removeClass('col-md-12');
    } else {
        $('#dataTabelWali').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//maksimalkan tabel data guru
$("#maxGuru").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        if ($('#dataTabelGuruAktif').hasClass('col-md-6') || $('#dataTabelPegawai').hasClass('col-md-6')) {
            $('#dataTabelGuru').addClass('col-md-6').removeClass('col-md-12');
        } else {
            $('#dataTabelGuru').addClass('col-md-4').removeClass('col-md-12');
        }
    } else if (!clicks && $('#dataTabelGuru').hasClass('col-md-4')) {
        $('#dataTabelGuru').addClass('col-md-12').removeClass('col-md-4');
    } else if (!clicks && $('#dataTabelGuru').hasClass('col-md-6')) {
        $('#dataTabelGuru').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//maksimalkan tabel data guru aktif
$("#maxGuruAktif").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        if ($('#dataTabelGuru').hasClass('col-md-6') || $('#dataTabelPegawai').hasClass('col-md-6')) {
            $('#dataTabelGuruAktif').addClass('col-md-6').removeClass('col-md-12');
        } else {
            $('#dataTabelGuruAktif').addClass('col-md-4').removeClass('col-md-12');
        }
    } else if (!clicks && $('#dataTabelGuruAktif').hasClass('col-md-4')) {
        $('#dataTabelGuruAktif').addClass('col-md-12').removeClass('col-md-4');
    } else if (!clicks && $('#dataTabelGuruAktif').hasClass('col-md-6')) {
        $('#dataTabelGuruAktif').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//maksimalkan tabel data pegawai
$("#maxPegawai").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
        if ($('#dataTabelGuru').hasClass('col-md-6') || $('#dataTabelGuruAktif').hasClass('col-md-6')) {
            $('#dataTabelPegawai').addClass('col-md-6').removeClass('col-md-12');
        } else {
            $('#dataTabelPegawai').addClass('col-md-4').removeClass('col-md-12');
        }
    } else if (!clicks && $('#dataTabelPegawai').hasClass('col-md-4')) {
        $('#dataTabelPegawai').addClass('col-md-12').removeClass('col-md-4');
    } else if (!clicks && $('#dataTabelPegawai').hasClass('col-md-6')) {
        $('#dataTabelPegawai').addClass('col-md-12').removeClass('col-md-6');
    }
    $(this).data("clicks", !clicks);
});

//tambah suara di form
$(".addForm").click(function () {
    var sound = document.getElementById("addSound");
    sound.play();
});

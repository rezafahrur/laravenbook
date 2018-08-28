//buat datatables tabel wali
$(document).ready(function () {
    var tableWali =
        $("#wali").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data wali murid yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Wali Murid",
                sZeroRecords: "Tidak ditemukan Data Wali Murid yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Wali Murid",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Wali Murid",
                sInfoFiltered: "(disaring dari _MAX_ Data Wali Murid keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari:",
                sUrl: "",
                oPaginate: {
                    sFirst: "Pertama",
                    sPrevious: "Sebelumnya",
                    sNext: "Selanjutnya",
                    sLast: "Terakhir"
                }
            }
        });
});

//buat datatables tabel siswa
$(document).ready(function () {
    var tableSiswa =
        $("#siswa").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data siswa yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Siswa",
                sZeroRecords: "Tidak ditemukan data siswa yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Siswa",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Siswa",
                sInfoFiltered: "(disaring dari _MAX_ Data Siswa keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari:",
                sUrl: "",
                oPaginate: {
                    sFirst: "Pertama",
                    sPrevious: "Sebelumnya",
                    sNext: "Selanjutnya",
                    sLast: "Terakhir"
                }
            }
        });
});

//buat datatables tabel guru
$(document).ready(function () {
    var tableGuru =
        $("#guru").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data guru yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Guru",
                sZeroRecords: "Tidak ditemukan Data Guru yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Guru",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Guru",
                sInfoFiltered: "(disaring dari _MAX_ Data Guru keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari Data Guru:",
                sUrl: "",
                oPaginate: {
                    sFirst: "Pertama",
                    sPrevious: "Sebelumnya",
                    sNext: "Selanjutnya",
                    sLast: "Terakhir"
                }
            }
        });
});

//buat datatables tabel guru aktif
$(document).ready(function () {
    var tableGuruAktif =
        $("#guruAktif").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data guru aktif yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Guru Aktif",
                sZeroRecords: "Tidak ditemukan Data Guru Aktif yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Guru Aktif",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Guru Aktif",
                sInfoFiltered: "(disaring dari _MAX_ Data Guru Aktif keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari Data Guru Aktif:",
                sUrl: "",
                oPaginate: {
                    sFirst: "Pertama",
                    sPrevious: "Sebelumnya",
                    sNext: "Selanjutnya",
                    sLast: "Terakhir"
                }
            }
        });
});

//buat datatables tabel pegawai
$(document).ready(function () {
    var tablePegawai =
        $("#pegawai").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data pegawai sekolah ini yang tersedia pada tabel",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Pegawai Sekolah Ini",
                sZeroRecords: "Tidak ditemukan Data Pegawaiyang Sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Pegawai",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Pegawai",
                sInfoFiltered: "(disaring dari _MAX_ keseluruhan Data Pegawai non-guru",
                sInfoPostFix: "",
                sSearch: "Cari Data Pegawai:",
                sUrl: "",
                oPaginate: {
                    sFirst: "Pertama",
                    sPrevious: "Sebelumnya",
                    sNext: "Selanjutnya",
                    sLast: "Terakhir"
                }
            }
        });
});

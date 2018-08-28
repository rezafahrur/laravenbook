//buat datatables tabel wali
$(document).ready(function () {
    var tableKategori =
        $("#kategori").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data kategori yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Kategori",
                sZeroRecords: "Tidak ditemukan Data Kategori yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Kategori",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Kategori",
                sInfoFiltered: "(disaring dari _MAX_ Data Kategori keseluruhan)",
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

//buat datatables tabel Buku
$(document).ready(function () {
    var tableBuku =
        $("#buku").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data buku yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Buku",
                sZeroRecords: "Tidak ditemukan data Buku yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Buku",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Buku",
                sInfoFiltered: "(disaring dari _MAX_ Data Buku keseluruhan)",
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

//buat datatables tabel Supplier
$(document).ready(function () {
    var tableSupplier =
        $("#supplier").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data supplier yang tersedia pada tabel ini",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Supplier",
                sZeroRecords: "Tidak ditemukan Data Supplier yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Supplier",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Supplier",
                sInfoFiltered: "(disaring dari _MAX_ Data Supplier keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari Data Supplier:",
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

//buat datatables tabel Admin
$(document).ready(function () {
    var tableAdmin =
        $("#admin").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            deferRender: true,
            language: {
                sEmptyTable: "Tidak ada data admin sistem ini yang tersedia pada tabel",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampilkan _MENU_ Data Admin Ini",
                sZeroRecords: "Tidak ditemukan Data Admin yang Sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Admin",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Admin",
                sInfoFiltered: "(disaring dari _MAX_ keseluruhan Data Admin",
                sInfoPostFix: "",
                sSearch: "Cari Data Admin:",
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

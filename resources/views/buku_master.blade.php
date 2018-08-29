<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>LARAVENBOOK | Buku</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{ asset("/css/app.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/css/bandel.css") }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="hold-transition skin-black2 sidebar-mini fixed">
            <audio id="errorSound" src="{{asset("/sounds/error.mp3")}}" 
            autostart="false"></audio>
        <audio id="notif" src="{{asset("/sounds/unconvinced.mp3")}}" 
        autostart="false"></audio>
    <audio id="addSound" src="{{asset("/sounds/graceful.mp3")}}" 
        autostart="false"></audio>
    <div class="wrapper">

<!-- add Header -->
@include('layouts.header')

<!-- add Sidebar for this page -->
@include('sidebars.sidebar-buku')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header blur">
        <h1>
            {{ $page_title or "Buku & Kategori" }}
            <small>{{ $page_description or "Laporan Semua Buku Beserta Kategori yang Ada" }}</small>
        </h1>
        <!-- breadcrumbs here 
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Level</a></li>
            <li class="active">Here</li>
        </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Content Here -->
        @include('contents.konten_buku.buku')
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Footer -->
@include('layouts.footer')

</div><!-- ./wrapper -->


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/js/app.js") }}"></script>
    <script src="{{ asset ("/js/bandel.js") }}"></script>
    @if(Session::get('successKategori') == true)
        <script src="{{ asset ("/js/buku/successKategori.js") }}" ></script>
    @endif  
    @if(Session::get('successBuku') == true)
    <script src="{{ asset ("/js/buku/successBuku.js") }}" ></script>
    @endif  
    @if (Session::get('editKategori') == true)
    <script src="{{ asset("/js/buku/editKategori.js") }}" ></script>    
    @endif
    @if (Session::get('editBuku') == true)
    <script src="{{ asset("/js/buku/editBuku.js") }}" ></script>    
    @endif
    @if (Session::get('successUpdateKategori') == true)
    <script src="{{ asset("/js/buku/successUpdateKategori.js") }}" ></script>    
    @endif
    @if (Session::get('successUpdateBuku') == true)
    <script src="{{ asset("/js/buku/successUpdateBuku.js") }}" ></script>    
    @endif
    @if (Session::get('successDeleteKategori') == true)
    <script src="{{ asset("/js/buku/successDeleteKategori.js") }}" ></script> 
    @endif
    @if (Session::get('successDeleteBuku') == true)
    <script src="{{ asset("/js/buku/successDeleteBuku.js") }}" ></script> 
    @endif
    @if (Session::get('detailBuku') == true)
    <script src="{{ asset("/js/buku/detailBuku.js") }}" ></script>    
    @endif
    @if (Session::get('hapusBuku') == true)
    <script src="{{ asset("/js/buku/hapusBuku.js") }}" ></script>    
    @endif
    @if (Session::get('hapusKategori') == true)
    <script src="{{ asset("/js/buku/hapusKategori.js") }}" ></script>    
    @endif
    </body>
</html>
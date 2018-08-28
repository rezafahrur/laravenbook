<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>LARAVENBOOK | Supplier</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset("/css/app.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/css/bandel.css") }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="hold-transition skin-black2 sidebar-mini fixed">
    <audio id="notif" src="{{asset("/sounds/unconvinced.mp3")}}" 
        autostart="false"></audio>
    <audio id="addSound" src="{{asset("/sounds/graceful.mp3")}}" 
        autostart="false"></audio>
    <div class="wrapper">

<!-- add Header -->
@include('layouts.header')

<!-- add Sidebar for this page -->
@include('sidebars.sidebar-supplier')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title or "Supplier" }}
            <small>{{ $page_description or "Laporan Semua Supplier yang Ada" }}</small>
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
        @include('contents.supplier.supplier')
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Footer -->
@include('layouts.footer')

</div><!-- ./wrapper -->


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/js/app.js") }}"></script>
    <script src="{{ asset ("/js/bandel.js") }}"></script>
    @if(Session::get('successSupplier') == true)
        <script src="{{ asset ("/js/supplier/successSupplier.js") }}" ></script>
    @endif  
    @if (Session::get('detailSupplier') == true)
        <script src="{{ asset("/js/supplier/detailSupplier.js") }}" ></script>    
    @endif
    @if (Session::get('editSupplier') == true)
    <script src="{{ asset("/js/supplier/editSupplier.js") }}" ></script>    
@endif
@if (Session::get('successUpdateSupplier') == true)
    <script src="{{ asset("/js/supplier/successUpdateSupplier.js") }}" ></script>    
@endif
@if (Session::get('successDeleteSupplier') == true)
    <script src="{{ asset("/js/supplier/successDeleteSupplier.js") }}" ></script>    
@endif
    </body>
</html>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>LARAVENBOOK | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset("/css/app.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("/css/bandel.css") }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="hold-transition skin-black2 sidebar-mini fixed">
    
    <div class="wrapper">

<!-- add Header -->
@include('layouts.header')

<!-- add Sidebar for this page -->
@include('sidebars.sidebar-dashboard')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_title or "Dashboard" }}
            <small>{{ $page_description or "Laporan Semua isi Sistem" }}</small>
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
        @include('contents.dashboard')
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Footer -->
@include('layouts.footer')

</div><!-- ./wrapper -->


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("/js/app.js") }}"></script>
    <script src="{{ asset ("/js/bandel.js") }}"></script>
    <script>
      $.amaran({
        'theme'     :'user blue',
        'content'   :{
            img:'{{asset ("/img/user2-160x160.jpg")}}',
            user:'Pak Reza',
            message:'Selamat Datang Kembali<br> Dalam Sistem Akademik Ini'
        },
        'cssanimationIn'    :'bounceInDown',
        'cssanimationOut'   :'zoomOutDown',
        'resetTimeout' :true,
        'closeOnClick' :true,
        'position'          : 'bottom right'
    });
    </script>
    </body>
</html>
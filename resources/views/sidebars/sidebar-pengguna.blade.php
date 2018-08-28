<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- add sidebar layout for profile and search form -->
    @include('layouts.sidebar')
    

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGASI SISTEM</li>
      <li>
        <a href="dashboard">
          <i class="fas fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="supplier">
          <i class="fas fa-truck"></i>
            <span>Supplier</span>
        </a>
  </li>
      <li>
              <a href="buku">
                <i class="fas fa-book"></i>
                  <span>Buku</span>
              </a>
        </li>
      <li class="active">
          <a href="pengguna">
            <i class="fas fa-user-cog"></i> <span>Pengguna</span>
          </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

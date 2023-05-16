<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{asset('assets_admin')}}/index3.html" class="brand-link">
    <img src="{{asset('assets_admin')}}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">PPG Medan Timur 1</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://placehold.co/400" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('jamaah.index')}}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Database Jama'ah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('desa.index')}}" class="nav-link">
            <i class="nav-icon fas fa-city"></i>
            <p>
              Desa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('kelompok.index')}}" class="nav-link">
            <i class="nav-icon fas fa-city"></i>
            <p>
              Kelompok
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset ('adminLTE/index3.html') }}" class="brand-link">
      <img src="{{ asset ('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pelelangan Masal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rifki Jaya Abadi</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard/masyarakat" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          @if (auth()->user()->level == 'admin')
          <li class="nav-item">
            <a href="/admin/barang" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Barang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'petugas')
          <li class="nav-item">
            <a href="/petugas/lelang" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Lelang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'masyarakat')
          <li class="nav-item">
            <a href="/masyarakat/lelang" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Lelang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          @endif
          

          <li class="nav-item">
            <a href="{{route('logout-petugas')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                  LOG OUT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
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
               @if (auth()->user()->level == 'admin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                ADMIN
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'petugas')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                PETUGAS
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'masyarakat')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                
              </p>User
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'admin')
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang/create" class="nav-link">
            <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Tambah Barang
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'petugas')
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang/create" class="nav-link">
            <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Tambah Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/lelang" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Lelang
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="/lelang/create" class="nav-link">
            <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Tambah Lelang
              </p>
            </a>
          </li>
          @endif

          @if (auth()->user()->level == 'masyarakat')
          <li class="nav-item">
            <a href="/listlelang" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                List Lelang
              </p>
            </a>
          </li>
          @endif
          

          <li class="nav-item">
            <a href="{{route('logout-petugas')}}" class="nav-link text-red">
              <i class="nav-icon fas fa-arrow-circle-left"></i>
              <p>
                  LOG OUT
              </p>
            </a>
</li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">

<ul class="sidebar-nav" id="sidebar-nav">
@if (auth()->user()->level == 'admin')
  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard/admin">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @endif
  
  @if (auth()->user()->level == 'petugas')
  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard/petugas">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @endif

  @if (auth()->user()->level == 'masyarakat')
  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard/masyarakat">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @endif
  
  <hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">
  @if (auth()->user()->level == 'admin')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav"  href="#">
      <i class="bi bi-box-seam"></i><span>Barang</span><i></i>
    </a>
    <ul id="components-nav" data-bs-parent="#sidebar-nav">
      <li>
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/barang">
          <i class="bi bi-circle"></i><span>Data Barang</span>
        </a>
      </li>
      <li>
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/barang/create">
          <i class="bi bi-circle"></i><span>Tambah Barang</span>
        </a>
      </li>
    </ul>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" href="#">
          <i class="bi bi-person"></i><span>User</span><i ></i>
        </a>
        <ul id="charts-nav" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/user">
              <i class="bi bi-circle"></i><span>Data User</span>
            </a>
          </li>
        </ul>
          <ul id="charts-nav" data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/user/create">
              <i class="bi bi-circle"></i><span>Tambah Data User</span>
            </a>
          </li>
          </ul>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="#">
              <i class="ri-admin-line"></i><span>Data Penawaran</span><i ></i>
            </a>
            <ul id="forms-nav"  data-bs-parent="#sidebar-nav">
              <li>
                <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/data-penawaran">
                  <i class="bi bi-circle"></i><span>Cetak Data Penawaran</span>
                </a>
              </li>
              <li>
    @endif

    @if (auth()->user()->level == 'petugas')
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav"  href="#">
          <i class="bi bi-box-seam"></i><span>Barang</span><i></i>
        </a>
        <ul id="components-nav"  data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav"  href="/barang">
              <i class="bi bi-circle"></i><span>Data Barang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="#">
          <i class="ri-auction-fill"></i><span>Lelang</span><i ></i>
        </a>
        <ul id="forms-nav"  data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/lelang">
              <i class="bi bi-circle"></i><span>Data Lelang</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/lelang/create">
              <i class="bi bi-circle"></i><span>Tambah Lelang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="#">
          <i class="ri-admin-line"></i><span>Data Penawaran</span><i ></i>
        </a>
        <ul id="forms-nav"  data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/data-penawaran">
              <i class="bi bi-circle"></i><span>Cetak Data Penawaran</span>
            </a>
          </li>
          <li>
      @endif

      @if (auth()->user()->level == 'masyarakat')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav"  href="#">
      <i class="bi bi-menu-button-wide"></i><span>List Lelang</span><i></i>
    </a>
    <ul id="components-nav"  data-bs-parent="#sidebar-nav">
      <li>
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/listlelang">
          <i class="bi bi-circle"></i><span>Data Lelang</span>
        </a>
      </li>
    </ul>
    @endif

  </li><!-- End Components Nav -->

</aside>
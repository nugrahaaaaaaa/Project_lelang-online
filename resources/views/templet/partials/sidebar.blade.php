<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  @if (auth()->user()->level == 'admin')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Barang</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="/barang">
          <i class="bi bi-circle"></i><span>Data Barang</span>
        </a>
      </li>
      <li>
        <a href="/barang/create">
          <i class="bi bi-circle"></i><span>Tambah Barang</span>
        </a>
      </li>
    </ul>
    @endif

    @if (auth()->user()->level == 'petugas')
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Barang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/barang">
              <i class="bi bi-circle"></i><span>Data Barang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Lelang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/lelang">
              <i class="bi bi-circle"></i><span>Data Lelang</span>
            </a>
          </li>
          <li>
            <a href="/lelang/create">
              <i class="bi bi-circle"></i><span>Tambah Lelang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      @endif

      @if (auth()->user()->level == 'masyarakat')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>List Lelang</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="/lelang">
          <i class="bi bi-circle"></i><span>Data Lelang</span>
        </a>
      </li>
    </ul>
    @endif

  </li><!-- End Components Nav -->

</aside>
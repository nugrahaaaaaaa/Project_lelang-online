<div class="pagetitle">
  <h1>
    @yield('title')
  </h1>
  <nav>
  <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
        </ol>
        </nav>
</div>
{{-- @if(auth()->user()->level =='admin')
@section('content')
<section class="content">
  @if(Auth::check())
  <div class="jumbotron">
    <h1 class="display-4 animate__animated animate__fadeInDown">Selamat datang {{ Auth::user()->name }}!</h1>
    <p class="lead animate__animated animate__delay-1s animate__fadeInUp">Temukan barang-barang berkualitas dan menarik untuk Anda tawar di situs lelang online kami.</p>
    <hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">
    <p class="animate__animated animate__delay-1s animate__fadeInUp">Jangan lewatkan kesempatan untuk memenangkan barang impianmu!</p>
    <a class="btn btn-primary btn-lg animate__animated animate__delay-2s animate__bounceIn" href="/" role="button">Lihat Barang Lelang</a>
  </div>
@endif
</section>
@endif

@if (auth()->user()->level == 'petugas')
</div>
@section('content')
<section class="content">
  @if(Auth::check())
  <div class="jumbotron">
    <h1 class="display-4 animate__animated animate__fadeInDown">Selamat datang {{ Auth::user()->name }}!</h1>
    <p class="lead animate__animated animate__delay-1s animate__fadeInUp">Temukan barang-barang berkualitas dan menarik untuk Anda tawar di situs lelang online kami.</p>
    <hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">
    <p class="animate__animated animate__delay-1s animate__fadeInUp">Jangan lewatkan kesempatan untuk memenangkan barang impianmu!</p>
    <a class="btn btn-primary btn-lg animate__animated animate__delay-2s animate__bounceIn" href="/" role="button">Lihat Barang Lelang</a>
  </div>
@endif
</section>
@endif --}}
@extends('templet.master')

@section('content')
  @if(Auth::check())
  <div class="jumbotron">
    <h1 class="display-4 animate__animated animate__fadeInDown text-center">Selamat datang {{ Auth::user()->name }}!</h1>
    <p class="lead animate__animated animate__delay-1s animate__fadeInUp text-center">Cari Lelang Aman, Mudah dan Terpercaya cuma ada di Lelangkeun saja.</p>
    <hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">
    <p class="animate__animated animate__delay-1s animate__fadeInUp text-center">Cari barang yang mau kamu lelang dan kamu inginkan? klik dibawah ini !!!</p>
    <a class="btn btn-primary text-center" href="/listlelang" role="button text-center">Lihat Barang Lelang</a>
@endif


@foreach($lelangs as $item)
@if($item->pemenang == Auth::user()->name)
<!-- Modal notifikasi pop up -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Selamat, Anda Terpilih Menjadi Pemenang!</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" > --}}
          <a href="/dashboard/masyarakat" type="button" class="close" aria-label="Close"></a>
          <span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div class="modal-body">
        <p>Anda telah Terpilih menjadi pemenang lelang <strong>{{ $item->barang->nama_barang }}</strong>. Mohon segera menghubungi panitia lelang untuk informasi lebih lanjut mengenai pengambilan barang.</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('dashboard.petugas',[$item->id])}}" method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </form>
        <a href="{{ route ('tawar', $item->id)}}" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>

@endif
@endforeach

@foreach($lelangs as $item)
@if($item->gugur == Auth::user()->name)
<!-- Modal notifikasi pop up -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Maaf, Anda kalah dalam pelelangan kali ini</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" > --}}
          <a href="/dashboard/masyarakat" type="button" class="close" aria-label="Close"></a>
          <span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div class="modal-body">
        <p>Anda telah kalah dalam memperebutkan<strong>{{ $item->barang->nama_barang }}</strong>. Masih banyak barang lain untuk di lelang, Semoga Beruntung lain kali</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('dashboard.petugas',[$item->id])}}" method="POST">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </form>
        <a href="/data-penawaran" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>

@endif
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    $('#notificationModal').modal('show');
  });
</script>

@endsection
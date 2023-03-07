@extends('templet.master')

@section('content')
  @if(Auth::check())
  <div class="jumbotron">
    <h1 class="display-4 animate__animated animate__fadeInDown">Selamat datang {{ Auth::user()->name }}!</h1>
    <p class="lead animate__animated animate__delay-1s animate__fadeInUp">Cari Lelang Aman, Mudah dan Terpercaya cuma ada di Lelangkeun saja.</p>
    <hr class="my-4 animate__animated animate__delay-1s animate__fadeInUp">
    <p class="animate__animated animate__delay-1s animate__fadeInUp">Cari barang yang mau kamu lelang dan kamu inginkan? klik dibawah ini !!!</p>
    <a class="btn btn-primary" href="/listlelang" role="button">Lihat Barang Lelang</a>
  </div>
@endif
@endsection


{{-- @foreach($lelangs as $item)
@if($item->pemenang == Auth::user()->name)
<!-- Modal notifikasi pop up -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Selamat, Anda Terpilih Menjadi Pemenang!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div class="modal-body">
        <p>Anda telah terpilih sebagai pemenang lelang barang dengan nama <strong>{{ $item->barang->nama_barang }}</strong>. Mohon segera menghubungi panitia lelang untuk informasi lebih lanjut mengenai pengambilan barang.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a href="{{route('lelangin.create', $item->id )}}" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
  </div>
</div>

@endif
@endforeach --}}

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    $('#notificationModal').modal('show');
  });
</script>

@endsection --}}
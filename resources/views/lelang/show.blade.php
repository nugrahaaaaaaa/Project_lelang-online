@extends('templet.master')

@section('title')
Lelang Terpercaya
@endsection

@section('content')
<div class="card">
<div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Lelang</h3>
              </div>
              <div class="card-body">
            <form action="/lelang" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_barang" class="form-label"><b>Nama Barang<b></label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->barang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal" class="form-label"><b>Harga Awal</b></label>
                    <input type="text" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->barang->harga_awal}}" disabled>
                    <br>
                    <!-- <div class="form-group">
                    <label for="harga_akhir"><b>Harga akhir</b></label>
                    <input type="text" name="harga_akhir" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_akhir }}" disabled>
                    <br> -->
                    @if ($showlelang->barang->image)
              <img src="{{ asset('storage/' . $showlelang->barang->image)}}" alt="" width="500">
              @endif
              <br>
              <br>
                    <div class="form-group">
                    <label for="tanggal_lelang" class="form-label"><b>tanggal</b></label>
                    <input type="date" name="tanggal_lelang" class="form-control" id="exampleInputEmail1"  value="{{ $showlelang->tanggal_lelang }}" disabled>
                        <br>
                        @if (auth()->user()->level == 'petugas')
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('lelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Kembali
                </a>
                  </div>  
                  @endif
                  @if (auth()->user()->level == 'masyarakat')
                  <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('listlelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Kembali
                </a>
                  </div>  
                  @endif
</form>
</body>
</div>
</div> 
</div>
@endsection

@extends('templet.master')

@section('content')
<div class="card">
<div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Lelang</h3>
              </div>
              <div class="card-header">
              <div class="card-body">
            <form action="/barang" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal">Harga Awal</label>
                    <input type="text" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_awal}}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_lelang">Harga lelang</label>
                    <input type="text" name="harga_lelang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_lelang }}" disabled>
                    <br>
                    @if ($showlelang->image)
              <img src="{{ asset('storage/' . $showlelang->image)}}" alt="" width="500">
              @endif
              <br>
                    <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"  value="{{ $showlelang->tanggal }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('lelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                  </div>  
</form>
</body>
</div>
</div>
</div>
@endsection

@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Barang</h3>
              </div>
            <form action="/lelang" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal">Harga Awal</label>
                    <input type="number" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_awal }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_lelang">Harga lelang</label>
                    <input type="number" name="harga_lelang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_lelang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="tanggal">Tanggal</label>
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
</html>     
@endsection
@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Barang</h3>
              </div>
            <form action="/listlelang" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal">Harga Awal</label>
                    <input type="number" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->harga_awal }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="tanggal_lelang">tanggal lelang</label>
                    <input type="date" name="tanggal_lelang" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->tanggal_lelang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="status">Status</label>
                    <input type="date" name="status" class="form-control" id="exampleInputEmail1"  value="{{ $showlistlelang->status }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('listlelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                  </div>  
</form>
</body>
</html>     
@endsection
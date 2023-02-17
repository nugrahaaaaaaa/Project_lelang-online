@extends('templet.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
              </div>
    <form action="{{ route('lelang.update', [$lelangs-> id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
     <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $lelangs->nama_barang }}">
</br>
        <label for="harga_awal">Harga awal</label>
        <input type="text" name="harga_awal" class="form-control" value="{{ $lelangs->harga_awal }}">
</br>
        <label for="harga_lelang">Harga lelang</label>
        <input type="text" name="harga_lelang" class="form-control" value="{{ $lelangs->harga_lelang }}">
        <br>
        <label for="tanggal">Tanggal</label>
        <textarea name="tanggal" class="form-control" id="inputdeskripsi" cols="50" rows="4"></textarea>
        <br>
                    <a class="btn btn-primary" href="{{ route('lelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                <button type="submit" class="btn btn-primary">Update</button>
</div>
</div>            
</form>
</body>
</html>
@endsection

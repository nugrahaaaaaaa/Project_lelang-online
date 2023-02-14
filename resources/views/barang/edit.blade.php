@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
    <form action="{{ route('barang.update', [$barangs-> id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
     <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}">

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" value="{{ $barangs->tanggal }}">

        <label for="harga_awal">Harga awal</label>
        <input type="number" name="harga_awal" value="{{ $barangs->harga_awal }}">

        <label for="deskripsi">deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="inputdeskripsi" cols="50" rows="4"></textarea>
        <br>
                    <a class="btn btn-primary" href="{{ route('barang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                <button type="submit" class="btn btn-primary">Update</button>
</div>            
</form>
</body>
</html>
@endsection

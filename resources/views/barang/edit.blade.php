@extends('templet.master')

@section('content')
<div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Edit Data Barang</h3>
              </div>
    <form action="{{ route('barang.update', [$barangs-> id])}}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <div class="card-body">
     <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $barangs->nama_barang }}">
</br>
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $barangs->tanggal }}">
</br>
        <label for="harga_awal">Harga awal</label>
        <input type="text" name="harga_awal" class="form-control" value="{{ $barangs->harga_awal }}">
        <br>
        <form action="" method="POST" enctype="multipart/form/data"  >
                <b>File Upload</b> <input type="file" name="image">
                </form>
        <br>        
        <br>
        <label for="deskripsi">deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="inputdeskripsi" cols="50" rows="4">{{ $barangs->deskripsi }}</textarea>
        <br>
                    <a class="btn btn-primary" href="{{ route('barang.index')}}">
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

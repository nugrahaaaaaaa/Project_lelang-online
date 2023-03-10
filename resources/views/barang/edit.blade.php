@extends('templet.master')

@section('title')
Lelang Terpercaya Lelangkeun aja!
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Edit Data Barang</h3>
              </div>
    <form action="{{ route('barang.update', [$barangs->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <div class="card-body">
     <div class="form-group">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $barangs->nama_barang }}">
        <br>
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $barangs->tanggal }}">
        <br>
        <label for="harga_awal" class="form-label">Harga awal</label>
        <input type="text" name="harga_awal" class="form-control" value="{{ $barangs->harga_awal }}">

        {{-- <form action="" method="POST" enctype="multipart/form/data"  >
                <b>File Upload</b> <input type="file" name="image">
                </form>
        <br>         --}}
        {{-- <div class="form-group">
          <label for="image" class="form-label">Gambar Barang</label>
          <img class="img-preview img-fluid col-sm-5 mb-3" alt="">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        </div> --}}
        <br>
        <label for="deskripsi" class="form-label">deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="inputdeskripsi" cols="50" rows="4">{{ $barangs->deskripsi }}</textarea>
        <br>
                    <a class="btn btn-primary" href="/barang/{barang}/edit">
                    <i class="fas fa-arrow-left"></i>  
                   Kembali
                </a>
                <button type="submit" class="btn btn-primary">Update</button>
</div>
</div>            
</form>
</body>
</html>
@endsection

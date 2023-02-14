@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
    <form action="{{ route('lelang.update', [$lelangs-> id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
     <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ $lelang->nama_barang }}">

        <label for="harga_awal">harga awal</label>
        <input type="number" name="harga_awal" value="{{ $lelang->harga_awal }}">

        <label for="harga_lelang">Harga lelang</label>
        <input type="number" name="harga_lelang" value="{{ $lelang->harga_lelang }}">

        <label for="tanggal_lelang">Tanggal Lelang</label>
        <input type="date" name="tanggal_lelang" value="{{ $lelang->tanggal_lelang }}">
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

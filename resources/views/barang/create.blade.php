@extends('template.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">membuat data baru</h3>
    </div>
    <form action="/barang" method="POST">
        @csrf
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="nama_barang">nama barang</label>
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="masukan nama barang">
                <br>
                <div class="form-group">
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="inputtanggal" placeholder="masukan tanggal">
                <br>
                <div class="form-group">
                <label for="harga_awal">harga awal</label>
                <input type="number" name="harga_awal" class="form-control" id="inputharga_awal" placeholder="masukan harga awal">
                <br>
                <label for="deskripsi">deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="inputdeskripsi" cols="50" rows="4"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('barang.index') }}">
                <i class="fas fa-arrow-left"></i>
                Back
                </a>
</div>
    </div>
    </div>
            </div>
    </form>
    </div>
</div>
@endsection

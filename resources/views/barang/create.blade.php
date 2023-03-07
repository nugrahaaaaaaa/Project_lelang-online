@extends('templet.master')

@section('title')
Lelang Terpercaya
@endsection

@section('content')
<div class="card">
    <div class="card-header bg-primary ">
        <h3 class="card-title bg-primary text-white">Membuat Data Baru</h3>
    </div>
    <form action="/barang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
        <br>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_barang" class="form-label"><b>Nama barang</b></label>
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="masukan nama barang">
                <br>
                <div class="form-group">
                <label for="tanggal" class="form-label"><b>Tanggal</b></label>
                <input type="date" name="tanggal" class="form-control" id="inputtanggal" placeholder="masukan tanggal">
                </div>
            </div>
                <br>
                <div class="form-group">
                <label for="harga_awal" class="form-label"><b>Harga awal<b></label>
                <input type="text" name="harga_awal" class="form-control" id="inputharga_awal" placeholder="masukan harga awal">

                <br>
                <form action="" method="POST" enctype="multipart/form/data">
                <b>File Upload</b> <input type="file" name="image">
                </form>
                <br>
                <br>
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="inputdeskripsi" cols="40" rows="4"></textarea>
                <br>
                <a class="btn btn-primary" href="{{ route('barang.index') }}">
                               <i class="fas fa-arrow-left"></i>
                                Kembali
                              </a>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
</div>
    </div>
    </div>
            </div>
    </form>
    </div>
</div>
@endsection

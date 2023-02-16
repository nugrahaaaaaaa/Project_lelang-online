@extends('templet.master')

@section('content')
<div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Barang</h3>
              </div>
              <div class="card-body">
            <form action="/barang" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for=""><b>Nama Barang</b></label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showbarang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="tanggal"><b>Tanggal</b></label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" value="{{ $showbarang->tanggal }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal"><b>Harga Awal</b></label>
                    <input type="number" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showbarang->harga_awal }}" disabled>
                    <br>
                    @if ($showbarang->image)
              <img src="{{ asset('storage/' . $showbarang->image)}}" alt="" width="500">
              @endif
              <br>
              <br>
                    <div class="form-group">
                    <label for="deskripsi"><b>Deskripsi</b></label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1"  value="{{ $showbarang->deskripsi }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('barang.index')}}">
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
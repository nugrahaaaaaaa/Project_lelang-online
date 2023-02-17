@extends('templet.master')

@section('content')
<div class="card">
<div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Lelang</h3>
              </div>
              <div class="card-body">
            <form action="/lelang" method="POST">
                @csrf
                <br>
                @if(!empty($barangs))
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_barang"><b>Nama Barang<b></label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->barang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal"><b>Harga Awal</b></label>
                    <input type="text" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->barang->harga_awal}}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_akhir"><b>Harga akhir</b></label>
                    <input type="text" name="harga_akhir" class="form-control" id="exampleInputEmail1" value="{{ $showlelang->harga_akhir }}" disabled>
                    <br>
                    @if ($showlelang->image)
              <img src="{{ asset('storage/' . $showlelang->image)}}" alt="" width="500">
              @endif
              <br>
                    <div class="form-group">
                    <label for="tanggal_lelang"><b>tanggal</b></label>
                    <input type="date" name="tanggal_lelang" class="form-control" id="exampleInputEmail1"  value="{{ $showlelang->tanggal_lelang }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('lelang.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                  </div>  
</form>
</body>
</div>
</div>
@endif        
</div>
@endsection

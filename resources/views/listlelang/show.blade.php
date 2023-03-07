@extends('templet.master')

@section('content')
<div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Barang</h3>
              </div>
              <div class="card-body">
            <form action="/listlelang" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for=""><b>Nama Barang</b></label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->nama_barang }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="harga_awal"><b>Harga awal </b></label>
                    <input type="date" name="harga_awal" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->harga_awal }}" disabled>
                    <br>
                    @if ($showlistlelang->image)
              <img src="{{ asset('storage/' . $showlistlelang->image)}}" alt="" width="500">
              @endif
              <br>
                    <div class="form-group">
                    <label for="tanggal"><b>tanggal</b></label>
                    <input type="text" name="tanggal" class="form-control" id="exampleInputEmail1"  value="{{ $showlistlelang->tanggal }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('listlelang.index')}}">
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
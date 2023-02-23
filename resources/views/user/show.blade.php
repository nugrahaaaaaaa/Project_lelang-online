@extends('templet.master')

@section('content')
<div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail Barang</h3>
              </div>
              <div class="card-body">
            <form action="/user" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"><b>Nama</b></label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->name }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->username }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="level"><b>Level</b></label>
                    <input type="text" name="level" class="form-control" id="exampleInputEmail1" value="{{ $showlistlelang->level }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="telepon"><b>Telepon</b></label>
                    <input type="number" name="telepon" class="form-control" id="exampleInputEmail1"  value="{{ $showlistlelang->telepon }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('user.index')}}">
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
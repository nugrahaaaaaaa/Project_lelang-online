@extends('templet.master')

@section('title')
Lelang Terpercaya Lelangkeun aja!
@endsection

@section('content')
<div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title bg-primary text-white">Detail User</h3>
              </div>
              <div class="card-body">
            <form action="/user" method="POST">
                @csrf
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="form-label"><b>Nama</b></label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="username" class="form-label"><b>Username</b></label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="{{ $user->username }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="level" class="form-label"><b>Level</b></label>
                    <input type="text" name="level" class="form-control" id="exampleInputEmail1" value="{{ $user->level }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="telepon" class="form-label"><b>Telepon</b></label>
                    <input type="text" name="telepon" class="form-control" id="exampleInputEmail1"  value="{{ $user->telepon }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('user.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Kembali
                </a>
                  </div>  
</form>
</body>
</div>
</div>
</div>    
@endsection
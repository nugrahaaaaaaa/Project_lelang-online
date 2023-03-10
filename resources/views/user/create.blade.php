@extends('templet.master')

@section('title')
Lelang Terpercaya Lelangkeun aja!
@endsection

@section('content')
<div class="card">
    <div class="card-header bg-primary ">
        <h3 class="card-title bg-primary text-white">Membuat Data user baru</h3>
    </div>
    <form action="{{route ('user.store')}}" method="POST">
        @csrf
        <div class="card">
            <br>
            <div class="card-body">
                <div class="form-group">
                <label for="name" class="form-label"><b>Nama</b></label>
                <input type="text" name="name" class="form-control" placeholder="masukan nama" >
                <br>
                <div class="form-group">
                <label for="username" class="form-label"><b>username</b></label>
                <input type="text" name="username" class="form-control" id="inputusername" placeholder="masukan username">
                </div>
                <br>
                <div class="form-group">
                <label for="password" class="form-label"><b>password</b></label>
                <input type="password" name="password" class="form-control" id="inputpassword" placeholder="masukan password">
                </div>
                <br>
                <div class="form-group">
                <label for="level" class="form-label"><b>level<b></label>
                <input type="text" name="level" class="form-control" id="inputlevel" placeholder="masukan harga awal">
                <br>
                <div class="form-group">
                <label for="telepon" class="form-label"><b>telepon</b></label>
                <input type="number" name="telepon" class="form-control" id="inputtelepon" placeholder="masukan telepon">
                </div>
                <br>
                <a class="btn btn-primary" href="{{ route('user.index') }}">
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

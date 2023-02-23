@extends('templet.master')

@section('content')
<div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">Edit Data User</h3>
              </div>
              <br>
    <form action="{{ route('user.update', [$edituser->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
     <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $edituser->name }}">
</br>
        <label for="username">username</label>
        <input type="text" name="username" class="form-control" value="{{ $edituser->username }}">
</br>
        <label for="level">level</label>
        <input type="text" name="level" class="form-control" value="{{ $edituser->level }}">
        <br>
                    <a class="btn btn-primary" href="{{ route('user.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                <button type="submit" class="btn btn-primary">Update</button>
</div>
</div>            
</form>
</body>
</html>
@endsection

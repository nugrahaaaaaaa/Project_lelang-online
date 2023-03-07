@extends('templet.master')

@section('title')
Lelang Terpercaya
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">edit Data User</h3>
              </div>
              <br>
    <form action="{{ route('user.update', [$user->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
     <div class="form-group">
        <label for="name" class="form-label"><b>Name</b></label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
</br>
        <label for="username" class="form-label"><b>username</b></label>
        <input type="text" name="username" class="form-control" value="{{ $user->username }}">
</br>
        <label for="level" class="form-label"><b>level</b></label>
        <input type="text" name="level" class="form-control" value="{{ $user->level }}">
                          <!-- <div class="col-12">
                            <div class="form-group mandatory">
                              <label for="level" placeholder="level" class="form-label"><b>level</b></label>
                              <select class="form-select form-control @error('level') is-invalid @enderror" id="level" name="level" data-parsley-required="true">
                                <option value="" disabled>Pilih level</option>
                                <option value="">masyarakat</option>
                                <option value="">admin</option>
                                <option value="">petugas</option>
                              </select> -->
                            <!-- </div> 
                            @error('level')
                              <div class="aler alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                           </div>
                        </div> -->
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

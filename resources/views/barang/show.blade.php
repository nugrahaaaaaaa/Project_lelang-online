<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukan Profil anda</h3>
              </div>
            <form action="/profil" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="telepon">telepon</label>
                    <input type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Masukan telepon" value="{{ $showprofil->telepon }}" disabled>
                    <br>
                    <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukan alamat" value="{{ $showprofil->alamat }}" disabled>
                        <br>
                        <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('profil.index')}}">
                    <i class="fas fa-arrow-left"></i>  
                   Back
                </a>
                  </div>  
</form>
</body>
</html>     
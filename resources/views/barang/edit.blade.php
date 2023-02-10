<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit data</h3>
    </div>
    <form action="{{ route('profil.update',[$profil->id]) }}" method="POST"></form>
    @csrf
    @method('PUT')
    <div class="card-body"></div>
    <div class="form-group">
        <label for="nama_barang"></label>
    </div>

</div>
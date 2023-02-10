@extends('template.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Berikut barang yang akan di lelang dalam waktu dekat</h3>
    </div>
    <div class="card-header">
    <a class="btn btn-primary" href="{{ route('barang.create')}}">
            <i class="fas fa-plus"></i>
            Tambahkan Barang
        </a>
    </div>
    <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
<thead>
          <tr>
            <th>no</th>
            <th>nama_barang</th>
            <th>tanggal</th>
            <th>harga awal</th>
            <th>deskripsi</th>
            <th>actions</th>
          </tr>
        </thead>

    <tbody>
         @foreach ($barangs as $barang)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $barang->nama_barang}}</td>
            <td>{{ $barang->tanggal}}</td>
            <td>{{ $barang->harga_awal}}</td>
            <td>{{ $barang->deskripsi}}</td>
            <td> 
            <form action="/barang/{{$barang->id}}" method="POST">
              <a class="btn btn-info mr-3" href="barang/{{$barang->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="barang{{$barang->id}}/edit/">Edit</a>
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
            </td>
          </tr>
          @endforeach
</tbody>
</table>
</div>
</body>
</html>
@endsection






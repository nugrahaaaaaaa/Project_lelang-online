@extends('templet.master')

@section('title')
Lelang Terpercaya Lelangkeun aja!
@endsection

@section('content')
<section class="content">
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">Barang yang akan di Lelang</h3>
    </div>
    <div class="card-header">
    <div class="card-body">
    <table class="table table-striped" style="width: 100%" id="table1">
<thead>
          <tr>
            <th>No</th>
            <th>Nama barang</th>
            <th>Tanggal</th>
            <th>Harga awal</th>
            <!-- <th>Image</th> -->
            <th>Deskripsi</th>
            <th>Actions</th>
          </tr>
        </thead>
    <tbody>
         @foreach ($barangs as $barang)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->tanggal }}</td>
            <td>{{ $barang->harga_awal }}</td>
         
            <td>{{ $barang->deskripsi}}</td>
            <td> 
            <form action="/barang/{{$barang->id}}" method="POST">
              <a class="btn btn-info mr-3 text-white" href="barang/{{$barang->id}}">Detail</a>
              @if (auth()->user()->level == 'admin')
              <a class="btn btn-warning mr-3" href="barang/{{$barang->id}}/edit/">Edit</a>
              @endif
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
             </input>
            </form>
            </td>
          </tr>
          @endforeach
</tbody>
</table>
</div>
</section>
@endsection






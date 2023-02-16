@extends('templet.master')

@section('content')
  <div class="card">
      <div class="card-header bg-primary ">
       <h5 class="card-title text-white">Masukan Lelang Terbaru</h5>
      </div>
      <div class="card-header">
      <div class="card-body">
          <table class="table table-striped" style="width: 100%" id="table1">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama barang</th>
                      <th>Harga awal</th>
                      <th>Harga lelang</th>
                      <th>Tanggal lelang</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($lelangs as $lelang)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::of($lelang->barang->nama_barang)->title() }}</td>
                    <td>{{ $lelang->barang->harga_awal }}</td>
                    <td>{{ $lelang->harga_akhir }}</td>
                    <td>{{ $lelang->tanggal_lelang }}</td>
                    <td>
                      <span class="badge {{ $lelang->status == 'ditutup' ? 'bg-danger' : 'bg-success' }}">{{ Str::title($lelang->status) }}</span>
                    </td>
                    <td>
                    <form action="/lelang/{{$lelang->id}}" method="POST">
              <a class="btn btn-info mr-3" href="lelang/{{$lelang->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="lelang{{$lelang->id}}/edit/">Edit</a>
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
      </div>
  </div>
@endsection

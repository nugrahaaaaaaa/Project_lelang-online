@extends('templet.master')

@section('title')
Lelang Terpercaya Lelangkeun aja!
@endsection

@section('content')
<section class="section">
  <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title bg-primary text-white">Masukan Bid</h3>
      </div>
      <div class="card-body">
          <table class="table table-striped" style="width: 100%" id="table1">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Open Harga</th>
                      <th>Tanggal Lelang</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($listlelang as $lelang)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::of($lelang->barang->nama_barang)->title() }}</td>
                    <td>{{ $lelang->barang->harga_awal }}</td>
                    <td>{{ $lelang->tanggal_lelang }}</td>
                    <td>
                      <span class="badge {{ $lelang->status == 'ditutup' ? 'bg-danger' : 'bg-success' }}">{{ Str::title($lelang->status) }}</span>
                      
                    </td>
                    <td> 
            <form action="/listlelang/{{$lelang->id}}" method="POST">
               <a class="btn btn-info mr-3 text-white" href="lelang/{{$lelang->id}}">Detail</a>
               @if($lelang->status == 'dibuka')
              <a class="btn btn-warning mr-3" href="{{ route ('tawar', $lelang->id)}}">Bid</a>
              @else
                  
              @endif

              @csrf
            </form>
            </td>
          </tr>
          @endforeach

              </tbody>
          </table>
      </div>
  </div>

</section>
@endsection

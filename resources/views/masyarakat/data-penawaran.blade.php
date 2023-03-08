@extends('templet.master')

@section('title')
Data Penawaran
@endsection

@section('content')
<div class="col-12 col-md-20">
    <div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">Download dan cetak</h3>
    </div>
    <div class="card-header">
    <div class="card-body">
    <table class="table table-striped" style="width: 100%" id="table1">
<thead>
          <tr> 
            <th>No</th>
            <th>Nama Pelelang</th>
            <th>Nama barang</th>
            <th>Tanggal</th>
            <th>Nominal Bid</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
    <tbody>
      @foreach ($historylelangs as $value)
      <form action="/lelang/{{$value->id}}" method="POST">
        @csrf
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $value->user->name}}</td>
            <td>{{ $value->lelang->barang->nama_barang}}</td>
            <td>{{ $value->lelang->tanggal_lelang}}</td>
            <td>{{ $value->harga}}</td>
            <td>
                <span class="badge {{ $value->status == 'ditutup' ? 'bg-danger' : 'bg-warning' }}">{{ Str::title($value->status) }}</span>
           </td>
          </form>
           <td>
           <form action="{{ route ('lelang.cetaklelang', $value->id)}}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-success me-1 mb-1 text-white">{{ __('Cetak Laporan') }} </button>
            </form>
              </td>
            </tr>
          @endforeach
          </div>
  </tbody>
</table>
        <br>
        @if (auth()->user()->level == 'petugas')
                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                        <a href="{{ route('lelang.index') }}" class="btn btn-primary">
                                        kembali
                                      </a>
                        @endif
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
@endsection
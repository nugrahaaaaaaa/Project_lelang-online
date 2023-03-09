@extends('templet.master')

@section('content')
@if (auth()->user()->level == 'masyarakat')
<div class="container">
  <div class="row">
    <div class="col-50 col-md-25">
      <div class="card">
          <div class="card-header bg-primary">
              <h4 class="card-title bg-primary text-white">{{ __('Bid Barang Yang Akan Di Lelang') }}</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                <br>
                  <form class="form" method="POST" action="{{ route('tawar.store', $lelangs->id) }}" data-parsley-validate="true">
                    @csrf
                    <!-- <div class="row">
                      <div class="col-12">
                        <div class="form-group mandatory">
                          <label for="barangs_id" class="form-label">{{ __('Nama Barang') }}</label>
                          <input type="text" id="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" data-parsley-required="true" value="{{ $lelangs->barang->nama_barang }}" disabled>
                        </div>
                      </div>
                    </div> -->
                    <!-- @if ($lelangs->image)
              <img src="{{ asset('storage/' . $lelangs->barang->image)}}" alt="" width="500">
              @endif -->
                    <!-- <br>
                    <div class="row"> -->
                        <div class="col-md-20 col-12">
                            <!-- <div class="form-group mandatory">
                                <label for="tanggal" class="form-label">{{ __('Tanggal Lelang') }}</label>
                                  <input type="date" id="tanggal_lelang" class="form-control " name="tanggal_lelang" data-parsley-required="true" value="{{ $lelangs->tanggal_lelang }}"disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-12"> -->
                            <!-- <div class="form-group mandatory">
                                <label for="harga_awal" class="form-label">{{ __('Harga Awal') }}</label>
                                <input type="text" id="harga_awal" class="form-control" placeholder="Input Harga, Hanya Angka" name="harga_awal" data-parsley-required="true" value="{{ $lelangs->barang->harga_awal }}" disabled>
                            </div>
                        </div> -->
                        <div class="col-md-13 col-12">
                          <div class="form-group mandatory">
                              <label  for="harga_penawaran" class="form-label"><b>Masukan Penawaran</b></label>
                              <input type="number" id="harga_penawaran" class="form-control" placeholder="Input Harga, Hanya Angka" name="harga_penawaran" data-parsley-required="true" value="{{ old('harga_penawaran') }}">
                          </div>
                          @error('harga_penawaran')
                            <div class="aler alert-danger" role="alert">{{ $message }}</div>
                          @enderror
                      </div>
                      </div>
                     <br>
                      <div class="row">
                          <div class="col-6">
                              <a href="{{ route('listlelang.index') }}" class="btn btn-primary text-white">
                                {{ __('Kembali') }}
                              </a>
                          </div>
                        <div class="col-6 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                              {{ __('Submit') }}
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                              {{ __('Reset') }}
                            </button>
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
    @endif
    <div class="col-12 col-md-20">
    <div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">History lelang</h3>
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

            @if (auth()->user()->level == 'petugas')
            <th>Action</th>
            @endif
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

           @if (auth()->user()->level == 'petugas')
           <td>
           <form action="{{ route ('pemenang.lelang', $value->id)}}" method="POST">
            @csrf
            @method('PUT')
            @if($value->status == 'pending')
            <button type="submit" class="btn btn-success me-1 mb-1 text-white">{{ __('Pilih Pemenang') }} </button>
            @else

            @endif

            </form>
              </td>
              @endif

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
@extends('template.master')
@section('title', 'Data Lelang')

@section('subtitle', 'Data Barang Yang Akan Di Lelang')

@section('content')
<section class="section">
  <div class="card">
      <div class="card-header d-flex justify-content-between">
      </div>
      <div class="card-body">
          <table class="table table-striped" style="width: 100%" id="table1">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Harga Awal</th>
                      <th>Harga Lelang</th>
                      <th>Tanggal Lelang</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($lelangs as $lelang)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::of($lelang->barang->nama_barang)->title() }}</td>
                    <td>@currency($lelang->barang->harga_awal)</td>
                    <td>@currency($lelang->harga_akhir)</td>
                    <td>{{ \Carbon\Carbon::parse($lelang->tanggal)->format('j-F-Y') }}</td>
                    <td>
                      <span class="badge {{ $lelang->status == 'ditutup' ? 'bg-danger' : 'bg-success' }}">{{ Str::title($lelang->status) }}</span>
                      
                    </td>
                    <td>
                      <div class="d-flex flex-nowrap flex-column flex-md-row justify-center">
                        <form action="{{ route('lelang.destroy', $lelang->id) }}" method="POST">
                        <a href="{{ route('lelang.show', $lelang->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                          <i class="bi bi-info-square"></i>
                        </a>
                        <a href="{{ route('lelang.edit', $lelang->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                            <i class="bi bi-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="5" style="text-align: center" class="text-danger">Data lelang Kosong</td>
                  </tr>
                    
                @endforelse

              </tbody>
          </table>
      </div>
  </div>

</section>
@endsection

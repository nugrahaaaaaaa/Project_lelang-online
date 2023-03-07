@extends('templet.master')

{{-- @section('title')
Dashboard Petugas
@endsection --}}

@section('content')
  @if(Auth::check())
  <div class="jumbotron">
    <h1 class="display-4 animate__animated animate__fadeInDown">Selamat datang {{ Auth::user()->name }}!</h1>
    <p class="lead animate__animated animate__delay-1s animate__fadeInUp">Cari Lelang Aman, Mudah dan Terpercaya cuma ada di Lelangkeun saja.</p>
  </div>
@endif
@endsection

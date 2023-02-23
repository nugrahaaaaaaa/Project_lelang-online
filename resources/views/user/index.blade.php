@extends('templet.master')

@section('title')
Lelang terpercaya 
@endsection

@section('content')
<section class="content">
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title text-white">Data User</h3>
    </div>
    <div class="card-header">
    <div class="card-body">
    <table class="table table-striped" style="width: 100%" id="table1">
<thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Level</th>
            <th>Telepon</th>
            <th>Actions</th>
          </tr>
        </thead>
    <tbody>
         @foreach ($user as $value)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $value->name}}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->level }}</td>
            <td>{{ $value->telepon}}</td>
            <td> 
            <form action="/user/{{$value->id}}" method="POST">
              @if (auth()->user()->level == 'admin')
              <a class="btn btn-info mr-3 text-white" href="user/{{$value->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="user/{{$value->id}}/edit/">Edit</a>
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






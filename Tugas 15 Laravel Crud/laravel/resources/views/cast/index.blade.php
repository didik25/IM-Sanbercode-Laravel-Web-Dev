@extends('layout.app')
@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">id</th>
      <th>nama</th>
      <th>umur</th>
      <th>bio</th>

      <!-- <th style="width: 40px">Label</th> -->
    </tr>
  </thead>
  <tbody>
@foreach($cast as $value)    
    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->nama}}</td>
      <td>{{$value->umur}}</td>
      <td>{{$value->bio}}</td>
      <td> 
            <a href="/cast/{{$value->id}}/edit" class="btn btn-info btn-sm">EDIT</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
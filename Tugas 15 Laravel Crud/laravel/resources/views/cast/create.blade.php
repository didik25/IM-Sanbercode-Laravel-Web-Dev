@extends('layout.app')
@section('content')
<b>FORM TAMBAH DATA</b>

<form action="{{url('/cast')}}" method="POST">
@csrf
<div class=" form-group">
<br /><br /><label>Nama</label>
<input type="text" name="nama" class="form-control">
</div>
@error ('nama')
<div class="alert alert-danger">{{$message}}</div>
@enderror
<div class=" form-group">
<label>Umur</label>
<input type="text" name="umur" class="form-control">
</div>
<div class=" form-group">
<label>Bio</label>
<textarea name="bio" class="form-control " cols="30" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-primary">INPUT DATA</button>
</form>
@endsection
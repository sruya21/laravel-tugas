@extends('layout.master')
@section('content')
<form action="/form" method="post">
@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input name="nama" type="text" class="form-control" placeholder="Masukan nama">
  </div>
  <div class="form-group">
    <label for="telepon">Telepon</label>
    <input name="telepon" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" class="form-control" placeholder="Masukan telepon">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input name="alamat" type="text" class="form-control" placeholder="Masukan alamat">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
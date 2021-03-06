@extends('layout.master')
@section('content')
<div class="container mt-5">
  <div class="row-xl">
    <div class="jumbotron">
      <div class="row justify-content-center">
        <h2 class="text-white bg-primary pl-1 pr-1">Tambah Siswa</h2>
      </div>

          @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul><strong>Gagal</strong>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif

          @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
          @endif

          <form action="/form" method="post">
          @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Masukan nama" value="{{ old('nama') }}">
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input name="telepon" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" class="form-control" placeholder="Masukan telepon" value="{{ old('telepon')}}">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input name="alamat" type="text" class="form-control" placeholder="Masukan alamat" value="{{ old('alamat') }}">
            </div>
            <input type="submit" class="btn btn-primary" value="buat">
            <a class="btn btn-primary" href="/data">batal</a>
          </form>
    </div>
  </div>
</div>
<script>
  function berhasil(not $errors){
    alert("y");
  }
</script>
@stop
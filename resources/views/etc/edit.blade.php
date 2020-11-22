@extends('layout.master')
@section('content')

    @foreach($siswa as $s)
    <form action="/data/edit" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" class="form-control" value="{{ $s->id }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" value="{{ $s->nama }}">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input name="telepon" type="number"  class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" value="{{ $s->telepon }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat" type="text" class="form-control" value="{{ $s->alamat }}">
        </div>
        <input type="submit" class="btn btn-primary" value="simpan" onclick="berhasil()">
        </form>
    @endforeach

    <script>
      function berhasil(){
        alert("Data Berhasil Diedit");
      }
    </script>

@stop
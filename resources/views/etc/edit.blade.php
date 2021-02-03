@extends('layout.master')
@section('content')

<div class="container mt-5">
  <div class="row-xl">
    <div class="jumbotron">
        <div class="row justify-content-center">
        <h2 class="text-white bg-primary pl-1 pr-1">Edit Siswa</h2>
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
            <input type="submit" class="btn btn-primary" value="simpan">
            <a class="btn btn-primary" href="/data">batal</a>
        </form>
        </div>
    </div>
</div>
    @endforeach

    <script>
      function berhasil(){
        alert("Data Berhasil Diedit");
      }
    </script>

@stop
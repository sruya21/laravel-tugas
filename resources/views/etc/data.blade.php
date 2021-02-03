@extends('layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row-xl">
            <div class="jumbotron">
                <center>
                <a class="btn btn-primary mb-5" href="/form">Tambah Data Siswa</a>
                @if(session()->has('sukses'))
                    <div class="alert alert-success">
                    {{ session()->get('sukses') }}
                    </div>
                @endif

                @if(session()->has('sukses1'))
                    <div class="alert alert-success">
                    {{ session()->get('sukses1') }}
                    </div>
                @endif

                <table class="table table-hover" border="1">
                    <tr class="table-dark">
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th colspan="2"><center>Aksi</center></th>
                    </tr>
                    @foreach($siswa as $s)
                    <tr>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->telepon}}</td>
                        <td>{{$s->alamat}}</td>
                        <td><a href="/data/edit{{$s->id}}">Edit</a>
                        <td><a href="/data/hapus{{$s->id}}">Hapus</a>
                    </tr>
                    @endforeach
                </table>
                </center>
            </div>
        </div>
    </div>
@endsection
@extends('layout.master')
@section('content')
<a href="/form">Tambah Data Siswa</a>
<center>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
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
@endsection
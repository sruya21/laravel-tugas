@extends('layout.master')
@section('content')

<div class="jumbotron mt-5">
    <form action="{{route('inilogin')}}" method="post">
        @csrf
        <h2 class="text-center">Masuk</h2>       
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>      
    </form>
</div>

@endsection
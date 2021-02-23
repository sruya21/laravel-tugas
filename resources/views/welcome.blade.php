@extends('layout.master')
@section('content')
<center>
                @if(session()->has('login'))
                    <div class="alert alert-success">
                    {{ session()->get('login') }}
                    </div>
                @endif</center>
<div class="swiper-container jumbotron mt-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide animated fadeOutUp">SMKN1</div>
            <div class="animate_animated animate__fadeOutUp swiper-slide">Pasti</div>
            <div class="swiper-slide">Bisa</div>
        </div>
        <!-- Add Pagination -->
        <div class="#"></div>
    </div>
@endsection

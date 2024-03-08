@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')
<div class="blue-line"></div>
<div class="container" id="comic-details">
    <figure class="comic-figure">
        <span class="comic-img-details type">{{$comic['type']}}</span>
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" class="comic-img">
        <span class="comic-img-details gallery">View Gallery</span>
    </figure>
    <div id="comic-info">
        <div class="comic-description">
            <h2>{{$comic['title']}}</h2>
            <div class="comic-price-container">
                <div class="comic-price">
                    <p>U.S.Price: <span>{{$comic['price']}}</span></p>
                    <p>AVAILABLE </p>
                </div>
                <div class="comic-availability">Check Availability &#11167;</div>
            </div>
            <p class="comic-info-description">{{$comic['description']}}</p>
        </div>
        <figure class="ad-figure">
            Advertisement
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ad">
        </figure>
    </div>
</div>
@endsection
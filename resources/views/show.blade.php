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
        </div>
        <figure class="ad-figure">
            Advertisement
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ad">
        </figure>
    </div>
</div>
@endsection
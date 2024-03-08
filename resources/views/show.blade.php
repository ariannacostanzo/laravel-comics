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
<div id="comic-specialties">
    <div class="container" id="comic-talent-specs">
       <div class="comic-talent">
        <h3>Talent</h3>
        <div class="specialties-container">
            <p>Art by:</p>
            
        </div>
        <div class="specialties-container">
            <p>Written by:</p>
        </div>
        </div> 
        <div class="comic-specs">
            <h3>Specs</h3>
            <div class="specialties-container">
                <p>Series:</p>
            </div>
            <div class="specialties-container">
                <p>U.S. Price:</p>
            </div>
            <div class="specialties-container">
                <p>On Sale Date:</p>
            </div>
        </div>
        
    </div>
</div>
@endsection
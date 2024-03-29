@extends('layouts.main')

@section('title', $comic['series'])

@section('main-content')
<div class="blue-line"></div>
{{-- descrizione comic --}}
<div class="container smaller" id="comic-details">
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
{{-- proprietà del fumetto --}}
<div id="comic-specialties">
    <div class="container smaller" id="comic-talent-specs">
       <div class="comic-talent">
        <h3>Talent</h3>
        <div class="specialties-container">
            <p>Art by:</p>
            <div class="specialties-list">
                @foreach ($comic['artists'] as $artist)
                <span>{{$artist}}@if(!$loop->last)<span class="comma">,</span>@endif</span>
                @endforeach
            </div>   
        </div>
        <div class="specialties-container">
            <p>Written by:</p>
            <div class="specialties-list">
                @foreach ($comic['writers'] as $writer)
                <span>{{$writer}}@if(!$loop->last)<span class="comma">,</span>@endif</span>
                @endforeach
            </div>   
        </div>
        </div> 
        <div class="comic-specs">
            <h3>Specs</h3>
            <div class="specialties-container">
                <p>Series:</p>
                <span class="specialties-list type">{{$comic['series']}}</span>
            </div>
            <div class="specialties-container">
                <p>U.S. Price:</p>
                <span class="specialties-list normal-color">{{$comic['price']}}</span>
            </div>
            <div class="specialties-container">
                <p>On Sale Date:</p>
                <span class="specialties-list normal-color">{{$comic['sale_date']}}</span>
            </div>
        </div>
        
    </div>
</div>
{{-- merch --}}
<div id="merchandise-container" >
    <div class="container  smaller merch-container">
        <div class="merch">
            <p>Digital Comics</p>
            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Shop DC</p>
            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Comic shop locator</p>
            <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="merch-img">
        </div>
        <div class="merch">
            <p>Subscription</p>
            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="merch-img">
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('title', 'Comic')

@section('main-content')
<div class="blue-line"></div>
<div class="container" id="comic-details">
    <figure>
        <span class="comic-img-details type">{{$card['type']}}</span>
        <img src="{{$card['thumb']}}" alt="{{$card['series']}}" class="comic-img">
        <span class="comic-img-details gallery">View Gallery</span>
    </figure>
    <div>ciao</div>
</div>
@endsection
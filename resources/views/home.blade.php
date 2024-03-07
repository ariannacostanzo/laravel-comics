@extends('layouts.main')

@section('main-content')

<main>
    <div class="container">
        
          <span class="label">
            current series
          </span>

        <div class="row">
            @foreach (config('comics_cards') as $card)
                <div class="card">
                    <figure>
                        <img src="{{$card['thumb'] }}" :alt="{{$card['series']}}">
                    </figure>
                    <p>{{$card['series']}}</p>
                </div>
            @endforeach
            
        </div>

        <div class="btn-div">
          <button>LOAD MORE</button>
        </div>

      </div>
</main>

@endsection
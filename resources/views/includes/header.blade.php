<header>
    <div class="header container">
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </figure>
        <nav>
            <ul>
                {{-- @foreach (config('header_nav') as $nav)
                    <li><a href="{{ route($nav['url']) }}" class="{{$nav['current'] ? 'active' : ''}}">{{$nav['text']}}</a></li>
                @endforeach --}}
                <li><a href="{{route('characters')}}">characters</a></li>
                <li><a href="{{route('home')}}">comics</a></li>
                <li><a href="">movies</a></li>
                <li><a href="">tv</a></li>
                <li><a href="">games</a></li>
                <li><a href="">collectibles</a></li>
                <li><a href="">videos</a></li>
                <li><a href="">fans</a></li>
                <li><a href="">news</a></li>
                <li><a href="">shop</a></li>

            </ul>
        </nav>
    </div>
</header>
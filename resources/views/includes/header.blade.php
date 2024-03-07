<header>
    <div class="header container">
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </figure>
        <nav>
            <ul>
                @foreach (config('header_nav') as $nav)
                    <li><a href="{{$nav['url']}}" class="{{$nav['current'] ? 'active' : ''}}">{{$nav['text']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
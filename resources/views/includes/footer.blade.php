<div id="footer-top">
    <div class="footer-top container">
        <nav class="row">
            @foreach (config('footer_top_list') as $list)
                <div class="col">
                    <ul>
                        <h4>{{$list['list']['heading']}}</h4>
                        @foreach ($list['list']['listItems'] as $item)
                            <li><a href="#">{{$item}}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </nav>
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
        </figure>
    </div>
</div>

<div id="footer-bottom">
    <div class="footer-bottom container">
        <button>Sign-up now!</button>
        <div class="footer-social-container">
            <h4>FOLLOW US</h4>
            <nav>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
            </nav>
        </div>
    </div>
</div>
<?php

$header_nav = [
    [
        'text' => 'Characters',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Comics',
        'url' => '#',
        'current' => true,
    ],
    [
        'text' => 'Movies',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'TV',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Games',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Collectibles',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Videos',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Fans',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'News',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'Shop',
        'url' => '#',
        'current' => false,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- header --}}
    <header>
        <div class="header container">
            <figure>
                <img src="../assets/images/dc-logo.png" alt="">
            </figure>
            <nav>
                <ul>
                    @foreach ($header_nav as $nav)
                        
                    <li><a href="{{$nav['url']}}" class="{{$nav['current'] ? 'active' : ''}}">{{$nav['text']}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
    {{-- header --}}

    
</body>
</html>
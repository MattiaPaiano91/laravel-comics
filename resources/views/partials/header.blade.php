@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
        ],
        [
            'url' => '/characters',
            'label' => 'characters',
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
        ],
        
        [
            'url' => '/movies',
            'label' => 'movies',  
        ],
        [
            'url' => '/tv',
            'label' => 'tv',  
        ],
        [
            'url' => '/games',
            'label' => 'games',
        ],
        [
            'url' => '/collectibles',
            'label' => 'collectibles',
        ],
        [
            'url' => '/videos',
            'label' => 'videos',
        ],
        [
            'url' => '/fans',
            'label' => 'fans',
        ],
        [
            'url' => '/news',
            'label' => 'news',
        ],
        [
            'url' => '/shop',
            'label' => 'shop',
        ],
    ];
@endphp

<header class="row">
    <nav class="col">
        <ul class="d-flex align-items-center ">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
            @foreach ($links as $link)
                <li>
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

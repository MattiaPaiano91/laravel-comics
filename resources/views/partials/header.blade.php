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

<header class="row g-0 p-0">
    <nav class="col">
        <ul class="d-flex align-items-center p-0">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
            @foreach ($links as $link)
                <li>
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                </li>
            @endforeach
            <li>
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input placeholder="search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </li>
        </ul>
    </nav>
</header>

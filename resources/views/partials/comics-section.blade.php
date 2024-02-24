

<div class="col-12 comics-container">
    <div class="comics-section d-flex">
        @foreach ($comics as $comic)
           
            <div class="comic-card">
                <div class="card-img-box">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="text-box">
                    {{ $comic['series'] }}
                </div>
            </div>

        @endforeach
        <button>LOAD MORE</button>
    </div>
</div>

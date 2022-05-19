<main>
    <!-- container-Jumbotron  -->
    <div class="container-bg_main-top">
        <div class="label-main-top">CURRENT SERIES</div>
    </div>
    <!-- container Comics  -->
    <div class="container-bg-main-bottom">
        <div class="content-dc-series">
            @foreach ($comics as $key => $comic)
                <div class="card-fumetto">
                    <a href="singleCard{{ $key }}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                        <p>{{ $comic['title'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container-button">
            <button>LOAD MORE</button>
        </div>
    </div>
</main>

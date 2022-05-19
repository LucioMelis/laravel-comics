<main class="descriptionCard">
    <!-- container-Jumbotron  -->
    <div class="container-bg_main-top"></div>
    <!-- container Comics  -->
    <div class="banner-card">
        <div>
            <img src="{{ $comics['thumb'] }}" alt="ciao">
        </div>
    </div>
    <div class="container">
        <div class="description">
            <h2>{{ strtoupper($comics['title']) }}</h2>
            <div class="green-banner">
                <div class="status">
                    <p>
                        <span>U.S. Price: </span>
                        {{ $comics['price'] }}
                    </p>
                    <div>AVAILABLE</div>
                </div>
                <div class="check-status">Check Availability &#9662;</div>
            </div>
            <p class="description">{{ $comics['description'] }}</p>
        </div>
        <div class="advertisement">
            <h5>ADVERTISEMENT</h5>
            <img src="/images/advertise.jpg" alt="advertisement">
        </div>
    </div>
    <div class="more-infos">
        <div class="container">
            <div class="talent">
                <h3>Talent</h3>
                <div class="info">
                    <h5>Art by:</h5>
                    <p>
                        @foreach ($comics['artists'] as $artist)
                            <a href="#">
                                {{ $artist }}
                            </a>
                        @endforeach
                        {{-- {{ $card['artists'] }}</p> --}}
                </div>
                <div class="info">
                    <h5>Written by:</h5>
                    <p>
                        @foreach ($comics['writers'] as $writer)
                            <a href="#">
                                {{ $writer }}
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="info">
                    <h5>Series:</h5>
                    <p>
                        <a href="#">
                            {{ strtoupper($comics['series']) }}
                        </a>
                    </p>
                </div>
                <div class="info">
                    <h5>U.S. Price:</h5>
                    <p>{{ $comics['price'] }}</p>
                </div>
                <div class="info">
                    <h5>On Sale Date:</h5>
                    <p>{{ $comics['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
</main>

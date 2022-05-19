<main>
    <!-- container-Jumbotron  -->
    <div class="container-bg_main-top"></div>
    <!-- container Comics  -->
    <div class="banner-card">
        <div>
            <img src="{{ $comics['thumb'] }}" alt="ciao">
        </div>
    </div>
    <div class="container-bg-main-bottom-singleCard">
        <div class="content-dc-singleCard">
            <div class="comic-description">
                <h1>{{ $comics['title'] }}</h1>
                <div class="banner-price">
                    <p>U.S. Price: <span>{{ $comics['price'] }}</span></p>
                    <div>
                        <p>AVAILABLE</p>
                        <span class="check">Check Availability &#9662;</span>
                    </div>
                </div>
            </div>
            <div class="advertisement">ciao2</div>
        </div>
    </div>
</main>

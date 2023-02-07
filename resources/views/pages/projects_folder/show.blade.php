@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endpush

<section class="head-show main-container">
    <div class="title">
        <h1>North Restaurant Project</h1>
        <ul>
            <li>
                <a href="#" title="www.north-restaurant.ro" class="link">www.north-restaurant.ro</a>
            </li>
            <li>
                <p>Sushi-Tech team</p>
            </li>
            <li>
                <p>Nov, 2021</p>
            </li>
        </ul>
    </div>
    <a href="/free-consulting" title="Free Consulting" class="transparent-btn black-btn"><span>Free Consulting</span></a>
</section>

<section class="show-carousel main-container">

    <div class="owl-carousel owl-theme big-images">
        <div class="item" data-index="0">
            <img src="{{ asset('img/carousel-show.jpg') }}" alt="">
        </div>
        <div class="item" data-index="1">
            <img src="{{ asset('img/carousel-show.jpg') }}" alt="">
        </div>
        <div class="item" data-index="2">
            <img src="{{ asset('img/carousel-show.jpg') }}" alt="">
        </div>
        <div class="item" data-index="3">
            <img src="{{ asset('img/carousel-show.jpg') }}" alt="">
        </div>
    </div>

    <div class="owl-carousel owl-theme thumbs d-none d-lg-block">
        <div class="item" data-index="0">
            <img src="{{ asset('img/carousel-show-second.jpg') }}" alt="">
        </div>
        <div class="item" data-index="1">
            <img src="{{ asset('img/carousel-show-second.jpg') }}" alt="">
        </div>
        <div class="item" data-index="2">
            <img src="{{ asset('img/carousel-show-second.jpg') }}" alt="">
        </div>
        <div class="item" data-index="3">
            <img src="{{ asset('img/carousel-show-second.jpg') }}" alt="">
        </div>
    </div>

</section>

<section class="description-show">
    <div class="main-container">
        <h3>Project description:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        <h3>Used echnologies:</h3>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</li>
        </ul>
    </div>
</section>

<section class="hire-show">
    <div class="container-hire main-container">
        <h1>Do You like Our Work?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur elit lorem ipsum donec</p>
        <a href="hire-us" title="Hire Us" class="gradient-btn small-btn"><span>Hire us</span></a>
    </div>
</section>

<section class="other-projects-show">
    <div class="main-container">
        <h1>Other Projects</h1>
        <div class="cards">
            @include('layouts.components.card-popUp-project')
            @include('layouts.components.card-popUp-project')
        </div>
    </div>
</section>

@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pages/show.js') }}"></script>
@endpush
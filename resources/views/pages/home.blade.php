@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
@section('content')

@include('layouts.components.sidebar')

<section class="hero">
    <div class="top">
        <div class="carousel main-padding">
            <div class="counter-hero">
                <p><span class="current"></span><sup> /<span class="total"></span></sup></p>            
            </div>
            <div class="owl-carousel owl-theme owl-hero">
                <div class="item" data-index="0">
                    <div class="item-content">
                        <h2><span>Searching</span><span> Digital Inovation?</span><span> Here We Are</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="/about" title="More About Sushi-Tech" class="gradient-btn"><span>More About Sushi-Tech</span></a>
                    </div>
                </div>
                <div class="item" data-index="1">
                    <div class="item-content">
                        <h2><span>Searching</span><span> Digital Inovation?</span><span> Here We Are</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="/about" title="More About Sushi-Tech" class="gradient-btn"><span>More About Sushi-Tech</span></a>
                    </div>
                </div>
                <div class="item" data-index="2">
                    <div class="item-content">
                        <h2><span>Searching</span><span> Digital Inovation?</span><span> Here We Are</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="/about" title="More About Sushi-Tech" class="gradient-btn"><span>More About Sushi-Tech</span></a>
                    </div>
                </div>
            </div>
            @include('layouts.components.socials-link-svg')
        </div>
        @include('layouts.components.services-carousel')
    </div>
    <div class="d-flex d-lg-none img-mobile">
        <img src="{{ asset('img/hero-image.png') }}" alt="">
    </div>
</section>

<section class="about-section">
    <div class="container-fluid container-padding">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="first-container">
                    <div class="container-img">
                        <img src="{{ asset('img/north.png') }}" alt="">
                    </div>
                    <div class="info">
                        <h2>We are the boys that you need.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="second-container">
                    <div class="info">
                        <h2><span>We Bring The Extra</span><span> Touch In Your Business</span> </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-about">
        <h4>We are the boys that you need.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        <a href="/about" title="More About Us"><span>more about us</span> <i class="bi bi-arrow-right"></i></a>
    </div>
</section>

<section class="our-project">
    <div class="title">
        <h2>So...</h2>
        <h2>Wanna Know <span> How We Work</span>?</h2>
    </div>
    <div class="text">
        <div class="container-content">
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>
    </div>
    <div class="projects-example">
        <div class="owl-carousel owl-projects owl-theme">
            <div class="item">
                <div class="card-projects">
                    <div class="image-project">
                        <img class="img-fluid" src="{{ asset("img/wapp1.jpg") }}" alt="image">
                    </div>
                    <div class="content-card">
                        <span> Design & Develop project</span>
                        <h1 class="main-header"><span class="orange">AirClaim</span> website</h1>
                        <h1 class="main-header">platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do</p>
                        <a href="/projects" title="View Project">View Project
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-projects">
                    <div class="image-project">
                        <img class="img-fluid" src="{{ asset("img/wapp1.jpg") }}" alt="image">
                    </div>
                    <div class="content-card">
                        <span> Design & Develop project</span>
                        <h1 class="main-header"><span class="orange">AirClaim</span> website</h1>
                        <h1 class="main-header">platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do</p>
                        <a href="/projects" title="View Project">View Project
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-projects">
                    <div class="image-project">
                        <img class="img-fluid" src="{{ asset("img/wapp1.jpg") }}" alt="image">
                    </div>
                    <div class="content-card">
                        <span> Design & Develop project</span>
                        <h1 class="main-header"><span class="orange">AirClaim</span> website</h1>
                        <h1 class="main-header">platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do</p>
                        <a href="/projects" title="View Project">View Project
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/projects" title="See All Projects" class="white-btn large-btn"><span>See All Projects</span></a>
    </div>
</section>

<section class="hire-us">
    <div class="info">
        <div class="img-container">
            <img src="{{ asset('img/ilustratie2.png') }}" alt="">
        </div>
        <div class="text">
            <h2>
                <span>Now you're</span>
                <span>Asking yourself</span>
                <span>Why would you</span>
                <span>Hire us?</span>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do</p>
        </div>
    </div>
    <div class="carousel">
        <div class="owl-carousel owl-theme owl-hire">
            <div class="item">
                <div class="card-hire">
                    <div class="logo">
                        <svg width="71" height="80">
                            <use xlink:href="#card-hire">
                        </svg>
                    </div>
                    <h2>We are the boys that you need.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem</p>
                    <div class="count">01</div>
                </div>
            </div>
            <div class="item">
                <div class="card-hire">
                    <div class="logo">
                        <svg width="71" height="80">
                            <use xlink:href="#card-hire">
                        </svg>
                    </div>
                    <h2>We are the boys that you need.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem</p>
                    <div class="count">02</div>
                </div>
            </div>
            <div class="item">
                <div class="card-hire">
                    <div class="logo">
                        <svg width="71" height="80">
                            <use xlink:href="#card-hire">
                        </svg>
                    </div>
                    <h2>We are the boys that you need.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem</p>
                    <div class="count">03</div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-container">
        <a href="#" title="See More Reasons" class="gradient-btn"><span>See More Reasons</span></a>
    </div>
</section>

@include('layouts.components.subscribe')

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endpush


@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
@section('content')

@include('layouts.components.sidebar')

<section class="hero">
    <img class="layer d-none d-sm-block" src="{{ asset('img/laye-about.png') }}" alt="">
    <img class="layer d-lg-none" src="{{ asset('img/brush-background.png') }}" alt="">
    <div class="content">
        <h1 class="title-hero">Helping Others <span> Start Ups </span> & <span> Business </span> Succeed</h1>
        <p class="description-hero">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        <a href="#about-us" title="Discover more" class="transparent-btn large-btn"><span>Discover more <img src="{{ asset('img/bottom-arrow.png') }}" alt=""></span></a>
        @include('layouts.components.socials-link-svg')
    </div>
    @include('layouts.components.services-carousel')
    <img class="img-hero d-block d-lg-none" src="{{ asset('img/img-hero-about.png') }}" alt="">
</section>

<section class="about-us" id="about-us">
    <img src="{{ asset('img/Layer-gradient-948.png') }}" alt="" class="layer-about">
    <img src="{{ asset('img/Layer-gradient-948.png') }}" alt="" class="layer-about-img">
    <div class="content">
        <div class="heading large-container">
            <h2 class="title">We are the boys that you need. As you can see here</h1>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>

        <div class="description large-container">
            <div class="description-content">
                <h4>We are the boys that you need. From this day untill your last. </h4>
                <p class="title-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <h3>2019</h3>
                <p class="more-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <h3>+100</h3>
                <p class="more-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <h3>Thousands</h3>
                <p class="more-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>

        <div class="image large-container">
            <div class="img-container1">
                <img src="{{ asset('img/business-people-meeting-team-working-wooden-desk-hand-man-pointing-financial-documents.jpg') }}" alt="">
            </div>
            <div class="img-container2">
                <img src="{{ asset('img/teamwork-brainstorming-meeting-new-startup-project-workplace.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="our-values">
    <img class="about-background3 d-none d-lg-block" src="{{ asset('img/about-background3.png') }}" alt="">
    <img src="{{ asset('img/Layer-100.png') }}" alt="" class="layer-value">
    <div class="content">
        <div class="value large-container">
            <h2>Our<span> Values</span></h2>
            <p class="description"> sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            <div class="cards d-none d-lg-flex">
                <div class="card-content">
                    <h4>01</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="card-content">
                    <h4>02</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="card-content">
                    <h4>03</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="card-content">
                    <h4>04</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="card-content">
                    <h4>05</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <div class="card-content">
                    <h4>06</h4>
                    <p class="title">Website platforms</p>
                    <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme owl-our-value d-block d-lg-none">
                <div class="item">
                    <div class="card-content">
                        <h4>01</h4>
                        <p class="title">Website platforms</p>
                        <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card-content">
                        <h4>02</h4>
                        <p class="title">Website platforms</p>
                        <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card-content">
                        <h4>03</h4>
                        <p class="title">Website platforms</p>
                        <p class="description-card">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
            </div>
            <a href="/projects" title="See Our Projects" class="white-btn large-btn"><span>See Our Projects</span></a>
        </div>

        <div class="img-content">
            <img src="{{ asset('img/professional-programmer-working-late-dark-office.jpg') }}" alt="">
        </div>

    </div>
</section>

<section class="hire-us">
    <img src="{{ asset('img/about-background4.png') }}" alt="" class="about-background4 d-none d-lg-block">
    <img src="{{ asset('img/layer-center.png') }}" alt="" class="layer-hire-us">
    <div class="content large-container">
        <div class="hire">
            <h2>Now You’re Asking Yourself Why Would You Hire Us?</h2>
            <div class="cards d-none d-lg-flex">
                <div class="left">
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="right">
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/hire-image.png') }}" alt="" class="hire-img d-block d-lg-none">
            <div class="owl-carousel owl-theme owl-hire d-block d-lg-none">
                <div class="item">
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="item">
                    <div class="card-content">
                        <svg width="80" height="76">
                            <use xlink:href="#card-about"></use>
                        </svg>
                        <p class="title">Web Developement</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
            <a href="/contact" title="Contact Us" class="gradient-btn"><span>Contact Us</span></a>
        </div>

        <div class="why-us large-container">
            <div class="left">
                <h2>Why <span>Us</span>?</h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunec s</p>
                <div class="logo-container">
                    <div class="logo-about-page">
                        <svg width="462" height="74">
                            <use xlink:href="#logo-about-page"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="cards">
                    <div class="card-why-us">
                        <p class="count">01</p>
                        <p class="title-card">Lorem ipsum dolor sit consectetur elit, sed do</p>
                        <p class="description-card">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-why-us">
                        <p class="count">02</p>
                        <p class="title-card">Lorem ipsum dolor sit consectetur elit, sed do</p>
                        <p class="description-card">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-why-us">
                        <p class="count">03</p>
                        <p class="title-card">Lorem ipsum dolor sit consectetur elit, sed do</p>
                        <p class="description-card">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.components.subscribe')

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pages/about.js') }}"></script>
@endpush
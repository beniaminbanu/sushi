@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('content')

@include('layouts.components.sidebar')

<section class="hero">
    <img class="layer" src="{{ asset('img/laye-about.png') }}" alt="">
    <div class="content">
        <h1>Have Questions? <span>Let’s Talk</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur elit asilum et donec alLorem ipsum dolor sit amet</p>
        <div class="btns">
            <a href="/contact" title="Contact Us" class="gradient-btn large-btn"><span>Contact Us</span></a>
            <a href="/hire-us" title="Let’s Talk - Hire Us" class="transparent-btn large-btn"><span>Let’s Talk - Hire Us</span></a>
        </div>
        @include('layouts.components.socials-link-svg')
    </div>
    <img src="{{ asset('img/contact-hero-image2.png') }}" alt="" class="hero-image d-lg-none">
    @include('layouts.components.services-carousel')
</section>


<section class="about">
    <div class="content">
        <div class="heading">
            <h2>We Bring The Extra Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum</p>
        </div>

        <div class="help large-container">
            <div class="card-help">
                <img src="{{ asset('img/card-contact1.png') }}" alt="">
                <h3>Help Center</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href="#" title="Get in touch">Get in touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="card-help">
                <img src="{{ asset('img/card-contact2.png') }}" alt="">
                <h3>Help Center</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href="#" title="Get in touch">Get in touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="card-help">
                <img src="{{ asset('img/card-contact3.png') }}" alt="">
                <h3>Help Center</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <a href="#" title="Get in touch">Get in touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <img src="{{ asset('img/Layer-gradient-948.png') }}" alt="" class="layer">
    <div class="content large-container">
        <h2 class="d-none d-lg-block">Contact <span> Us</span></h2>
        <h2 class="d-lg-none">Our <span> Values</span></h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing</p>
        <div class="list">
            <div class="select">
                <div>
                    <p class="title">Get a 24/7 Support</p>
                    <p class="about-this">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet</p>
                </div>
                <a href="#" title="Get in touch">Get in touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="select">
                <div>
                    <p class="title">Become a Sushi-Tech Partner</p>
                    <p class="about-this">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet</p>
                </div>
                <a href="#" title="Learn more">Learn more
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="select">
                <div>
                    <p class="title">Discover Solutions</p>
                    <p class="about-this">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet</p>
                </div>
                <a href="#" title="Read more">Read more
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="select">
                <div>
                    <p class="title">PR & Comunications</p>
                    <p class="about-this">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet</p>
                </div>
                <a href="#" title="Read more">Read more
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="select">
                <div>
                    <p class="title">Get a 24/7 Support</p>
                    <p class="about-this">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet</p>
                </div>
                <a href="#" title="Get in touch">Get in touch
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="form-area">
    <div class="large-container">
        <h2>Give Us A Message</h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        <form action="">
            <div class="heading">
                <svg width="150" height="168">
                    <use xlink:href="#logo-contact-page"></use>
                </svg>
                <p class="second">I would like to work with you, but</p>
                <p class="first">I have some questions</p>
            </div>
            <div class="container-inputs">
                <input id="name" type="name" placeholder="Name & Surname" class="contact-input right">
                <input id="text" type="text" placeholder="Company name" class="contact-input left">
            </div>
            <div class="container-inputs">
                <input id="email" type="email" placeholder="Email" class="contact-input right">
                <input id="tel" type="tel" placeholder="Phone" class="input-phone contact-input left" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="container-inputs">
                <textarea id="description" placeholder="Describe your questions in a few words..." class="contact-input" name="description"></textarea>
            </div>
            <div class="container-checkbox">
                <input type="checkbox" id="check">
                <label for="check">I agree to receive occasional newsletters about Suhsi-Tech digi</label>
            </div>
            <button type="submit" class="gradient-btn-fix large-btn">Send Message</button>
            <p class="message">Ready to rock the world together?</p>
        </form>
    </div>
</section>

<section class="details">
    <img class="details-background d-none d-lg-block" src="{{ asset('img/contact-background5_1.png') }}" alt="">
    <img class="details-background d-lg-none" src="{{ asset('img/contact-background-mobile5_1.png') }}" alt="">
    <div class="large-container">
        <h2 class="d-none d-lg-block">Contact <span>Details</span></h2>
        <h2 class="d-lg-none">Our <span>Values</span></h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do consectetur adipiscing elit, sed do</p>
    </div>
    <div class="large-container-100">
        <div class="cards">
            <div class="card-details">
                <svg width="88" height="88">
                    <use xlink:href="#phone-details"></use>
                </svg>
                <p class="function">Consultant</p>
                <p class="name">Gabriel Tunescu</p>
                <a href="mailto:contact@sushi-tech.ro" title="contact@sushi-tech.ro" class="email">contact@sushi-tech.ro</a>
                <p class="phone">Telefon: <a href="tel:+40 720 100 200" title="+40 720 100 200">+40 720 100 200</a></p>
            </div>
            <div class="card-details">
                <svg width="88" height="88">
                    <use xlink:href="#phone-details"></use>
                </svg>
                <p class="function">Consultant</p>
                <p class="name">Gabriel Tunescu</p>
                <a href="mailto:contact@sushi-tech.ro" title="contact@sushi-tech.ro" class="email">contact@sushi-tech.ro</a>
                <p class="phone">Telefon: <a href="tel:+40 720 100 200" title="+40 720 100 200">+40 720 100 200</a></p>
            </div>
        </div>
    </div>
    <div class="large-container">
        <p class="terms">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do , consectetur adipiscing elit, sed do
            <a href="/terms-and-conditions" title="Terms of Use">Terms of Use</a>
        </p>
    </div>
    <img class="layer-details" src="{{ asset('img/Layer-details.png') }}" alt="">
</section>

@include('layouts.components.subscribe')

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pages/contact.js') }}"></script>
@endpush
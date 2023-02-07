@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/free_consulting.css') }}">
@endpush
@section('content')

<section class="hero">
    <div class="contact">
        <h1>Free Consulting</h1>
        <p class="description">Lorem ipsum dolor sit amet, consectetur elit</p>
        <form action="">
            <input id="name" type="name" class="contact-input padding-small" placeholder="Name & Surname">
            <input id="email" type="email" class="contact-input padding-small" placeholder="Email">
            <input id="tel" type="tel" class="contact-input padding-small" placeholder="Phone Number"  maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            <input id="text" type="text" class="contact-input padding-small" placeholder="Company name">
            <textarea id="description" placeholder="Describe your questions in a few words..." class="contact-input" name="description"></textarea>
            <div class="container-checkbox">
                <input type="checkbox" id="check">
                <label for="check">
                    By checking this, I agree to Sushi-Tech contacting me by email and phone, using automated technology & according to the 
                    <a href="/privacy-policy" title="Sushi-Tech Policy">Sushi-Tech Policy</a>
                    , to my contact details.
                </label>
            </div>
            <button type="submit" class="gradient-btn-fix large-btn">Send Message</button>
        </form>
        <p class="terms">
            By clicking submit, I agrree 
            <a href="/terms-and-conditions" title="Sushi-Tech Terms of Use">Sushi-Tech Terms of Use</a>.
        </p>
    </div>
    <div class="img-container"></div>
</section>

<section class="rating">
    <div class="large-container">
        <div class="card-rating">
            <div class="width-div">
                <h3>10 website platforms</h3>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="card-rating">
            <div class="width-div">
                <h3>+130 clients</h3>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
        <div class="card-rating">
            <div class="width-div">
                <h3>4.8 client rating</h3>
                <p>Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/pages/free_consulting.js') }}"></script>
@endpush
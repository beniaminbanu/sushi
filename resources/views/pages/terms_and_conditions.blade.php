@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/terms.css') }}">
@endpush
@section('content')

<section class="terms_and_conditions">
    <div class="large-container content">
        <h1>Terms and conditions</h1>
        <h2>Second title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, rerum?</p>
        <p>Lorem, ipsum.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus asperiores a, rem cum harum error nulla nemo nobis explicabo earum. Sapiente at hic voluptates atque impedit voluptatum voluptatem repudiandae animi! Doloribus cumque cum, porro possimus ullam qui cupiditate quasi iure.</p>
        <h2>Second title</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam quibusdam ex reprehenderit eum maxime quaerat unde, nostrum consequatur odit voluptatibus, libero nobis repellendus beatae, nemo earum! Enim iste fuga hic repudiandae aliquid. Similique optio repellendus a nulla nemo ratione placeat aut commodi, vitae eveniet explicabo. Laudantium distinctio magnam fugiat!</p>
        <h2>Second title</h2>
        <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit.</li>
            <li>Lorem ipsum dolor sit amet consectetur.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti?</li>
            <li>Lorem.</li>
        </ul>
    </div>
</section>

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/js/owl.carousel.min.js') }}"></script>
@endpush
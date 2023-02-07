@extends("layouts.main")
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush
@section('content')

@include('layouts.components.sidebar')

<section class="hero">
    <img class="gradient" src="{{ asset('img/layer-gradient.png') }}" alt="">
    <div class="title">
        <h1>This Is What<span> We Do</span></h1>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
    </div>
    <div class="bar-hero d-none d-lg-block">
        <div class="content">
            <ul>
                <li>
                    <p class="option">Websites</p>
                </li>
                <li>
                    <p class="option">Web Platforms</p>
                </li>
                <li>
                    <p class="option">Web Apps</p>
                </li>
                <li>
                    <p class="option">Mobile Apps</p>
                </li>
            </ul>
            <p class="all-projects">All projects</p>
        </div>
    </div>
    <div class="bar-mobile d-block d-lg-none">
        <select class="select-products" name="state">
            <option></option>  {{-- for placeholder --}}
            <option value="AL">Option 1</option>
            <option value="WY">Option 2</option>
            <option value="WY">Option 3</option>
            <option value="WY">Option 4</option>
        </select>
    </div>
</section>

<section class="about-us">
    <div class="content">
        <div class="title">
            <h1>All Projects</h1>
        </div>
        <div class="container-fluid container-custome p-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.card-popUp-project')
                </div>
            </div>
        </div>
        <img class="layer-gradient d-none d-lg-block" src="{{ asset('img/Layer-gradient-948.png') }}" alt="">
        <div class="btn-container">
            <button type="button" class="transparent-btn-fix large-btn">Load More Projects</button>
        </div>
    </div>
</section>

@include('layouts.components.subscribe')

<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <i class="bi bi-x close-modal-icon" data-bs-dismiss="modal" aria-label="Close"></i>

            <div class="modal-body">
               @include('pages.projects_folder.show')
            </div>

            <div class="modal-footer">
                <button type="button" class="close-modal" data-bs-dismiss="modal">
                    <img src='{{ asset('img/left-arrow1.png') }}'>
                    Back to Project Page
                </button>
            </div>

        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script src="{{ asset('js/pages/projects.js') }}"></script>
@endpush
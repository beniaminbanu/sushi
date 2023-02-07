<section class="subscribe">
    <div class="content">
        <div class="img-container">
            <img src="{{ asset('img/subscribe-section-img.png') }}" alt="">
        </div>
        <h1 class="d-none d-lg-flex"><span>Always Ready To Take Your</span><span> Business Further</span></h1>
        <h1 class="d-flex d-lg-none"><span>Searching</span><span> Digital Inovation?</span><span> Here We Are</span></h1>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <form action="">
            <div class="position-relative">
                <input type="text" class="subscribe-input" id="subscribe">
                <label for="subscribe">Your Email Address</label>
            </div>
            <div class="btn-container">
                <button type="submit" title="Subscribe Now" class="gradient-btn-fix">Subscribe Now</button>
                {{-- <div class="after"></div> --}}
            </div>
        </form>
    </div>
</section>

@push('scripts')
    
    <script>

        $(document).ready(function () {

            $('#subscribe').keyup(function () {
                if ($(this).val()) {
                    $(this).addClass('subscribe-active');
                } else {
                    $(this).removeClass('subscribe-active');
                }
            })

        })

    </script>

@endpush
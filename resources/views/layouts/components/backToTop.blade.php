<button type="button" class="buttonUp">
    <i class="bi bi-arrow-up"></i>
</button>

@push('scripts')
    
    <script>

        $(document).ready(function(){

            $(window).scroll(function() {
                $(window).scrollTop() > 400 ? 
                    $('.buttonUp').addClass('active-buttonUp') 
                    : $('.buttonUp').removeClass('active-buttonUp')
            });

            $('.buttonUp').click(function(){
                window.scrollTo(0, 0);
                
            })

        })

    </script>

@endpush
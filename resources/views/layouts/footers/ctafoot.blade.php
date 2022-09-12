<footer class="py-2 ctafoot">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6">
                <h2 class="title2 text-warning">{{ $title }}</h2>
                <div class="text-light desc1">
                    {{ $desc }}
                </div>
                <br />
                <a href="{{ $link }}" class="btn btn-xl btn-secondary mb-4">{{ $cta }}</a>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="footimg imgcta imgcta2">
                    <lottie-player src="{{ asset('argon') }}/animation/foot2.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>

        </div>
    </div>

</footer>
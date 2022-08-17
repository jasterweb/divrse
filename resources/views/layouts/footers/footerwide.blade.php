<footer class="py-5 footlanding">
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
                <div class="image-box imgcta">
                    <lottie-player src="{{ asset('argon') }}/animation/foot.json" background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>

        </div>
    </div>

    <div class="copyr">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-light">Copyright © 2022 Divrse - All Rights Reserved</div>
            </div>
        </div>
    </div>

</footer>

@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Candidates')
@section('content')
    <div class="header bg-primary pt-9 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center justify-content-between">

                    <div class="col-lg-5 col-md-6">
                        <div class="image-box heroimage">
                            <lottie-player src="{{ asset('argon') }}/animation/kedua.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-cyan text-left">Where jobs find you</h1>
                        <div class="text-light py-3">Divrse is on a mission: getting great talent, like yourself, matched with awesome opportunities at
                            companies who want to take responsibility and diversify their workforce at all levels.</div>
                        <br />
                        <a href="#" class="btn btn-secondary">Find A Job</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="py-5 footlanding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title2 text-warning">Get started today.</h2>
                    <div class="text-light desc1 py-4">
                        Finding the right job is life-changing. Let Divrse <br class="d-md-block d-none" />
                        help you find your next big opportunity.
                    </div>
                    <br />
                    <a href="#" class="btn btn-xl btn-secondary">Sign Up</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box imgcta">
                        <img src="{{ asset('argon') }}/home/footcta.png">
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
@endsection
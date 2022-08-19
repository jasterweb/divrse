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

    @include('layouts.footers.footer', [
        'title' => 'Get started today.',
        'desc' => 'Finding the right job is life-changing. Let Divrse help you find your next big opportunity.',
        'link' => route('get'),
        'cta' => 'See It in Action'
    ])

@endsection
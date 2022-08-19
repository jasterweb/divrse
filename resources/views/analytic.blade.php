@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Analytics')
@section('content')
    <div class="header bg-white pt-md-9 pt-8 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            {{-- <img src="{{ asset('argon') }}/home/mainsolution.png" class="basehero"> --}}
                            <lottie-player src="{{ asset('argon') }}/animation/ketiga.json" background="transparent" speed="1" loop autoplay></lottie-player>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-md-0 mt-3">
                        <h1 class="titlesect text-left">Diversity Analytics</h1>
                        <span class="desc1">Uncover diversity disparities, identify biases, and track progress to hit DE&I goals with confidence with Divrse's analytics dashboard.</span>
                        <br />
                        <div class="center-small">
                            <a href="#" class="btn btn-xl btn-secondary mt-4 ">See it in action</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-cyan text-left mb-3">Data Overview</h2>
                    <p class="text-light">
                        Get a birds-eye view of all your diversity recruitment numbers in one place. 
                        See how many open positions you have, how many hires you've made, and which 
                        metrics need a little boost.
                    </p>
                    <ul class="text-light p-0 dash">
                        <li>Review actionable metrics that help measure your progress</li>
                        <li>Implement new strategies to increase recruitment success</li>
                        <li>Manage high performing positions and revise others accordingly</li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 pt-md-0 pt-3">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/employer3.png" style="width: 82%;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

               <div class="col-lg-6 col-md-6 pb-md-0 pb-4">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/analytics/turn.png">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <h2 class="title5 text-danger mb-3">Turn insights into<br/>action with full-funnel<br/>analytics</h2>
                    <p class="text-dark">
                        Optimize your recruiting process by cutting, slicing, and dicing 
                        the data depending on the insights your organization is looking for. 
                        Plus, drill down to view analytics for individual candidates, iob 
                        postings, or events to hone in on the most relevant insights.
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-primary text-left mb-3">Actionable Data</h2>
                    <p>
                        It's all about the data. Optimize your recruiting strategy, analyze 
                        your progress all while eliminating biases in your hiring process 
                        with tailor-made reports, actionable insights and recommendations
                    </p>
                    <ul class="listitem">
                        <li>Analyze the performance Of your recruitment efforts</li>
                        <li>Track the data that matters most and share it across teams</li>
                        <li>Make tangible decisions based on customized data</li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 pt-md-0 pt-3">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/analytics/action.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6 pb-md-0 pb-4">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/analytics/kpi.png">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-cyan text-left mb-3">KPI Management</h2>
                    <p class="text-dark">
                        All your essential data in one place. Set real hiring goals and 
                        benchmarks that you can revise anytime. Look at your Success over 
                        time, reset your goals as needed, keeping a close eye on diversity 
                        recruiting.
                    </p>
                    <ul class="listitem">
                        <li>Monitor efficiency in recruiting processes</li>
                        <li>Keep up with revenue saved on sourcing costs</li>
                        <li>Optimize your time-to-hire timeline strategically</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.footers.footerbig', [
        'title' => 'Stop setting diversity goals. Start meeting them.',
        'desc' => 'We\'ll design a custom diversity hiring solution for your business.',
        'link' => route('get'),
        'cta' => 'See it in Action'
    ])
    
@endsection
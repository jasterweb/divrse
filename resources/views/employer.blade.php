@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Employer Community')
@section('content')
    <div class="header bg-primary pt-5 pb-6">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="titlesect text-left text-white">Employer Communities</h1>
                        <span class="desc1 text-light">Employer communities are the future of hiring, Harness the power of community to authentically engage with talent,
                            save time and amplify your employer brand and open roles.
                        </span>
                        <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">See It in Action</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box heroimage">
                            {{-- <img src="{{ asset('argon') }}/page/hero-employer.png" class="basehero"> --}}
                            <lottie-player src="{{ asset('argon') }}/animation/pertama.json" background="transparent" speed="1" loop autoplay></lottie-player>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
             
                    <h2 class="title3 text-dark mb-3">Your <b>Company</b>, Your <b>Image</b></h2>
                    <p class="text-dark">Broadcast your DEI efforts to underrepresented candidates by utilizing a dedicated and branded mini-site that
                        shares all of your inclusive efforts and sets the expectation for potential candidates. Think facebook meets diversity hiring.
                    </p>
                    <ul class="listitem">
                        <li>Introduce your inclusive practices to qualified talent</li>
                        <li>Shine a detailed light on the DEI landscape at your organization</li>
                        <li>Share personal examples of employee representation and success stories</li>
                        <li>Host events, job fairs and workshops</li>
                    </ul>
                </div>
               <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/employer1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Recruiting Events</h2>
                        <p class="text-center w600 m0-auto">Create engaging, relevant, and impactful recruiting events with our end-to-end event solution to maximize your ROI.
                            Essential for virtual, physical, and hybrid events.</p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="wcuslide">
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/page/employer/impress.png">
                                <h4>Impress & showcase your employer brand</h4>
                                <p>Create robust event pages to highlight your talent brand. You’ll also have full control over invites, pages, photo galleries, agendas, speaker overviews, and more for every event</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/page/employer/scale.png">
                                <h4>Scale your events, reach new audiences</h4>
                                <p>Attract diverse talent by promoting your events to our qualified pool of candidates directly on our platform to expand your reach and grow RSVPs. It’s as simple as a couple of clicks.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/page/employer/manage.png">
                                <h4>Manage events<br/>end-to-end</h4>
                                <p>Streamline your entire event management process from creating events to sending bulk invites, to automating post-event follow-ups. Create, run, and duplicate fully branded events in minutes, not days.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
             
                    <h2 class="titlesect text-cyan text-left mb-3">Interact with Group<br/>of talent in seconds</h2>
                    <p class="text-light">Continually share open roles, update folks on processes, publicize company news,
                        ask or answer questions, and more. Think of your community as a targeted social channel.
                    </p>
                </div>
               <div class="col-lg-6 col-md-6">
                    <div class="image-box introimg">
                        <img src="{{ asset('argon') }}/page/employer2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6">
                <div class="image-box introimg">
                    <img src="{{ asset('argon') }}/page/employer3.png">
                </div>
            </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-cyan text-left mb-3">Connect Authentically<br/>& With Purpose</h2>
                    <p class="text-light">Continually share open roles, update folks on processes, publicize company news,
                        ask or answer questions, and more. Think of your community as a targeted social channel.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
             
                    <h2 class="titlesect mb-3 text-left">White-Labeled Candidate Experience</h2>
                    <p class="text-dark mt-5 mb-5">Enhance your candidate experience with a personalized<br/>rejection letter completed with a company-branded<br/>message
                        and send them off with further professional<br/>opportunities at Divrse’s partnering companies.
                    </p>
                    <ul class="listitem">
                        <li>Redefine candidate experience with a graceful<br/>farewell</li>
                        <li>Display how your company cares by extending<br/>urther opportunities</li>
                        <li>Reflect your employer brand with the company’s<br/>lingo and tone, enhancing your brand’s visual<br/>standards.</li>
                    </ul>
                </div>
               <div class="col-lg-6 col-md-6">
                    <div class="image-box img-md">
                        <img src="{{ asset('argon') }}/page/employer4.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cyan pt-6 pb-6">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6">
                <div class="image-box introimg">
                    <img src="{{ asset('argon') }}/page/employer5.png">
                </div>
            </div>
                <div class="col-lg-6 col-md-6">
                    <h2 class="titlesect text-left mb-3">Keep your brand<br/>top of mind<br/>all year round</h2>
                    <p class="text-dark">Create a community of mega-candidates by bringing together groups of talent to meet,
                        connect, and help one another-all under the umbrella that is your org.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footers.footerbig', [
        'title' => 'Ready to stop talking about diversity recruitment and start doing it?',
        'desc' => 'Contact Divrse Today',
        'link' => route('get'),
        'cta' => 'See It in Action'
    ])
    @include('layouts.footers.footer')

@endsection

@section('script')
@endsection



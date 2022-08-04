@extends('layouts.landing', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-primary pb-0 pt-8 ">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="title1">Unlock DE&I<br/>in the<br/>workplace.</h1>
                        <span class="text-light desc1">Divrse connects high quality, underrepresented talent, with world-class companies that care about (value) diversity, equity, and inclusion.</span>
                        <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="image-box">
                            <img src="{{ asset('argon') }}/home/hero1.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(133, 167, 195, 1)" offset="0%"></stop>
                <stop stop-color="rgba(133, 167, 195, 1)" offset="100%"></stop></linearGradient></defs>
                <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,80L34.3,80C68.6,80,137,80,206,73.3C274.3,67,343,53,411,66.7C480,80,549,120,617,133.3C685.7,147,754,133,823,120C891.4,107,960,93,1029,93.3C1097.1,93,1166,107,1234,116.7C1302.9,127,1371,133,1440,140C1508.6,147,1577,153,1646,153.3C1714.3,153,1783,147,1851,146.7C1920,147,1989,153,2057,153.3C2125.7,153,2194,147,2263,146.7C2331.4,147,2400,153,2469,130C2537.1,107,2606,53,2674,33.3C2742.9,13,2811,27,2880,46.7C2948.6,67,3017,93,3086,96.7C3154.3,100,3223,80,3291,83.3C3360,87,3429,113,3497,126.7C3565.7,140,3634,140,3703,133.3C3771.4,127,3840,113,3909,103.3C3977.1,93,4046,87,4114,96.7C4182.9,107,4251,133,4320,133.3C4388.6,133,4457,107,4526,93.3C4594.3,80,4663,80,4731,93.3C4800,107,4869,133,4903,146.7L4937.1,160L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(192, 122, 132, 1)" offset="0%"></stop><stop stop-color="rgba(192, 122, 132, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,40L34.3,36.7C68.6,33,137,27,206,33.3C274.3,40,343,60,411,80C480,100,549,120,617,126.7C685.7,133,754,127,823,130C891.4,133,960,147,1029,130C1097.1,113,1166,67,1234,56.7C1302.9,47,1371,73,1440,83.3C1508.6,93,1577,87,1646,80C1714.3,73,1783,67,1851,66.7C1920,67,1989,73,2057,93.3C2125.7,113,2194,147,2263,143.3C2331.4,140,2400,100,2469,93.3C2537.1,87,2606,113,2674,133.3C2742.9,153,2811,167,2880,150C2948.6,133,3017,87,3086,73.3C3154.3,60,3223,80,3291,80C3360,80,3429,60,3497,70C3565.7,80,3634,120,3703,143.3C3771.4,167,3840,173,3909,150C3977.1,127,4046,73,4114,66.7C4182.9,60,4251,100,4320,116.7C4388.6,133,4457,127,4526,103.3C4594.3,80,4663,40,4731,43.3C4800,47,4869,93,4903,116.7L4937.1,140L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(239, 139, 141, 1)" offset="0%"></stop><stop stop-color="rgba(239, 139, 141, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,20L34.3,26.7C68.6,33,137,47,206,50C274.3,53,343,47,411,50C480,53,549,67,617,73.3C685.7,80,754,80,823,70C891.4,60,960,40,1029,46.7C1097.1,53,1166,87,1234,86.7C1302.9,87,1371,53,1440,43.3C1508.6,33,1577,47,1646,53.3C1714.3,60,1783,60,1851,80C1920,100,1989,140,2057,153.3C2125.7,167,2194,153,2263,146.7C2331.4,140,2400,140,2469,126.7C2537.1,113,2606,87,2674,73.3C2742.9,60,2811,60,2880,66.7C2948.6,73,3017,87,3086,103.3C3154.3,120,3223,140,3291,123.3C3360,107,3429,53,3497,50C3565.7,47,3634,93,3703,123.3C3771.4,153,3840,167,3909,160C3977.1,153,4046,127,4114,110C4182.9,93,4251,87,4320,73.3C4388.6,60,4457,40,4526,43.3C4594.3,47,4663,73,4731,76.7C4800,80,4869,60,4903,50L4937.1,40L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z">
                </path>
        </svg>

    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-cyan text-2rem font-weight-800">Uplifting underrepresented professionals</h2>
                    <p>Divrse’s talent pool includes women, visible minorities, immigrants and members of the 2SLQBTQ+ community. These candidates are vetted, qualified and interviewed by our partner
                        companies before they are invited to join our talent pool. Each applicant is actively seeking new opportunities and ready to get to work.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-pink text-2rem font-weight-800">Diversity recruiting.<br/>Powered by Technology.</h2>
                    <p>Divrse’s solution is proven to increase workforce diversity and the number of applicants from underrepresented backgrounds. Our diversity-first
                        recruitment solution focuses entirely on bringing qualified and underrepresented candidates directly to the top of your hiring funnel.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-10">
                <div class="col-lg-6 col-md-6 pr-5">
                    <h2 class="text-blue text-2rem font-weight-800">Diversity won't wait</h2>
                    <p>From startups to Fortune 500 companies, employers of all sizes use Divrse to find skilled and underrepresented talent for a wide
                        variety of employment opportunities including remote, part-time and full-time, permanent and contract roles. </p> <br/>
                        <a href="#" class="btn btn-xl btn-secondary mt-4">Get Started</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box">
                        <img src="{{ asset('argon') }}/home/intro1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cyan">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect">In The Press</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-light">Divrse in numbers</h2>
                </div>
            </div>
        </div>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(133, 167, 195, 1)" offset="0%"></stop>
            <stop stop-color="rgba(133, 167, 195, 1)" offset="100%"></stop></linearGradient></defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,80L34.3,80C68.6,80,137,80,206,73.3C274.3,67,343,53,411,66.7C480,80,549,120,617,133.3C685.7,147,754,133,823,120C891.4,107,960,93,1029,93.3C1097.1,93,1166,107,1234,116.7C1302.9,127,1371,133,1440,140C1508.6,147,1577,153,1646,153.3C1714.3,153,1783,147,1851,146.7C1920,147,1989,153,2057,153.3C2125.7,153,2194,147,2263,146.7C2331.4,147,2400,153,2469,130C2537.1,107,2606,53,2674,33.3C2742.9,13,2811,27,2880,46.7C2948.6,67,3017,93,3086,96.7C3154.3,100,3223,80,3291,83.3C3360,87,3429,113,3497,126.7C3565.7,140,3634,140,3703,133.3C3771.4,127,3840,113,3909,103.3C3977.1,93,4046,87,4114,96.7C4182.9,107,4251,133,4320,133.3C4388.6,133,4457,107,4526,93.3C4594.3,80,4663,80,4731,93.3C4800,107,4869,133,4903,146.7L4937.1,160L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(192, 122, 132, 1)" offset="0%"></stop><stop stop-color="rgba(192, 122, 132, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,40L34.3,36.7C68.6,33,137,27,206,33.3C274.3,40,343,60,411,80C480,100,549,120,617,126.7C685.7,133,754,127,823,130C891.4,133,960,147,1029,130C1097.1,113,1166,67,1234,56.7C1302.9,47,1371,73,1440,83.3C1508.6,93,1577,87,1646,80C1714.3,73,1783,67,1851,66.7C1920,67,1989,73,2057,93.3C2125.7,113,2194,147,2263,143.3C2331.4,140,2400,100,2469,93.3C2537.1,87,2606,113,2674,133.3C2742.9,153,2811,167,2880,150C2948.6,133,3017,87,3086,73.3C3154.3,60,3223,80,3291,80C3360,80,3429,60,3497,70C3565.7,80,3634,120,3703,143.3C3771.4,167,3840,173,3909,150C3977.1,127,4046,73,4114,66.7C4182.9,60,4251,100,4320,116.7C4388.6,133,4457,127,4526,103.3C4594.3,80,4663,40,4731,43.3C4800,47,4869,93,4903,116.7L4937.1,140L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(239, 139, 141, 1)" offset="0%"></stop><stop stop-color="rgba(239, 139, 141, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,20L34.3,26.7C68.6,33,137,47,206,50C274.3,53,343,47,411,50C480,53,549,67,617,73.3C685.7,80,754,80,823,70C891.4,60,960,40,1029,46.7C1097.1,53,1166,87,1234,86.7C1302.9,87,1371,53,1440,43.3C1508.6,33,1577,47,1646,53.3C1714.3,60,1783,60,1851,80C1920,100,1989,140,2057,153.3C2125.7,167,2194,153,2263,146.7C2331.4,140,2400,140,2469,126.7C2537.1,113,2606,87,2674,73.3C2742.9,60,2811,60,2880,66.7C2948.6,73,3017,87,3086,103.3C3154.3,120,3223,140,3291,123.3C3360,107,3429,53,3497,50C3565.7,47,3634,93,3703,123.3C3771.4,153,3840,167,3909,160C3977.1,153,4046,127,4114,110C4182.9,93,4251,87,4320,73.3C4388.6,60,4457,40,4526,43.3C4594.3,47,4663,73,4731,76.7C4800,80,4869,60,4903,50L4937.1,40L4937.1,200L4902.9,200C4868.6,200,4800,200,4731,200C4662.9,200,4594,200,4526,200C4457.1,200,4389,200,4320,200C4251.4,200,4183,200,4114,200C4045.7,200,3977,200,3909,200C3840,200,3771,200,3703,200C3634.3,200,3566,200,3497,200C3428.6,200,3360,200,3291,200C3222.9,200,3154,200,3086,200C3017.1,200,2949,200,2880,200C2811.4,200,2743,200,2674,200C2605.7,200,2537,200,2469,200C2400,200,2331,200,2263,200C2194.3,200,2126,200,2057,200C1988.6,200,1920,200,1851,200C1782.9,200,1714,200,1646,200C1577.1,200,1509,200,1440,200C1371.4,200,1303,200,1234,200C1165.7,200,1097,200,1029,200C960,200,891,200,823,200C754.3,200,686,200,617,200C548.6,200,480,200,411,200C342.9,200,274,200,206,200C137.1,200,69,200,34,200L0,200Z">
            </path>
    </svg>
    </section>

    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-light">It’s a win-win situation</h2>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-blue pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-light">The Proof is in the numbers</h2>
                </div>
            </div>
        </div>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 160" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
            <linearGradient id="sw-gradient-5" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(246, 109, 109, 0.4588235294117647)" offset="0%"></stop>
                <stop stop-color="rgba(246, 109, 109, 0.4588235294117647)" offset="100%"></stop></linearGradient></defs>
                <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-5)" d="M0,48L34.3,58.7C68.6,69,137,91,206,98.7C274.3,107,343,101,411,90.7C480,80,549,64,617,72C685.7,80,754
                ,112,823,125.3C891.4,139,960,133,1029,114.7C1097.1,96,1166,64,1234,45.3C1302.9,27,1371,21,1440,29.3C1508.6,37,1577,59,1646,80C1714.3,101,1783,
                123,1851,109.3C1920,96,1989,48,2057,48C2125.7,48,2194,96,2263,117.3C2331.4,139,2400,133,2469,109.3C2537.1,85,2606,43,2674,29.3C2742.9,16,2811,32,
                2880,34.7C2948.6,37,3017,27,3086,40C3154.3,53,3223,91,3291,106.7C3360,123,3429,117,3497,104C3565.7,91,3634,69,3703,53.3C3771.4,37,3840,27,3909,32C3977.1,37,
                4046,59,4114,69.3C4182.9,80,4251,80,4320,88C4388.6,96,4457,112,4526,112C4594.3,112,4663,96,4731,77.3C4800,59,4869,37,4903,26.7L4937.1,16L4937.1,160L4902.9,160C4868.6,
                160,4800,160,4731,160C4662.9,160,4594,160,4526,160C4457.1,160,4389,160,4320,160C4251.4,160,4183,160,4114,160C4045.7,160,3977,160,3909,160C3840,160,3771,160,3703,160C3634.3,
                160,3566,160,3497,160C3428.6,160,3360,160,3291,160C3222.9,160,3154,160,3086,160C3017.1,160,2949,160,2880,160C2811.4,160,2743,160,2674,160C2605.7,160,2537,160,2469,160C2400,
                160,2331,160,2263,160C2194.3,160,2126,160,2057,160C1988.6,160,1920,160,1851,160C1782.9,160,1714,160,1646,160C1577.1,160,1509,160,1440,160C1371.4,160,1303,160,1234,160C1165.7,
                160,1097,160,1029,160C960,160,891,160,823,160C754.3,160,686,160,617,160C548.6,160,480,160,411,160C342.9,160,274,160,206,160C137.1,160,69,160,34,160L0,160Z"></path>
            <defs>
                <linearGradient id="sw-gradient-6" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(246, 109, 109, 1)" offset="0%"></stop><stop stop-color="rgba(246, 109, 109, 1)"
                    offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-6)" d="M0,16L34.3,34.7C68.6,53,137,91,206,88C274.3,85,
                    343,43,411,32C480,21,549,43,617,61.3C685.7,80,754,96,823,88C891.4,80,960,48,1029,32C1097.1,16,1166,16,1234,29.3C1302.9,43,1371,69,1440,66.7C1508.6,64,1577,32,1646,32C1714.3,32,
                    1783,64,1851,74.7C1920,85,1989,75,2057,72C2125.7,69,2194,75,2263,74.7C2331.4,75,2400,69,2469,66.7C2537.1,64,2606,64,2674,69.3C2742.9,75,2811,85,2880,90.7C2948.6,96,3017,96,3086,
                    104C3154.3,112,3223,128,3291,133.3C3360,139,3429,133,3497,114.7C3565.7,96,3634,64,3703,48C3771.4,32,3840,32,3909,34.7C3977.1,37,4046,43,4114,37.3C4182.9,32,4251,16,4320,
                    16C4388.6,16,4457,32,4526,32C4594.3,32,4663,16,4731,13.3C4800,11,4869,21,4903,26.7L4937.1,32L4937.1,160L4902.9,160C4868.6,160,4800,160,4731,160C4662.9,160,4594,160,4526,
                    160C4457.1,160,4389,160,4320,160C4251.4,160,4183,160,4114,160C4045.7,160,3977,160,3909,160C3840,160,3771,160,3703,160C3634.3,160,3566,160,3497,160C3428.6,160,3360,160,3291,
                    160C3222.9,160,3154,160,3086,160C3017.1,160,2949,160,2880,160C2811.4,160,2743,160,2674,160C2605.7,160,2537,160,2469,160C2400,160,2331,160,2263,160C2194.3,160,2126,160,2057,
                    160C1988.6,160,1920,160,1851,160C1782.9,160,1714,160,1646,160C1577.1,160,1509,160,1440,160C1371.4,160,1303,160,1234,160C1165.7,160,1097,160,1029,160C960,160,891,160,823,160C754.3,
                    160,686,160,617,160C548.6,160,480,160,411,160C342.9,160,274,160,206,160C137.1,160,69,160,34,160L0,160Z"></path></svg>
    </section>

    
    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <h2 class="titlesect text-primary">Why companies and<br/>
                        recruiters use Divrse</h2>
                        <p class="text-center w600 m0-auto">Our all-in-one platform helps companies and recruiters source diversified,
                            pre-screened and  qualified candidates with confidence, while reducing time-to-hire and increasing net-promoter-score. </p>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="wcuslide">
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Qualified andengaged</h3>
                                <p>Every candidate in Divrse’s talent pool is vetted and interviewed by our partner companies before they are invited to join our talent pool. Each applicant is actively seeking new opportunities and ready to get to work.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Streamline the screening process</h3>
                                <p>Companies using Divrse boast a 16% reduction in time-to-hire by adding highly qualified candidates into their talent pipeline.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Transparent, AI-based technology</h3>
                                <p>Divrse’s unified solution syncs with your preferred ATS and plays an integral part of your daily workflow so you can sit back and watch the applications flow in.</p>
                            </div>
                        </div>
                        <div class="wcuitem">
                            <div class="wcuwrap">
                                <img src="{{ asset('argon') }}/home/wcu.png">
                                <h3>Elevated candidate experience</h3>
                                <p>Divrse empowers companies to deliver empathy throughout the hiring process and assist those who were not a good fit for your team as they seek a new role. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                    <h2 class="titlesect text-primary">DE&I Resources</h2>
                    <a href="">View All Posts</a>
                   
            </div>
            <div class="row align-items-center justify-content-between">
               
                    @forelse ($articles as $article)
                    <div class="wrapper">
                        <img src="{{$article->getFirstMediaUrl('document')}}" / width="120px">
                        <div class="content">
                            <h2>{{$article->title}}</h2>
                            <p>{{strip_tags($article->desc)}}</p>
                            <button class="btn btn-primary">Learn More</button>
                        </div>
                    </div>
                    @empty
                
                    @endforelse
                
            </div>
        
        </div>
    </section>
@endsection



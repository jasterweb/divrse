<nav class="navbar px-0 sticky-top bg-primary navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('argon') }}/logo/logow.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <h3>Menu</h3>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto align-items-md-center">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="/">
                        <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'landing' ? 'border-bottom' : '' }}">{{ __('Home') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link nav-link-icon" href="{{ route('solution') }}" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">

                            <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'solution' ? 'border-bottom' : '' }}">{{ __('Solutions') }}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item" href="{{ route('talent') }}">Talent Stream</a>
                            <a class="dropdown-item" href="{{ route('analytic') }}">Analytics</a>
                            <a class="dropdown-item" href="{{ route('employer') }}">Employer Community</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('candidate') }}">
                        <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'candidate' ? 'border-bottom' : '' }}">{{ __('Candidates') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('blog') }}">
                        <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'blog' ? 'border-bottom' : '' }}">{{ __('Blog') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('about') }}">
                        <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'about' ? 'border-bottom' : '' }}">{{ __('About') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('get') }}">
                        <span class="nav-link-inner--text pb-1 {{ Route::currentRouteName() == 'get' ? 'border-bottom' : '' }}">{{ __('Get Started') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header
    class="sticky_menu {{ \Route::is('details') || \Route::is('vehicles_filter') || \Route::is('contact') ? 'bg-dark position-relative' : '' }}"
    id="sticky_navbar">
    <nav class="navbar navbar-expand-md px-4 p-md-0">
        <div class="container-lg">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"><i
                    class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse ms-md-5" id="navbar">
                <ul class="navbar-nav ms-auto nav_list">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('site.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vehicles_filter') }}">{{ __('site.all_vehicles') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('vehicles_filter') }}?type=commercial">{{ __('site.commercial_vehicles') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('car_plan') }}">{{ __('site.billionaire_car_plan') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">{{ __('site.faq') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (\Session::has('lang'))
                                {{ session('lang') == 'eng' ? 'English' : 'Dutch' }}
                            @else
                                English
                            @endif
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('setlocale', 'eng') }}">English</a></li>
                            <li><a class="dropdown-item" href="{{ route('setlocale', 'nl') }}">Dutch</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

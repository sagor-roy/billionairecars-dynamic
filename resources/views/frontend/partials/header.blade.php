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
                <ul class="navbar-nav ms-auto nav_list align-items-md-center">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('site.home') }}</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vehicles_filter') }}">{{ __('site.all_vehicles') }}
                            <i class="fas fa-sharp d-none d-md-inline fa-solid fa-caret-down fa-sm ms-1"></i>
                        </a>
                        <button type="button" class="toggler d-md-none"><i class="fas fa-plus"></i></button>
                        <ul class="dropdown__menu main d-none d-md-inline">
                            <li><a href="{{ route('vehicles_filter') }}?type=commercial">Commercial Occassions</a></li>
                            <li><a href="{{ route('vehicles_filter') }}?type=business">Business Occassions</a></li>
                            <li><a href="{{ route('vehicles_filter') }}?type=rental">Billionair Rental</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('vehicles_filter') }}?type=commercial">{{ __('site.commercial_vehicles') }}</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('car_plan') }}">{{ __('site.billionaire_car_plan') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">{{ __('site.faq') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vehicles_filter') }}?type=premium">Premium Cars</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle"
                            style="background-color: #e4cd66;color: #fff;padding: 5px 13px;border-radius: 15px;"
                            href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (\Session::has('lang'))
                                {{ session('lang') == 'en' ? 'English' : 'Spanish' }}
                            @else
                                English
                            @endif
                        </a>

                        <ul class="dropdown-menu p-0 mt-2" style="min-width: 7em" aria-labelledby="dropdownMenuLink">
                            <li class="m-0"><a class="dropdown-item text-dark"
                                    href="{{ route('setlocale', 'en') }}">English</a></li>
                            <li class="m-0"><a class="dropdown-item text-dark"
                                    href="{{ route('setlocale', 'nl') }}">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<header class="sticky_menu {{ \Route::is('details') || \Route::is('vehicles_filter') ? 'bg-dark position-relative':'' }}" id="sticky_navbar">
    <nav class="navbar navbar-expand-md px-4 p-md-0">
        <div class="container-lg">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse ms-md-5" id="navbar">
                <ul class="navbar-nav ms-auto nav_list">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vehicles_filter') }}">All Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vehicles_filter') }}?type=commercial">Commercial Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Billionaire Car Plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
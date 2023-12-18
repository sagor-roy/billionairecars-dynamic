<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add this meta tag in the head section of your HTML -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Billionaire Car</title>
    <link rel="icon" href="{{ asset('assets/img/icon.jpeg') }}" sizes="192x192" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css">
    @stack('style')
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/venobox.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swipper.css') }}" />
</head>

<body>
    <div class="loader" id="loading_animation">
        <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(2 1)" stroke="#002742" fill="none" fill-rule="evenodd" stroke-linecap="round"
                stroke-linejoin="round">
                <path fill="#eed97d" class="car__body"
                    d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01"
                    stroke-width="3" />
                <ellipse class="car__wheel--left" stroke-width="3.2" fill="#eab83c" cx="83.493" cy="30.25"
                    rx="6.922" ry="6.808" />
                <ellipse class="car__wheel--right" stroke-width="3.2" fill="#eab83c" cx="46.511" cy="30.25"
                    rx="6.922" ry="6.808" />
                <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="3" />
                <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="3" />
                <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="3" />
            </g>
        </svg>
        <p>Loading....</p>
    </div>

    @include('frontend.partials.header')

    @yield('content')

    <button id="backToTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    @include('frontend.partials.footer')

    <!-- Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    @stack('script')
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script>
        new WOW().init();

        window.addEventListener('load', function() {
            document.getElementById('loading_animation').style.display = 'none';
        });
    </script>

</body>

</html>

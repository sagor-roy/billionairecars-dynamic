<footer class="footer px-3 mt-5 px-sm-0">
    <div class="container">
        <div class="row pb-1">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3 text-center text-md-start" data-wow-duration="1s">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo.png') }}"
                                width="100" alt="logo">
                        </a>
                    </div>


                    <div class="col-md-5" data-wow-duration="1.1s">
                        <ul class="footer_list">
                            <li><a href="{{ route('vehicles_filter') }}"><i class="fas fa-circle"></i> {{ __('site.all_vehicles') }}</a></li>
                            <li><a href="{{ route('vehicles_filter') }}?type=commercial"><i class="fas fa-circle"></i> {{ __('site.commercial_vehicles') }}</a></li>
                            <li><a href="{{ route('car_plan') }}"><i class="fas fa-circle"></i> {{ __('site.billionaire_car_plan') }}
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4" data-wow-duration="1.2s">
                        <ul class="footer_list">
                            <li><a href="{{ route('faq') }}"><i class="fas fa-circle"></i> {{ __('site.faq') }}
                            </a></li>
                            <li><a href="{{ route('contact') }}"><i class="fas fa-circle"></i> {{ __('site.contact') }}
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center mt-5 mt-md-0">
                <div class="row">
                    <div class="col-md-6" data-wow-duration="1.3s">
                        <p class="footer_pera">Dit is de plaats om premium auto's te kopen als particulier of bedrijf.</p>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0" data-wow-duration="1.4s">
                        <div class="text-md-end text-center">
                            <h2><span style="color: #E4CD66;">+31 6 498 100 44
                            </span></h2>
                            <p>info@billionairecars.nl</p>
                            <p>Parallelweg 120, 1948 NN, Beverwijk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <p><a href="https://billionairecars.nl" class="text-warning" data-wow-duration="1s">billionairecars.nl</a> © All rights reserved
        </p>
    </div>
</footer>
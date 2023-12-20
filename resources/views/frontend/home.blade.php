@extends('frontend.layouts.app')

@section('content')
    <section class="wrap">
        <div class="video-bg">
            <div id="player"></div>
        </div>
        <div class="content">
            <div class="container">
                <h1 class="head_title" data-wow-duration="1s">{!! $home_slider->header !!}</h1>
                <p data-wow-duration="1.3s">{{ $home_slider->title }}</p>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-7" data-wow-duration="1.5s">
                        <div class="card p-3 px-4 filter">
                            <form action="{{ route('vehicles_filter') }}" id="filterForm">
                                <div class="row">
                                    <div class="col-md-10 pe-md-1">
                                        <div class="row">
                                            <div class="col-md-4 px-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="brand" required
                                                    class="form-control position-relative select2">
                                                    <option selected disabled>{{ __('site.brand') }}</option>
                                                    @foreach ($brands as $item)
                                                        <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 px-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="model" disabled
                                                    class="form-control position-relative select2">
                                                    <option selected disabled>{{ __('site.model') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 ps-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="price" class="form-control select2 position-relative">
                                                    <option selected disabled>{{ __('site.price') }}</option>
                                                    <option value="30000">&#8364;30,000</option>
                                                    <option value="50000">&#8364;50,000</option>
                                                    <option value="75000">&#8364;75,000</option>
                                                    <option value="100000">&#8364;1,000,00</option>
                                                    <option value="1500000">&#8364;1,50,0000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 px-md-1 mt-2 mt-md-0">
                                        <button style="cursor: not-allowed" class="filer_form_button" id="filterButton"
                                            disabled><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- <ul class="cars_item_list d-none d-md-flex">
                            <li>
                                <a href="#">
                                    <span><i class="fas fa-car"></i></span>
                                    <p>Sedn</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span><i class="fas fa-car"></i></span>
                                    <p>Cupe</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span><i class="fas fa-car"></i></span>
                                    <p>Sub</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span><i class="fas fa-car"></i></span>
                                    <p>Hatchback</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span><i class="fas fa-car"></i></span>
                                    <p>Convertible</p>
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-lg">
            <div class="head_title wow animate__slideInLeft" data-wow-duration="1s">
                <h4 class="mb-2 d-inline-block">{{ __('site.title_1') }}</h4>
                <h1>{{ __('site.title_2') }}</h1>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block wow animate__slideInLeft" data-wow-duration="1s">
                        <a href="{{ route('details', $premium_products?->first()?->slug) }}">
                            <div class="card border-0 product_card">
                                <div class="product-image">
                                    <img src="{{ asset('uploads/product/' . $premium_products?->first()?->thumbnail) }}"
                                        class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h2 class="product_title">{{ $premium_products?->first()?->title }}</h2>
                                    <hr class="my-4">
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>{{ $premium_products?->first()?->year }}</li>
                                            <li>{{ $premium_products?->first()?->brands->brand }}</li>
                                            <li>{{ $premium_products?->first()?->color }}</li>
                                            <li>{{ $premium_products?->first()?->fuel }}</li>
                                            <li>{{ $premium_products?->first()?->conditions }}</li>
                                        </ul>
                                        <h4>&#8364;{{ $premium_products?->first()?->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 mb-3 d-block d-lg-none wow animate__slideInLeft"
                                data-wow-duration="1s">
                                <a href="{{ route('details', $premium_products?->first()?->slug) }}">
                                    <div class="card border-0 sm_card product_card">
                                        <div class="product-image">
                                            <img src="{{ asset('uploads/product/' . $premium_products?->first()?->thumbnail) }}"
                                                class="img-fluid d-block" alt="img">
                                        </div>
                                        <div class="card_body">
                                            <h6 class="product_title">{{ $premium_products?->first()?->title }}</h6>
                                            {{-- <h3 class="sm_price">$63,000</h3> --}}
                                            <hr style="margin: 10px 0px">
                                            <div class="product_item_price">
                                                <ul class="product_item_list">
                                                    <li>{{ $premium_products?->first()?->year }}</li>
                                                    <li>{{ $premium_products?->first()?->brands->brand }}</li>
                                                    <li>{{ $premium_products?->first()?->color }}</li>
                                                </ul>
                                                <h6>&#8364;{{ $premium_products?->first()?->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @foreach ($premium_products as $key => $item)
                                @if (!$loop->first)
                                    <div class="col-sm-6 col-lg-6 mb-3 wow animate__flipInX"
                                        data-wow-duration="1.{{ $key+1 }}s">
                                        <a href="{{ route('details', $item->slug) }}">
                                            <div class="card border-0 sm_card product_card">
                                                <div class="product-image">
                                                    <img src="{{ asset('uploads/product/' . $item->thumbnail) }}"
                                                        class="img-fluid d-block" alt="img">
                                                </div>
                                                <div class="card_body">
                                                    <h6 class="product_title">{{ $item?->title }}</h6>
                                                    {{-- <h3 class="sm_price">$63,000</h3> --}}
                                                    <hr style="margin: 10px 0px">
                                                    <div class="product_item_price">
                                                        <ul class="product_item_list">
                                                            <li>{{ $item?->year }}</li>
                                                            <li>{{ $item?->brands->brand }}</li>
                                                            <li>{{ $item?->color }}</li>
                                                        </ul>
                                                        <h6>&#8364;{{ $item?->price }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-lg-6 mt-4 social_media_with_btn  wow animate__slideInRight"
                            data-wow-duration="1s">
                                <a href="{{ route('vehicles_filter') }}?type=premium"
                                    class="add_list_button d-md-none text-center w-100"> {{ __('site.view_all') }}</a>
                            </div>
                        </div>
                    </div>`
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mt-md-0">
        <div class="container-lg">
            <p class="d-md-none d-block text-center pb-3 w-100 wow animate__slideInLeft" data-wow-duration="1s">{{ __('site.follow_us') }}</p>
            <div class="social_media_with_btn">
                <ul class="wow animate__slideInLeft" data-wow-duration="1s">
                    <li class="d-none d-md-block">{{ __('site.follow_us') }}</li>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
                <a href="{{ route('vehicles_filter') }}?type=premium" class="add_list_button d-none d-md-block wow animate__slideInRight" data-wow-duration="1s"> {{ __('site.view_all') }}</a>
            </div>
        </div>
    </section>

    <section class="mt-5 popular_makes">
        <div class="container-lg">
            <div class="head_title wow animate__slideInLeft" data-wow-duration="1s">
                <h1>{{ __('site.commercial_vehicles') }}</h1>
            </div>

            <div class="mt-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($commercial_products as $key => $item)
                            <div class="swiper-slide wow animate__slideInLeft" data-wow-duration="1.{{ $key+1 }}s">
                                <a href="{{ route('details', $item->slug) }}">
                                    <div class="card border-0 sm_card product_card">
                                        <div class="product-image">
                                            <img src="{{ asset('uploads/product/' . $item->thumbnail) }}"
                                                class="img-fluid d-block" alt="img">
                                        </div>
                                        <div class="card_body">
                                            <h6 class="product_title">{{ $item?->title }}</h6>
                                            {{-- <h3 class="sm_price">$63,000</h3> --}}
                                            <hr style="margin: 10px 0px">
                                            <div class="product_item_price">
                                                <ul class="product_item_list">
                                                    <li>{{ $item?->year }}</li>
                                                    <li>{{ $item?->brands->brand }}</li>
                                                    <li>{{ $item?->color }}</li>
                                                </ul>
                                                <h6>&#8364;{{ $item?->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="bottom-nav mt-0 wow animate__slideInLeft" data-wow-duration="1s">
                            <div class="button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="button-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <div class="social_media_with_btn wow animate__slideInRight" data-wow-duration="1s">
                            <a href="{{ route('vehicles_filter') }}?type=commercial"
                                class="add_list_button d-none d-md-block"> {{ __('site.view_all') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="head_title mb-4 wow animate__slideInLeft" data-wow-duration="1s">
                        <h1>{{ __('site.faq_2') }}
                        </h1>
                    </div>
                    <div class="accordion accordion-flush" id="faqlist">
                        @foreach ($faqs as $key=> $item)
                            <div class="accordion-item wow animate__slideInLeft" data-wow-duration="1.{{ $key+1 }}s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-{{ $item->id }}">
                                        {{ $item->title }}
                                    </button>
                                </h2>
                                <div id="faq-content-{{ $item->id }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {{ $item->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            // Event listener for brand select changes
            $('select[name="brand"], select[name="price"]').on('change', function() {
                // Check if a brand is selected
                let isBrandSelected = $(this).val() !== null;
                // Enable or disable the submit button based on brand selection
                $('#filterButton').prop('disabled', !isBrandSelected).css('cursor', isBrandSelected ?
                    'pointer' : 'not-allowed');
            });
        });

        // Load the YouTube IFrame Player API asynchronously
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Global variable to store the player instance
        var player;

        // Function called when the YouTube API is ready
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '100%',
                videoId: "{{ $home_slider->video_code }}",
                playerVars: {
                    'autoplay': 1,
                    'mute': 1,
                    'playsinline': 1,
                    'loop': 1,
                    'controls': 0,
                    'disablekb': 1
                },
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        // Function called when the player is ready
        function onPlayerReady(event) {
            // You can do additional actions here if needed
        }
    </script>
    @include('frontend.script')
@endpush

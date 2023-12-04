@extends('frontend.layouts.app')

@section('content')
    <section class="wrap">
        <div class="video-bg">
            <iframe
                src="https://www.youtube.com/embed/3mhtR0dPkBk?autoplay=1&mute=1&playsinline=1&loop=1&controls=0&disablekb=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="content">
            <div class="container">
                <h1 class="head_title">
                    Billionaire <span>Cars</span>
                </h1>
                <p>Enjoy Luxury Alone</p>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-7">
                        <div class="card p-3 px-4 filter">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-10 pe-md-1">
                                        <div class="row">
                                            <div class="col-md-4 px-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="" class="form-control position-relative select2">
                                                    <option value="">All Makes</option>
                                                    <option value="">All Models</option>
                                                    <option value="">Max Price</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 px-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="" class="form-control position-relative select2">
                                                    <option value="">All Models</option>
                                                    <option value="">All Models</option>
                                                    <option value="">Max Price</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 ps-md-1 mt-2 mt-md-0 position-relative">
                                                <select name="" class="form-control position-relative select2">
                                                    <option value="">Max Price</option>
                                                    <option value="">All Makes</option>
                                                    <option value="">All Makes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 px-md-1 mt-2 mt-md-0">
                                        <button class="filer_form_button"><i class="fas fa-search"></i></button>
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
            <div class="head_title">
                <h4 class="mb-2 d-inline-block">Handy picked</h4>
                <h1>Premium</h1>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <a href="{{ route('details',$premium_products?->first()?->slug) }}">
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
                                        <h4>${{ $premium_products?->first()?->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 mb-3 d-block d-lg-none">
                                <a href="{{ route('details',$premium_products?->first()?->slug) }}">
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
                                                <h6>${{ $premium_products?->first()?->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @foreach ($premium_products as $key => $item)
                                @if (!$loop->first)
                                    <div class="col-sm-6 col-lg-6 mb-3">
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
                                                        <h6>${{ $item?->price }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-lg-6 mt-4 social_media_with_btn">
                                <a href="#" class="add_list_button d-md-none text-center w-100"> View 29 New</a>
                            </div>
                        </div>
                    </div>`
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mt-md-0">
        <div class="container-lg">
            <p class="d-md-none d-block text-center pb-3 w-100">Follow Us</p>
            <div class="social_media_with_btn">
                <ul>
                    <li class="d-none d-md-block">Follow Us</li>
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
                <a href="#" class="add_list_button d-none d-md-block"> View 29 New</a>
            </div>
        </div>
    </section>

    <section class="mt-5 popular_makes">
        <div class="container-lg">
            <div class="head_title">
                <h1>Commercial Vehicles</h1>
            </div>

            <div class="mt-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($commercial_products as $key => $item)
                            <div class="swiper-slide">
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
                                                <h6>${{ $item?->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="bottom-nav">
                        <div class="button-prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="button-next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="head_title mb-4">
                        <h1>Frequently Asked Questions
                        </h1>
                    </div>
                    <div class="accordion accordion-flush" id="faqlist">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    What is Lorem Ipsum?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    Why do we use it?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    Where does it come from?
                                </button>
                            </h2>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

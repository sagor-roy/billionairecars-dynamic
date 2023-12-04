@extends('frontend.layouts.app')

@section('content')
    <section class="my-4">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Vehicles Details</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $details->title }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section>
        <div class="container-lg">
            <div class="row">
                <div class="col-md-7">
                    <div class="title_price d-md-none">
                        <h1>{{ $details->title }}</h1>
                        <ul>
                            <li>{{ $details->year }}</li>
                            <li><i class="fas fa-circle"></i> {{ $details->brands->brand }}</li>
                            <li><i class="fas fa-circle"></i> {{ $details->fuel }}</li>
                        </ul>
                        <hr>
                    </div>

                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            @php
                                $gallerys = explode(',', $details->gallery);
                            @endphp
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item"
                                    href="{{ asset('uploads/product/'. $details->thumbnail) }}" data-gall="myGallery">
                                    <img src="{{ asset('uploads/product/' . $details->thumbnail) }}" alt="product image" />
                                </a>
                            </div>
                            @foreach ($gallerys as $item)
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item"
                                        href="{{ asset('uploads/product/gallery/'. $item) }}" data-gall="myGallery">
                                        <img src="{{ asset('uploads/product/gallery/' . $item) }}" alt="product image" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-details-thumbs slider-thumbs-1">
                            <div class="sm-image"><img src="{{ asset('uploads/product/' . $details->thumbnail) }}"
                                alt="product image thumb" />
                        </div>
                            @foreach ($gallerys as $item)
                                <div class="sm-image"><img src="{{ asset('uploads/product/gallery/' . $item) }}"
                                        alt="product image thumb" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="title_price d-md-none">
                        <h2 class="mt-3">${{ $details->price }}</h2>
                    </div>

                    <div class="short_description mt-5 d-md-none shadow-sm">
                        <table class="table">
                            <tr>
                                <td>Make:</td>
                                <td>BMW</td>
                            </tr>
                            <tr>
                                <td>Model:</td>
                                <td>8-Serie</td>
                            </tr>
                            <tr>
                                <td>Color:</td>
                                <td>Grey</td>
                            </tr>
                            <tr>
                                <td>Drive Type:</td>
                                <td>Front Wheel Drive</td>
                            </tr>
                            <tr>
                                <td>Transmission:</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Condition:</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>Fuel Type:</td>
                                <td>Petrol</td>
                            </tr>
                            <tr>
                                <td>Engine Size:</td>
                                <td>3.8L</td>
                            </tr>
                            <tr>
                                <td>Doors:</td>
                                <td>2-door</td>
                            </tr>
                            <tr>
                                <td>Cylinders:</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>VIN:</td>
                                <td>1C4TJPBA1CD907950</td>
                            </tr>
                        </table>

                    </div>

                    <div class="contact_with_admin d-md-none">
                        <a href="#" class="call"><i class="fas fa-phone-alt"></i>
                            123 *** ***- reveal</a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i> Chat Via Whatsapp</a>
                        <a href="#" class="message">Send Message</a>
                    </div>

                    @if ($details->short_description)
                    <div class="description mt-5">
                        <h4 class="mb-3">Description</h4>
                        {!! $details->short_description !!}
                    </div>
                    @endif

                    {{-- <div class="tag mt-5 shadow-sm">
                        <ul>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Backup Camera</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Brake Assist</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Blind-spot warning</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Brake</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Parking assist systems
                                </a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Brake Assist</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Forward-collision warning</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Brake Assist</a></li>
                        </ul>
                    </div> --}}

                    <div class="feature mt-5">
                        <h4 class="mb-3">Accessories</h4>
                        {!! $details->accessories !!}
                    </div>

                    <div class="video mt-2">
                        <h4 class="mb-3">Video</h4>
                        <iframe class="shadow-sm rounded-3" src="https://www.youtube.com/embed/3mhtR0dPkBk?autoplay=1"
                            title="YouTube video player" frameborder="0" width="100%" height="400"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>


                    <div class="map mt-5">
                        <h4 class="mb-3">Location</h4>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14604.928473341397!2d90.36276364999999!3d23.7747473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1700238332679!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="title_price d-none d-md-block">
                        <h1>{{ $details->title }}</h1>
                        <ul>
                            <li>{{ $details->year }}</li>
                            <li><i class="fas fa-circle"></i> {{ $details->brands->brand }}</li>
                            <li><i class="fas fa-circle"></i> {{ $details->fuel }}</li>
                        </ul>
                        <hr>
                        <h2>${{ $details->price }}</h2>
                    </div>

                    <div class="short_description d-none d-md-block shadow-sm">
                        <table class="table">
                            <tr>
                                <td>Make:</td>
                                <td>BMW</td>
                            </tr>
                            <tr>
                                <td>Model:</td>
                                <td>8-Serie</td>
                            </tr>
                            <tr>
                                <td>Color:</td>
                                <td>Grey</td>
                            </tr>
                            <tr>
                                <td>Drive Type:</td>
                                <td>Front Wheel Drive</td>
                            </tr>
                            <tr>
                                <td>Transmission:</td>
                                <td>Automatic</td>
                            </tr>
                            <tr>
                                <td>Condition:</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>Fuel Type:</td>
                                <td>Petrol</td>
                            </tr>
                            <tr>
                                <td>Engine Size:</td>
                                <td>3.8L</td>
                            </tr>
                            <tr>
                                <td>Doors:</td>
                                <td>2-door</td>
                            </tr>
                            <tr>
                                <td>Cylinders:</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>VIN:</td>
                                <td>1C4TJPBA1CD907950</td>
                            </tr>
                        </table>

                    </div>

                    <div class="contact_with_admin d-none d-md-block">
                        <a href="#" class="call"><i class="fas fa-phone-alt"></i>
                            123 *** ***- reveal</a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i> Chat Via Whatsapp</a>
                        <a href="#" class="message">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact__form mt-5">
        <div class="container-lg">
            <h4 class="mb-4">Send Message</h4>
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Name">
                            </div>
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Email">
                            </div>
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Phone">
                            </div>
                            <div class="col-12 my-2">
                                <textarea name="" class="form-control shadow-sm" placeholder="Message" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="contact_card_first shadow-sm">
                        <div class="contact__text">
                            <h5>John Doe</h5>
                            <p class="customer_advisor">Customer Advisor</p>
                            <p> <i class="fas fa-map-marker-alt map__icon"></i> 70 Washington Street
                            </p>
                        </div>
                        <img src="./img/avatar.jpeg" width="70" alt="avatar" class="rounded-circle">
                    </div>
                    <div class="contact_card_second"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-lg">
            <h4 class="mb-4">Related Listing</h4>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card border-0 sm_card product_card">
                                <div class="product-image">
                                    <img src="./img/5-335x186.jpeg" class="img-fluid d-block" alt="img">
                                </div>
                                <div class="card_body">
                                    <h6 class="product_title">Lorem ipsum dolor sit.</h6>
                                    <h3 class="sm_price">$63,000</h3>
                                    <hr>
                                    <div class="product_item_price">
                                        <ul class="product_item_list">
                                            <li>2021</li>
                                            <li>Diesel</li>
                                            <li>Petrol</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="bottom-nav">
                    <div class="button-prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/venobox.min.js"></script>
@endpush

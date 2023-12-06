@extends('frontend.layouts.app')

@push('style')
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
@endpush

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
                                    href="{{ asset('uploads/product/' . $details->thumbnail) }}" data-gall="myGallery">
                                    <img src="{{ asset('uploads/product/' . $details->thumbnail) }}" alt="product image" />
                                </a>
                            </div>
                            @foreach ($gallerys as $item)
                                <div class="lg-image">
                                    <a class="popup-img venobox vbox-item"
                                        href="{{ asset('uploads/product/gallery/' . $item) }}" data-gall="myGallery">
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
                            @if ($details->brands->brand)
                                <tr>
                                    <td>Make:</td>
                                    <td>{{ $details->brands->brand }}</td>
                                </tr>
                            @endif
                            @if ($details->model)
                                <tr>
                                    <td>Model:</td>
                                    <td>{{ $details->model }}</td>
                                </tr>
                            @endif
                            @if ($details->color)
                                <tr>
                                    <td>Color:</td>
                                    <td>{{ $details->color }}</td>
                                </tr>
                            @endif
                            @if ($details->drive_type)
                                <tr>
                                    <td>Drive Type:</td>
                                    <td>{{ $details->drive_type }}</td>
                                </tr>
                            @endif
                            @if ($details->transmission)
                                <tr>
                                    <td>Transmission:</td>
                                    <td>{{ $details->transmission }}</td>
                                </tr>
                            @endif
                            @if ($details->conditions)
                                <tr>
                                    <td>Condition:</td>
                                    <td>{{ $details->conditions }}</td>
                                </tr>
                            @endif
                            @if ($details->year)
                                <tr>
                                    <td>Year:</td>
                                    <td>{{ $details->year }}</td>
                                </tr>
                            @endif
                            @if ($details->fuel)
                                <tr>
                                    <td>Fuel Type:</td>
                                    <td>{{ $details->fuel }}</td>
                                </tr>
                            @endif
                            @if ($details->engine_size)
                                <tr>
                                    <td>Engine Size:</td>
                                    <td>{{ $details->engine_size }}</td>
                                </tr>
                            @endif
                            @if ($details->doors)
                                <tr>
                                    <td>Doors:</td>
                                    <td>{{ $details->doors }}</td>
                                </tr>
                            @endif
                            @if ($details->cylinders)
                                <tr>
                                    <td>Cylinders:</td>
                                    <td>{{ $details->cylinders }}</td>
                                </tr>
                            @endif
                            @if ($details->vin)
                                <tr>
                                    <td>VIN:</td>
                                    <td>{{ $details->vin }}</td>
                                </tr>
                            @endif
                        </table>


                    </div>

                    <div class="contact_with_admin d-md-none">
                        <a href="#" class="call"><i class="fas fa-phone-alt"></i>
                            123 *** ***- reveal</a>
                        <a href="https://api.whatsapp.com/send?phone=31649810044&text=Hallo%20Billionaire%20cars%2C"
                            class="whatsapp"><i class="fab fa-whatsapp"></i> Chat Via Whatsapp</a>
                        <a href="#send_message" class="message">Send Message</a>
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

                    <div class="mt-2 tab">
                        <div class="accordion accordion-flush" id="faqlist">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        License Plate Details
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->license_plate_details !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        Financial Details
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->financial_details !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        Technical Data
                                    </button>
                                </h2>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->technical_data !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        Vehicle Data Specific
                                    </button>
                                </h2>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->vehicle_data_specific !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-7">
                                        Environmental Data
                                    </button>
                                </h2>
                                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->environmental_data !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-8">
                                        Comments
                                    </button>
                                </h2>
                                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->comments !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-9">
                                        Options
                                    </button>
                                </h2>
                                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->options !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-10">
                                        Other Information
                                    </button>
                                </h2>
                                <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {!! $details->other_information !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($details->video_url)
                        <div class="video mt-5">
                            <h4 class="mb-3">Video</h4>
                            <iframe class="shadow-sm rounded-3" src="{{ $details->video_url }}"
                                title="YouTube video player" frameborder="0" width="100%" height="400"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    @endif


                    @if ($details->map_location)
                        <div class="map mt-5">
                            <h4 class="mb-3">Location</h4>
                            <iframe src="{{ $details->map_location }}" width="100%" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif

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
                            @if ($details->brands->brand)
                                <tr>
                                    <td>Make:</td>
                                    <td>{{ $details->brands->brand }}</td>
                                </tr>
                            @endif
                            @if ($details->model)
                                <tr>
                                    <td>Model:</td>
                                    <td>{{ $details->model }}</td>
                                </tr>
                            @endif
                            @if ($details->color)
                                <tr>
                                    <td>Color:</td>
                                    <td>{{ $details->color }}</td>
                                </tr>
                            @endif
                            @if ($details->drive_type)
                                <tr>
                                    <td>Drive Type:</td>
                                    <td>{{ $details->drive_type }}</td>
                                </tr>
                            @endif
                            @if ($details->transmission)
                                <tr>
                                    <td>Transmission:</td>
                                    <td>{{ $details->transmission }}</td>
                                </tr>
                            @endif
                            @if ($details->conditions)
                                <tr>
                                    <td>Condition:</td>
                                    <td>{{ $details->conditions }}</td>
                                </tr>
                            @endif
                            @if ($details->year)
                                <tr>
                                    <td>Year:</td>
                                    <td>{{ $details->year }}</td>
                                </tr>
                            @endif
                            @if ($details->fuel)
                                <tr>
                                    <td>Fuel Type:</td>
                                    <td>{{ $details->fuel }}</td>
                                </tr>
                            @endif
                            @if ($details->engine_size)
                                <tr>
                                    <td>Engine Size:</td>
                                    <td>{{ $details->engine_size }}</td>
                                </tr>
                            @endif
                            @if ($details->doors)
                                <tr>
                                    <td>Doors:</td>
                                    <td>{{ $details->doors }}</td>
                                </tr>
                            @endif
                            @if ($details->cylinders)
                                <tr>
                                    <td>Cylinders:</td>
                                    <td>{{ $details->cylinders }}</td>
                                </tr>
                            @endif
                            @if ($details->vin)
                                <tr>
                                    <td>VIN:</td>
                                    <td>{{ $details->vin }}</td>
                                </tr>
                            @endif
                        </table>


                    </div>

                    <div class="contact_with_admin d-none d-md-block">
                        <a href="#" class="call"><i class="fas fa-phone-alt"></i>
                            123 *** ***- reveal</a>
                        <a href="https://api.whatsapp.com/send?phone=31649810044&text=Hallo%20Billionaire%20cars%2C"
                            class="whatsapp"><i class="fab fa-whatsapp"></i> Chat Via Whatsapp</a>
                        <a href="#send_message" class="message">Send Message</a>
                    </div>

                    <div class="mt-5">
                        <h4>Gallery</h4>
                        <div class="row">
                            @foreach ($gallerys as $item)
                                <div class="col-4 col-sm-3 my-2">
                                    <a class="popup-img venobox vbox-item"
                                        href="{{ asset('uploads/product/gallery/' . $item) }}" data-gall="myGallery">
                                        <img src="{{ asset('uploads/product/gallery/' . $item) }}"
                                            class="img-fluid w-100 rounded-2 shadow-sm" alt="product image" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact__form mt-5" id="send_message">
        <div class="container-lg">
            <h4 class="mb-4">Send Message</h4>
            <div class="row">
                <div class="col-md-6">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                    </svg>

                    <div id="alert_message"></div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Name" name="name">
                            </div>
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-4 my-2">
                                <input type="text" class="form-control shadow-sm" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-12 my-2">
                                <textarea name="message" class="form-control shadow-sm" placeholder="Message" rows="10"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submitButton" class="send_message_btn">Send</button>
                    </form>
                </div>

                <div class="col-md-5 offset-md-1 mt-4 mt-md-0">
                    <div class="contact_card_first shadow-sm">
                        <div class="contact__text">
                            <h5>John Doe</h5>
                            <p class="customer_advisor">Customer Advisor</p>
                            <p> <i class="fas fa-map-marker-alt map__icon"></i> 70 Washington Street
                            </p>
                        </div>
                        <img src="{{ asset('assets') }}/img/avatar.jpeg" width="70" alt="avatar"
                            class="rounded-circle">
                    </div>
                    <div class="contact_card_second"></div>
                </div>
            </div>
        </div>
    </section>

    @if (count($related_vihicles) > 0)
        <section class="mt-5">
            <div class="container-lg">
                <h4 class="mb-4">Related Vehicles</h4>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($related_vihicles as $key => $item)
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
        </section>
    @endif
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/venobox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#contactForm").validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone: "required",
                    message: "required"
                },
                messages: {
                    name: "Enter your name",
                    email: {
                        required: "Enter your email",
                        email: "Enter a valid email address"
                    },
                    phone: "Enter your phone number",
                    message: "Enter your message"
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(form) {
                    $("#submitButton").prop("disabled", true);
                    $.ajax({
                        type: "POST",
                        url: "{{ url('/contact-message') }}", // Replace with your server endpoint
                        data: $(form).serialize(),
                        success: function(response) {
                            // Handle the success response from the server
                            console.log(response);

                            $("#contactForm").trigger("reset");
                            // Reset the form validation state
                            $(form).validate().resetForm();
                            $("#submitButton").prop("disabled", false);
                            let alert = `<div class="alert alert-success alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><strong>Thank you!!</strong> We will contact with you!! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
                            $('#alert_message').html(alert);
                        },
                        error: function(error) {
                            // Handle errors
                            console.error(error);
                            // Enable the submit button
                            $("#submitButton").prop("disabled", false);
                        }
                    });
                }
            });
        });
    </script>
@endpush

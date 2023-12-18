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
    <section class="my-5">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6">
                    <div class="head_title" data-wow-duration="1s">
                        <h1>Contact</h1>
                    </div>
                    <p class="my-4">Dit is dé plek om als particulier of bedrijf premium auto’s te kopen. Neem voor meer informatie contact met ons op
                    </p>

                    <div class="pt-4">
                        <h2><span style="color: #E4CD66; font-weight: 600">+31 6 498 100 44
                        </span></h2>
                        <p class="mt-2 mb-2"><i class="fas fa-envelope"></i> info@billionairecars.nl</p>
                        <p><i class="fas fa-map-marker-alt"></i> Parallelweg 120, 1948 NN, Beverwijk
                        </p>
                    </div>

                    <div class="social_media_with_btn pt-4 justify-content-start">
                        <ul class="" data-wow-duration="1s">
                            <li>Follow Us</li>
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
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <section class="contact__form contact px-5" style="border-radius: 20px" id="send_message">
                        <h4 class="mb-4">Contactformulier</h4>
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
                    </section>
                </div>
            </div>

            <div class="mt-5" style="border-radius: 20px; overflow:hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29213.892583348425!2d90.42195354999998!3d23.7567715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1702186031508!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/venobox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $('.venobox').venobox({
            spinner: 'wave',
            spinColor: '#cb9a00',
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
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
                            let alert =
                                `<div class="alert alert-success alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><strong>Thank you!!</strong> We will contact with you!! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
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

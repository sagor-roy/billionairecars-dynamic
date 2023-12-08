@extends('frontend.layouts.app')

@push('style')
@endpush

@section('content')
    <section class="blog_cover">
        <div class="text-center">
            <h1>Frequently Asked <span>Questions</span> </h1>
        </div>
    </section>

    <section class="blog_breadcrumb py-3">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">FAQ</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="head_title mb-4 wow animate__slideInLeft" data-wow-duration="1s">
                        <h1>Frequently Asked Questions
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
@endpush

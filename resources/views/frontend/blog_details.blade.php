@extends('frontend.layouts.app')

@push('style')
@endpush

@section('content')
    <section class="blog_cover">
        <div class="text-center">
            <h1>{{ $details->title }}</span>
            </h1>
        </div>
    </section>

    <section class="blog_breadcrumb py-3">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('car_plan') }}">Car Plan</a></li>
                    <li class="breadcrumb-item active"><a href="#">{{ $details->title }}</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-lg">
            <div class="short_car_plan">
                <h2>{{ $details->title }}</h2>
                <p>{{ $details->short_description }}</p>
            </div>
            <div class="my-4 blog_description">
                {!! $details->description !!}
            </div>
        </div>
    </section>
@endsection

@push('script')
@endpush

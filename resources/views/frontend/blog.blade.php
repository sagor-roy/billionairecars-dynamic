@extends('frontend.layouts.app')

@push('style')
@endpush

@section('content')
    <section class="blog_cover">
        <div class="text-center">
            <h1>{{ __('site.via') }}
            </h1>
        </div>
    </section>

    <section class="blog_breadcrumb py-3">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('site.home') }}</a></li>
                    <li class="breadcrumb-item active"><a href="#">{{ __('site.via') }}</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-lg">
            <div class="short_car_plan">
                <h2>{{ __('site.autolease') }}</h2>
                <p>{{ __('site.via_details') }}</p>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-4 my-3">
                        <div class="card blog_card shadow-sm">
                            <div class="product-image">
                                <a href="{{ route('blog_details', $item->slug) }}">
                                    <img src="{{ asset('uploads/blog/' . $item->thumbnail) }}" class="img-fluid d-block"
                                        alt="img">
                                </a>
                            </div>
                            <div class="blog_card_body">
                                <a href="#" class="blog_title mb-2 d-inline-block">{{ $item->title }}</a>
                                <p>{{ $item->short_description }}</p>
                                <a href="{{ route('blog_details', $item->slug) }}" class="blog_read_button">{{ __('site.read_more') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <nav aria-label="Page navigation">
                <ul class="pagination search mt-4 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="fas fa-angle-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </section>
@endsection

@push('script')
@endpush

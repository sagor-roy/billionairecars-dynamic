@extends('frontend.layouts.app')

@section('content')
    <section class="my-4">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('site.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('site.search') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="filter_section">
        <div class="container-lg">
            @if (request('type'))
                <div class="heading_title">
                    <h1 class="text-uppercase">{{ request('type') }} Vehicles</h1>
                </div>
            @endif
            <form action="">
                <div class="row">
                    <div class="col-md-3 my-2">
                        <select name="brand" class="form-control select2">
                            <option selected disabled>{{ __('site.brand') }}</option>
                            @foreach ($brands as $item)
                                <option {{ request('brand') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ $item->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="model" disabled class="form-control select2">
                            <option selected disabled>{{ __('site.model') }}</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="transmission" class="form-control select2">
                            <option selected disabled>{{ __('site.transmission') }}</option>
                            <option value="Automaat">Automaat</option>
                            <option value="Handgeschakeld">Handgeschakeld</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="fuel" class="form-control select2">
                            <option selected disabled>{{ __('site.fuel') }}</option>
                            <option value="Benzine">Benzine</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Cryogeen">Cryogeen</option>
                            <option value="Diesel/Elektrisch">Diesel/Elektrisch</option>
                            <option value="Elektrisch">Elektrisch</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="color" disabled class="form-control select2">
                            <option selected disabled>{{ __('site.color') }}</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="condition" class="form-control select2">
                            <option selected disabled>{{ __('site.condition') }}</option>
                            <option {{ request('condition') == 'New' ? 'selected' : '' }} value="New">New</option>
                            <option {{ request('condition') == 'Use' ? 'selected' : '' }} value="Use">Use</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="type" class="form-control select2">
                            <option selected disabled>{{ __('site.vehicles_types') }}</option>
                            <option {{ request('type') == 'premium' ? 'selected' : '' }} value="Premium">Premium</option>
                            <option {{ request('type') == 'commercial' ? 'selected' : '' }} value="Commercial">Commercial
                            </option>

                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="price" class="form-control select2">
                            <option selected disabled>{{ __('site.price') }}</option>
                            <option {{ request('price') == '30000' ? 'selected' : '' }} value="30000">&#8364;30,000</option>
                            <option {{ request('price') == '50000' ? 'selected' : '' }} value="50000">&#8364;50,000</option>
                            <option {{ request('price') == '75000' ? 'selected' : '' }} value="75000">&#8364;75,000</option>
                            <option {{ request('price') == '100000' ? 'selected' : '' }} value="100000">&#8364;1,000,00</option>
                            <option {{ request('price') == '1500000' ? 'selected' : '' }} value="1500000">&#8364;1,50,0000</option>
                        </select>
                    </div>
                </div>
                <a href="{{ request()->fullUrl() }}" class="float-end">{{ __('site.clear_all') }} <i
                        class="fas fa-times text-danger"></i></a>
            </form>
            @php
                $isType = request('type');
            @endphp
            <div class="filtr_list">
                <ul class="list">
                    <li class="{{ \Route::is('vehicles_filter') && request('condition') == '' ? 'active' : '' }}">
                        <a href="{{ route('vehicles_filter') }}{{ $isType ? '?type=' . $isType : '' }}">{{ __('site.all') }}
                            <span>({{ $all_condition }})</span></a>
                    </li>
                    <li class="{{ request('condition') == 'New' ? 'active' : '' }}">
                        <a
                            href="{{ route('vehicles_filter') }}{{ $isType ? '?type=' . $isType . '&condition=New' : '?condition=New' }}">{{ __('site.new') }}
                            <span>({{ $new_condition }})</a>
                    </li>
                    <li class="{{ request('condition') == 'Use' ? 'active' : '' }}">
                        <a
                            href="{{ route('vehicles_filter') }}{{ $isType ? '?type=' . $isType . '&condition=Use' : '?condition=Use' }}">{{ __('site.use') }}
                            <span>({{ $use_condition }})</a>
                    </li>
                </ul>

                <ul class="compare_search">
                    {{-- <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i> Compare</a>
                    </li> --}}
                    <li>
                        <input type="search" id="keywordInput" placeholder="{{ __('site.enter_keyword') }}">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div id="product_with_result" class="container-lg">
            <div class="text-center py-5">
                <h4>Loading....</h4>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    @include('frontend.script')
@endpush

@extends('frontend.layouts.app')

@section('content')
    <section class="my-4">
        <div class="container-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="filter_section">
        <div class="container-lg">
            <form action="">
                <div class="row">
                    <div class="col-md-3 my-2">
                        <select name="brands" class="form-control select2">
                            <option selected disabled>All Brand</option>
                            @foreach ($brands as $item)
                                <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="models" disabled class="form-control select2">
                            <option selected disabled>All Model</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="transmission" class="form-control select2">
                            <option selected disabled>Transmission</option>
                            <option value="Automaat">Automaat</option>
                            <option value="Handgeschakeld">Handgeschakeld</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="fuel" class="form-control select2">
                            <option selected disabled>Fuel</option>
                            <option value="Benzine">Benzine</option>
                            <option value="Benzine">Benzine</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Cryogeen">Cryogeen</option>
                            <option value="Diesel/Elektrisch">Diesel/Elektrisch</option>
                            <option value="Elektrisch">Elektrisch</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="color" class="form-control select2">
                            <option selected disabled>Color</option>
                            <option value="">All Models</option>
                            <option value="">Max Price</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="condition" class="form-control select2">
                            <option selected disabled>Condition</option>
                            <option value="New">New</option>
                            <option value="Use">Use</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="type" class="form-control select2">
                            <option selected disabled>Vihicles Type</option>
                            <option value="Premium">Premium</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="" class="form-control select2">
                            <option value="">Price</option>
                            <option value="">All Models</option>
                            <option value="">Max Price</option>
                        </select>
                    </div>
                </div>
                <a href="#" class="float-end">Clear All <i class="fas fa-times text-danger"></i></a>
            </form>
            <div class="filtr_list">
                <ul class="list">
                    <li class="">
                        <a href="#">All <span>(44)</span></a>
                    </li>
                    <li class="active">
                        <a href="#">New <span>(44)</a>
                    </li>
                    <li>
                        <a href="#">Use <span>(44)</a>
                    </li>
                </ul>

                <ul class="compare_search">
                    {{-- <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i> Compare</a>
                    </li> --}}
                    <li>
                        <input type="search" placeholder="Enter keyword">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container-lg">
            <div class="result_with_view my-4">
                <h4>100 Result</h4>
                <ul>
                    {{-- <li class="grid">
                        <a href="#" class="active"><i class="fas fa-th-large"></i></a>
                        <a href="#"><i class="fas fa-th"></i></a>
                    </li> --}}
                    <li>
                        <span class="d-none d-md-block">Sort by:</span>
                        <select name="" class="form-control" id="">
                            <option value="">Date Listed: New</option>
                        </select>
                    </li>
                </ul>
            </div>

            <div id="products">
                <div class="text-center py-5">
                    <h4>Loading....</h4>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/venobox.min.js"></script>
    <script>
        $(document).ready(function() {
            // all vehicles
            vehicles();

            function vehicles(brand = "", model = "", transmission = "", fuel = "", color = "", condition = "",
                type = "", price = "") {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/filter') }}",
                    data: {
                        brand,
                        model,
                        transmission,
                        fuel,
                        color,
                        condition,
                        type,
                        price
                    },
                    success: function(response) {
                        //console.log(response);
                        console.log(response);
                        $('#products').html(response);
                    }
                })
            }

            // brand
            $('select[name="brands"]').on('change', function() {
                let brand = $(this).val();
                let model = $('select[name="models"]').val();
                let transmission = $('select[name="transmission"]').val();
                let fuel = $('select[name="fuel"]').val();
                let color = $('select[name="color"]').val();
                let condition = $('select[name="condition"]').val();
                let type = $('select[name="type"]').val();
                vehicles(brand, model, transmission, fuel, color, condition, type)

                console.log(model);
                // models
                brands(brand)
            })

            function brands(brand) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/model-filter') }}",
                    data: {
                        brand
                    },
                    success: function(response) {
                        let models = response;
                        // Select the models dropdown and enable it
                        let $modelsDropdown = $('select[name="models"]');
                        $modelsDropdown.attr('disabled', false);
                        // Add new options based on the response
                        let options = "<option selected disabled >All Model</option>";
                        for (let i = 0; i < models.length; i++) {
                            options += '<option value="' + models[i].model + '">' +
                                models[i].model + '</option>';
                        }
                        $modelsDropdown.html(options)
                    }
                })
            }

            // model
            $('select[name="models"]').on('change', function() {
                let model = $(this).val();
                let brand = $('select[name="brands"]').val();
                let transmission = $('select[name="transmission"]').val();
                let fuel = $('select[name="fuel"]').val();
                let color = $('select[name="color"]').val();
                let condition = $('select[name="condition"]').val();
                let type = $('select[name="type"]').val();
                vehicles(brand, model, transmission, fuel, color, condition, type)
            })
        })
    </script>
@endpush

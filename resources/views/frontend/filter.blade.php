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
                            <option value="Diesel">Diesel</option>
                            <option value="Cryogeen">Cryogeen</option>
                            <option value="Diesel/Elektrisch">Diesel/Elektrisch</option>
                            <option value="Elektrisch">Elektrisch</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-2">
                        <select name="color" disabled class="form-control select2">
                            <option selected disabled>Color</option>
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
                <a href="{{ url()->current() }}" class="float-end">Clear All <i class="fas fa-times text-danger"></i></a>
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
        <div id="product_with_result" class="container-lg">
            <div class="text-center py-5">
                <h4>Loading....</h4>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/venobox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize with all vehicles
            updateVehicles();

            // Event listeners for filter changes
            $('select[name="brands"], select[name="models"], select[name="transmission"], select[name="fuel"], select[name="color"], select[name="condition"], select[name="type"]')
                .on('change', function() {
                    if ($(this).attr('name') === 'brands') {
                        // If brand changes, reset model value to empty
                        $('select[name="models"]').val('');
                        $('select[name="color"]').val('');
                    }
                    updateVehicles();
                    if ($(this).attr('name') === 'brands') {
                        updateModels($(this).val());
                    }
                });

            // Function to update vehicle list
            function updateVehicles(page = 1) {
                let brand = $('select[name="brands"]').val();
                let model = $('select[name="models"]').val();
                let transmission = $('select[name="transmission"]').val();
                let fuel = $('select[name="fuel"]').val();
                let color = $('select[name="color"]').val();
                let condition = $('select[name="condition"]').val();
                let type = $('select[name="type"]').val();

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
                        page // Pass the page parameter
                    },
                    success: function(response) {
                        $('#product_with_result').html(response);
                    }
                });
            }

            // Function to update models dropdown based on brand
            function updateModels(brand) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/model-filter') }}",
                    data: {
                        brand
                    },
                    success: function(response) {
                        let $modelsDropdown = $('select[name="models"]');
                        let $colorDropdown = $('select[name="color"]');

                        // Build options for models and colors
                        let modelOptions = "<option selected disabled >All Model</option>";
                        let colorOptions = "<option selected disabled >Color</option>";

                        // Iterate through unique models to build options
                        for (let i = 0; i < response.model.length; i++) {
                            modelOptions +=
                                `<option value="${response.model[i]}">${response.model[i]}</option>`;
                        }

                        // Iterate through unique colors to build options
                        for (let i = 0; i < response.color.length; i++) {
                            colorOptions +=
                                `<option value="${response.color[i]}">${response.color[i]}</option>`;
                        }

                        // Update dropdowns
                        $modelsDropdown.html(modelOptions);
                        $colorDropdown.html(colorOptions);

                        // Enable dropdowns
                        $modelsDropdown.attr('disabled', false);
                        $colorDropdown.attr('disabled', false);
                    }

                });
            }

            // Event listener for pagination links
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                //console.log(page);
                updateVehicles(page);
            });
        });
    </script>
@endpush

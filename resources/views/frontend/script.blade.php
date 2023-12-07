<script>
    $(document).ready(function() {
        // Initialize with all vehicles
        updateVehicles();

        @php
            $brandInRequest = request('brand');
        @endphp

        @if ($brandInRequest)
            updateModels("{{ $brandInRequest }}");
        @endif

        // Event listeners for filter changes
        $('select[name="brand"], select[name="model"], select[name="transmission"], select[name="fuel"], select[name="color"], select[name="condition"], select[name="type"], select[name="price"]')
            .on('change', function() {
                if ($(this).attr('name') === 'brand') {
                    // If brand changes, reset model value to empty
                    $('select[name="model"]').val('');
                    $('select[name="color"]').val('');
                }
                updateVehicles();
                if ($(this).attr('name') === 'brand') {
                    updateModels($(this).val());
                }
            });

        // Function to update vehicle list
        function updateVehicles(page = 1) {
            let brand = $('select[name="brand"]').val();
            let model = $('select[name="model"]').val();
            let transmission = $('select[name="transmission"]').val();
            let fuel = $('select[name="fuel"]').val();
            let color = $('select[name="color"]').val();
            let condition = $('select[name="condition"]').val();
            let type = $('select[name="type"]').val();
            let price = $('select[name="price"]').val();

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
                    price,
                    page // Pass the page parameter
                },
                success: function(response) {
                    // console.log(response);
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
                    let $modelsDropdown = $('select[name="model"]');
                    let $colorDropdown = $('select[name="color"]');

                    // Build options for models and colors
                    let modelOptions = "<option selected disabled >All Model</option>";
                    let colorOptions = "<option selected disabled >Color</option>";

                    let query_model = "{{ request('model') }}";

                    // Iterate through unique models to build options
                    for (let i = 0; i < response.model.length; i++) {
                        modelOptions +=
                            `<option ${query_model == response.model[i] ? 'selected':''} value="${response.model[i]}">${response.model[i]}</option>`;
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


        // Event listener for the search input
        $('#keywordInput').on('input', function() {
            filterProducts();
        });

        // Function to filter products based on the keyword
        function filterProducts() {
            let keyword = $('#keywordInput').val().toLowerCase();
            // Hide all products
            $('.search_card .col-12').hide();
            // Show products that match the keyword
            $('.search_card .col-12').filter(function() {
                let title = $(this).find('.product_title').text().toLowerCase();
                let year = $(this).find('.product_item_list li:nth-child(1)').text().toLowerCase();
                let brand = $(this).find('.product_item_list li:nth-child(2)').text().toLowerCase();
                let color = $(this).find('.product_item_list li:nth-child(3)').text().toLowerCase();
                let price = $(this).find('.product_item_price h6').text().toLowerCase();

                // Customize this logic based on your requirements
                return (
                    title.includes(keyword) ||
                    year.includes(keyword) ||
                    brand.includes(keyword) ||
                    color.includes(keyword) ||
                    price.includes(keyword)
                );
            }).show();
        }
    });
</script>

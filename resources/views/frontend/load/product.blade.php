<div class="result_with_view my-4">
    <h4>{{ $products->total() }} Result</h4>
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
    @if (count($products) > 0)
        <div class="row search_card">
            @foreach ($products as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
                    <a href="{{ route('details', $item->slug) }}">
                        <div class="card border-0 sm_card product_card">
                            <div class="product-image">
                                <img src="{{ asset('uploads/product/' . $item->thumbnail) }}" class="img-fluid d-block"
                                    alt="img">
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
                                    <h6 class="text-dark">${{ $item?->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @else
        <div class="text-center text-muted py-5">
            <h4>No Data Found</h4>
        </div>
    @endif
</div>

@if ($products->lastPage() > 1)
    <nav aria-label="Page navigation">
        <ul class="pagination search mt-4 justify-content-center">
            {{-- Previous Page Link --}}
            @if ($products->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @for ($i = 1; $i <= $products->lastPage(); $i++)
                <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($products->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

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


<nav aria-label="Page navigation">
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
</nav>

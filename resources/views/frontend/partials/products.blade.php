<!-- partials/products.blade.php -->

@foreach($products as $product)
    <div class="col-xl-4 mb-4">
        <a href="{{route('details', $product->id)}}">
            <img src="{{ $product->photo }}"
                 class="rounded-1 bg-secondary bg-opacity-10" style="width:280; height: 280px;">
        </a>
        <div class="d-flex justify-content-start">
            <div>
                <h5>
                    {{$product->name}}
                </h5>
                <button class="btn cart-button">
                    اضافة الى السلة
                </button>
            </div>
        </div>
    </div>

@endforeach

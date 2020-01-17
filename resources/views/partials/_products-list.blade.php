<div id="js-products-list" class="list-group my-3">
    @foreach ($products as $product)
        <div class="list-group-item">{{ $product->title }} - $ {{ $product->price }} </div>
    @endforeach
</div>

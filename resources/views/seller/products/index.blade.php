@isset($products)

    @foreach ($products as $product)
        {{ $product->name }} - {{ $product->price }} - {{ $product->desc }} - {{ $product->image }} -
        {{ $product->category->name }} --- <a href="{{ route('seller.product.show', $product->id) }}">show</a>
        <br />
    @endforeach

@endisset

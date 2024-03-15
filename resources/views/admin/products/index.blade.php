@isset($products)

    @foreach ($products as $product)
        <div>
            {{ $product->name }} - {{ $product->price }} - {{ $product->desc }} - {{ $product->image }} -
            {{ $product->category->name }}

        </div>
    @endforeach

@endisset

@isset($product)
    {{ $product->name }} - {{ $product->price }} - {{ $product->desc }} - {{ $product->image }} -
    {{ $product->category->name }}
@endisset

@isset($products)

    @foreach ($products as $product)
        {{ $product->name }} - {{ $product->price }} - {{ $product->desc }} - {{ $product->image }} -
        {{ $product->category->name }} --- <a href="{{ route('products.edit', $product->id) }}">Edit</a>----- <form
            action="{{ route('products.destroy', $product->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" type="button" class="btn btn-danger btn-sm">
        </form>
    @endforeach

@endisset
{{-- @extends('layouts.master')


@section('title')
    products
@endsection


@section('css')
@endsection

@section('content')
    <main class="p-6">
    </main>
@endsection



@section('js')
@endsection --}}

@isset($categories)

    @foreach ($categories as $category)
        <div>
            {{ $category->name }}

        </div>
    @endforeach

@endisset

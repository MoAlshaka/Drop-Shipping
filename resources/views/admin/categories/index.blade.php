@isset($categories)

    @foreach ($categories as $category)
        <div>
            {{ $category->name }}----<a href="{{ route('categories.edit', $category->id) }}">Edit</a>----- <form
                action="{{ route('categories.destroy', $category->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" type="button" class="btn btn-danger btn-sm">
            </form>

        </div>
    @endforeach

@endisset

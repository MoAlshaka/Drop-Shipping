@isset($sellers)
    @foreach ($sellers as $seller)
        <div>
            {{ $seller->name }}----{{ $seller->email }}-----{{ $seller->phone }}-----{{ $seller->address }}
            -----{{ $seller->is_active }}------<a href="{{ route('admin.sellers.active', $seller->id) }}">Edit</a>----- <form
                action="{{ route('admin.sellers.active', $seller->id) }}" method="post">

                @csrf
                @method('PUT')
                <input type="submit" value="Delete" type="button" class="btn btn-danger btn-sm">
            </form>
        </div>
    @endforeach
@endisset

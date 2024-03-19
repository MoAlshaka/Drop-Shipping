<form action="{{ route('categories.update', $category->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{ $category->name }}">
    <input type="submit" value="Submit">
</form>

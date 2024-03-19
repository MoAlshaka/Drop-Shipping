<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="">
    <input type="submit" value="Submit">
</form>

<form action="{{ route('store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Title"><br><br>
    <input type="text" name="description" placeholder="Description"><br><br>

    <button>add a new post</button>

</form>
@foreach ($posts as $post)
    
    <h2>Post Number {{ $loop->iteration }}</h2><br>

    <h3>Title: {{ $post->title }}</h3><br>
    <h3>Description: {{ $post->description }}</h3><br>

    <br><br><br><br>


@endforeach
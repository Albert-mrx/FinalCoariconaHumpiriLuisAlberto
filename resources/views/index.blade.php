<!DOCTYPE html>
<html>
<head>
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</body>
</html>

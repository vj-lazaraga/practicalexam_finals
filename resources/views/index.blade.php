<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS PAGE</title>
</head>
<body>
    <h1>All Posts</h1>

    <form action= "{{route('posts.create') }}" method="GET">
        <button type= "submit">Create Post</button>
    </form>
    <br>

    @foreach ($posts as $post)
        <div><b>Title</b>: {{$post->title}}</div>
        <br>
        <div><b>Content</b>: {{$post->content}}</div>

    <br>
    <form action= "{{route('posts.edit', ['id' => $post-> id]) }}" method="PUT">
        <button type= "submit">Edit Post</button>
    </form>


    <form action= "{{route('posts.destroy', ['id' => $post-> id]) }}" method="POST" onsubmit="return confirm ('Are you sure you want to delete this post?')">
        @method('DELETE')
        @csrf
        <button type= "submit">Delete Post</button>
    </form>
    <hr>
    @endforeach

    
</body>
</html>
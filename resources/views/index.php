<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST PAGE</title>
</head>
<body>
    <h1>POST PAGE</h1>

    <h1>Your Posts</h1>

        @foreach ($posts as $post)
        <div>Title: {{ $post->title}}</div>
        <div>Content: {{ $post->content}}</div>

        <form action="{{ route('posts.destroy', ['post'=> $post->id]) }}" method="PUT" 
        onsubmit="return confirm('Are you sure you want to delete post')">
            @csrf 
            @method('DELETE')
            <button type="submit">Delete Post</button>
        </form>
        @endforeach

    <form action="{{ route('index') }}" method="GET">
        <button type="submit">Back to Posts</button>
    </form>
</body>
</html>
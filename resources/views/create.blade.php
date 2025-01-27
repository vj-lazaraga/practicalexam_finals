<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE POST</title>
</head>
<body>
    <h1>CREATE POST</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="content">Content:</label>
        <input type="text" id="content" name="content" required></input><br>

        <button type="submit">Create Post</button>
    </form>

    <form action="{{ route('index') }}" method="GET">
        <button type="submit">Back to Posts</button>
    </form>

</body>
</html>
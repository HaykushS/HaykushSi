<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form">
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>
            <div class="form">
                <label for="description">Description</label>
                <input type="text" name="description">
            </div>
            <div class="form">
                <label for="image">Image</label>
                <input type="file" src="#" name="image" accept="image/*">
            </div>
            <div class="form">
                <label for="category">Category</label>
                <input type="text" name="category_id">
            </div>
            <input type="submit" name="submit">

        </form>
        <!-- @foreach($posts as $post)
            <div>

                <a
                    href="{{ route('post.show', ['postId' => $post->id]) }}">{{ $post->title }}
                </a>
            </div>
@endforeach-->
@if($errors->any())
            <div class="alert alert-danger">
                <h2>
@foreach($errors->all() as $error)
                        <h2> {{ $error }}</h2><br>
@endforeach
                </h2>
            </div>
@endif
    </div>
</body>

</html>

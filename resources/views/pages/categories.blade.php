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
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form">
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div class="form">
                <label for="parent_id">Parent id</label>
                <input type="text" name="parent_id">
            </div>
            <input type="submit" name="submit">

        </form>

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container">
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="name" name="name">
            <input type="tel" placeholder="Phone Number" name="tel">
            <input type="number" placeholder="Enter your age" name="age">
            <input type="submit" name="submit">




        </form>


        @foreach($users as $user)
            <div>

                <a
                    href="{{ route('user.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
                <form action=" {{ route('single.userEdit') }}" method="POST">

                    @csrf
                    <input type="hidden" name="userId" value="{{ $user->id }}">
                    <input type="text" placeholder="name" name="name" value="{{ $user->name }}">
                    <input type="tel" placeholder="Phone Number" name="tel" value="{{ $user->tel }}">
                    <input type="number" placeholder="Enter your age" name="age" value="{{ $user->age }}">

                    <button type="submit" class="editbtn">Edit</button>
                </form>

                <form action=" {{ route('single.userDelete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="userId" value="{{ $user->id }}">
                    <button type="submit" class="deletebtn">Delete</button>
                </form>
            </div>
        @endforeach


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

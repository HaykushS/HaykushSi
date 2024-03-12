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



        <form action="{{ route('cars.store') }}" method="POST">
            @csrf

            <input type="text" placeholder="Car Model" name="model">
            <input type="text" placeholder="License Plate " name="license_plate">
            <input type="text" placeholder="Color" name="color">

            <div>
                <label for="user_id">Select User:</label>
                <select name="user_id" id="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="submit">

        </form>

        @foreach($cars as $car)
            <div>

                <a
                    href="{{ route('cars.show', ['carId' => $car->id]) }}">{{ $car->model }}
                </a>
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

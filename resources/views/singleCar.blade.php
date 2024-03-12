<!-- <p>{{ $car->id . " " . $car->model ." ". $car->license_plate ." ". $car->color ." ". $car->user_id }}
</p> -->
<!-- <p>{{ $car->model }}</p>
<p>{{ $car->license_plate }}</p>
<p>{{ $car->color }}</p>
<p>{{ $car->user_id }}</p> -->

<link rel="stylesheet" href="{{ asset('style.css') }}">
<div class="container">

    <form action=" {{ route('single.carEdit') }}" method="POST">

        @csrf
        <input type="hidden" name="carId" value="{{ $car->id }}">
        <input type="text" placeholder="Car Model" name="model" value="{{ $car->model }}">
        <input type="text" placeholder="License Plate " name="license_plate" value="{{ $car->license_plate }}">
        <input type="text" placeholder="Color" name="color" value="{{ $car->color }}">
        <input type="text" placeholder="User's Id" name="user_id" value="{{ $car->user_id }}">

        <button type="submit" class="editbtn">Edit</button>
    </form>
    <form action=" {{ route('single.carDelete') }}" method="POST">
        @csrf

        <input type="hidden" name="carId" value="{{ $car->id }}">

        <button type="submit" class="deletebtn">Delete</button>
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

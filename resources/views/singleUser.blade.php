<link rel="stylesheet" href="{{ asset('style.css') }}">
<div class="container">

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

 <form action="{{ route('form.userEdit') }}" method="GET">
     @csrf
     <input type="text" placeholder="name" name="name">
     <input type="tel" placeholder="Phone Number" name="tel">
     <input type="number" placeholder="Enter your age" name="age">
     <input type="submit" name="edit">
 </form>

 <div>
     <a
         href="{{ route('single.userEdit', ['id' => $user->id]) }}">{{ $user->name }}</a>
 </div>

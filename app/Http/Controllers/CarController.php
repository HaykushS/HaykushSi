<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\UsersL;



class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $users = UsersL::all();
       
        return view('pages.car', compact('cars','users'));
        
    }

    public function store(Request $request)
    {   
        
        $request->validate([
            'model' => 'required',
            'license_plate' => 'required',
            'color' => 'required',
            'user_id' => 'required', 
        ]);
        
        $car = new Car();
        $car->model = $request->model;
        $car->license_plate = $request->license_plate;
        $car->color = $request->color;
        $car->user_id = $request->user_id;
        $car->save();

        return redirect()->route('cars.index')->with('success', 'Car created successfully');
        
    }

    
    public function show($carId)
    {
       
        $car = Car::find($carId);
        

        return view('singleCar', compact('car'));
    }

    public function destroy(Request $req) {
        Car::where('id', $req->carId)->delete();
        return redirect()->route('cars.index')->with('success','deleted succesfully');
    }
    
    public function editCar(Request $request) { 
        $request->validate([
            'model' => 'required',
            'license_plate' => 'required',
            'color' => 'required',
            'user_id' => 'required', 
        ]);
        $cars = Car::find($request->carId);
        $cars->model =  $request->model;
        $cars->license_plate =  $request->license_plate ;
        $cars->color =  $request->color;
        $cars->user_id = $request->user_id;
        $cars->update();

    
        return redirect()->route('cars.index')->with('success','edited succesfully');
}   
}







// class CarController extends Controller{
//     public function index($carId){
//         $car = Car::with('comments')->find($carId);
//         return view('car.show', compact('car'));

//     }
//     public function store(Request $request){
//         $car = Car::create($request->all());
//         return redirect()->route('post.show', $car->id)->with('success','Post created successfully');
//     }
     
  
         
//     public function show($carId)
// {   
//     $car = Car::find($carId);
   
//     return view('car.show', compact('car'));
// }



// }

<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\UsersL;


// use App\Http\Requests\UpdateUsersLRequest;


// use Illuminate\View\View\getName;
class HomeController extends Controller
{
    public function index() {
        $users= UsersL::get();
        return view("pages.home", compact("users"));

    }
    
    
    
    public function store(Request $request) {
        $request->validate([
            'name'=>'required|alpha|max:255',
            'age'=>'required|integer',
            'tel'=>'required|integer',
        ]);
        $user = new UsersL();
        $user->name =  $request->name;
        $user->tel =  $request->tel;
        $user->age =  $request->age;
        $user->save();
      
         return redirect ()->route('user.show', $user->id)->with('success','');
           
        }
        
        
        public function showUser ($id){
            $user = UsersL::where('id', $id)->first();
            return view('singleUser', compact('user'));
        }
        
        
        public function destroy(Request $req) {
            UsersL::where('id', $req->userId)->delete();
            return redirect()->route('home.index')->with('success','deleted succesfully');
        }
    
        // public function editUser (Request $req) {
           
        //    $user = UsersL::find($req->userId);
            // return redirect()->route('home.index')->with('success','edited succesfully');
        public function editUser(Request $request) { 
            $request->validate([
                'name'=>'required|alpha|max:255',
                'age'=>'required|integer',
                'tel'=>'required|integer',
            ]);
            $user = UsersL::find($request->userId);
            $user->name =  $request->name;
            $user->tel =  $request->tel;
            $user->age =  $request->age;
            $user->update();

        
            return redirect()->route('home.index')->with('success','edited succesfully');
    }   
             
}






       
        
        

    

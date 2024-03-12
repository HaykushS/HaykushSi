<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\category;


class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view("pages.categories", compact("category"));

    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'parent_id' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();

        // $categories = category::create($request->all());
        return redirect()->route('categories.index')->with('success','');
    }

    public function show($id){
        $categories = CategoryController::find($id);
        return view('categories', compact('categories'));
    }
    


}

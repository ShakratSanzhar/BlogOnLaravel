<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    
    public function index()
    {
       
       //return Category::with('posts')->get();
        return CategoryResource::collection(Category::with('posts')->get());
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            
        ]);
        $category = Category::create($request->all());
        return $category;
    }

    
    public function show($id)
    {
       
       return Category::with('posts')->find($id);;
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            
        ]);
        $category = Category::find($id);
        $category->update($request->all());
        return $category;
    }

    
    public function destroy($id)
    {
       
        $category = Category::find($id);
        $category->delete();
        return $category;
    }

   
}

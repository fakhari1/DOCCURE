<?php

namespace Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Category\Http\Requests\CategoryRequest;
use Category\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('Categories::index',compact('categories'));
    }
   public function store(CategoryRequest $request)
   {
     Category::create([
        'name'=>$request->name,
         'slug'=>$request->slug,
         'parent_id'=>$request->parent_id
     ]);
     return back();
   }
   public function edit(Category $category)
   {
       $categories=Category::all();
       return view('Categories::edit',compact('categories','category'));
   }
   public function update(Category $category,CategoryRequest $request)
   {
       $category->update([
           'name'=>$request->name,
           'slug'=>$request->slug,
           'parent_id'=>$request->parent_id
       ]);
       return back();
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('Category.create');

    }
   public function store(Request $request)
   {
       $category=Category::create($request->all());
       $categoryImage=$request->file('image')->store('public/category/image');
       $category->image=str_replace('public','',$categoryImage);
       $category->save();
       return redirect()->route('category.Index');

   }
   public function Index()
   {

       $data=Category::all();
       return view('category.Index',compact('data'));

   }
   public function edit($id)
   {

       $category=Category::find($id);
       return view('category.edit',compact('category'));

   }
   public function update(Request $request , Category $category)
   {

       $category->update($request->all());
       return redirect('category/Index');

   }
   public function delete(Category $category)
   {

       $category->delete();
       return redirect('category/Index');

   }
}

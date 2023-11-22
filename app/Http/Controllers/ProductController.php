<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function create()
{
    $category = Category::all();
return view('product.create',compact('category'));

}
public function store(Request $request)
{
   $product=Product::create($request->all());
//   return redirect('Product.Index');
    $productImage=$request->file('image')->store('public/product/image');
    $product->image=str_replace('public','',$productImage);
    $product->save();
    return redirect('product/Index');

}
public function Index()
{
    $data=Product::all();
    return view('product.Index',compact('data'));

}
public function edit($id)
{
   $product=Product::find($id);
   return view('product.edit',compact('product'));

}
public function update(Request $request , Product $product)
{
    $product->update($request->all());
    return redirect('product/Index');

}
public function delete(Product $product)
{
    $product->delete();
    return redirect('product/Index');

}

}

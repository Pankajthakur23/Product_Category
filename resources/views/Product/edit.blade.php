@extends('layout.app')
@section('content')


    <form action="  {{route('product.update', ['product'=> $product->id])}}" method="post">

        @csrf

        <lable>enter name</lable>
        <input type="text" value="{{$product->name}}" name="name" placeholder="enter name">
        <br>
        <lable>enter description</lable>
        <input type="text" value="{{$product->age}}" name="description" placeholder="enter description">
        <br>
        <lable>enter image</lable>
        <input type="file" value="{{$product->image}}"  name="meterid" placeholder="enter image">
        <br>
        <lable>enter price</lable>
        <input type="text" value="{{$product->price}}" name="price" placeholder="enter price">
        <br>
        <lable>enter quantity</lable>
        <input type="text" value="{{$product->quantity}}" name="quantity" placeholder="enter quantity">
        <br>
        <lable>enter category_id</lable>
        <input type="text" value="{{$product->category_id}}" name="category_id" placeholder="enter category_id">
        <br>
        <input type="submit" value="update"class="btn btn-warning w-25">

    </form>
@endsection

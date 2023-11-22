@extends('layout.app')
@section('content')
    <form action="{{route('product.store')}}"method="post" enctype="multipart/form-data">
        @csrf


        <lable>enter name</lable>
        <input type="text" name="name" placeholder="enter name">
        <br>
        <lable>enter description</lable>
        <input type="text" name="description" placeholder="enter description">
        <br>
        <lable>enter image</lable>
        <input type="file" name="image" placeholder="enter image">
        <br>

        <lable>enter price</lable>
        <input type="text" name="price" placeholder="enter price">
        <br>
        <lable>enter quantity</lable>
        <input type="text" name="quantity" placeholder="enter quantity">
        <br>
        <lable>enter category_id</lable>
        <select name="category_id" id="">
            <option value="">Select Category</option>
            @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="create"class="btn btn-warning">

    </form>


@endsection

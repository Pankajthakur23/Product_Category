@extends('layout.app')
@section('content')


    <form action="  {{route('category.update', ['category'=> $category->id])}}" method="post">

        @csrf

        <lable>enter name</lable>
        <input type="text" value="{{$category->name}}" name="name" placeholder="enter name">
        <br>
        <lable>enter description</lable>
        <input type="text" value="{{$category->age}}" name="description" placeholder="enter description">
        <br>
        <lable>enter image</lable>
        <input type="file" value="{{$category->image}}"  name="meterid" placeholder="enter image">
        <br>
        <input type="submit" value="update"class="btn btn-warning w-25">

    </form>
@endsection

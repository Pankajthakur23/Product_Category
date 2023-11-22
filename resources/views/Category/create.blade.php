@extends('layout.app')
@section('content')
    <form action="{{route('category.store')}}"method="post" enctype="multipart/form-data">
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
        <input type="submit" value="create"class="btn btn-warning">

    </form>


@endsection

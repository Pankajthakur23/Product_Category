@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-dark table-hover text-white">
                    <tr>

                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @foreach($data as $d)
                        <tr>

                            <td>{{$d->name}}</td>
                            <td>{{$d->description}}</td>
{{--                            <td>{{$d}}</td>--}}
                            <td><img src="{{asset('storage/'. $d->image)}}" alt="" style="width:100px; height: auto"></td>



                            <td>
                                <a href="{{route('category.edit',['id'=>$d])}}">edit</a>
                                <a href="{{route('category.delete',['category'=>$d->id])}}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>

                    @endforeach



                </table>
            </div>

        </div>
    </div>

@endsection

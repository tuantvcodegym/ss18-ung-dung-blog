@extends('layouts.master')
@section('content')
    <h3>List Blog</h3>
    <form method="post" action="{{route('search')}}">
        {{csrf_field()}}
        <input type="text" name="input">
        <input type="submit" value="Search">
    </form>
    <table class="table table-hover">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>created_at</td>
            <td>updated_at</td>
        </tr>
        @foreach($blog as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td><a href="{{route('detail', $value->id)}}">Detail</a></td>
                <td><a href="{{route('edit', $value->id)}}">Update</a></td>
                <td><a href="{{route('destroy', $value->id)}}" onclick="return confirm('ban co chac muon xoa')">xoa</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('create')}}">Them moi</a>
@endsection

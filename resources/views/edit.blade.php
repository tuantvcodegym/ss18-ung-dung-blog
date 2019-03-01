@extends('layouts.master')
@section('content')
    <h3>Update</h3>
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="input" value="{{$edit->title}}">
        <textarea class="form-control" rows="3" name="edit"></textarea>
        <input type="submit" value="Add">
    </form>
@endsection
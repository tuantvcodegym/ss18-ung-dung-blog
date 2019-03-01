@extends('layouts.master')
@section('content')
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="title">
        <textarea class="form-control" rows="3" name="text"></textarea>
        <input type="submit" value="Add">
    </form>
@endsection
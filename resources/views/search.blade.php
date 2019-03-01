@extends('layouts.master')
@section('content')
    <h3>Chi tiet Bai Viet</h3>
    @foreach($search as $key=>$value)
        @if($demo == $value->title)
            {{$value->bai_viet}}
        @endif
    @endforeach
    <br>
    <a href="{{route('index')}}"> < Back</a>
@endsection
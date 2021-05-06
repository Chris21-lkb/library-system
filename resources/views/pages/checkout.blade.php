@extends('template.default1')
@section('content')
<div class="checkout-content">


    <div class="checkout-data-img">
        <img src="{{ asset('/storage/book/' .$request['book_path'])}}" alt="Image">
    </div>
    <div class="checkout-data">
        <h1>{{$request['BookName']}}</h1>
        <h2>Author: {{$request['author']}}</h2>
        <h2>Price: {{$request['price']}} RMB</h2>
        <h2>Year: {{$request['publishDate']}}</h2>
    </div>


</div>
@stop
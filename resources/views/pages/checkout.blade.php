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

        <div class="formulaire">
            <form method="POST" action="add">
                @csrf
                <input type="hidden" name="useremail" value="{{ Auth::user()->email }}">
                <input type="hidden" name="productID" value="{{$request['id']}}">
                <input type="hidden" name="productID" value="{{$request['BookName']}}">
                <button type="submit">CHECKOUT NOW</button>
            </form>
        </div>
        
    </div>

</div>
@stop
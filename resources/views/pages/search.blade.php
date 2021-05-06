@extends('template.default')
@section('content')
<div id="main">
    @yield('content')
    @if($result->isNotEmpty())
    @foreach ($result as $post)
    <div class="section-data">
        <table>
            <tr>
                <td id="picture"><td>
                <td id="name">TITLE<td>
                <td id="author">AUTHOR<td>
                <td id="year">YEAR<td>
                <td id="price">PRICE<td>
                <td id="action">ACTION<td>
            </tr>
            <tr>
                <td><img src="{{ asset('/storage/book/'.$post['book_path'])}}" alt="Image"><td>
                <td id="data">{{$post['BookName']}}<td>
                <td id="data">{{$post['author']}}<td>
                <td id="data">{{$post['publishDate']}}<td>
                <td id="data">{{$post['price']}} RMB<td>
                <td id="data">
                    <li><a href="{{'showbook/'.$post['id']}}">CHECKOUT</a></li>
                <td>
            </tr>
        </table>
    </div>
    @endforeach
    @else 
    <div class="nothing-found">
        <h2>Sorry, No book found</h2>
    </div>
    @endif
</div>
@stop
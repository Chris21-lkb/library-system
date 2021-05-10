@extends('template.admintemplate')
@section('content')
<div class="adminsection">
    <div class="adminsectionlinks">
        <nav>
            <ul>
                <li><a href="{{url('admin')}}"><i class="bi bi-house"></i> Dashboard</a></li>
                <li><a href="#"><i class="bi bi-file-break"></i> Pages layouts</a></li>
                <li><a href="#"><i class="bi bi-globe"></i> Navigation</a></li>
                <li><a href="#"><i class="bi bi-list-task"></i> Task</a></li>
                <li><a href="#"><i class="bi bi-gear-wide"></i> Widget</a></li>
                <li><a href="#"><i class="bi bi-chat"></i> Chat</a></li>
                <li><a href="#"><i class="bi bi-google"></i> Social</a></li>
                <li><a href="#"><i class="bi bi-images"></i> Gallery</a></li>
                <li><a href="#"><i class="bi bi-search"></i> Search</a></li>
            </ul>
        </nav>
    </div>
    <div class="adminsectioncontent">

        <div class="adminsectioncontent1">

            <div class="user">
                @foreach ($data as $data1)
                {{ $data1->count() }}
                @endforeach
            </div>

            <div class="books">
                @foreach ($data5 as $data2)
                {{ $data2->count() }}
                @endforeach
            </div>

            <div class="checkout">
              
            </div>

        </div>

        <div class="adminsectioncontent2">
            <div class="addbooks">
                <h1>Add book </h1>
                <form action="insert" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="bookname" placeholder="book name" required >
                    <input type="text" name="author" placeholder="Author" required><br/>
                    <input type="number" name="publishdate" placeholder="publish year" required >
                    <input type="number" step="0.01" name="price" placeholder="book price" required><br/>
                    <input type="file" name="book_path" required>
                    <button type="submit">Add book</button>
                </form>
            </div>
            <div class="users">
                <div class="section-data">
                    <table>
                        <tr>
                            <td id="ID">ID<td>
                            <td id="Name">Name<td>
                            <td id="Email">Email<td>
                            <td id="Action">Action<td>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td id="data">{{$data['id']}}<td>
                            <td id="data">{{$data['name']}}<td>
                            <td id="data">{{$data['email']}}<td>
                            <td id="data">
                                <a href="{{"deleteuser/".$data['id']}}">DELETE</a><br/>    
                            <td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="adminsectioncontent3">
            <div class="listbooks">
                <table>
                    <tr>
                        <td id="Name">ID<td>
                        <td id="Name">NAME<td>
                        <td id="Email">AUTHOR<td>
                        <td id="Email">PUBLISH YEAR<td>
                        <td id="Email">PRICE<td>
                        <td id="Action">ACTION<td>
                    </tr>
                    @foreach ($data5 as $data5)
                    <tr>
                        <td id="data">{{$data5['id']}}<td>
                        <td id="data">{{$data5['BookName']}}<td>
                        <td id="data">{{$data5['author']}}<td>
                        <td id="data">{{$data5['publishDate']}}<td>
                        <td id="data">{{$data5['price']}} RMB<td>
                        <td id="data">
                            <a href="{{"delete/".$data5['id']}}">DELETE</a><br/>
                            <a href="{{"edit/".$data5['id']}}">EDIT</a>
                        <td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</div>
@stop
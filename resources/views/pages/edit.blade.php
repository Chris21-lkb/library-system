@extends('template.admintemplate')
@section('content')
<div class="adminsection">
    <div class="adminsectionlinks">
        <nav>
            <ul>
                <li><a href="#"><i class="bi bi-house"></i> Dashboard</a></li>
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

    <div class="editcontent">
        <div class="editbooks">
            <h1>Edit book </h1>
            <form action="/editbook" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="bookname" value="{{$data['BookName']}}" placeholder="new book name" required >
                <input type="text" name="author" value="{{$data['author']}}" placeholder="new Author" required><br/>
                <input type="number" name="publishdate" value="{{$data['publishDate']}}" placeholder="new publish year" required >
                <input type="number" step="0.01" name="price" value="{{$data['price']}}" placeholder="new book price" required><br/>
                <input type="file" name="book_path" value="{{$data['book_path']}}" required>
                <input type="hidden" name="id" value="{{$data['id']}}">
                <button type="submit">Edit Data</button>
            </form>
        </div>
    </div>
</div>
@stop
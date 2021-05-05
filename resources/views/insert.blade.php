<h1>Add book </h1>
<form action="insert" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="bookname" placeholder="book name" required >
    <input type="text" name="author" placeholder="Author" required>
    <input type="number" name="publishdate" placeholder="publish year" required >
    <input type="number" step="0.01" name="price" placeholder="book price" required>
    <input type="file" name="book_path" required>
    <button type="submit">Add book</button>
</form> 
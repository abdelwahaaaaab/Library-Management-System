@extends("layout")
@section("content")
<div class="wapper">
    <h1>Add Books Form</h1>
    <form action="">
        <input type="text" name="book_name" id="book_name" placeholder="Enter Book's Name"><br><br>
        <input type="text" name="book_writer" id="writer" placeholder="Enter Book's Writer"><br><br>
        <input type="text" name="book_type" id="book_type" placeholder="Enter Book's Type"><br><br>
        <input type="text" name="book_price" id="book_price" placeholder="Enter Book's Price"><br><br>
        <input type="submit" value="Add" class="mybutt"><br><br>
    </form>
</div>
@endsection   
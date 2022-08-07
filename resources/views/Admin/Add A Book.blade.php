@extends("layout")
@section("content")
<div class="wapper">
    <h1>Add Books Form</h1>
    <form action="{{route('add-book.store')}}" method="POST">
        @csrf
        <input type="text" name="book_name" id="book_name" placeholder="Enter Book's Name">
        @error('book_name') <div class="error">{{$message}}</div> @enderror <br> <br>
        <input type="text" name="book_writer" id="writer" placeholder="Enter Book's Writer">
        @error('book_writer') <div class="error">{{$message}}</div> @enderror<br><br>
        <input type="text" name="book_type" id="book_type" placeholder="Enter Book's Type">
        @error('book_type') <div class="error">{{$message}}</div> @enderror<br><br>
        <input type="text" name="book_lang" id="book_lang" placeholder="Enter Book's language">
        @error('book_lang') <div class="error">{{$message}}</div> @enderror<br><br>
        <input type="text" name="book_price" id="book_price" placeholder="Enter Book's Price">
        @error('book_price') <div class="error">{{$message}}</div> @enderror<br><br>
        <input type="submit" value="Add" class="mybutt"><br><br>
    </form>
</div>
@endsection   
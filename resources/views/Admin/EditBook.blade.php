@extends("layout")
@section("content")
<div class="wapper">
    <h1>Edit Books Form</h1>
    <form action="{{ route('add-book.update', $book->id )}}" method="POST"> 
        @csrf
        @method('put')
        <input type="text" name="book_name" id="book_name" placeholder="Enter Book's Name" value="{{$book->book_name}}">
        @error('book_name') <p class="error">{{$message}}</p> @enderror <br> <br>
        <input type="text" name="book_writer" id="writer" placeholder="Enter Book's Writer" value="{{$book->book_writer}}">
        @error('book_writer') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="text" name="book_type" id="book_type" placeholder="Enter Book's Type" value="{{$book->book_type}}">
        @error('book_type') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="text" name="book_lang" id="book_lang" placeholder="Enter Book's language" value="{{$book->book_lang}}">
        @error('book_lang') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="text" name="book_price" id="book_price" placeholder="Enter Book's Price" value="{{$book->book_price}}">
        @error('book_price') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="submit" value="Update" class="mybutt"><br><br> 
    </form>
</div>
@endsection   
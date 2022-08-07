@extends("layout")
@section("content")
<div class="wappe">
    <input type="search" name="search_book" id="search_book" placeholder="Searching">
</div>
@foreach($books as $book)
<div class="wapp">
    
    <h2>{{$book->book_name}}</h2><br>
    <span>Writer: </span>{{$book->book_writer}} <br><br>
    <span>Type: </span>{{$book->book_type}}<br><br>
    <span>Language: </span>{{$book->book_lang}}<br><br>
    <span>Price: </span>{{$book->book_price }} $ <br><br>
    <button type="submit" class="mybutt"><a href="/borrow">Borrow</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/buy">Buy</a></button>
    
</div>
@endforeach
<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a class="#" href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div> 
@endsection
@extends("layout")
@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">



<div class="wappe">
    <form action="{{route('books.store')}}" method="POST">
        @csrf
    <input type="text" name="search_book" id="search_book" placeholder="Searching">
    <input type="submit" value="Search" class="mybutt">
    </form>
    
</div>

@if($flag != 1)
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
@else
<div class="wapp">
    <h1>This Book Not Found</h1>
</div>
@endif
@if(!isset($_REQUEST['search_book']))
<div class="pagination">
{{ $books->links() }}
</div>
@endif
@endsection

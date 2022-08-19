@extends("layout")
@section("content")  
<table class="table2">
    <h2 class="wappee">Borrowed Books</h2>

    <thead>
        <tr>
            <th>Username</th>
            <th>Book name</th>
            <th>Writer</th>
            <th>Type</th>
            <th>Language</th>
            <th>Price</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
                    
    <tbody>
    
        <tr>
            @foreach($borrow as $i)
            @foreach($user as $j)
            @if($j->id == $i->User_id)
            <td>{{$j->Username}}</td>
            @endif
            @endforeach
            @foreach($book as $k)
            @if($k->id == $i->borrow_book)
            <td>{{$k->book_name}}</td>
            <td>{{$k->book_writer}}</td>
            <td>{{$k->book_type}}</td>
            <td>{{$k->book_lang}}</td>
            <td>{{$k->book_price}} $</td>
            @endif
            @endforeach
            <td>
                <form action="{{ route('borrowed-books.destroy', $i->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete_buttt"  >Delete</button>
                </form>
            </td>
            @endforeach
        </tr>
        
    </tbody>
 
</table>
<div class="pagination3">
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
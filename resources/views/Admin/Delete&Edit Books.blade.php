@extends("layout")
@section("content")
<div class="wappe">
    <form action="{{route('book-action.store')}}" method="POST">
        @csrf
    <input type="text" name="search_book" id="search_book" placeholder="Searching">
    <input type="submit" value="Search" class="mybutt">
    </form>
</div>
@if($flag != 1)
<table class="table2">
    <thead>
        <tr>
            <th>Book name</th>
            <th>Writer</th>
            <th>Type</th>
            <th>Language</th>
            <th>Price</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
                    
    <tbody>
        @foreach($books as $i)
        <tr>    
            <td>{{$i->book_name}}</td>
            <td>{{$i->book_writer}}</td>
            <td>{{$i->book_type}}</td>
            <td>{{$i->book_lang}}</td>
            <td>{{$i->book_price}} $</td>
            <td>
                <button class="edit_butt"><a href="/add-book/{{$i->id}}/edit" class="butt_link">Edit</a></button>     
            </td>
            <td>
                <form action="{{ route('add-book.destroy', $i->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete_buttt"  >Delete</button> 
                </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="wappee">
    <h1>This Book Not found</h1>
</div>
@endif
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
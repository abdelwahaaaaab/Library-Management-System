@extends("layout")
@section("content")
<table>
    <h2 class="wappee">Borrowed Books</h2>
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
            
        <tr>
            @foreach($borrow as $i)
            @foreach($book as $j)
            @if($i->User_id == session('user_id') && $j->id == $i->borrow_book)  
            <td>{{$j->book_name}}</td>
            <td>{{$j->book_writer}}</td>
            <td>{{$j->book_type}}</td>
            <td>{{$j->book_lang}}</td>
            <td>{{$j->book_price}} $</td>
            <td>
                <form action="{{ route('borrow.destroy', $i->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete_buttt"  >Delete</button>
                </form>
            </td>
            @endif
            @endforeach
            @endforeach
        </tr>
    </tbody>
</table>

<table>
    <h2 class="wappee">Buyed Books</h2>
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
        <tr>
        @foreach($buy as $i)
            @foreach($book as $j)
            @if($i->user_id == session('user_id') && $j->id == $i->buy_book)
            <td>{{$j->book_name}}</td>
            <td>{{$j->book_writer}}</td>
            <td>{{$j->book_type}}</td>
            <td>{{$j->book_lang}}</td>
            <td>{{$j->book_price}} $</td>
            <td>
                <form action="{{ route('buy.destroy', $i->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete_buttt"  >Delete</button>
                </form>
            </td>
            @endif
            @endforeach
            @endforeach
        </tr>
    </tbody>
</table>
@endsection
    
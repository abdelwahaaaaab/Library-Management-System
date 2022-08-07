@extends("layout")
@section("content")
<div class="wapper">
    <h1>Buy Form</h1>
        <form action="{{route('buy.store')}}" method = "POST">
            @csrf
            <select name="buy_book" id="buy_book" >
            <option value=""  disabled selected hidden>Choose The Book</option>
            @foreach($book as $i)
                <option value="{{$i->id}}">{{$i->book_name}}</option>
            @endforeach
            </select><br><br>
            <input type="submit" value="Buy" class="mybutt"><br><br>
        </form>
    </div>
</div>
@endsection 
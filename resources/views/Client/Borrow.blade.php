@extends("layout")
@section("content")
<div class="img">
    <div class="wapper">
        <h1>Borrow Form</h1>
        <form action="{{route('borrow.store')}}" method="post">
            @csrf
            <select name="borrow_book" id="borrow_book" value="{{old('borrow_book')}}">
                <option value=""  disabled selected hidden>Choose The Book</option>
                @foreach($books as $i)
                <option value="{{$i->id}}">{{$i->book_name}}</option>
                @endforeach
            </select>
            @error('borrow_book') <p class="error">{{$message}}</p> @enderror
            <br><br>
            
            <input type="submit" value="Borrow" class="mybutt"><br><br>
        </form>
    </div>
@endsection


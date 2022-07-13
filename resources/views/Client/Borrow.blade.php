@extends("layout")
@section("content")
<div class="img">
    <div class="wapper">
        <h1>Borrow Form</h1>
        <form action="">
            <select name="borrow_book" id="borrow_book" >
                <option value="#">First Book</option>
                <option value="#">Second Book</option>
            </select><br><br>
            <input type="submit" value="Borrow" class="mybutt"><br><br>
        </form>
    </div>
@endsection


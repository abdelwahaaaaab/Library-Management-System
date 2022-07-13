@extends("layout")
@section("content")
<div class="wapper">
    <h1>Buy Form</h1>
        <form action="">
            <select name="buy_book" id="buy_book" >
                <option value="#">First Book</option>
                <option value="#">Second Book</option>
            </select><br><br>
            <input type="submit" value="Buy" class="mybutt"><br><br>
        </form>
    </div>
</div>
@endsection
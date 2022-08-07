@extends("layout")
@section("content")
<div class="wap">
    <h1 class="homeh1">Welcome To Our Website </h1><br>
    <p>Borrow Or Buy Books</p><br>
    @if($message = Session::get('message'))
    <div class="success">
        {{$message}}
    </div>
    @endif
    @if($alert = Session::get('alert'))
    <div class="error">
        {{$alert}}
    </div><br>
    @endif
    <button type="submit" class="mybutt"><a href="/books">View Our Books</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/your-books">Your Books</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/contact">Contact Us</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/">About Developer</a></button><br><br>   
</div>
@endsection
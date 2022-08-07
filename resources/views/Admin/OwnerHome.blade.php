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
    <button type="submit" class="mybutt"><a href="/books">View Our Books</a></button> 
    <button type="submit" class="mybutt"><a href="/users">Users</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/borrowed-books">Borrowed Books</a></button>
    <button type="submit" class="mybutt"><a href="/bought-books">Bought Books</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/book-action">Edit & Delete Books</a></button>
    <button type="submit" class="mybutt"><a href="/add-book">Add A Book</a></button><br><br>
    <button type="submit" class="mybutt"><a href="/contact-messages">Contact Messages</a></button>
    <button type="submit" class="mybutt"><a href="/">About Developer</a></button><br><br>
</div>
@endsection
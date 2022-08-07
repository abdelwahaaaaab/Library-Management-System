@extends("layout")
@section("content")
<div class="wappe">
    <input type="search" name="search_book" id="search_book" placeholder="Searching">
</div>

<div class="wapp">
    @foreach($contact as $i)
    @foreach($user as $j)
    @if($j->id == $i->user_id)
    <p>Username: </p> {{$j->Username}}<br><br>
    <p>To mail him/her:</p><a href="mailto:{{$j->email}}" target="_blank">Click here</a>
    @endif
    @endforeach
    <p>subject: </p>{{$i->subject}}  <br><br>
    <p>message:</p>{{$i->message}} <br><br>
    @endforeach 
</div>


<div class="pagination">
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

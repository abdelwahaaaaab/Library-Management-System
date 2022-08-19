@extends("layout")
@section("content")
<h2 class="wappee">Website's Messages</h2>
@foreach($contact as $i)
@foreach($user as $j)
@if($j->id == $i->user_id)
<div class="wapp">
    <p>Username: </p> {{$j->Username}}<br><br>
    <p>To mail him/her:</p><a href="mailto:{{$j->email}}" target="_blank">Click here</a>
    @endif
    @endforeach
    <p>subject: </p>{{$i->subject}}  <br><br>
    <p>message:</p>{{$i->message}} <br><br>
</div>
@endforeach 
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

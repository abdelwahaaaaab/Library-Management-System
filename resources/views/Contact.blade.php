@extends("layout")
@section("content")
<div class="wapper">
    <h1>Contact Form</h1>
    <form action="{{route('contact.store')}}" method="POST">
        @csrf
        <input type="text" name="subject" id="subject" placeholder="Subject"><br><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message"></textarea><br><br>
        <input type="submit" value="Send Message" class="mybutt"><br><br>
    </form>
</div>
@endsection
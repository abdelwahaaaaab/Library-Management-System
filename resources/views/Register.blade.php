@extends("layout")
@section("content")
<div class="wapper">
    <h1>sign-up Form</h1>
    <form action="{{route('sign-up.store')}}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{old('name')}}">
        @error('name') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="email" name="email" id="email" placeholder="Enter Your E-mail" value="{{old('email')}}">
        @error('email') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="text" name="Username" id="Username" placeholder="Enter Your Username" value="{{old('Username')}}">
        @error('Username') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="password" name="Password" id="Password" placeholder="Create Password">
        @error('Password') <p class="error">{{$message}}</p> @enderror<br><br>
        <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder="Confirm Password">
        @error('Password_confirmation') <p class="error">{{$message}}</p> @enderror<br><br>
        @if($alert = Session::get('alert'))
        <div class="error">
            {{$alert}}
        </div>
        @endif <br>
        <input type="submit" value="sign-up" class="mybutt"><br><br>
    </form>
    <p>Already have an account ? <a href="/login">Sign-in</a></p>
</div>
@endsection
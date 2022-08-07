@extends("layout")
@section("content")
<div class="wapper">
    <h1>Login Form</h1>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <input type="text" name="username" id="username" placeholder="Enter Your Username" value="{{old('username')}}"><br><br>
        @error('username') <p class="error">{{$message}}</p> @enderror <br>
        <input type="password" name="password" id="password" placeholder="Enter Your Password"><br><br>
        @error('password') <p class="error">{{$message}}</p> @enderror <br>
        @if($alert = Session::get('alert'))
          <div class="error">
              {{ $alert}}
          </div>
        @endif 
        <br>
        <input type="submit" value="Login" class="mybutt"><br><br>
    </form>
    <p>If you don't have an account <a href="/sign-up">sign-up</a></p>
</div>   
@endsection

@extends("layout")
@section("content")
<div class="wapper">
    <h1>sign-up Form</h1>
    <form action="">
        <input type="text" name="name" id="name" placeholder="Enter Your Name"><br><br>
        <input type="email" name="email" id="email" placeholder="Enter Your E-mail"><br><br>
        <input type="text" name="Username" id="Username" placeholder="Enter Your Username"><br><br>
        <input type="password" name="Password" id="Password" placeholder="Create Password"><br><br>
        <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder="Confirm Password"><br><br>
        <input type="submit" value="sign-up" class="mybutt"><br><br>
    </form>
    <p>Already have an account ? <a href="Login.html">Sign-in</a></p>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/Login.css">
    <title>Library Website</title>
</head>
<body>
    @if(session('CLoggedIn'))
    <nav class= "nav1">
        <ul>
            <li> <a href="/home">Home </a></li>
            <li> <a href="/books">Books</a></li>
            <li> <a href="/">About</a></li>
            <li> <a href="/contact">Contact</a></li>
            <li class="logout">
                <form action="{{route('home.destroy', session('user_id'))}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Log out" class="delete_butt_logout">
                </form>
            </li>
            <li class="logo"> <a href="/home">Library Website</a></li>  
        </ul>
    </nav>
    @elseif(session('ALoggedIn'))
    <nav class= "nav1">
        <ul>
            <li> <a href="/admin-home">Home </a></li>
            <li> <a href="/books">Books</a></li>
            <li> <a href="/">About</a></li>
            <li> <a href="/contact">Contact</a></li>
            <li class="logout">
                <form action="{{route('home.destroy', session('user_id'))}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Log out" class="delete_butt_logout">
                </form>
            </li>
            <li class="logo"> <a href="/admin-home">Library Website</a></li>  
        </ul>
    </nav>
    @else
    <nav class= "nav1">
        <ul>
            <li> <a href="/home">Home </a></li>
            <li> <a href="/login">Login </a></li>
            <li> <a href="/sign-up">Sign-up </a></li>
            <li> <a href="/">About</a></li>
            <li> <a href="/contact">Contact</a></li>
            <li class="logo"> <a href="/home">Library Website</a></li>  
        </ul>
    </nav>
    @endif
    <!--Start Content-->
    <div class="img">
        @yield("content")
    </div>
    <!--End Content-->
    <!--Start footer-->
    <div class="footer">
        &copy; 2022 <span>Abdelwahab </span> All Right Reserved
    </div>
    <!--End footer-->
</body>
</html>
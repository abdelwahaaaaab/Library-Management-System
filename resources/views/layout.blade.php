<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/Login.css">
    <title>Borrow Page</title>
</head>
<body>
    <nav>
        <ul>
            <li> <a href="#home">Home </a></li>
            <li> <a href="#portfolio">Books</a></li>
            <li> <a href="#about">About</a></li>
            <li> <a href="#contact">Contact</a></li>
            <li class="logo"> <a href="#">Library Website</a></li>
        </ul>
    </nav>
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
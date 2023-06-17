<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoeSKL</title>
    <link rel="stylesheet" type ="text/css" href="css/navbar.css">
    <link href="{{ asset('css/master2.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    @include('master.header')
    <div class="container">
        @yield('content')
    </div>
    @include('master.footer')
</body>
</html>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoeSKL</title>
    <link rel="stylesheet" type ="text/css" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">


</head>
<body>
    
    <header>
        <a href="" class="logo">
            <i class="ri-home-line"></i><span>JoeSKL</span>
        </a>
        <ul class= "navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Joe</a></li>
            <li><a href="#">Mama</a></li>
            <li><a href="#">JoeKnea</a></li>
        </ul>
        <div class="main">
            <a href="#" class ="active"><i class="ri-file-user-fill"></i>Sign In</a>
            <a href="#">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!--js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html> -->
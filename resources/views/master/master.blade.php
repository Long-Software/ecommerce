<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/master2.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body style="margin: 0; padding: 0;">
    @include('master.info')
    @include('master.header')
    <div class="container">
        @yield('content')
    </div>
    @include('master.footer')
</body>

</html>
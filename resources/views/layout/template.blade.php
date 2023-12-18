<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
    @include('layout.font')
    <link rel="stylesheet" href="{{ asset('css/layout/template.css') }}">
</head>

<body>
    @include('layout.sideNav')
    @include('layout.header')
    <div class="container">
        <div id="content container-fluid">
            @yield('content')
        </div>
    </div>
    @include('layout.footer')
</body>

</html>

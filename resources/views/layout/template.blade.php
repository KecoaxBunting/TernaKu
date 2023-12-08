<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.bootstrap')
    @include('layout.font')
    <link rel="stylesheet" href="{{ asset('css/layout/template.css') }}">
</head>

<body>
    @include('layout.sideNav')
    <div id="content">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </div>
</body>

</html>

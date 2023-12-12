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
    <div id="content">
        @include('layout.header')
        <a class="btn btn-warning add m-2 rounded-4" href="{{ url() }}" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-plus"
                viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
            @yield('button')
        </a>
        @yield('content')
        @include('layout.footer')
    </div>
</body>

</html>

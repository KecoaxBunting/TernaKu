<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="content position-relative text-center">
        <img src="{{ asset('images/c.jpg') }}" alt="">
        <div class="position-absolute top-50 start-50 translate-middle register rounded-4">
            <div class="p-4">
                <h1 class="mb-4">MASUK</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/masuk">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Kata sandi"
                            name="password">
                    </div>
                    <input class="btn btn-lg btn-primary mb-3" type="submit" value="Masuk">
                    <div class="mb-3">
                        <h6>Belum memiliki akun?</h6>
                        <a class="btn btn-lg btn-primary" href="{{ url('/daftar') }}" role="button">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

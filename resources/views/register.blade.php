<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="content position-relative text-center">
        <img src="{{ asset('images/c.jpg') }}" alt="">
        <div class="position-absolute top-50 start-50 translate-middle register rounded-4">
            <div class="p-4">
                <h1 class="mb-4">Daftar</h1>
                <form method="POST" action="/daftar">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" placeholder="Nama" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Kata sandi"
                            name="password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Konfirmasi kata sandi" name="password_confirmation">
                    </div>
                    <input class="btn btn-lg btn-primary mb-3" type="submit" value="Daftar">
                    <div class="mb-3">
                        <h6>Sudah memiliki akun?</h6>
                        <a class="btn btn-lg btn-primary" href="{{ url('/masuk') }}" role="button">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

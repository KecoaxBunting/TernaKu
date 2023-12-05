<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TernaKu</title>
    @include('layout.bootstrap')
    @include('layout.font')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
</head>

<body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-2" href="#">TERNAKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}

    {{-- content-1 --}}
    <div class="content-1 position-relative text-center">
        <img src="{{ asset('images/a.jpg') }}" class="w-100 h-50" alt="1">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="h1 one mb-5 fw-bolder">Berternak Menjadi</div>
            <div class="h1 two mb-5 fw-bolder">Lebih Mudah Dan Menyenangkan</div>
            <a href="#" class="h2"><button class="btn btn-primary border-0 rounded-pill">Daftar
                    Sekarang</button></a>
        </div>
    </div>

    {{-- content-2 --}}
    <div class="content-2 container-fluid px-3">
        <div class="h1">Mengapa TERNAKU?</div>
        <div class="row d-flex">
            <div class="col-6 mx-0">
                <img src="{{ asset('images/b.jpg') }}" class="img-fluid" alt="2">
            </div>
            <div class="col-6 mx-0 align-self-center">
                <div style="width: 100%; height: 100%; position: relative">
                    <div
                        style="width: 710px; height: 50px; left: 9px; top: 16px; position: absolute; background: #CBD0FF; border-radius: 50px">
                    </div>
                    <div
                        style="width: 80px; height: 80px; left: 0px; top: 0px; position: absolute; background: #865DFB; border-radius: 9999px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- content-3 --}}
    <div class="content-3">
        <div class="position-relative text-center">
            <img src="{{ asset('images/c.jpg') }}" class="w-100" alt="3">
            <p class="position-absolute top-50 start-50 translate-middle h1"></p>
        </div>
    </div>
</body>

</html>

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
            <div class="h4 title">
                TERNAKU
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end h5" id="navbarSupportedContent">
                <ul class="navbar-nav me-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/masuk">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/daftar">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content-1 --}}
    <div class="content-1 position-relative text-center">
        <img src="{{ asset('images/a.jpg') }}" class="w-100 h-50" alt="1">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="h1 one mb-5 fw-bolder">Berternak Menjadi</div>
            <div class="h1 two mb-5 fw-bolder">Lebih Mudah Dan Menyenangkan</div>
            <a href="/daftar" class="h2"><button class="btn btn-primary btn-lg border-0 rounded-pill">Daftar
                    Sekarang</button></a>
        </div>
    </div>

    {{-- content-2 --}}
    <div class="content-2 container-fluid px-5 pt-5">
        <div class="h2">Mengapa TERNAKU?</div>
        <div class="row d-flex">
            <div class="col-6 pb-5">
                <img src="{{ asset('images/b.jpg') }}" class="img-fluid" alt="2">
            </div>
            <div class="col-6 mx-0 align-self-center">
                <div class="item rounded-pill h2 text-center fw-bolder mb-5">1. Mudah digunakan</div>
                <div class="item rounded-pill h2 text-center fw-bolder mb-5">2. Komunitas yang besar</div>
                <div class="item rounded-pill h2 text-center fw-bolder mb-5">3. Dipercaya oleh banyak perternak</div>
                <div class="item rounded-pill h2 text-center fw-bolder mb-5">4. Gratis</div>
            </div>
        </div>
    </div>

    {{-- content-3 --}}
    <div class="content-3">
        <div class="position-relative text-center">
            <img src="{{ asset('images/c.jpg') }}" class="w-100 object-cover" alt="3">
            <p class="position-absolute top-50 start-50 translate-middle h1">Hubungi Kami</p>
        </div>
        <div class="contact d-flex justify-content-evenly py-4">
            <div class="wa text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-whatsapp mb-3" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
                <div class="h4 fw-bolder">Whatsapp</div>
                <div class="h5 mb-3">(Senin-Jumat, 08.00-22.00)</div>
                <a href="/underConstruction"><button class="btn btn-primary border-0 rounded-pill">Chat
                        Sekarang</button></a>

            </div>
            <div class="livechat text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-chat mb-3" viewBox="0 0 16 16">
                    <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894m-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                </svg>
                <div class="h4 fw-bolder">Live Chat</div>
                <div class="h5 mb-3">(Senin-Jumat, 24 Jam)</div>
                <a href="/underConstruction"><button class="btn btn-primary border-0 rounded-pill">Chat
                        Sekarang</button></a>

            </div>
        </div>
    </div>

    @include('layout.footer')
</body>

</html>

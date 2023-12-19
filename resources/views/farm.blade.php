<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ternak</title>
    @include('layout.bootstrap')
    @include('layout.font')
    <link rel="stylesheet" href="{{ asset('css/farm.css') }}">
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Silahkan Masukkan Nama Peternakan dan Lokasi Peternakan</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/ternak" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="farmName" class="form-label">Nama Peternakan</label>
                <input type="text" class="form-control" id="farmName" name="farmName">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <button type="submit" class="btn btn-primary">Oke</button>
        </form>
    </div>
</body>

</html>

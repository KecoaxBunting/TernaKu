<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah aset baru</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Aset Baru</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6 offset-md-3">
            <form action="/aset/tambah" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label class="form-label" for="assetName">Nama aset</label>
                    <input class="form-control" type="text" id="assetName" name="assetName">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <input class="form-control" type="text" id="status" name="status">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Jumlah</label>
                    <input class="form-control" type="number" id="quantity" name="quantity">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>

                <input class="btn btn-primary" type="submit" value="Tambah">
            </form>
        </div>
    </div>
</body>

</html>

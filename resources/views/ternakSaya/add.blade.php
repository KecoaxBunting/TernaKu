<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah ternak baru</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Ternak baru</h2>
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
            <form action="/ternakSaya/tambah" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label class="form-label" for="animalType">Hewan</label>
                    <select class="form-select" aria-label="Default select example" name="animalType">
                        <option selected>Jenis hewan</option>
                        @foreach ($animalTypes as $animalType)
                            <option value="{{ $animalType->id }}">{{ $animalType->animalName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="birthDate">Tanggal lahir</label>
                    <input class="form-control" type="date" id="birthDate" name="birthDate">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Jumlah</label>
                    <input class="form-control" type="number" id="quantity" name="quantity">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="kesehatan">Kesehatan</label>
                    <input class="form-control" type="text" id="kesehatan" name="kesehatan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>


                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

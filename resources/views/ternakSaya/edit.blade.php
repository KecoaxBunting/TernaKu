<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit ternak</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Edit Ternak</h2>
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
            <form action="/ternakSaya/edit/{{ $animal->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="animalName">Nama hewan</label>
                    <input class="form-control" type="text" id="animalName" name="animalName"
                        value="{{ $animal->animalName }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="birthDate">Tanggal lahir</label>
                    <input class="form-control" type="date" id="birthDate" name="birthDate"
                        value="{{ $animal->birthDate }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Jumlah</label>
                    <input class="form-control" type="number" id="quantity" name="quantity"
                        value="{{ $animal->quantity }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="kesehatan">Kesehatan</label>
                    <input class="form-control" type="text" id="kesehatan" name="kesehatan"
                        value="{{ $animal->kesehatan }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Foto</label>
                    <br>
                    <img src="{{ asset('storage/' . $animal->foto) }}" alt="">
                    <input class="form-control" type="file" id="foto" name="foto"
                        value="{{ $animal->foto }}">
                </div>

                <input class="btn btn-primary" type="submit" value="Update">
            </form>
        </div>
    </div>
</body>

</html>

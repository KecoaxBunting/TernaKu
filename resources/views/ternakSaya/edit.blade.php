<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Edit Ternak</h2>
        <div class="col-md-6 offset-md-3">
            <form action="/ternakSaya/edit/{{ $animal->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="animalType">Hewan</label>
                    <select class="form-select" aria-label="Default select example" name="animalType" required>
                        <option value="{{ $animal->animal_type_id }}" selected>{{ $animal->animalType->animalName }}
                        </option>
                        @foreach ($animalTypes as $animalType)
                            <option value="{{ $animalType->id }}">{{ $animalType->animalName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="birthDate">Tanggal lahir</label>
                    <input class="form-control" type="date" id="birthDate" name="birthDate"
                        value="{{ $animal->birthDate }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Jumlah</label>
                    <input class="form-control" type="number" id="quantity" name="quantity"
                        value="{{ $animal->quantity }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="kesehatan">Kesehatan</label>
                    <input class="form-control" type="text" id="kesehatan" name="kesehatan"
                        value="{{ $animal->kesehatan }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Foto</label>
                    <br>
                    <img src="{{ asset('storage/' . $animal->foto) }}" alt="">
                    <input class="form-control" type="file" id="foto" name="foto"
                        value="{{ $animal->foto }}">
                </div>

                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

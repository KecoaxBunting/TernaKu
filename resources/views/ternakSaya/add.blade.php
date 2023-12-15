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
        <h2 class="text-center">Ternak baru</h2>
        <div class="col-md-6 offset-md-3">
            <form action="/ternakSaya/tambah" method="post">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label class="form-label" for="animalType">Nama Hewan</label>
                    <input class="form-control" type="text" id="animalType" name="animalType" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Gender</label>
                    <select class="form-select" aria-label="Default select example" name="gender" required>
                        <option selected>Jenis kelamin</option>
                        <option value="1">Jantan</option>
                        <option value="2">Betina</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="birthDate">Tanggal Lahir</label>
                    <input class="form-control" type="date" id="birthDate" name="birthDate" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="quantity">Jumlah</label>
                    <input class="form-control" type="number" id="quantity" name="quantity" required>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>

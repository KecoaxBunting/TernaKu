<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah staff baru</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Staff Baru</h2>
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
            <form action="/staff/tambah" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label class="form-label" for="staffName">Nama</label>
                    <input class="form-control" type="text" id="staffName" name="staffName">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="age">Umur</label>
                    <input class="form-control" type="number" id="age" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Nomor Telepon</label>
                    <input class="form-control" type="text" id="phone" name="phone">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Tulis alamat di sini" id="address" name="address"></textarea>
                    <label for="adress">Alamat</label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="role">Jabatan</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option selected>Jabatan</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->roleName }}</option>
                        @endforeach
                    </select>
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

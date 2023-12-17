<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/layout/form.css') }}">
    @include('layout.bootstrap')
    @include('layout.font')
</head>

<body>
    <div class="row">
        <h2 class="text-center mt-2">Edit Transaksi</h2>
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
            <form action="/keuangan/edit/{{ $transaction->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="transactionName">Nama transaksi</label>
                    <input class="form-control" type="text" id="transactionName" name="transactionName"
                        value="{{ $transaction->transactionName }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Harga</label>
                    <input class="form-control" type="number" id="price" name="price"
                        value="{{ $transaction->price }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="transactionType">Jenis transaksi</label>
                    <select class="form-select" aria-label="Default select example" name="transactionType">
                        <option value="{{ $transaction->transaction_type_id }}" selected>
                            {{ $transaction->transactionType->transactionType }}</option>
                        @foreach ($transactionTypes as $transactionType)
                            <option value="{{ $transactionType->id }}">{{ $transactionType->transactionType }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="transactionDate">Tanggal transaksi</label>
                    <input class="form-control" type="datetime-local" id="transactionDate" name="transactionDate"
                        value="{{ $transaction->transactionDate }}">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="{{ $transaction->note }}" id="note" name="note">{{ $transaction->note }}</textarea>
                    <label for="note">Comments</label>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto">Foto</label>
                    <br>
                    <img src="{{ asset('storage/' . $transaction->foto) }}" alt="">
                    <input class="form-control" type="file" id="foto" name="foto">
                </div>

                <input class="btn btn-primary" type="submit" value="Update">
            </form>
        </div>
    </div>
</body>

</html>

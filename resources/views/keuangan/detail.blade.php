@extends('layout.template')

@section('title', 'Produksi')

<link rel="stylesheet" href="{{ asset('css/produksi.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $transaction->transactionName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $transaction->foto) }}" alt="">
        <h5 class="text-capitalize">Harga: Rp.{{ $transaction->price }}</h5>
        <h5 class="text-capitalize">Jenis transaksi: {{ $transaction->transactionType->transactionType }}</h5>
        <h5 class="text-capitalize">Tanggal transaksi: {{ $transaction->transactionDate }}</h5>
        <h5 class="text-capitalize">Catatan: {{ $transaction->note }}</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/keuangan/edit/' . $transaction->id) }}" role="button">Edit</a>
            <a class="btn btn-danger mx-2" href="{{ url('/keuangan/hapus/' . $transaction->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>
@endsection

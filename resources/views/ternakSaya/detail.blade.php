@extends('layout.template')

@section('title', 'Ternak Saya')

<link rel="stylesheet" href="{{ asset('css/ternakSaya.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $animal->animalType->animalName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $animal->foto) }}" alt="">
        <h5 class="text-capitalize">Tanggal lahir: {{ $animal->birthDate }}</h5>
        <h5 class="text-capitalize">Status kesehatan: {{ $animal->kesehatan }}</h5>
        <h5 class="text-capitalize">Jumlah: {{ $animal->quantity }} ekor</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/ternakSaya/edit/' . $animal->id) }}" role="button">Edit</a>
            <a class="btn btn-danger ps-2" href="{{ url('/ternakSaya/hapus/' . $animal->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>

@endsection

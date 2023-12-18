@extends('layout.template')

@section('title', 'Aset')

<link rel="stylesheet" href="{{ asset('css/aset.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $asset->assetName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $asset->foto) }}" alt="">
        <h5 class="text-capitalize">Status: {{ $asset->status }}</h5>
        <h5 class="text-capitalize">Jumlah: {{ $asset->quantity }}</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/aset/edit/' . $asset->id) }}" role="button">Edit</a>
            <a class="btn btn-danger mx-2" href="{{ url('/aset/hapus/' . $asset->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>
@endsection

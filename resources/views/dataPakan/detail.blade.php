@extends('layout.template')

@section('title', 'Data pakan')

<link rel="stylesheet" href="{{ asset('css/dataPakan.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $feed->feedName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $feed->foto) }}" alt="">
        <h5 class="text-capitalize">Jumlah: {{ $feed->quantity }} ekor</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/dataPakan/edit/' . $feed->id) }}" role="button">Edit</a>
            <a class="btn btn-danger mx-2" href="{{ url('/dataPakan/hapus/' . $feed->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>
@endsection

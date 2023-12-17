@extends('layout.template')

@section('title', 'Data Pakan')

<link rel="stylesheet" href="{{ asset('css/dataPakan.css') }}">

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <a class="btn btn-warning add m-2 rounded-4" href="{{ url('/dataPakan/tambah') }}" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>
        Tambah pakan baru
    </a>
    @php
        $count = 0;
    @endphp
    @foreach ($feeds as $feed)
        <div class="card mb-2 w-100 rounded-0 {{ $count % 2 == 0 ? 'even' : 'odd' }}" style="max-height: 250px">
            <div class="row g-0">
                <div class="col-md-4" style="max-height: 250px; max-width: 400px;">
                    <img src="{{ asset('storage/' . $feed->foto) }}" class="img-fluid" alt="..."
                        style="max-height: 250px">
                </div>
                <div class="col-md-8 d-flex justify-content-evenly">
                    <div class="card-body align-self-center">
                        <h4 class="card-title mb-0 text-capitalize">
                            {{ $feed->feedName }}</h4>
                        <p class="card-text text-body-secondary">Jumlah: {{ $feed->quantity }} karung</p>
                    </div>
                    <div class="card-body align-self-center">
                        <a class="nav-links float-end text-decoration-none"
                            href="{{ url('/dataPakan/hapus/' . $feed->id) }}"
                            onclick="return confirm('Apa kamu yakin?')">Hapus</a>
                        <a class="nav-links float-end px-5 text-decoration-none"
                            href="{{ url('/dataPakan/edit/' . $feed->id) }}">Edit</a>
                        <a class="nav-links float-end text-decoration-none"
                            href="{{ url('/dataPakan/detail/' . $feed->id) }}">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @php
            $count += 1;
        @endphp
    @endforeach
@endsection

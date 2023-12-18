@extends('layout.template')

@section('title', 'Aset')

<link rel="stylesheet" href="{{ asset('css/aset.css') }}">

@section('content')
    <div class="p-3">
        <h2 class="fw-bolder text-capitalize">{{ $staff->staffName }}</h2>
        <img class="img-fluid" src="{{ asset('storage/' . $staff->foto) }}" alt="">
        <h5 class="text-capitalize">Umur: {{ $staff->age }} tahun</h5>
        <h5 class="text-capitalize">Nomor telepon: {{ $staff->phone }}</h5>
        <h5 class="text-capitalize">Alamat: {{ $staff->address }}</h5>
        <h5 class="text-capitalize">Jabatan: {{ $staff->role->roleName }}</h5>
        <div class="d-flex">
            <a class="btn btn-success" href="{{ url('/staff/edit/' . $staff->id) }}" role="button">Edit</a>
            <a class="btn btn-danger mx-2" href="{{ url('/staff/hapus/' . $staff->id) }}"
                onclick="return confirm('Apa kamu yakin?')" role="button">Hapus</a>
        </div>
    </div>
@endsection
